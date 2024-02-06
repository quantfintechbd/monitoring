# pipenv shell
# pip install Flask Flask-SQLAlchemy Flask-WTF psycopg2

from flask import Flask, render_template, request, redirect, url_for, jsonify
from flask_sqlalchemy import SQLAlchemy
from sqlalchemy.sql import text, desc
from models import db, Log
from forms import LogForm
# from gevent import monkey
# monkey.patch_all()
# from gevent.pywsgi import WSGIServer


# App Initialization Section
app = Flask(__name__)
app.config['SECRET_KEY'] = '2ubFccFdKoYfj2QQU8gfRavbtjrEYU3t'
app.config['SQLALCHEMY_DATABASE_URI'] = 'postgresql://monitoring:654321@192.168.155.22:5449/monitoringdb'
db.init_app(app)


# Route to display data in a tabular format
@app.route('/')
def index():
    page = request.args.get('page', 1, type=int)
    per_page = 30
    # page = int(request.args.get('page', 1))
    # per_page = int(request.args.get('limit', 30))
        
    # logs = Log.query.order_by(desc(Log.date_time)).all()
    logs = Log.query.order_by(desc(Log.date_time)).paginate(page=page, per_page=per_page)    
    return render_template('index.html', logs=logs)

# API endpoint to add monitoring log
@app.route('/add_monitoring_log', methods=['POST'])
def add_monitoring_log():
    try:
        data = request.json

        if 'broker' not in data or 'json_data' not in data:
            return jsonify({'error': 'Missing required fields'}), 400
        
        if 'envr' not in data:
            data['envr'] = "N/A"
        if 'level' not in data:
            data['level'] = "N/A"
        if 'source' not in data:
            data['source'] = "N/A"

        new_log = Log(
            broker=data['broker'],
            envr=data['envr'],
            level=data['level'],
            source=data['source'],
            json_data=data['json_data']
        )
        db.session.add(new_log)
        db.session.commit()

        return jsonify({'message': 'Log added successfully'}), 201
    
    except Exception as ex:
        print("Error Adding Log!!!")
        print(str(ex))
        return jsonify({'error': 'Unable to add log/error!!!'}), 400

# Route to insert new data
@app.route('/add', methods=['GET', 'POST'])
def add_log():
    form = LogForm()

    if form.validate_on_submit():
        new_log = Log(
            broker=form.broker.data,
            envr=form.envr.data,
            level=form.level.data,
            source=form.source.data,
            json_data=form.json_data.data
        )
        db.session.add(new_log)
        db.session.commit()
        return redirect(url_for('index'))

    return render_template('add_log.html', form=form)


# Generate App Secret Key
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

    # app.debug = False
    # http_server = WSGIServer(('0.0.0.0', 6501), app)
    # http_server.serve_forever()

    app.run(debug=True, host="0.0.0.0", port=6501)