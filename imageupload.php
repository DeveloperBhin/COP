<!DOCTYPE html>
<html>
    <head>
        <title>upload image</title>
        <style>
           


           
form{
	width :75vh;
    height :65vh;
	margin: 0;
	padding:2px;
	border:3px solid #006400;
	border-radius:10px;
	background-color:white;
    
    background-repeat:no repeat;
    background-position:center;
    margin-left:390px;
}
body{
     background-color:rgb(175,175,175);
       
        
        
        
        
    }
    
       
       
    header{
        background-color:darkgreen;   
       
        
        

    }
    a{
        
        text-decoration:none;
    }
    
    img{
        width:28vh;
        height:110px;
        margin-left:150px;
        

      } 
      h{
                color:red;
                font-size:25px;
                font-family:wide latin;
                }
  
      
    p{
    font-size:13px;
     margin-left:1px;
     color:black;

                }

                button{
                   
                    padding:0px;
                    margin-left:330px;
                    outline:auto;
                


                }
                footer{
                    background-color:darkgreen;
                    color:white;
                    font-size:38px;
                    text-align:center;
                    padding:0px;
                    margin:0px;
                }
                .up{
                    margin-left:330px;
                }
        
            
        </style>
    </head>
    <body>
        <header>
        <h>VUNJABEI SHOP ONLINE UPLOAD PRODUCTS</h><br><br>
         <button class="hm"><a href="home.php">home</a></button>
         <button class="up"><a  href="uploadedimage.php">view uploads</a></button>
         <button class="ci"> <a href="Customersinfo.php">Customers information</a></button>
         

            </header><br>

       <form action="upload.php" method="POST" enctype="multipart/form-data">
       <img src="SHOP2.png">
       <h1><b>SELL YOUR PODUCTS BY CLICKING UPLOAD</b></h1>
    <p><b> choose an image to upload</b></p>
    <input type="file" name="image" placeholder="upload image here" accept="image/*"><br><br>

     <p><b>image description</b></p>
    <input type="textarea" name="description" rows="4" cols="50"><br><br>
      
    <input type="submit" name="submit" value="upload">
      
       
       </form><br>
       <footer>SHOPPING WITH US IS PRESSURE!!! </footer>
    </body>
</html>