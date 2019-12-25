-- Grabs duplicates (have more than 1).
SELECT en_name, COUNT(en_name)
FROM shows
GROUP BY en_name
HAVING COUNT(en_name) > 1;


-- deletes duplicates (kind of like a for loop).
DELETE
FROM shows USING shows, shows A1
WHERE shows.en_name = A1.en_name AND shows.id > A1.id;



-- Grabs duplicates (have more than 1).
SELECT username, COUNT(username)
FROM users
GROUP BY username
HAVING COUNT(username) > 1;


-- deletes duplicates (kind of like a for loop).
DELETE
FROM users USING users, users U1
WHERE users.username = U1.username AND users.id > U1.id;
