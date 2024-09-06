# Setting up the project
- ### Clone the repo 
```
git clone git@github.com:angeluss88/lux_qua_test.git
```
- ### Create configuration file
```
cd lux_qua_test
cp ./.env.example .env
```
- ### Install [Composer](https://getcomposer.org/) if don't have
- ### Run
```
composer install
```
- ### Run
```
php artisan key:generate
```
- ### Install [Docker](https://www.docker.com/products/docker-desktop/) if don't have
- ### Build docker images 
```
docker-compose build --no-cache
```
- ### Run docker containers 
 ```
docker-compose up
 ```
- ### Access API via URL [http://localhost:86](http://localhost:86/)

# Run tests
```docker-compose run --rm lux_tests```

# Explanation about API:
You have two routes:
- POST ```/api/submission``` to add new submission
- GET ```/api/submission``` to view all submissions

# Adminer
You also can access adminer via link: [http://localhost:8888/](http://localhost:8888/?server=lux_db)

