USE web03;

CREATE TABLE signin (
	name 		varchar(30) NOT null,
	id 			varchar(30) NOT null,
	pw 			varchar(30) NOT null,
	tel 		VARCHAR(20) NOT null,
	email 		varchar(50) NOT null,
	bday 		DATE NOT null,
	imgname 	VARCHAR(50) NOT null,
	sday 		DATE NOT null,
	PRIMARY KEY(id)
);

DESC signin;
