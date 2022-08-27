#!/usr/bin/env bash
echo 'installation - process'

apt-get install git \
  git-lfs

git clone 'https://github.com/KentVejrupMadsen/Portfolio.git' \
  application

# shellcheck disable=SC2164
cd application

git checkout development
git pull


# shellcheck disable=SC2164
cd scripts
bash ./setup.sh
