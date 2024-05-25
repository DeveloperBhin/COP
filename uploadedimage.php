<!DOCTYPE html>
<html>
    <head>
        <title> Example of HTML document in PHP</title>
        <style>
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
        }
        .image {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .image img {
            width: 100%;
            max-width:350px;
            height: 180px;
        }
        .description {
            margin-top: 10px;
            text-align: center;
        }
        #home{
       background-color:darkgreen;
        
        flex-direction:rows;
      
        
        margin-left:1250px;
        

    }
    button{
        position:center top;
    }
    form{
        background-color:grey;
        color:;
        height:100px
    }
    </style>
    </head>
    <body>
        <div id="home">
    <button><a href="home.php">home</a></button>
    </div>
      <div class="gallery">
        <?php
           $servername='localhost';
            $username='root';
            $password='';
            $dbname='imageuploads';



            $conn = new mysqli($servername,$username,$password,$dbname);






            if($conn->connect_error){
                die('connection faild'.$conn->connect_error);
            }


            $sql="SELECT image_path,description FROM images";


            $result=$conn->query($sql);


            if($result->num_rows>0){

                while($row=$result->fetch_assoc()){
                    echo"<div class='image'>";
                    echo"<img src='uploads/".$row['image_path'] ."'alt='image uploaded' >";
                    echo"<a class='description'>".$row['description']."</div>";
                   
                    echo"</div>";


                }

            }
            else{
                echo"0 selected";
            }

            $conn->close();
            ?>
      </div>  
      <form action="info.php" method="POST" enctype="multipart/form-data">
        <label>names of the product choosed</label>
        <input type="text" name="names">
        <label>Date:</label>
        <input type="date" name="time" rows="4" cols="50">
         <label> country<label>
        <input type="textarea" name="country" rows="4" cols="50">
        <label>region<label>
        <input type="textarea" name="region" rows="4" cols="50">
        <label>district<label>
        <input type="textarea" name="district" rows="4" cols="50">
       <p> <label>ward/village<label>
        <input type="textarea" name="village" rows="4" cols="50">
        <label>street<label>
        <input type="textarea" name="street" rows="4" cols="50">
        <label>house no <label>
        <input type="textarea" name="houseNO" rows="4" cols="50">
        <label>payment type<label>
            <select name="options">
                <option type="" ></option>
                <option type="vodacom" value="vodacom" >vodacom:0747904950</option>
                <option type="haolotel" value= "halotel">halotel:0613757172</option>
                <option type="haolotel" value= "halotel">airtel:0613757172</option>
                <option type="haolotel" value= "halotel">tigo:0632297172</option>
                <option type="haolotel" value= "halotel">zantel:0913757172</option>
                <option type="haolotel" value= "halotel">NMB:0613757172</option>
                <option type="haolotel" value= "halotel">CRDB:0613757172</option>
                <option type="haolotel" value= "halotel">MASTERCARD:0613757172</option>
                
            </select>
            <label>your phone no<label>
        <input type="tell" name="phoneNO" rows="4" cols="50"></p>

<label>submit your information</label>
        <input type="submit" name="submit" value="submit"><br><br>
      
       
       </form>
    </body>
</html>