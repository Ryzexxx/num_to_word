# Use the official PHP image as the base image
FROM php:7.4-cli 

# Set the working directory in the container
WORKDIR /app

# Copy the current directory contents into the container at /app
COPY . /app