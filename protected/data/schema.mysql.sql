CREATE TABLE tbl_group (
    id INTEGER UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    groupName VARCHAR(128) NOT NULL,
    UNIQUE (groupName)
);

CREATE TABLE tbl_company (
    id INTEGER UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    companyName VARCHAR(128) NOT NULL,
    UNIQUE (companyName)
);

CREATE TABLE tbl_user (
    id INTEGER UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(128) NOT NULL,
    password VARCHAR(128) NOT NULL,
    email VARCHAR(128) NOT NULL,
    userGroup INTEGER UNSIGNED NOT NULL,
    FOREIGN KEY (userGroup) REFERENCES tbl_group(id) ON DELETE CASCADE,
    userCompany INTEGER UNSIGNED NOT NULL,
    FOREIGN KEY (userCompany) REFERENCES tbl_company(id) ON DELETE CASCADE
);

INSERT INTO tbl_group (groupName) VALUES ('Managers');
INSERT INTO tbl_group (groupName) VALUES ('Employees');

INSERT INTO tbl_company (companyName) VALUES ('Robo Repair');

INSERT INTO tbl_user (username, password, email, userGroup, userCompany) VALUES ('emp1', 'pass2', 'test2@example.com',2, 1);
INSERT INTO tbl_user (username, password, email, userGroup, userCompany) VALUES ('manager', 'mysimple', 'test3@example.com', 1, 1);

CREATE TABLE summary_sales(
    id INTEGER UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    salesDate DATE NOT NULL,
    salesTotal FLOAT NOT NULL,
    UNIQUE (salesDate)
);

CREATE TABLE invoices(
    id INTEGER UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    invoiceNumber INTEGER NOT NULL,
    invoiceDate DATE NOT NULL,
    invoiceTotal FLOAT NOT NULL
);

CREATE TABLE invoice_details(
    id INTEGER UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    invoiceNumber INTEGER UNSIGNED NOT NULL,
    FOREIGN KEY (invoiceNumber) REFERENCES invoices(invoiceNumber) ON DELETE CASCADE,
    productName VARCHAR(128) NOT NULL,
    productCost FLOAT NOT NULL
);

INSERT INTO summary_sales(salesDate, salesTotal) VALUES ('2014-08-01', 199.99);
INSERT INTO invoices (invoiceNumber, invoiceDate, invoiceTotal) VALUES (1000, '2014-08-01', 199.99);
INSERT INTO invoice_details(invoiceNumber, productName, productCost) VALUES(1000, 'Extra Memory', 99.99);
INSERT INTO invoice_details(invoiceNumber, productName, productCost) VALUES(1000, 'Scrambler', 100);

INSERT INTO summary_sales(salesDate, salesTotal) VALUES ('2014-08-02', 345.00);
INSERT INTO invoices (invoiceNumber, invoiceDate, invoiceTotal) VALUES (1001, '2014-08-02', 200.00);
INSERT INTO invoice_details(invoiceNumber, productName, productCost) VALUES(1001, 'New Coat', 200.00);
INSERT INTO invoices (invoiceNumber, invoiceDate, invoiceTotal) VALUES (1002, '2014-08-02', 145.00);
INSERT INTO invoice_details(invoiceNumber, productName, productCost) VALUES(1002, 'Extra Head', 145.00);

INSERT INTO summary_sales(salesDate, salesTotal) VALUES ('2014-08-03', 999.99);
INSERT INTO invoices (invoiceNumber, invoiceDate, invoiceTotal) VALUES (1003, '2014-08-03', 499.99);
INSERT INTO invoice_details(invoiceNumber, productName, productCost) VALUES(1003, 'Abort Switch', 299.99);
INSERT INTO invoice_details(invoiceNumber, productName, productCost) VALUES(1003, 'Remote Control', 200.00);
INSERT INTO invoices (invoiceNumber, invoiceDate, invoiceTotal) VALUES (1004, '2014-08-03', 500.00);
INSERT INTO invoice_details(invoiceNumber, productName, productCost) VALUES(1004, 'Laser Arm', 500.00);





