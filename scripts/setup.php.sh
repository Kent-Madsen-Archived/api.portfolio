#!/usr/bin/env bash
echo 'setup - process - php8.1'

add-apt-repository ppa:ondrej/php
apt-get install php8.1-fpm \
  php8.1-cli \
  php8.1-mysql \
  php8.1-redis \
  php8.1-opcache \
  php8.1-intl \
  php8.1-cli \
  php8.1-mbstring \
  bzip2 -y

apt-get install composer -y

apt-get update
