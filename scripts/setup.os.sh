#!/usr/bin/env bash
echo 'setup - process - os'
apt-get update
apt-get full-upgrade -y
apt-get auto-remove -y
