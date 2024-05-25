<!DOCTYPE html>
<html>
<head>
        <title></title>
        <style>
            table{
                width:200vh;

            }
            #but{
       background-color:darkgreen;
        
        flex-direction:rows;
      
        
        
        
        margin-left:900px;

    }
    body{
        background-color:darkorange;
    }
td{
    background-color:white;
    padding:3px;
    font-family:Times New Roman;
}
        </style>
</head>
    <body>
       <div  id='but'>
       <button><a href="home.php">home</a></button>
         <button><a  href="uploadedimage.php">view uploads</a></button>
         <button> <a href="Customersinfo.php">Customers information</a></button>
</div>
<div class='info'>
<?php
$servername='localhost';
$username='root';
$password='';
$dbname='imageuploads';

$conn= new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error){
    die('connection failed' .$conn->connect_error);
}

$sql = "SELECT * FROM  customersinfo";


$result=$conn->query($sql);


if($result->num_rows>0){

    while($rows=$result->fetch_assoc()){
        echo"<table border='2'>";
        echo"<tr>";
       echo"<td><div class='info'></td>";
        echo"<td><div class='Id'> ".$rows['Id']."</div></td>";
        echo"<td><div class='names'> ".$rows['names']."</div></td>";
        echo"<td><div class='day1'> ".$rows['day1']."</div></td>";
        echo"<td><div class='country'> ".$rows['country']."</div></td>";
        echo"<td><div class='region'> ".$rows['region']."</div></td>";
        echo"<td><div class='district'> ".$rows['district']."</div></td>";
        echo"<td><div class='village'> ".$rows['village']."</div></td>";
        echo"<td><div class='street' > ".$rows['street']."</div></td>";
        echo"<td><div class='houseNO' > ".$rows['houseNO']."</div></td>";
        echo"<td><div class='options' > ".$rows['options']."</div></td>";
        echo"<td><div class='phoneNO' > ".$rows['phoneNO']."</div></td>";
        echo"</div>";
        echo"</tr>";
        echo"</table>";
       
    }

}else{
    echo"0 selected";
}
$conn->close();
?>
</div>
    </body>
</html>