CREATE DATABASE foojobs CHARACTER SET UTF8;
USE foojobs;

CREATE TABLE m_type
(
	TypeId				INT AUTO_INCREMENT PRIMARY KEY,
    Name 			VARCHAR(255)
);

CREATE TABLE m_jobs
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

ALTER TABLE `m_jobs`
  ADD CONSTRAINT `m_jobs` FOREIGN KEY (`TypeId`) REFERENCES `m_type` (`TypeId`);
