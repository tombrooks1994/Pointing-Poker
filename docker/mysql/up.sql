USE laravel_docker;

CREATE TABLE `user`(
	id int AUTO_INCREMENT,
	username VARCHAR(200) UNIQUE,
	password VARCHAR(200),
	roles TEXT,
	PRIMARY KEY(id)
);

CREATE TABLE `planning_poker_session`(
    id int AUTO_INCREMENT,
    created_date DATETIME,
    expire_date DATETIME,
    PRIMARY KEY(id)
);

CREATE TABLE `planning_poker_participants`(
    id int AUTO_INCREMENT,
    session_id int,
    name VARCHAR(100),
   	PRIMARY KEY(id)
);

INSERT INTO `user` (username, password, roles)
VALUES ('tom','$2y$13$ubkSiOj/3mh5pbfeG98zpeeBsXKwgIGZkHubpmUIejzFsusxfvkqK','a:1:{i:0;s:9:"ROLE_USER";}');

INSERT INTO `user` (username, password, roles)
VALUES ('molly','$8dtbUayipbpVwJpWUBxwwvGwRIeKOaFDs3tWy5wJW8M','a:1:{i:0;s:9:"ROLE_USER";}');