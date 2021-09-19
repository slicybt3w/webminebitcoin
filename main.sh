#!/bin/bash

yellow = "\033[1;33m"
green = "\034[0;32m"
#installing php
echo "[~]installing php";



echo "[+]php successfully installed ";
pkg install php -y

echo enter your port to start the web server;

read port 

php -S localhost:$port