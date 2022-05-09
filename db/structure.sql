drop table if exists user;
drop table if exists usr_choice;
drop table if exists choice;
drop table if exists step;
drop table if exists story;

create table story (
    sto_id integer not null primary key auto_increment,
    sto_title varchar(100) not null,
    sto_description varchar(2000) not null,
    sto_image varchar(150),
    sto_played integer DEFAULT 0 not null,
    sto_hidden boolean DEFAULT false not null
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
    ste_start boolean not null,
    ste_choiceType varchar(1),
    ste_lossPV boolean not null,
    ste_end boolean not null,
    ste_victory boolean not null,
    sto_id integer not null,
    foreign key (sto_id) REFERENCES story (sto_id)
) engine=innodb character set utf8 collate utf8_unicode_ci;

create table choice (
    cho_id integer not null primary key auto_increment,
    cho_ste varchar(1) not null,
    cho_related integer DEFAULT null,
    cho_name varchar(50) not null,
    cho_description varchar(2000) not null,
    ste_id integer not null,
    foreign key (ste_id) REFERENCES step (ste_id)
) engine=innodb character set utf8 collate utf8_unicode_ci;

create table usr_choice (
    usr_choice_id integer not null primary key auto_increment,
    cho_id integer not null,
    foreign key (cho_id) REFERENCES choice (cho_id)
) engine=innodb character set utf8 collate utf8_unicode_ci;