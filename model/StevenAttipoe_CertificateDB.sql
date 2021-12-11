DROP DATABASE CertificateDB;
CREATE DATABASE CertificateDB;
USE CertificateDB;

CREATE TABLE Skill(
Skill_type ENUM('Database','Cloud','Design','DevOps','Analytics'),
Skill_No INT(3) NOT NULL UNIQUE
);

CREATE TABLE SkilledStaff(
Skills_Set VARCHAR(20) ,
PRIMARY KEY(Skills_set)
);

CREATE TABLE JobOffer(
Job_ID INT(4) UNSIGNED,
Job_Title VARCHAR(50),
Salary DECIMAL(7,2),
Skills_set VARCHAR(20),
PRIMARY KEY(JOB_ID),
FOREIGN KEY (Skills_set) REFERENCES SkilledStaff(Skills_set)
);


CREATE TABLE Staff(
Staff_ID INT(10) UNIQUE NOT NULL,
fullName VARCHAR(50) NOT NULL,
pswd VARCHAR(64) NOT NULL,
email VARCHAR(50) NOT NULL,
Department enum('Frontend','Cloud','DevOps','Backend'),
PRIMARY KEY(Staff_ID)
);

CREATE TABLE Payment(
Transaction_No INT(10) UNSIGNED,
Staff_ID INT(10) UNIQUE NOT NULL,
Total_Amount decimal(6,2),
Payment_Status enum("Successful", "Failed","Pending"),
PRIMARY KEY(Transaction_No)
);
 
 CREATE TABLE Course(
 Course_ID INT(5) UNSIGNED,
 Transaction_No INT(10) UNSIGNED,
PRIMARY KEY(Course_ID),
FOREIGN KEY (Transaction_No) REFERENCES Payment(Transaction_No) ON DELETE CASCADE
 );

CREATE TABLE Certificate(
Certificate_ID INT(5) UNSIGNED,
Staff_ID INT(10) UNIQUE NOT NULL,
Certificate_Name VARCHAR(50),
Course_ID INT(5) UNSIGNED,
PRIMARY KEY(Certificate_ID),
FOREIGN KEY (Staff_ID) REFERENCES Staff(Staff_ID)  ON DELETE CASCADE,
FOREIGN KEY (Course_ID) REFERENCES Course(Course_ID)
);

CREATE TABLE License(
License_Key VARCHAR(10),
Certificate_ID INT(5) UNSIGNED,
PRIMARY KEY(License_Key),
FOREIGN KEY (Certificate_ID) REFERENCES Certificate(Certificate_ID) ON DELETE CASCADE
);

CREATE TABLE Certificate_Issuer(
Issuer_ID VARCHAR(20),
Certificate_ID INT(5) UNSIGNED,
Issue_Date Date,
Expiry_Date Date,
FOREIGN KEY (Certificate_ID) REFERENCES Certificate(Certificate_ID) ON DELETE CASCADE
);

CREATE TABLE IBM(
Certificate_ID INT(5) UNSIGNED,
IBM_TITLE VARCHAR(20),
CERT_NAME VARCHAR(50),
PRIMARY KEY(IBM_TITLE) ,
FOREIGN KEY (Certificate_ID) REFERENCES Certificate(Certificate_ID) ON DELETE CASCADE
);

CREATE TABLE Cloud(
Certificate_ID INT(5) UNSIGNED,
Cloud_TITLE VARCHAR(20),
CERT_NAME VARCHAR(50),
PRIMARY KEY(Cloud_TITLE),
FOREIGN KEY (Certificate_ID) REFERENCES Certificate(Certificate_ID) ON DELETE CASCADE
);

CREATE TABLE Adobe(
Certificate_ID INT(5) UNSIGNED,
Adobe_TITLE VARCHAR(20),
CERT_NAME VARCHAR(50),
PRIMARY KEY (Adobe_TITLE),
FOREIGN KEY (Certificate_ID) REFERENCES Certificate(Certificate_ID) ON DELETE CASCADE
);


