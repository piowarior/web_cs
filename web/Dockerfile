# Gunakan image PHP
FROM php:8.1-apache

# Install ekstensi PDO dan MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Salin file ke container
COPY src/ /var/www/html/

# Pastikan izin file sudah benar
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
