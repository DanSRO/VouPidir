# Use a imagem oficial do PHP
FROM php:8.3.4-fpm

# Atualize os pacotes e instale as dependências necessárias
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Instale o Composer globalmente
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ENV COMPOSER_ALLOW_SUPERUSER=1

# Configure o usuário do PHP-FPM para corresponder ao usuário no seu sistema local
RUN usermod -u 1000 www-data

# Defina o diretório de trabalho como a raiz
WORKDIR /var/www/html

# Copie os arquivos do aplicativo Laravel para o contêiner
COPY . .

# Copie o arquivo de configuração personalizado do PHP-FPM
COPY docker/app/www.conf /usr/local/etc/php-fpm.d/www.conf

# Copie o arquivo de configuração do PHP personalizado
COPY docker/app/php.ini /usr/local/etc/php/php.ini

# Instale as dependências do Composer
RUN composer install --no-scripts --no-interaction

# Dê permissão ao storage e cache
RUN chmod -R 755 /var/www/html/storage /var/www/html/bootstrap/cache

# Expor a porta 80 (não é estritamente necessário para PHP-FPM, mas útil para referência)
EXPOSE 80

# Comando para iniciar o servidor PHP-FPM
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=80"]
