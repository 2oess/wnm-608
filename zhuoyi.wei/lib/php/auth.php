<?php

function MYSQLIAuth() {
 return[
    "localhost",   //mysql host 
    "zhuoyi_2oebags",  //  mysql user name
    "99002b941002Y",  // mysql user password
    "zhuoyi_2oebags"   // mysql database name
 ];
} 

function PDOAuth(){
    return[
 "mysql:host=localhost;dbname=mahsas",   //host and data base name
"zhuoyi_2oebags",  //  mysql user name
"99002b941002Y",  // mysql user password

[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
    ];
}

