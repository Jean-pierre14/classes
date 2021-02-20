create database classes_tb;
use classes_tb;

create table class_tb(
    `id` int primary key auto_increment,
    `name` varchar(255),
    `created_at` datetime default current_timestamp,
    `year` date
);

