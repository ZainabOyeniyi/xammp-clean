CREATE TABLE CUSTOMERS(
customers_MatId INT PRIMARY KEY,
customers Fname VARCHAR(20),
customers Lname VARCHAR(20),
customers hall VARCHAR(10)
customers roomNO INT,
customers passwd VARCHAR(20),
customers email VARCHAR(25)
);
CREATE TABLE STAFFS(
staff_id INT PRIMARY KEY,
staff fname VARCHAR(20),
staff lname VARCHAR(20),
staff_no INT,
FOREIGN KEY(service_id)
);
CREATE TABLE PAYMENTS(
payment_id INT PRIMARY KEY,
payment_date INT,
FOREIGN KEY(service_id)
);
CREATE TABLE SERVICES(

)



