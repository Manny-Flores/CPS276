CREATE TABLE admins
(
  id           int       NOT NULL AUTO_INCREMENT,
  name         varchar(50)    NOT NULL ,
  email        varchar(100)   NOT NULL ,
  password     varchar(100)    NOT NULL ,
  status       varchar(5)        NOT NULL ,
  PRIMARY KEY (id)
) ENGINE=InnoDB;