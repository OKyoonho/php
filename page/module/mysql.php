<?php
function getConn(){
    $host = 'localhost';
    $user = 'root';
    $pass = 'apmsetup';
    $dbase = 'myshop';
    $conn=mysqli_connect($host,$user,$pass,$dbase);
    mysqli_query($conn,'SET NAMES utf8');
    return $conn;
}



function getData($qry='select * from users'){
            $conn = getConn();
            $res=mysqli_query($conn,$qry);
            //print_r($res);
            //$fall=mysqli_fetch_array($res);// 다나옴
            //$fall=mysqli_fetch_row($res);// 순서대로
            $data=mysqli_fetch_assoc($res);// 연관배열로
            return $data;

        }
?>