INSERT INTO Skill(Skill_type,Skill_No) VALUES("Cloud",342);
INSERT INTO Skill(Skill_type,Skill_No) VALUES("Database",442);
INSERT INTO Skill(Skill_type,Skill_No) VALUES("Design",002);
INSERT INTO Skill(Skill_type,Skill_No) VALUES("Analytics",101);
INSERT INTO Skill(Skill_type,Skill_No) VALUES("DevOps",902);

INSERT INTO SkilledStaff(Skills_Set) VALUES("A1-900 DP-900");
INSERT INTO SkilledStaff(Skills_Set) VALUES("CLF-C01, DAS-C01");
INSERT INTO SkilledStaff(Skills_Set) VALUES("9A0-303, 9A0-389");
INSERT INTO SkilledStaff(Skills_Set) VALUES("GACE, GPCA");
INSERT INTO SkilledStaff(Skills_Set) VALUES("C1000-017");

INSERT INTO JobOffer(Job_ID,Job_Title,Salary,Skills_set) VALUES(0201,"Azure Machine Learning Associate",10500,"A1-900 DP-900");
INSERT INTO JobOffer(Job_ID,Job_Title,Salary,Skills_set) VALUES(0203,"AWS Amplify/Kinesis Engineer",11500,"CLF-C01, DAS-C01");
INSERT INTO JobOffer(Job_ID,Job_Title,Salary,Skills_set) VALUES(0432,"Adobe Product Manager Engineer",12500,"9A0-303, 9A0-389");
INSERT INTO JobOffer(Job_ID,Job_Title,Salary,Skills_set) VALUES(2366,"Google Professional Cloud Associate",12400,"GACE, GPCA");
INSERT INTO JobOffer(Job_ID,Job_Title,Salary,Skills_set) VALUES(9421,"IBM Cloud Database Administrator",12550,"C1000-017");


INSERT INTO Staff(Staff_ID,fullname,pswd,email,Department) VALUES(0100,"Jesse Srodah","HJY(&T(&*T&*F^E*","jesse@gmail.com","Cloud");
INSERT INTO Staff(Staff_ID,fullname,pswd,email,Department) VALUES(0400,"Richard Srodah","HJY(&T(&*T&*F^E*","richard@gmail.com","DevOps");
INSERT INTO Staff(Staff_ID,fullname,pswd,email,Department) VALUES(0336,"Baby Yaa","HJY(&T(&*T&*F^E*","yaa@gmail.com","Frontend");
INSERT INTO Staff(Staff_ID,fullname,pswd,email,Department) VALUES(0865,"Nath Mate","HJY(&T(&*T&*F^E*","nath@gmail.com","Cloud");
INSERT INTO Staff(Staff_ID,fullname,pswd,email,Department) VALUES(9543,"Ozoroh Eze","HJY(&T(&*T&*F^E*","ozoroh@gmail.com","Backend");
INSERT INTO Staff(Staff_ID,fullname,pswd,email,Department) VALUES(0234,"Imoma Bokula","HJY(&T(&*T&*F^E*","bokula@gmail.com","Frontend");




INSERT INTO Payment(Transaction_No,Staff_ID,Total_Amount,Payment_Status) VALUES(092828991,0100,1500,"Successful");
INSERT INTO Payment(Transaction_No,Staff_ID,Total_Amount,Payment_Status) VALUES(084342996,0400,2500,"Pending");
INSERT INTO Payment(Transaction_No,Staff_ID,Total_Amount,Payment_Status) VALUES(042434992,0336,4330,"Successful");
INSERT INTO Payment(Transaction_No,Staff_ID,Total_Amount,Payment_Status) VALUES(323828234,0865,7420,"Pending");
INSERT INTO Payment(Transaction_No,Staff_ID,Total_Amount,Payment_Status) VALUES(443828326,9543,6430,"Failed");
INSERT INTO Payment(Transaction_No,Staff_ID,Total_Amount,Payment_Status) VALUES(343428992,0234,2350,"Successful");



