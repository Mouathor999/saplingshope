<?php
$con = mysqli_connect('47.74.172.203:3308','root','Me_Demo','saplingshop');
if($con){
    mysqli_set_charset($con,'utf8' );

    $query = mysqli_query($con,"SELECT  * FROM `order`");
    while($row = mysqli_fetch_array($query)){
        echo $row[0]." ".$row[1]."<br/>";
    }

}else{
    echo "Connect fail";
}