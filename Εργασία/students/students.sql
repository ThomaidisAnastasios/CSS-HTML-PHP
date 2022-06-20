#
# Table structure for table `students`
#

CREATE TABLE students (
  student_id int NOT NULL,
  eponymo varchar(30) NOT NULL,
  onoma varchar(20),
  taxi varchar(1),
  tmima varchar(3),
  PRIMARY KEY (student_id)
);
