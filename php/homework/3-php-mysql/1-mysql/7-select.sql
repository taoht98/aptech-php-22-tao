-- SELECT --
-- EXERCISE 1 : Display all of user in your database.
-- SUGGESTION :
/* SELECT *
FROM aptech_php.apUser; */

SELECT * FROM tao_hoa_hong.users;

-- EXERCISE 2 : Display list user role column.
-- SUGGESTION : 
/* SELECT DISTINCT uRole
FROM aptech_php.apUser; */

SELECT DISTINCT email 
FROM tao_hoa_hong.users;

-- EXERCISE 3 : Display top 3 user in your database.
/* SELECT *
FROM aptech_php.apUser 
LIMIT3; */

SELECT * FROM tao_hoa_hong.users
LIMIT3;

-- EXERCISE 4 : Display users who have role = 1 and state = 1;
/* SELECT *
FROM aptech_php.apUser
WHERE uRole = 1 and uState = 1; */

SELECT * FROM tao_hoa_hong.users 
WHERE id = 1;

