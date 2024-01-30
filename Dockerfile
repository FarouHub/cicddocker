FROM nginx:alpine-slim

COPY . /var/www/project

WORKDIR /var/www/project

# ENTRYPOINT ["bash", "../docker.sh"]


