CREATE DATABASE db_blog CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE db_blog;

CREATE TABLE t_user (
  id int AUTO_INCREMENT,
  email varchar(40),
  password varchar(20),
  PRIMARY KEY(id)
);

CREATE TABLE t_posts (
  id int AUTO_INCREMENT,
  user_id int NOT NULL,
  title varchar(20),
  content text,
  PRIMARY KEY(id),
  FOREIGN KEY(user_id) REFERENCES t_user(id)
);

INSERT INTO t_user (email, password) VALUES
  ( "kenny", "ynnek" ),
  ( "burno", "onrub" )
;

INSERT INTO t_posts (user_id, title, content) VALUES
  (1, "Title 1", "lorem lksajlk skldjf jsdl"),
  (2, "Title 2", "lorem lksajlk skldjf jsdl"),
  (1, "Title 3", "lorem lksajlk skldjf jsdl"),
  (1, "Title 4", "lorem lksajlk skldjf jsdl"),
  (2, "Title 5", "lorem lksajlk skldjf jsdl")
;
