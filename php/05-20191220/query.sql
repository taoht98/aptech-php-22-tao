CREATE DATABASE aptech_php_22_5;

CREATE TABLE aptech_php_22_5.users(
	id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255) UNIQUE
);

SELECT * FROM aptech_php_22_5.users;

INSERT INTO aptech_php_22_5.users(name, email)
VALUE ('tao', 'tao@gmail.com'), ('thanh', 'thanh@gmail.com'), ('huyen', 'huyen@gmail.com'), ('son', 'son@gmail.com');

SELECT * FROM aptech_php_22_5.users;

CREATE TABLE aptech_php_22_5.passports(
	id INT AUTO_INCREMENT PRIMARY KEY,
	code VARCHAR(255) UNIQUE,
	ngay_cap DATE,
	user_id INT
);

INSERT INTO aptech_php_22_5.passports(code, ngay_cap, user_id)
VALUE ('php18', '2019-12-17', 4), ('php19', '2019-12-6', 5), ('php21', '2019-8-3', 2), ('php22', '2019-3-29', 3);

SELECT users.id as user_id, users.name, users.email, passports.id as passports_id, passports.code, passports.ngay_cap
FROM aptech_php_22_5.users
INNER JOIN aptech_php_22_5.passport ON
users.id = passports.user_id
WHERE passports.user_id=1;










