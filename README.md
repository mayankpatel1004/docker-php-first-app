# docker-php-first-app


docker run -d -p 3000:80 --name my-apache-php-app -v "$PWD":/var/www/html php:7.4-apache

docker container ls -a
docker rm fsd2112 (fsd is container name)


docker stop $(docker ps -a -q)
docker-compose up -d (Start application)

docker build -t my-php-app .
docker run -it --rm --name my-running-app my-php-app
docker run -it --rm --name my-running-script -v "$PWD":/usr/src/myapp -w /usr/src/myapp php:7.4-cli php your-script.php\n
docker build -t my-php-app .
docker run -it --rm --name my-running-app my-php-app
docker version
docker system prune (Remove all unused containers, networks, images)
docker system prune -a (remove any stopped containers and all unused images (not just dangling images), add the -a flag to the command)
docker images -a 
docker images -f dangling=true
docker image prune (Remove Images)
docker ps (The docker ps command only shows running containers by default.)
docker ps -a (To see all containers, use the -a (or --all ) flag)
docker system prune (Docker command that is used to remove or delete unused objects or data)
docker image prune (The docker image prune command allows you to clean up unused images.)
docker build -t my-php-app .
docker run -it --rm --name my-running-app my-php-app
docker run -d -p 3000:80 --name my-apache-php-app -v "$PWD":/var/www/html php:7.4-apache
docker-compose up -d
docker stop $(docker ps -a -q)
