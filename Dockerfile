# Python image to use.
FROM python:3.10-slim-buster

RUN apt-get update && apt-get install -qq -y \
  build-essential libpq-dev wkhtmltopdf procps --no-install-recommends

# Set the working directory in the container
WORKDIR /app

# copy the requirements file used for dependencies
COPY requirements.txt .

# Upgrade PIP
RUN pip install --upgrade pip

# Install any needed packages specified in requirements.txt
RUN pip install --trusted-host pypi.python.org -r requirements.txt

# Copy the rest of the working directory contents into the container at /app
COPY . .

# RUN pip freeze