# docker-php-first-app


docker run -d -p 3000:80 --name my-apache-php-app -v "$PWD":/var/www/html php:7.4-apache

docker container ls -a<br />
docker rm fsd2112 (fsd is container name)<br /><br />


docker stop $(docker ps -a -q)<br />
docker-compose up -d (Start application)<br /><br />

docker build -t my-php-app .<br />


docker run -it --rm --name my-running-app my-php-app<br />


docker run -it --rm --name my-running-script -v "$PWD":/usr/src/myapp -w /usr/src/myapp php:7.4-cli php your-script.php\n<br /><br />
docker build -t my-php-app .<br /><br />
docker run -it --rm --name my-running-app my-php-app<br /><br />
docker version<br /><br />
docker system prune (Remove all unused containers, networks, images)<br /><br />
docker system prune -a (remove any stopped containers and all unused images (not just dangling images), add the -a flag to the command)<br />
docker images -a <br /><br />
docker images -f dangling=true<br /><br />
docker image prune (Remove Images)<br /><br />
docker ps (The docker ps command only shows running containers by default.)<br /><br />
docker ps -a (To see all containers, use the -a (or --all ) flag)<br /><br />
docker system prune (Docker command that is used to remove or delete unused objects or data)<br /><br />
docker image prune (The docker image prune command allows you to clean up unused images.)<br /><br />
docker build -t my-php-app .<br /><br />
docker run -it --rm --name my-running-app my-php-app<br /><br />
docker run -d -p 3000:80 --name my-apache-php-app -v "$PWD":/var/www/html php:7.4-apache<br /><br />
docker-compose up -d<br /><br />
docker stop $(docker ps -a -q)<br /><br />

Stop the container(s) using the following command:<br />
docker-compose down<br /><br />

Delete all containers using the following command:<br />
docker rm -f $(docker ps -a -q)<br /><br />

Delete all volumes using the following command:<br />
docker volume rm $(docker volume ls -q)<br /><br />

Restart the containers using the following command:<br />
docker-compose up -d<br /><br />