INSERT INTO Course(Course_ID,Transaction_No) VALUES(00032,092828991);
INSERT INTO Course(Course_ID,Transaction_No) VALUES(00232,084342996);
INSERT INTO Course(Course_ID,Transaction_No) VALUES(00532,042434992);
INSERT INTO Course(Course_ID,Transaction_No) VALUES(00245,323828234);
INSERT INTO Course(Course_ID,Transaction_No) VALUES(00321,443828326);
INSERT INTO Course(Course_ID,Transaction_No) VALUES(01234,343428992);




INSERT INTO Certificate(Certificate_ID,Staff_ID,Certificate_Name,Course_ID) VALUES(00237,0100,"AZ-302",00032);
INSERT INTO Certificate(Certificate_ID,Staff_ID,Certificate_Name,Course_ID) VALUES(38288,0400,"AZ-220",00232);
INSERT INTO Certificate(Certificate_ID,Staff_ID,Certificate_Name,Course_ID) VALUES(32927,0336,"AZ-300",00532);
INSERT INTO Certificate(Certificate_ID,Staff_ID,Certificate_Name,Course_ID) VALUES(37271,0865,"AZ-301",00245);
INSERT INTO Certificate(Certificate_ID,Staff_ID,Certificate_Name,Course_ID) VALUES(93822,9543,"AZ-303",00321);
INSERT INTO Certificate(Certificate_ID,Staff_ID,Certificate_Name,Course_ID) VALUES(73828,0234,"CLF-C01",01234);




INSERT INTO License(License_key,Certificate_ID) VALUES("@32$3",00237);
INSERT INTO License(License_key,Certificate_ID) VALUES("^42$4",38288);
INSERT INTO License(License_key,Certificate_ID) VALUES("$34@7",32927);
INSERT INTO License(License_key,Certificate_ID) VALUES("#2$&6",37271);
INSERT INTO License(License_key,Certificate_ID) VALUES("@21#3",93822);
INSERT INTO License(License_key,Certificate_ID) VALUES("&362^",73828);




INSERT INTO Certificate_Issuer(Issuer_ID,Certificate_ID,Issue_Date,Expiry_Date) VALUES("Certiport01",00237,"2021-03-29","2023-03-20");
INSERT INTO Certificate_Issuer(Issuer_ID,Certificate_ID,Issue_Date,Expiry_Date) VALUES("PearsonVue01",38288,"2021-04-29","2023-04-19");
INSERT INTO Certificate_Issuer(Issuer_ID,Certificate_ID,Issue_Date,Expiry_Date) VALUES("Certiport01",32927,"2021-05-29","2023-05-10");
INSERT INTO Certificate_Issuer(Issuer_ID,Certificate_ID,Issue_Date,Expiry_Date) VALUES("Certiport01",37271,"2021-06-29","2023-06-21");
INSERT INTO Certificate_Issuer(Issuer_ID,Certificate_ID,Issue_Date,Expiry_Date) VALUES("PearsonVue01",93822,"2021-07-29","2023-07-31");
INSERT INTO Certificate_Issuer(Issuer_ID,Certificate_ID,Issue_Date,Expiry_Date) VALUES("PearsonVue01",73828,"2021-08-29","2023-08-30");



INSERT INTO IBM(Certificate_ID,IBM_TITLE,CERT_NAME) VALUES(38288,"C1000-010","IBM Operational Decision Manager");
INSERT INTO IBM(Certificate_ID,IBM_TITLE,CERT_NAME) VALUES(00237,"C1000-012","IBM Watson Application Developer");
INSERT INTO IBM(Certificate_ID,IBM_TITLE,CERT_NAME) VALUES(32927,"C1000-016","IBM Traditional Workloads Sales");
INSERT INTO IBM(Certificate_ID,IBM_TITLE,CERT_NAME) VALUES(37271,"C1000-017","IBM Cloud Solutions Architect");
INSERT INTO IBM(Certificate_ID,IBM_TITLE,CERT_NAME) VALUES(93822,"C1000-019","IBM Spectrum Protect Plus");






