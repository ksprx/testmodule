FROM php:8.3.6-apache

# نصب وابستگی‌های سیستم
RUN apt-get clean && apt-get update --fix-missing && apt-get install -y \
    libz-dev \
    libpq-dev \
    libssl-dev \
    git \
    unzip \
    && rm -rf /var/lib/apt/lists/*

# نصب اکستنشن‌های PHP
RUN docker-php-ext-install pdo pdo_mysql pdo_pgsql
# تعریف متغیر PHP_API_VERSION
# تعریف متغیر PHP_API_VERSION

# دایرکتوری مقصد برای اکستنشن‌ها
ENV EXTENSION_DIR=/usr/local/lib/php/extensions/no-debug-non-zts-20230831


# فعال‌سازی اکستنشن‌ها
# فعال‌سازی اکستنشن‌ها (فایل‌های .so از طریق Volume وارد می‌شوند)
RUN docker-php-ext-enable redis grpc

# فعال‌سازی mod_rewrite برای Apache
RUN a2enmod rewrite

# نصب Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# کپی فایل‌های پروژه
COPY . /var/www/html/

# کپی تنظیمات Apache
COPY apache.conf /etc/apache2/sites-available/000-default.conf
RUN a2ensite 000-default.conf

# تنظیم دسترسی‌ها
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# نصب وابستگی‌های Composer
WORKDIR /var/www/html
COPY runflare .env
RUN php /usr/local/bin/composer install --no-dev --optimize-autoloader --ignore-platform-req=ext-grpc --ignore-platform-req=ext-redis

# تنظیم دایرکتوری کار به public
WORKDIR /var/www/html/public

# باز کردن پورت 80
EXPOSE 80