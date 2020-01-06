-- CREATE TABLE --
-- EXERCISE 1 : CREATE TABLE User;
-- SUGGESTION :
/*
CREATE TABLE aptech_php_12.users
(
    id int,
    last_name varchar(255),
    first_name varchar(255),
    email varchar(255) unique,
    created_at datetime,
    modified_at datetime,
    deleted_at datetime
) 
*/
CREATE TABLE tao_hoa_hong.users(
id int,
name varchar(255),
email varchar(255) unique
);