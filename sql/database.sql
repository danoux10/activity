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

create  table beta(
    idBeta int(11) primary key auto_increment not null,
    nameColorB varchar(255) not null,
    borderB varchar(255),
    textB varchar(255),
    backB varchar(255),
    fillB varchar(255)
);

create table  cards(
    id int(11) primary key auto_increment not null,
    iconCard int(11) not null,
    style int(11) not null ,
    nameCard varchar(255) not null
);

create table graph(
    idGraph int(11) primary key auto_increment not null,
    jours date not null,
    start time,
    end time,
    difference time,
    card int(11) not null,
    info text not null,
    ajoutday date not null
)