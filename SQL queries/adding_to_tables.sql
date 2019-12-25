INSERT INTO users(username, password) -- no need to add id since done automatically.
values
('Cobyh7','pass'),
('Cv7','12345'),
('Cobe','cohong');


INSERT INTO shows(jp_name, en_name, year, genre, season, link)
values
('Samurai Champloo', 'Samurai Champloo', '2004', 'Adventure', 'Winter', 'https://twist.moe/a/samurai-champloo/1'),
('Shingeki no Kyojin', 'Attack on Titan', '2009', 'Action', 'Fall', 'https://twist.moe/a/shingeki-no-kyojin/1');

-- making it so that our password to log into database is not encrypted (for js script).
ALTER USER 'coby'@'localhost' IDENTIFIED WITH mysql_native_password BY '18chca98'
