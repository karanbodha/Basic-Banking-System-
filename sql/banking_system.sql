CREATE TABLE clients(
    c_id int(3) PRIMARY KEY AUTO_INCREMENT,
    c_name varchar(20) NOT NULL,
    c_mail varchar(20) UNIQUE,
    c_balance int(10) NOT NULL
    );
    
INSERT INTO `clients` (`c_id`, `c_name`, `c_mail`, `c_balance`) VALUES
(101, 'Karan Bodha', 'kb02@gmail.com', 93540),
(102, 'Pankaj Talreja', 'pankaj@gmail.com', 74800),
(103, 'Shubham Lalpuria', 'shub@gmail.com', 55300),
(104, 'Janvi Lala', 'janvi@gmail.com', 40600),
(105, 'Lizza Lulla', 'lizzz@gmail.com', 66500),
(106, 'Hrithik Roshan', 'krish@gmail.com', 44310),
(107, 'Lionel Messi', 'messi@gmail.com', 44200),
(108, 'Preeti Sukhija', 'pree@gmail.com', 17210),
(109, 'M S Dhoni', 'mahi@gmail.com', 12300),
(110, 'Rohit Sharma', 'hitman@gmail.com', 26250);

CREATE TABLE transaction (
  sr_no int(3) PRIMARY KEY AUTO_INCREMENT,
  sender text NOT NULL,
  receiver text NOT NULL,
  balance int(10) NOT NULL,
  date_time datetime NOT NULL DEFAULT current_timestamp()
);


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

COMMIT