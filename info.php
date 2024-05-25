<?php
$conn=mysqli_connect('localhost','root','','imageuploads');
if(isset($_POST['submit'])){
    $nm=($_POST['names']);
    $t=($_POST['time']);
    $cn=($_POST['country']);
    $rg=($_POST['region']);
    $dt=($_POST['district']);
    $vl=($_POST['village']);
    $st=($_POST['street']);
    $hn=($_POST['houseNO']);
    $op=($_POST['options']);
    $pn=($_POST['phoneNO']);


    $reg="INSERT INTO customersinfo(names,day1,country,region,district,village,street,houseNO,options,phoneNO)VALUES('$nm','$t','$cn','$rg','$dt','$vl','$st','$hn','$op','$pn')";
    if(mysqli_query($conn,$reg)){
      echo("<script type='text/javascript' > window.alert('information delivered');window.location .href='uploadedimage.php'</script>");
       }
   
  }
mysqli_close($conn);
?>
