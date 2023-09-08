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



function getData($qry='select * from users', $type=1){
            $conn = getConn();
            $res=mysqli_query($conn,$qry);
            $resArr=array();
            if($type==1){// select 라면 
                while($data=mysqli_fetch_assoc($res)){
                    array_push($resArr,$data);
                }//연관배열 
            }else{
                $resArr=$res;
            }
            //$fall=mysqli_fetch_array($res);// 다나옴
            //$fall=mysqli_fetch_row($res);// 순서대로
            return $resArr;

        }
?>