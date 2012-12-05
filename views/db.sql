CREATE TABLE usuario (
	email VARCHAR (200) NOT NULL,
	nombre VARCHAR (200),
	password VARCHAR(20),
	tipo INT NOT NULL,
	primera_vez INT NOT NULL DEFAULT 0,
	fecha_registro TIMESTAMP DEFAULT NOW(),
	PRIMARY KEY (email)
)Engine=InnoDB;

CREATE TABLE categoria(
	id INT NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(200),
	tipo INT NOT NULL,
	descripcion TEXT NOT NULL,
	PRIMARY KEY(id)
)Engine=InnoDB;

CREATE TABLE producto(
	id INT NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(200) NOT NULL,
	categoria INT NOT NULL,
	descripcion TEXT NOT NULL,
	precio DECIMAL NOT NULL DEFAULT 0,
	foto VARCHAR(254) NOT NULL,
	fecha_registro TIMESTAMP DEFAULT NOW(),
	PRIMARY KEY(id),
	FOREIGN KEY (categoria) REFERENCES categoria (id)
)Engine=InnoDB;

CREATE TABLE noticia(
	id INT NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(200), 
	descripcion TEXT,
	creador VARCHAR (200) NOT NULL,
	fecha_creacion TIMESTAMP DEFAULT NOW(),
	fecha_expiracion NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (creador) REFERENCES usuario(email) 
)Engine=InnoDB;

CREATE TABLE 