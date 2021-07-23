# docker-php-first-app


docker run -d -p 3000:80 --name my-apache-php-app -v "$PWD":/var/www/html php:7.4-apache

docker container ls -a
docker rm fsd2112 (fsd is container name)


docker stop $(docker ps -a -q)
docker-compose up -d (Start application)

docker build -t my-php-app .


docker run -it --rm --name my-running-app my-php-app


docker run -it --rm --name my-running-script -v "$PWD":/usr/src/myapp -w /usr/src/myapp php:7.4-cli php your-script.php\n<br />
docker build -t my-php-app .<br />
docker run -it --rm --name my-running-app my-php-app<br />
docker version<br />
docker system prune (Remove all unused containers, networks, images)<br />
docker system prune -a (remove any stopped containers and all unused images (not just dangling images), add the -a flag to the command)<br />
docker images -a <br />
docker images -f dangling=true<br />
docker image prune (Remove Images)<br />
docker ps (The docker ps command only shows running containers by default.)<br />
docker ps -a (To see all containers, use the -a (or --all ) flag)<br />
docker system prune (Docker command that is used to remove or delete unused objects or data)<br />
docker image prune (The docker image prune command allows you to clean up unused images.)<br />
docker build -t my-php-app .<br />
docker run -it --rm --name my-running-app my-php-app<br />
docker run -d -p 3000:80 --name my-apache-php-app -v "$PWD":/var/www/html php:7.4-apache<br />
docker-compose up -d<br />
docker stop $(docker ps -a -q)<br />

Stop the container(s) using the following command:<br />
docker-compose down<br /><br />

Delete all containers using the following command:<br />
docker rm -f $(docker ps -a -q)<br /><br />

Delete all volumes using the following command:<br />
docker volume rm $(docker volume ls -q)<br /><br />

Restart the containers using the following command:<br />
docker-compose up -d<br /><br />


