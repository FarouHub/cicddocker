#!/bin/sh

# Copy necessary files from baqmen/cicddocker image to code-test volume
docker run --rm -v code-test:/var/www/project baqmen/cicddocker cp -r /var/www/project/* /var/www/project/