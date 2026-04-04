CREATE DATABASE ShiksharthiSMS_01;
 USE ShiksharthiSMS_01;
 CREATE TABLE leads(
    id Int AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(50) NOT NULL,
    lname VARCHAR(50) NOT NULL,
    contact_NO CHAR(15)    
 );
  CREATE TABLE Admin(
 id INT AUTO_INCREMENT PRIMARY KEY,
 Fname VARCHAR(50)NOT NULL,
 Lname VARCHAR(50)NOT NULL,
 password VARCHAR(100)NOT NULL,
 leads_id INT NOT NULL,
 fee_id INT NOT NULL,
 Staff_id INT NOT NULL,
 FOREIGN KEY(leads_id) REFERENCES leads(id)
 );

 CREATE TABLE Student(
    id INT AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(50) NOT NULL,
    lname VARCHAR(50) NOT NULL,
    DOB DATE NOT NULL,
    Gender VARCHAR(3),
    Mother_name VARCHAR(50) NOT NULL,
    father_name VARCHAR(45) NOT NULL,
    State VARCHAR(40) NOT NULL,
    city VARCHAR(40) NOT NULL,
    strate VARCHAR(45) NOT NULL,
    pin INT(6) NOT NULL,
    admin_id INT NOT NULL,
    FOREIGN KEY (admin_id) REFERENCES admin(id)
 );
 CREATE TABLE enrollment(
    id INT AUTO_INCREMENT PRIMARY KEY,
    date DATE NOT NULL,
    class INT NOT NULL,
    Student_id INT NOT NULL UNIQUE,
    admin_id INT NOT NULL,
    FOREIGN KEY(Student_id) REFERENCES Student(id),
    FOREIGN KEY(admin_id) REFERENCES admin(id)
);
 

 CREATE TABLE Staff(
    id INT AUTO_INCREAMENT PRIMARY KEY,
    salary INT NOT NULL,
    attitude VARCHAR(40),
    fee_id INT NOT NULL,
    FOREIGN KEY(fee_id) REFERENCES fee(id)
 );
 CREATE TABLE Fee (
 id INT AUTO_INCREAMENT PRIMARY KEY,
 payment_date DATE ,
 Dues_Amount INT NOT NULL,
 Dues_date DATE NOT NULL,
 Total_Amount INT NOT NULL,
 Student_id INT NOT NULL,
 FOREIGN KEY(Student_id) REFERENCES Student(id)
 );