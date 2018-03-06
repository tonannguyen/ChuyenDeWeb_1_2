DROP DATABASE chuyendeweb;
CREATE DATABASE chuyendeweb CHARACTER SET UTF8;
USE chuyendeweb;

CREATE TABLE TypeJobs
(
	TypeId				INT AUTO_INCREMENT PRIMARY KEY,
    Name 			VARCHAR(255)
);

CREATE TABLE Jobs
(
	Id				INT AUTO_INCREMENT PRIMARY KEY,
    TypeId			INT,
    Title			VARCHAR(255),
    Url				VARCHAR(1000),
    Address			VARCHAR(255),
    Salary			VARCHAR(100),
    Exp				VARCHAR(255),
    Degree			VARCHAR(255),
    Position		VARCHAR(255),
    
    CONSTRAINT UC_Job_Url UNIQUE(Url)
);	

ALTER TABLE `Jobs`
  ADD CONSTRAINT `Jobs` FOREIGN KEY (`TypeId`) REFERENCES `TypeJobs` (`TypeId`);
