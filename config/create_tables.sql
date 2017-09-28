DROP TABLE IF EXISTS `user`, `message`, `friends`, `post_type`, `post`;

CREATE TABLE `user` (
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  alias VARCHAR(80),
  pass VARCHAR(255),
  f_name VARCHAR(80),
  m_name VARCHAR(80),
  l_name VARCHAR(80),
  email VARCHAR(160)
);

CREATE TABLE `message` (
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  `to` VARCHAR(80) NOT NULL,
  `from` VARCHAR(80) NOT NULL,
  content LONGTEXT
);

CREATE TABLE `friends` (
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  user1 VARCHAR(80) NOT NULL,
  user2 VARCHAR(80) NOT NULL
);

CREATE TABLE `post_type` (
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  name VARCHAR(40)
);

INSERT INTO post_type (name) VALUES
  ("self"),
  ("friends"),
  ("public");

CREATE TABLE `post` (
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  type INT NOT NULL,
  content LONGTEXT,
  user VARCHAR(80) NOT NULL
);
