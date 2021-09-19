#!/bin/bash
echo "made by slicybtw";
echo "join the discord server: https://discord.gg/8M9fhmeUzM";
echo "follow on github: https://github.com/slicybt3w";
echo "subsicribe on YouTube: https://youtube.com/channel/UCqwE6vaLW1eVX6L3msbvTzw";
yellow = "\033[1;33m"
green = "\034[0;32m"
#installing php
echo "[~]installing php";



echo "[+]php successfully installed ";
pkg install php -y

echo enter your port to start the web server;

read port 

php -S localhost:$port
