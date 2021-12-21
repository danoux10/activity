create database activityBeta;
use activity;

create table icon(
    idIcon int(11) primary key auto_increment not null,
    nameIcon varchar(255) not null,
    tag varchar(255) not null
);

create table color(
    idColor int(11) primary key auto_increment not null,
    border varchar(255),
    text varchar(255) not null,
    back varchar(255),
    fill varchar(255)
);

create table cards(
    idCard int(11) primary key auto_increment not null,
    iconId int,
    colorId int,
    nameCard varchar(255) not null,
    foreign key (iconId) references icon(idIcon),
    foreign key (colorId) references color(idColor)
);

create table data_graph(
    idDataG int primary key auto_increment not null,
    jours date,
    debut time,
    fin time,
    duration time,
    card int(11),
    info varchar(255),
    ajout varchar(255),
    foreign key (card) references cards(idCard)
);

use test;
select *, min(name) from mytable group by id order by numberrange asc;

use activity;
select min(jours) from data_graph;
select jours from data_graph ;

