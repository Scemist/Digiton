# Start the Containers

## Development

```sh
docker compose up -d --build
```

### First Commands to Run

```sh
docker exec -it digiton-dev-php-1 sh

cp .env.example .env

composer install

npm install

chmod -R 755 /app && \
	chmod -R ugo+rwx /app/storage && \
	chmod -R ugo+rwx /app/bootstrap/cache

php artisan key:generate
```

> Available on localhost:9999

## Production - Generate Static Site in /docs

```sh
docker exec bash export.sh
```