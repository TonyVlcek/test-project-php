FROM trafex/php-nginx:latest

COPY --chown=nginx ./ /var/www/html
