<?php

//config connection 
$host     = "aws-0-us-east-1.pooler.supabase.com";
$port     = "6543";
$dbname   = "postgres";
$user     = "postgres.ctlrflecqeywkvftoxam";
$password = "unicesmag@@";

/*
$host     = "localhost";
$port     = "5432";
$dbname   = "schoolar";
$user     = "postgres";
$password = "unicesmag";
*/


//create connection
$conn = Pg_connect("
host=$host
port= $port
dbname=$dbname
user=$user
password=$password
");

if(!$conn){
    die( "conecction error:". pg_last_error());
}else{
   echo "succes connection";
}

?>