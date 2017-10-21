create table Student(
ID int primary key  auto_increment,
userName nvarchar(20),
fullName nvarchar(30),
email nvarchar(30),
age int,
major int,
gender nvarchar(10),
telNumber nvarchar(20),
graded boolean,
pass nvarchar(20),
foreign key(major) references major(ID)
);

create table major(
ID int primary key auto_increment,
value varchar(50) character set UTF8
);





create table Article(
ID int primary key  auto_increment,
SID int,
data nvarchar(20),
type nvarchar(20),
content longblob,
description nvarchar(100),
foreign key (SID) references Student(ID) 
);


create table Thesis(
ID int primary key  auto_increment,
SID int,
supervisor nvarchar(20),
description nvarchar(100),
date nvarchar(50),
content longblob,
foreign key (SID) references Student(ID)
);
create table Project(
ID int primary key  auto_increment,
SID int,
title nvarchar(50),
date nvarchar(20),
description nvarchar(100),
content longblob,
foreign key (SID) references Student(ID)
);

create table DegreeLanguage(
ID int primary key  auto_increment,
SID int,
date nvarchar(50),
description nvarchar(100),
type nvarchar(40),
institution nvarchar(50),
content longblob,
foreign key (SID) references Student(ID)
);

create table BooksWritten(
ID int primary key  auto_increment,
SID int,
volume nvarchar(20),
title nvarchar(50),
description nvarchar(100),
date nvarchar(50),
content longblob,
foreign key (SID) references Student(ID));

create table ScientificOlympiad(
ID int primary key  auto_increment,
SID int,
title nvarchar(50),
description nvarchar(100),
date nvarchar(50),
institution nvarchar(50),
content longblob,
foreign key (SID) references Student(ID));

create table Invention(

ID int primary key  auto_increment,
SID int,
description nvarchar(100),
date nvarchar(50),
content longblob,
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
foreign key (SID) references Student(ID)
);

create table Festival(
ID int primary key auto_increment,
SID int,
placeTaken nvarchar(50),
description nvarchar(100),
date nvarchar(50),
content longblob,
foreign key (SID) references Student(ID));

create table Experience(
ID int primary key  auto_increment,
SID int,
course nvarchar(50),
timeSpan nvarchar(50),
description nvarchar(100),
date nvarchar(50),
institution nvarchar(50),
content longblob,
foreign key (SID) references Student(ID));

create TABLE AssociateDegree(


ID int primary key  auto_increment,
SID int,
educationType int,
rank int,
university nvarchar(100),
date nvarchar(50),
documentID double,
average int,
foreign key (SID) references Student(ID));


create table BachelorDegree(
ID int primary key  auto_increment,
SID int,
educationType int,
rank int,
university nvarchar(100),
date nvarchar(50),
documentID int,
foreign key (SID) references Student(ID));

create table Faculty(
ID int primary key  auto_increment,
fullName nvarchar(50),
role int,
major int,
degree nvarchar(50),
email nvarchar(50),
pass nvarchar(20),
foreign key(major) references major(ID)
);

create table Interview(
ID int primary key  auto_increment,
SID int,
masterID int,
grade int,
date nvarchar(50),
information int,
behavior int,
speech int,
thought int,
foreign key (SID) references Student(ID),
foreign key (masterID) references Faculty(ID));

create table Grade(

ID int primary key  auto_increment,
SID int,
masterID int,
experience double,
thesis double,
bachelorDegree double,
associateDegree double,
translation double,
bookWritten double,
invention double,
project double,
degreeLanguage double,
articles double,
articles2 double,
festival double,
scientificOlympiad double,
uniKarshenasi double,
uniKardani double,
other double,
total double,
foreign key (masterID) references Faculty(ID),
foreign key (SID) references Student(ID)
);
INSERT INTO `DS`.`grade` (`SID`, `masterID`, `experience`, `thesis`, `bachelorDegree`, `associateDegree`, `translation`, `bookWritten`, `invention`, `project`, `degreeLanguage`, `articles`, `articles2`, `festival`, `scientificOlympiad`, `uniKarshenasi`, `uniKardani`, `other`, `total`) VALUES ('1', '1', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '50');
INSERT INTO `DS`.`grade` (`SID`, `masterID`, `experience`, `thesis`, `bachelorDegree`, `associateDegree`, `translation`, `bookWritten`, `invention`, `project`, `degreeLanguage`, `articles`, `articles2`, `festival`, `scientificOlympiad`, `uniKarshenasi`, `uniKardani`, `other`, `total`) VALUES ('1', '1', '2', '1', '1', '2', '23', '2', '4', '44', '4', '4', '4', '4', '4', '4', '4', '4', '4');
INSERT INTO `DS`.`grade` (`SID`, `masterID`, `experience`, `thesis`, `bachelorDegree`, `associateDegree`, `translation`, `bookWritten`, `invention`, `project`, `degreeLanguage`, `articles`, `articles2`, `festival`, `scientificOlympiad`, `uniKarshenasi`, `uniKardani`, `other`) VALUES ('1', '1', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6');

select * from faculty
select * from student
select * from grade
insert into interview(SID,masterid,GRADE,DATE,information,behavior,speech,thought) values ('1','1','$totalInterview','$interviewDate','$information','$shiveRaftar','$bayan','$estedlal')
select * from grade order by total asc