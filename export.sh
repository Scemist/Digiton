docker stop digiton-dev-vite-1 && \
docker exec digiton-dev-php-1 php artisan export && \
docker start digiton-dev-vite-1