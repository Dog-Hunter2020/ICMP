<?php
/**
 * Created by PhpStorm.
 * User: kisstheraik
 * Date: 16/7/21
 * Time: 下午11:17
 */

require_once('ICMP.php');

$data='Z'.'F'.chr(0).chr(211);
$data.=(pack('N',time()));

for($i=0;$i<8;$i++){
    $data.=chr(0);
}

$host='localhost';
$startTime=microtime();

$result=sendPackage($host,13,0,$data,function($message){


    global $startTime;


    $r=unpack('L*',$message);

    $org=$r[8];
    $recv=$r[9];
    $xmit=$r[10];
    $endTime=microtime();

    echo "orig:$org, recv:$recv, xmit:$xmit, rtt= ".round(($endTime-$startTime)*1000,3).'ms'.PHP_EOL;


});

if($result!=null){

    echo "Error :$result";

}
