create database activityBeta;
use activityBeta;

create table icon(
    idIcon int(11) primary key auto_increment not null,
    nameIcon varchar(255) not null,
    tag varchar(255) not null
);

create table color(
    idColor int(11) primary key auto_increment not null,
    nameColor varchar(255) not null,
    border varchar(255),
    text varchar(255),
    back varchar(255),
    fill varchar(255)
);

create table  cards(
    id int(11) primary key auto_increment not null,
    iconCard int(11) not null,
    style int(11) not null ,
    nameCard varchar(255) not null
);

use activityBeta;
create table graph(
    idGraph int(11) primary key auto_increment not null,
    jours date not null,
    debut time,
    fin time,
    difference time,
    card int(11) not null,
    info text not null,
    ajoutday varchar(255) not null
)