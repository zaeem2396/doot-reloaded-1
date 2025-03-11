#!/bin/bash

# Kill all running Docker containers
docker kill $(docker ps -q)

# Start Laravel project
docker compose up
