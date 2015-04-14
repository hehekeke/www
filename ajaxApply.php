<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15-4-13
 * Time: 下午4:15
 */
$url = "112.126.80.235";
$user = "root";
$password = "root";
$con = mysql_connect($url,$user,$password);
mysql_query("set names 'utf8'");
mysql_select_db("nuohui");

$username = $_POST['name'];
$position = $_POST['position'];
$telphone = $_POST['telphone'];
$company = $_POST['company'];
$profession = $_POST['profession'];
$remark = $_POST['remark'];

<<<<<<< HEAD
$sql = "insert into user_info(id,username,position,mobile_number,company_name,notes) values
        (null ,'$username','$position','$telphone','$company','$remark')";

if (!mysql_query($sql,$con))
{
    echo "0";
=======
$sql = "insert into user_info(id,username,position,mobile_number,company_name,notes,apply_type) values
        (null ,'$username','$position','$telphone','$company','$remark','人人店')";
echo $sql;
if (!mysql_query($sql,$con))
{
    echo mysql_error();
>>>>>>> 695c2583870563bfea76ea7611b44479c5363eb1
}else{
    echo "1";
}

mysql_close($con);
