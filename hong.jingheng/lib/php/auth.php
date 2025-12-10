<?php

function MYSQLIAuth(){
	return [
		"localhost",  // mysql host
		"bigheadbing",  // mysql username
		"bigheadbing0102!",  // mysql user password
		"bigheadbing_wm608"  // mysql database name
	];
}

function PDOAuth(){
	return [
		"mysql:host=localhost;dbname=bigheadbing_wm608",  // host and database name 
		"bigheadbing",  // mysql username
		"bigheadbing0102!",  // mysql user password
		[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
	];
}