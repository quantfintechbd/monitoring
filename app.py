# pipenv shell
# pip install Flask Flask-SQLAlchemy Flask-WTF psycopg2

from flask import Flask, render_template, request, redirect, url_for, jsonify
from flask_sqlalchemy import SQLAlchemy
from sqlalchemy.sql import text, desc
from flask_wtf import FlaskForm
from wtforms import StringField
from wtforms.validators import DataRequired
from gevent import monkey
monkey.patch_all()
from gevent.pywsgi import WSGIServer



app = Flask(__name__)
app.config['SECRET_KEY'] = '2ubFccFdKoYfj2QQU8gfRavbtjrEYU3t'
app.config['SQLALCHEMY_DATABASE_URI'] = 'postgresql://monitoring:654321@192.168.155.22:5449/monitoringdb'
db = SQLAlchemy(app)

# Define the 'logs' model
class Log(db.Model):
    __tablename__ = 'logs'  # Replace with your actual table name
    id = db.Column(db.BigInteger, primary_key=True, autoincrement=True)
    broker = db.Column(db.String)
    source = db.Column(db.String)
    json_data = db.Column(db.Text)
    date_time = db.Column(db.TIMESTAMP(timezone=True), server_default=text('NOW()'))

# Define a form for inserting new data
class LogForm(FlaskForm):
    broker = StringField('Broker', validators=[DataRequired()])
    source = StringField('Source', validators=[DataRequired()])
    json_data = StringField('JSON Data', validators=[DataRequired()])



# Route to display data in a tabular format
@app.route('/')
def index():
    # logs = Log.query.all()
    logs = Log.query.order_by(desc(Log.date_time)).limit(50).all()
    return render_template('index.html', logs=logs)


# API endpoint to add monitoring log
@app.route('/add_monitoring_log', methods=['POST'])
def add_monitoring_log():
    data = request.json

    if 'broker' not in data or 'source' not in data or 'json_data' not in data:
        return jsonify({'error': 'Missing required fields'}), 400

    new_log = Log(
        broker=data['broker'],
        source=data['source'],
        json_data=data['json_data']
    )
    db.session.add(new_log)
    db.session.commit()

    return jsonify({'message': 'Log added successfully'}), 201

# Route to insert new data
@app.route('/add', methods=['GET', 'POST'])
def add_log():
    form = LogForm()

    if form.validate_on_submit():
        new_log = Log(
            broker=form.broker.data,
            source=form.source.data,
            json_data=form.json_data.data
        )
        db.session.add(new_log)
        db.session.commit()
        return redirect(url_for('index'))

    return render_template('add_log.html', form=form)


@app.route('/get_app_secret_key')
def get_app_secret_key():
    import os
    import base64
    secret_key_byte = os.urandom(24)
    print(f"Secrec Key in Byte Format: {secret_key_byte}")
    secret_key_base64 = base64.b64encode(secret_key_byte).decode('utf-8')
    print(f"Secrec Key in Plain Text: {secret_key_base64}")

    return render_template('secret_key.html', secret_key=secret_key_base64)


if __name__ == '__main__':
    with app.app_context():
        db.create_all()

    app.debug = False
    http_server = WSGIServer(('0.0.0.0', 6501), app)
    http_server.serve_forever()

    # app.run(debug=True, host="0.0.0.0", port=6501)