# docker-php-first-app


docker run -d -p 3000:80 --name my-apache-php-app -v "$PWD":/var/www/html php:7.4-apache

docker container ls -a
docker rm fsd2112 (fsd is container name)


docker stop $(docker ps -a -q)
docker-compose up -d