INSERT INTO Cloud(Certificate_ID,Cloud_TITLE,CERT_NAME) VALUES(00237,"AZ-220","Microsoft Azure IoT Developer");
INSERT INTO Cloud(Certificate_ID,Cloud_TITLE,CERT_NAME) VALUES(38288,"AZ-300","Microsoft Azure Architect Technologies");
INSERT INTO Cloud(Certificate_ID,Cloud_TITLE,CERT_NAME) VALUES(32927,"AZ-301","Microsoft Azure Architect Design");
INSERT INTO Cloud(Certificate_ID,Cloud_TITLE,CERT_NAME) VALUES(37271,"AZ-302","Microsoft Azure Solutions Architect");
INSERT INTO Cloud(Certificate_ID,Cloud_TITLE,CERT_NAME) VALUES(93822,"AZ-303","Microsoft Azure Architect Technologies");
INSERT INTO Cloud(Certificate_ID,Cloud_TITLE,CERT_NAME) VALUES(73828,"CLF-C01","AWS Certified Cloud Practitioner");




INSERT INTO Adobe(Certificate_ID,Adobe_TITLE,CERT_NAME) VALUES(00237,"9A0-389","Adobe Campaign Developer");
INSERT INTO Adobe(Certificate_ID,Adobe_TITLE,CERT_NAME) VALUES(38288,"9A0-397","Adobe Experience Manager DevOps Engineer");
INSERT INTO Adobe(Certificate_ID,Adobe_TITLE,CERT_NAME) VALUES(32927,"9A0-303","Adobe Photoshop CS6 ACE Exam");
INSERT INTO Adobe(Certificate_ID,Adobe_TITLE,CERT_NAME) VALUES(37271,"9A0-331","Adobe Connect Pro 7");
INSERT INTO Adobe(Certificate_ID,Adobe_TITLE,CERT_NAME) VALUES(93822,"9A0-381","Analytics Business Practitioner");


-- Index
CREATE INDEX Cert_Name ON Certificate (Certificate_Name);
#Certificate Name would be used to check certificate validation

CREATE INDEX Amount_Pay ON Payment (Total_Amount);
 # Total amount paid woud be used in computation of total certification cost module
 
CREATE INDEX Depart ON Staff (Department);
# The department would be used in accessing and matching the skills gained by staff

CREATE INDEX Pay_Status ON Payment (Payment_Status);
# Payment_Status is used the clearing successful payments made by staff.


-- Queries 
-- Certificate legitimacy
SELECT Certificate.Certificate_ID, Certificate.Certificate_Name ,Certificate.Staff_ID,Certificate.Course_ID,License.License_Key
 FROM Certificate
 LEFT JOIN License ON Certificate.Certificate_ID = License.Certificate_ID;
 
 -- Certificate-to-job-match
SELECT Certificate.Certificate_Name, JobOffer.Job_Title,JobOffer.Skills_set
FROM   Certificate,JobOffer
WHERE  Certificate.Certificate_Name IN
   (SELECT Certificate.Certificate_Name
   FROM Certificate
   WHERE Certificate_Name like 'AZ-220');
   
-- Payment Clearance
SELECT Staff.Staff_ID,Payment.Transaction_No, Payment.Payment_Status,Payment.Total_Amount
 FROM Staff
 INNER JOIN Payment ON Staff.Staff_ID = Payment.Staff_ID
 WHERE Payment.Payment_Status = "Successful";
 
-- Course-to-Certificate Match
SELECT Certificate.Certificate_Name, Certificate.Certificate_ID,Course.Course_ID
FROM Course
INNER JOIN  Certificate
GROUP BY Certificate_Name ASC;

-- Skills gained
SELECT Staff.Staff_ID,Staff.Department,SkilledStaff.Skills_set
 FROM Staff
 RIGHT JOIN SkilledStaff ON Staff.Skills_set = SkilledStaff.Skills_set;

-- Company Cost module
Select SUM(Total_Amount), COUNT(Transaction_No)
FROM Payment
Where Payment_Status = "Successful" OR Payment_Status ="Pending";