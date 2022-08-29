#!/usr/bin/env bash
echo 'installation - process'

# Installation of minimum requirements inorder to continue.
apt-get install git \
  git-lfs -y

git clone 'https://github.com/KentVejrupMadsen/Portfolio.git' \
  application

# shellcheck disable=SC2164
cd application
chmod 755 ./code -R

useradd www-data
chown www-data:www-data ./code -R

# linking to the website
ln -s ~/application/code /mnt/www


git checkout development
git pull


chmod 755 ./scripts -R
# shellcheck disable=SC2164
cd scripts


# Starts the setup processes.
bash ./setup.sh