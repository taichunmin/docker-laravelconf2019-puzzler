FROM php:7.3-cli AS builder
WORKDIR /app
RUN set -eux; \
    apt-get update; \
    apt-get install -y --no-install-recommends \
      git \
      unzip \
      zip \
    ; \
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"; \
    php composer-setup.php --install-dir=/usr/local/bin --filename=composer; \
    php -r "unlink('composer-setup.php');"; \
    composer global require hirak/prestissimo

COPY . .

RUN set -eux; \
    cp .env.example .env; \
    composer install --optimize-autoloader --no-dev; \
    chmod a+x /app/artisan

FROM php:7.3-cli
WORKDIR /app
COPY --from=builder /app .
CMD ["bash"]
