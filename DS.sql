create table Student(
ID int primary key auto_increment,
userName nvarchar(20),
fullName nvarchar(30),
email nvarchar(30),
age int,
major varchar(50) character set UTF8 ,
gender nvarchar(10),
telNumber nvarchar(20),
graded boolean,
pass nvarchar(20),
eteraz boolean,
eterazCheck boolean,
ok boolean
);


create table major(
ID int primary key auto_increment,
value varchar(50) character set UTF8
);


create table Article(
ID int primary key auto_increment,
SID int,
data nvarchar(20),
type nvarchar(20),
content longblob,
description nvarchar(100),
fileName nvarchar(30),
fileType nvarchar(30),
fileSize nvarchar(30),
foreign key (SID) references Student(ID) 
);


create table Thesis(
ID int primary key auto_increment,
SID int,
supervisor nvarchar(20),
description nvarchar(100),
date nvarchar(50),
content longblob,
fileName nvarchar(30),
fileType nvarchar(30),
fileSize nvarchar(30),
foreign key (SID) references Student(ID)
);
create table Project(
ID int primary key auto_increment,
SID int,
title nvarchar(50),
date nvarchar(20),
description nvarchar(100),
content longblob,
fileName nvarchar(30),
fileType nvarchar(30),
fileSize nvarchar(30),
foreign key (SID) references Student(ID)
);

create table DegreeLanguage(
ID int primary key auto_increment,
SID int,
date nvarchar(50),
description nvarchar(100),
type nvarchar(40),
institution nvarchar(50),
content longblob,
fileName nvarchar(30),
fileType nvarchar(30),
fileSize nvarchar(30),
foreign key (SID) references Student(ID)
);

create table BooksWritten(
ID int primary key auto_increment,
SID int,
volume nvarchar(20),
title nvarchar(50),
description nvarchar(100),
date nvarchar(50),
content longblob,
fileName nvarchar(30),
fileType nvarchar(30),
fileSize nvarchar(30),
foreign key (SID) references Student(ID));

create table ScientificOlympiad(
ID int primary key auto_increment,
SID int,
title nvarchar(50),
description nvarchar(100),
date nvarchar(50),
institution nvarchar(50),
content longblob,
fileName nvarchar(30),
fileType nvarchar(30),
fileSize nvarchar(30),
foreign key (SID) references Student(ID));

create table Invention(

ID int primary key auto_increment,
SID int,
description nvarchar(100),
date nvarchar(50),
content longblob,
fileName nvarchar(30),
fileType nvarchar(30),
fileSize nvarchar(30),
foreign key (SID) references Student(ID)
);

create table Translation(
ID int primary key auto_increment,
SID int,
bookName nvarchar(50),
language nvarchar(50),
description nvarchar(100),
date nvarchar(50),
writerName nvarchar(50),
content longblob,
fileName nvarchar(30),
fileType nvarchar(30),
fileSize nvarchar(30),
foreign key (SID) references Student(ID)
);

create table Festival(
ID int primary key auto_increment,
SID int,
placeTaken nvarchar(50),
description nvarchar(100),
date nvarchar(50),
content longblob,
fileName nvarchar(30),
fileType nvarchar(30),
fileSize nvarchar(30),
foreign key (SID) references Student(ID));

create table Experience(
ID int primary key auto_increment,
SID int,
course nvarchar(50),
timeSpan nvarchar(50),
description nvarchar(100),
date nvarchar(50),
institution nvarchar(50),
content longblob,
fileName nvarchar(30),
fileType nvarchar(30),
fileSize nvarchar(30),
foreign key (SID) references Student(ID));

create TABLE AssociateDegree(


ID int primary key auto_increment,
SID int,
educationType int,
rank int,
university nvarchar(100),
date nvarchar(50),
documentID int,
foreign key (SID) references Student(ID));

create table BachelorDegree(
ID int primary key auto_increment,
SID int,
educationType int,
rank int,
university nvarchar(100),
date nvarchar(50),
documentID int,
foreign key (SID) references Student(ID));

create table Faculty(
ID int primary key auto_increment,
fullName nvarchar(50),
role int,
major varchar(50) CHARACTER SET utf8,
degree nvarchar(50),
email nvarchar(50),
pass nvarchar(20)
);

create table Interview(
ID int primary key auto_increment,
SID int,
masterID int,
grade int,
date nvarchar(50),
foreign key (SID) references Student(ID),
foreign key (masterID) references Faculty(ID));


create table Grade(
ID int primary key auto_increment,
SID int,
experience int,
thesis int,
masterID int,
bachelorDegree int,
associateDegree int,
translation int,
bookWritten int,
invention int,
project int,
degreeLanguage int,
articles int,
festival int,
scientificOlympiad int,
foreign key (masterID) references Faculty(ID),
foreign key (SID) references Student(ID)
);