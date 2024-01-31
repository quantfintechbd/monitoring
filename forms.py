from flask_wtf import FlaskForm
from wtforms import StringField
from wtforms.validators import DataRequired


# Define a form for inserting new data
class LogForm(FlaskForm):
    broker = StringField('Broker', validators=[DataRequired()])
    envr = StringField('Environment', validators=[DataRequired()])
    level = StringField('Level', validators=[DataRequired()])
    source = StringField('Source', validators=[DataRequired()])
    json_data = StringField('JSON Data', validators=[DataRequired()])