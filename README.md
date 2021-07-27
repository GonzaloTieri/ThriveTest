# ThriveTest
Requimenta:
- Docker
- GitBash

## Getting started

git clone git@github.com:GonzaloTieri/ThriveTest.git </br>
cd ThriveTest/ </br>
docker-compose up -d </br>
### Edit your host file   
- Add next line  </br>
 127.0.0.1:3000    0.0.0.0:3000 </br>
### List your Docker components
$ docker ps </br>
### There must be one that contains "myapp" in its name
$ docker exec -it [THE NAME OF THE COMPONENT WITH myapp ] composer install </br>
$ docker exec -it [THE NAME OF THE COMPONENT WITH myapp ] npm install </br>
$ docker exec -it [THE NAME OF THE COMPONENT WITH myapp ] php artisan migrate </br>
$ docker exec -it [THE NAME OF THE COMPONENT WITH myapp ] php artisan db:seed </br>
$ cp .env.example .env </br>
$ docker exec -it [THE NAME OF THE COMPONENT WITH myapp ]  php artisan key:generate </br>

### Go your browser http://127.0.0.1:3000/

## Run Test
$ docker exec -it [THE NAME OF THE COMPONENT WITH myapp ]  php artisan test </br>



