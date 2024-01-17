<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,500,1,200" />
    
  <style>

        /* Contact Section */

        body{

background: url("contact4.jpg");
background-repeat: no-repeat;
background-size: 1892px 1165px;

}
  
#contact{
    position: relative;
    margin-bottom: 120px
}
#contact::before{
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: -1;
    opacity: 0.7;
   
}
#contact-box{
    display: flex;
    justify-content: center;
    align-items: center;
    padding-bottom: 432px;
}
#contact-box input, 
#contact-box textarea{
    width: 100%;
    padding: 0.5rem;
    border-radius: 9px;
    font-size: 1.1rem;
} 

#contact-box form{
    width: 40%;
}

#contact-box label{
   font-size: 1.3rem;
   font-family: 'Bree Serif', serif;
   
}


footer{
    background: black;
    color: white;
    padding: 9px 20px;
    margin-top: -113px;
}
.center{

          text-align: center;

}

#services{

    padding: 20px;
     margin: 20px;
    font-size: 20px;


}
button{

    display: block;
    width: 95px;
    margin: auto;
    height: 45px;
    border: 2px solid black;
    border-radius: 32px;
    font-size: initial;
    font-family: auto;

}

button:hover{

    background-color: black;
    color: rgb(216, 14, 14);
    cursor: pointer;
}

#contact{

   font-size: 25px;
   font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
   color: black;
   
  
  
  
}
p{
    background-color: beige;
    width: fit-content;
    margin-top: -138px;
}


  </style>


</head>
<body>
    
    <section id="contact">
        <h1 class="h-primary center">Contact Us</h1>
        <div id="contact-box">
            <form action="con2.php" method="post">
                <div class="form-group">
                    <label for="name">name: </label>
                    <input type="text" name="name" id="name" placeholder="Enter your name"><br><br>
                </div>
                <div class="form-group">
                    <label for="email">email: </label>
                    <input type="email" name="email" id="email" placeholder="Enter your email"><br><br>
                </div>
                <div class="form-group">
                    <label for="phone">phone: </label>
                    <input type="phone" name="phone" id="phone" placeholder="Enter your phone"><br> <br>
                </div>
              <!--<div class="form-group">
                    <label for="message" style="font-size: 34px;">choose_services: </label>
                    <select name="services" id="services">
                        <option value="Food Catering">Food Catering</option>
                        <option value="Bulk Ordering">Bulk Ordering</option>
                        <option value="Food ordering">Food ordering</option>
                    </select><br>-->
                    <!--<input type="submit" name='submit' value="submit">-->
                    <button id="btn" name="submit">submit</button>

                </div>
            </form>
        </div>
    </section>

       <div id="contact">
        
            <p><span class="material-symbols-outlined">
                call
                </span>Contact-us:8793642627 <br>
                <span class="material-symbols-outlined">
                    mail
                    </span> E-mail:veenahadimani123@gmail.com</p>
       </div>
    <footer>
        <div class="center">
            Copyright &copy; www.Traveller.com. All rights reserved!
            <!--&commat;-->
        </div>
    </footer>

    <?php
    $servername="127.0.0.1";
    $username='root';
    $password='';
    $database='travel';
  
    $conn =mysqli_connect($servername,$username,$password,$database);
  
    if(!$conn)
    {
          die("myql failed".mysqli_connect_error());
  
    }
    echo "sucessfully";
  
    if(isset($_POST['submit']))
    {
      
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $query ="INSERT INTO info(name,email,phone) VALUES ('$name','$email','$phone')";
            mysqli_query($conn,$query);
          
      }
  
      echo "inserted";
  ?>



<script>
    document.getElementById("btn").onclick=function(){
    
         username=document.getElementById("name").value
        window.alert("Thanks for filling the form"+" " + username)
        window.alert("We will contact you soon!")

    

    }
</script>


</body>
</html>