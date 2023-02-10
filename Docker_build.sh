#!/bin/bash

#Run Docker Build
docker build --no-cache -t num_to_word .

#Remove the old docker image
docker rmi $(docker images -f "dangling=true" -q)