from flask_sqlalchemy import SQLAlchemy
from sqlalchemy import text

db = SQLAlchemy()

# Define the 'logs' model
class Log(db.Model):
    __tablename__ = 'logs_data'  # Replace with your actual table name
    id = db.Column(db.BigInteger, primary_key=True, autoincrement=True)
    broker = db.Column(db.String)
    envr = db.Column(db.String)
    level = db.Column(db.String)
    source = db.Column(db.String)
    json_data = db.Column(db.Text)
    date_time = db.Column(db.TIMESTAMP(timezone=True), server_default=text('NOW()'))
