--mysql database address
mysql -h 112.126.80.235 -u root -p

--创建数据库
CREATE DATABASE nuohui;

--生意宝数据库表

CREATE TABLE user_info(
	id INT AUTO_INCREMENT,
	username VARCHAR(20),
	position VARCHAR(20),
	mobile_number int(11),
	company_name VARCHAR(60),
	trade VARCHAR(20),
	apply_purpose VARCHAR(20),
	wei_shop_name VARCHAR(60),
	mail VARCHAR(30),
	apply_type TINYINT,
	notes VARCHAR(120),
	PRIMARY KEY(id)

)