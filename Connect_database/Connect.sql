CREATE DATABASE college;

USE college;

CREATE TABLE student (
    id INT PRIMARY KEY,
    name VARCHAR(50),
    course VARCHAR(30),
    mark INT
);

INSERT INTO student VALUES
(1, 'Arun', 'MCA', 85),
(2, 'Anu', 'BCA', 90),
(3, 'Rahul', 'MCA', 78);
