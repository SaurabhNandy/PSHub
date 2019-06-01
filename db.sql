Create database 'PlaystationHub';

Create Table 'Users'(
	'id' INT NOT NULL AUTO_INCREMENT,
	'username' VARCHAR(100) NOT NULL UNIQUE,
	'password' VARCHAR(100) NOT NULL,
	PRIMARY KEY(id)
);

Create Table 'Fedback'(
	'f_id' INT NOT NULL AUTO_INCREMENT,
	'name' VARCHAR(100) NOT NULL,
	'email' VARCHAR(200),
	'Message' VARCHAR(500),
	PRIMARY KEY(f_id)
);