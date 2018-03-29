
# Instalando sem usar o Docker

## Requerimentos
PHP >= 7.0
PHP extensions: 
- OpenSSL
- PDO
- Mbstring
Postgres ou Mysql

## Instalando
```
cp .env.example .env && \
chmod +x ./artisan && \
composer install && \
php -S localhost:8000 -t public
```
Crie e configure o banco de dados e rode
```
./artisan migrate --seed
```



# Instalando usando o Docker

## Requerimentos
- docker
- docker-compose

## Instalando
```
cp .env.example .env && \
composer install &&
docker-compose up
```
Crie e configure o banco de dados
```
docker exec -it ee_postgresql_1 bash
psql postgres simaster -c "CREATE DATABASE ee;" 
```

Se conecte no container do php e rode as migrations
```
docker exec -it ee_php_1 bash
./artisan migrate --seed
```

## Rodando os Testes
```
docker exec -it ee_php_1 bash
phpunit ./tests
```
