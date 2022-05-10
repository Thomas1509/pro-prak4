CREATE DATABASE `project-wp`;
use `project-wp`;
CREATE USER 'project'@'localhost' IDENTIFIED BY 'project';
 GRANT ALL PRIVILEGES ON `project-wp`.* TO 'project'@'localhost' WITH GRANT OPTION;