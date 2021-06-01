#!/bin/bash
echo "Hello from LEMP stack deployer!"
read -p "Want to build LEMP (--build)? (y/n) " answer
case $answer in
y) docker-compose up -d --build;;
n) docker-compose up -d;;
esac
