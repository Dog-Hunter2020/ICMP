<?php
/**
 * Created by PhpStorm.
 * User: kisstheraik
 * Date: 16/7/22
 * Time: 上午12:29
 */

require_once('ICMP.php');

$data='Z'.'F'.chr(0).chr(211);


for($i=0;$i<4;$i++){
    $data.=chr(0);
}

$host='localhost';
$startTime=microtime();

$result=sendPackage($host,17,0,$data,function($message){


    $addr=bin2hex($message);

    $ad="";

    for($i=0;$i<8;$i++){
        $ad.=$addr[strlen($addr)-$i-1];
    }
    echo "子网掩码: 0x".$ad.PHP_EOL;

});

if($result!=null){

    echo "Error :$result";

}
