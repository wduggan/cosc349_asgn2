DROP TABLE IF EXISTS products;
DROP TABLE IF EXISTS users;

CREATE TABLE users(
    username VARCHAR(20) NOT NULL,
    password VARCHAR(20) NOT NULL,
    CONSTRAINT username PRIMARY KEY(username)
);

INSERT INTO users VALUES ('admin', 'admin');

CREATE TABLE products(
    productId INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL,
	description VARCHAR(50) NOT NULL,
    price DECIMAL(5, 2) NOT NULL,
    quantity INT NOT NULL,
	CONSTRAINT productId PRIMARY KEY (productId)
);

INSERT INTO products (name, description, price, quantity) VALUES ('AMD CPU 1', 'Ryzen 5 3600', 359.99, 50);
INSERT INTO products (name, description, price, quantity) VALUES ('AMD CPU 2', 'Ryzen 5 5600', 484.99, 50);
INSERT INTO products (name, description, price, quantity) VALUES ('AMD CPU 3', 'Ryzen 7 3700', 549.99, 50);
INSERT INTO products (name, description, price, quantity) VALUES ('AMD CPU 4', 'Ryzen 7 5700', 599.99, 50);
INSERT INTO products (name, description, price, quantity) VALUES ('AMD CPU 5', 'Ryzen 9 5900', 829.99, 50);