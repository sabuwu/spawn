FROM php:8.3-fpm-alpine

# - Instalando dependências (Nomes dos pacotes corrigidos para o Alpine)
RUN apk add --no-cache \
    git \
    curl \
    zip \
    unzip \
    libpng-dev \
    libxml2-dev \
    oniguruma-dev \
    python3 \
    py3-pip \
    postgresql-dev \
    bash

# - Instalando extensões do PHP
RUN docker-php-ext-install pdo pdo_pgsql mbstring exif pcntl bcmath gd

# - Instalando o composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# - Criando usuário não-root no Linux (Evita rodar como root por segurança)
RUN adduser -D -u 1000 spawn

WORKDIR /var/www/html

# - Ajustando permissões da pasta para o novo usuário
RUN chown -R spawn:spawn /var/www/html

# - Mudando para usuário recém-criado
USER spawn

EXPOSE 9000
CMD ["php-fpm"]
