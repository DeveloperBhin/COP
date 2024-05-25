<?php
$servername='localhost';
$username='root';
$password='';
$dbname='imageuploads';


$conn = new mysqli($servername,$username,$password,$dbname);


if($conn->connect_error){
    die("connection failed ".$sconn->connect_error);
}

if(isset($_POST['submit'])){
    $target_dir="uploads/";
    $variable2_file = basename($_FILES["image"]["name"]);
    $targetFilePath=$target_dir.$variable2_file;


   $fileType=pathinfo($targetFilePath,PATHINFO_EXTENSION);

    $allowTypes = array('jpg','png','jpeg','gif');
    if(in_array($fileType,$allowTypes)){

        if(move_uploaded_file($_FILES["image"]["tmp_name"],$targetFilePath)){


            $description=$_POST['description'];
            $insert = $conn->query("INSERT INTO images(image_path,description) VALUES('$variable2_file','$description')");


             


            if($insert){
                echo("<script type='text/javascript' > window.alert('The file has been uploaded succesfully');window.location.href='imageupload.php'</script>");


                
            }
            else{
                echo"file upload failed,please try again";
            }

          
        }
        else{
            echo"file is not an image";
        }
    
        

        
       
    }else{
        echo"sorry,only JPEG,PNG,JPG,GIF allowed";
    }




    
  
   
}
$conn->close();


?>