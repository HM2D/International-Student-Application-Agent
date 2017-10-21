create User 'h'@'localhost';
grant all privileges on DS.* TO'h'@'localhost';

alter table Student;
add column userName nvarchar(20);

select * from thesis


DROP TABLE BOOK
select * from major
select * from faculty
select * from grade
select * from student;
select * from bachelordegree;
select * from associatedegree;
delete from student where id = 12;
delete from degreelanguage
select * from degreelanguage
select * from faculty,student
select * from article
select * from translation
select * from faculty
select * from invention
select * from scientificolympiad

update student set pass='sara' where SID=17



select * from project

select * from bookswritten


f.s,anf.asnf
as,major,gender,telNumber,graded,userName) values ('$fulldsadsa., name','$email','11','$major','$gender','1234',false,'$userName')

 
SET SQL_SAFE_UPDATES = 0;
 

i  nsert into degreeLanguage (sid,date,description,type,institution,content) values (13,'$date','$description','$type','$institution','$content')
  
  drop table translation
  
 drop table article
 
 select * from student
 select * from faculty
 
 
 Insert into Grade(sid,experience,thesis,masterID,bachelorDegree,associatedEGREE,TRANSLATION,BOOKwRITTEN,INVENTION,PROJECT,DEGREELANGUAGE,ARTICLES,Articles2,FESTIVAL,SCIENTIFICOLYMPIAD,bachelorUniversity,associateuniversity,other) VALUES('1','1','2','1','2','3','4','4','5','6','6','1','3','2','4','4','5','6')