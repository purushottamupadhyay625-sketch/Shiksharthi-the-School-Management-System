CREATE DATABASE ShiksharthiSMS_01;
 USE ShiksharthiSMS_01;
 CREATE TABLE leads(
    id Int AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(50) NOT NULL,
    lname VARCHAR(50) NOT NULL,
    contact_NO CHAR(15)    
 );
 CREATE TABLE Enrollment(
    id INT AUTO_INCREAMENT PRIMARY KEY,
    Date DATE NOT NULL,
    class INT NOT NULL,
    Student_id INT NOT NULL,
    Admin_id INT NOT NULL,
    FOREIGN KEY(Student_id) REFERENCES(Student_id),
    FOREIGN KEY(Admin_id) REFERENCES(Admin_id)
);
 CREATE TABLE Student(
    id INT AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(50) NOT NULL,
    lname VARCHAR(50) NOT NULL,
    DOB DATE,
    Gender VARCHAR(3),
    Mother_name VARCHAR(50),
    father_name VARCHAR(45),
    State VARCHAR(40),
    city VARCHAR(35),
    strate VARCHAR(40),
    pin INT(6),
    Admin_id INT NOT NULL,
    FOREIGN KEY (Admin_id) REFERENCES (Admin_id)
 );
 CREATE TABLE Admin (
 id INT AUTO_INCREMENT PRIMARY KEY,
 Fname VARCHAR(50),
 Lname VARCHAR(50),
 password VARCHAR(100),
 Lead_id INT NOT NULL,
 fee_id INT NOT NULL,
 Staff_id INT NOT NULL,
 FOREIGN KEY(Lead_id) REFERENCES Lead_id,
 FOREIGN KEY(fee_id) REFERENCES fee_id,
 FOREIGN KEY(Staff_id) REFERENCES Staff_id

 );
 CREATE TABLE Staff(
    id INT AUTO_INCREAMENT PRIMARY KEY,
    salary INT NOT NULL,
    attitude VARCHAR(40),
    fee_id INT NOT NULL,
    FOREIGN KEY(fee_id) REFERENCES fee_id
 );
 CREATE TABLE Fee (
 id INT AUTO_INCREAMENT PRIMARY KEY,
 payment_date DATE ,
 Dues_Amount INT NOT NULL,
 Dues_date DATE NOT NULL,
 Total_Amount INT NOT NULL,
 Student_id INT NOT NULL
 FOREIGN KEY(Student_id) REFERENCES Student_id
 );