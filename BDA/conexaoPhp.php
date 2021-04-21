<?php
$host='localhost';
$user='root';
$senha='';
$banco='progwedbd2';
$porta='80';

$conect = mysqli_connect($host,$user,$senha,$banco) or
         die('Nao foi possivel realizar a comunicacao'. mysqli_error());