#!/usr/bin/env bash

# Upgrade the current VM. packages so they are up to date
apt-get update
apt-get full-upgrade -y
apt-get auto-remove -y

#
apt-get install net-tools \
  haveged \
  wireguard \
  lsb-release \
  curl \
  screen \
  htop \
  tmux -y

# Installation of MySQL
apt-get install mysql-server \
  mysql-client -y

curl -fsSL https://packages.redis.io/gpg \
  | gpg --dearmor -o /usr/share/keyrings/redis-archive-keyring.gpg

echo \
  "deb [signed-by=/usr/share/keyrings/redis-archive-keyring.gpg] https://packages.redis.io/deb $(lsb_release -cs) main" \
  | tee /etc/apt/sources.list.d/redis.list

apt-get update
apt-get install redis -y

# Installation of PHP 8.1
add-apt-repository ppa:ondrej/php
apt-get update
apt-get install php8.1-fpm \
  php8.1-cli \
  php8.1-mysql \
  php8.1-redis \
  php8.1-opcache \
  php8.1-intl \
  php8.1-cli \
  php8.1-mbstring -y

apt-get install composer -y
apt-get update

