CREATE DATABASE db_blog;
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
  (1, "Título 1", "lorem lksajlkñ skldjf jsdl"),
  (2, "Título 2", "lorem lksajlkñ skldjf jsdl"),
  (1, "Título 3", "lorem lksajlkñ skldjf jsdl"),
  (1, "Título 4", "lorem lksajlkñ skldjf jsdl"),
  (2, "Título 5", "lorem lksajlkñ skldjf jsdl")
;
