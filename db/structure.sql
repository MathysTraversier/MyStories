drop table if exists user;
drop table if exists story;
drop table if exists step;
drop table if exists choice;

create table story (
    sto_id integer not null primary key auto_increment,
    sto_title varchar(100) not null,
    sto_description_short varchar(500) not null,
    sto_description_long varchar(2000) not null,
    sto_image varchar(150)
) engine=innodb character set utf8 collate utf8_unicode_ci;

create table user (
    usr_id integer not null primary key auto_increment,
    usr_name varchar(50) not null,
    usr_email varchar(100) not null,
    usr_password varchar(88) not null,
    usr_lives integer not null,
    usr_admin boolean not null
) engine=innodb character set utf8 collate utf8_unicode_ci;

create table step (
    ste_id integer not null primary key auto_increment,
    ste_description varchar(5000) not null,
    sto_id integer not null,
    foreign key (sto_id) REFERENCES story (sto_id)
) engine=innodb character set utf8 collate utf8_unicode_ci;

create table choice (
    cho_id integer not null primary key auto_increment,
    cho_description varchar(2000) not null,
    ste_id integer not null,
    foreign key (ste_id) REFERENCES step (ste_id)
) engine=innodb character set utf8 collate utf8_unicode_ci;