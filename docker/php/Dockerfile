FROM php:8.2-fpm  
# ← Laravel 11はPHP 8.2以上が必須！

# PHP設定ファイルをコピー
COPY php.ini /usr/local/etc/php/

# システムパッケージとPHP拡張をインストール
RUN apt update \
  && apt install -y \
     default-mysql-client \
     zlib1g-dev \
     libzip-dev \
     unzip \
     curl \
     git \
     libonig-dev \
     libpng-dev \
     libxml2-dev \
  && docker-php-ext-install \
     pdo_mysql \
     zip \
     mbstring \
     exif \
     pcntl \
     xml

# Composerのインストール
RUN curl -sS https://getcomposer.org/installer | php \
  && mv composer.phar /usr/local/bin/composer \
  && composer self-update

# 作業ディレクトリを指定
WORKDIR /var/www