FROM php:8.2-fpm

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install pdo pdo_mysql mysqli

# Configurar zona horaria
RUN echo "America/Mexico_City" > /etc/timezone && \
    dpkg-reconfigure -f noninteractive tzdata

# Configurar sesiones de PHP
RUN mkdir -p /var/lib/php/sessions && \
    chown -R www-data:www-data /var/lib/php/sessions && \
    chmod -R 755 /var/lib/php/sessions

# Configurar php.ini para sesiones
RUN echo "session.save_handler = files" >> /usr/local/etc/php/conf.d/sessions.ini && \
    echo "session.save_path = /var/lib/php/sessions" >> /usr/local/etc/php/conf.d/sessions.ini && \
    echo "session.gc_probability = 1" >> /usr/local/etc/php/conf.d/sessions.ini && \
    echo "session.gc_divisor = 1000" >> /usr/local/etc/php/conf.d/sessions.ini && \
    echo "session.gc_maxlifetime = 1440" >> /usr/local/etc/php/conf.d/sessions.ini

WORKDIR /var/www/html

EXPOSE 9000

CMD ["php-fpm"]