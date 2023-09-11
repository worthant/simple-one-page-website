#!/bin/bash

# Remove existing directory
ssh -p 2222 s368090@se.ifmo.ru "rm -rf ~/public_html/lab1/"

# Create new directory
ssh -p 2222 s368090@se.ifmo.ru "mkdir -p ~/public_html/lab1"

# Copy client files
scp -P 2222 -r ./client/* s368090@se.ifmo.ru:~/public_html/lab1/

# Copy server files
scp -P 2222 -r ./server/* s368090@se.ifmo.ru:~/public_html/lab1/
