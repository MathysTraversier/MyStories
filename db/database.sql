create database if not exists mystories character set utf8 collate utf8_unicode_ci;
use mystories;

grant all privileges on mystories.* to 'mystories_user'@'localhost' identified by 'secret';