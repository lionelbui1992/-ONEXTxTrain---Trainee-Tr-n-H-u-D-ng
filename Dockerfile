# Sử dụng image PHP chính thức
FROM php:8.1-apache

# Cài đặt các phần mở rộng PHP cần thiết
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Sao chép mã nguồn của bạn vào container
COPY . /var/www/html/

# Cấp quyền cho thư mục
RUN chown -R www-data:www-data /var/www/html/
RUN chmod -R 755 /var/www/html/

# Mở cổng 80
EXPOSE 80
