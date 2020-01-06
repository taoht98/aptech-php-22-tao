-- UPDATE --
-- EXERCISE 1 : Set state = -1 for user who has Id = 4 ;
-- SUGGESTION :
/* UPDATE aptech_php.apUser 
SET uState = -1 
WHERE uId = 4; */

UPDATE aptech_php_22.users
SET state = -1
WHERE uid = 4;

