FROM php:8.3.6-apache

RUN apt-get clean && apt-get update --fix-missing && apt-get install -y \
    libz-dev \
    libpq-dev \
    libssl-dev \
    git \
    unzip \
    && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo pdo_mysql pdo_pgsql

ENV EXTENSION_DIR=/usr/local/lib/php/extensions/no-debug-non-zts-20230831


RUN a2enmod rewrite

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . /var/www/html/

COPY apache.conf /etc/apache2/sites-available/000-default.conf
RUN a2ensite 000-default.conf

# تنظیم دسترسی‌ها
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# نصب وابستگی‌های Composer
WORKDIR /var/www/html
COPY runflare .env

# تنظیم دایرکتوری کار به public
WORKDIR /var/www/html/public

# باز کردن پورت 80
EXPOSE 80