-- Use a Random Password
CREATE USER 'reagindo'@'%' IDENTIFIED BY '074368f501310b64d7ed3bddd99a96fb';
CREATE DATABASE db_reagindo;
FLUSH PRIVILEGES;

GRANT ALL ON db_reagindo.* TO 'reagindo'@'%' IDENTIFIED BY '074368f501310b64d7ed3bddd99a96fb';
FLUSH PRIVILEGES;

CREATE TABLE messages (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255),
    type VARCHAR(255),
    msg TEXT
);

CREATE TABLE qrank (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user VARCHAR(255),
    points INT,
    senddate TIMESTAMP
);

CREATE TABLE passrecover (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    mail VARCHAR(255),
    code VARCHAR(255)
);

CREATE TABLE reports (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    reportid VARCHAR(255),
    filetype VARCHAR(255),
    description VARCHAR(255),
    mail VARCHAR(255),
    name VARCHAR(255),
    saw BOOLEAN,
    dsend TIMESTAMP,
    dsucess TIMESTAMP
);

CREATE TABLE login_attempts (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    userid VARCHAR(255),
    time TIMESTAMP
);

CREATE TABLE users (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(255),
    salt VARCHAR(255)
);

CREATE TABLE map (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    rua VARCHAR(255),
    domicilios INT,
    toppos INT,
    leftpos INT,
    casos INT,
    verdes INT,
    amarelos INT,
    vermelhos INT,
    semselo INT
);