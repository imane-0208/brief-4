
CREATE TABLE role(
    id_role int PRIMARY KEY AUTO_INCREMENT ,
    name VARCHAR(255)
);


CREATE TABLE membre (
    id_user int PRIMARY KEY AUTO_INCREMENT ,
    username VARCHAR(255),
    email VARCHAR(255),
    password_user VARCHAR(255)

);
ALTER TABLE membre
ADD id_role int;
 ALTER TABLE membre ADD constraint FOREIGN KEY (id_role) REFERENCES role(id_role);

 
 CREATE TABLE apprenant (
    id_apprenant int PRIMARY KEY AUTO_INCREMENT ,
    firstname VARCHAR(255),
    lastname VARCHAR(255),
    age int,
    email VARCHAR(255),
    sector VARCHAR(255)

);

ALTER TABLE apprenant
ADD id_role int;
ALTER TABLE membre ADD constraint FOREIGN KEY (id_role) REFERENCES role(id_role);


INSERT INTO `role`( `name`) VALUES ('teacher');
INSERT INTO `role`( `name`) VALUES ('learner');

INSERT INTO `membre`(`username`, `email`, `id_role`, `password_user`) VALUES 
('mohamed','mohamed@gmail.com',1,'m123'),
('rafik','rafik@gmail.com',1,'R123'),
('safae','safae@gmail.com',1,'S123'),
('esmail','esmail@gmail.com',2,'E123'),
('hicham','hicham@gmail.com',2,'H123'),
('anas','anas@gmail.com',2,'A123');

SELECT *from role;
SELECT * FROM membre;

SELECT membre.*, role.name FROM membre , role WHERE membre.id_role = role.id_role;

UPDATE membre SET username='iman',email='eman@gmail.com' WHERE  id_user=1;

DELETE  FROM membre  WHERE id_user=2;

UPDATE membre SET username=''  ,email='eman@gmail.com' WHERE  id_user=3;




