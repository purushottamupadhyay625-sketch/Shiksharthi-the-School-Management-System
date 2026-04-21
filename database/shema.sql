CREATE DATABASE ShiksharthiSMS_01;
 USE ShiksharthiSMS_01;
 CREATE TABLE leads(
    id Int AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(50) NOT NULL,
    lname VARCHAR(50) NOT NULL,
    gender CHAR(1),
    date_of_birth DATE,
    age INT NOT NULL,
    class VARCHAR(10),
    father_name VARCHAR(50),
    mother_name VARCHAR(50),
    email VARCHAR(50),
    contact_no CHAR(15)
 );
  CREATE TABLE Admin(
 id INT AUTO_INCREMENT PRIMARY KEY,
 Fname VARCHAR(50)NOT NULL,
 Lname VARCHAR(50)NOT NULL,
 password VARCHAR(100)NOT NULL,
 Staff_id INT NOT NULL
 );

 CREATE TABLE Student(
    enrollment_no INT AUTO_INCREMENT PRIMARY KEY,
    enrollment_date DATE NOT NULL,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    DOB DATE NOT NULL,
    Gender VARCHAR(3),
    Mother_name VARCHAR(50),
    father_name VARCHAR(45),
    occupation VARCHAR(70),
    connect_number VARCHAR(15),
    State VARCHAR(40),
    city VARCHAR(40),
    strate VARCHAR(45),
    pin CHAR(6),
    email VARCHAR(50),
    password VARCHAR(100),
    class VARCHAR(1),
    section VARCHAR(30),
    roll_no VARCHAR(50),
    session CHAR(10),
    previous_schoolname VARCHAR(70),
    previous_class VARCHAR(15),
    guardian VARCHAR(1),
    guardian_name VARCHAR(50),
    guardian_relation VARCHAR(2),
    guardian_email VARCHAR(50)
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