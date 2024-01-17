<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>www.traveller.com</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,500,0,200" />

    <link rel="stylesheet" href="nav.css">

</head>

<body>
    <nav id="div">
        <img src="travels.jpg" alt="not found">
        <p>TRAVELLER</p>
        <ul>
            <span class="material-symbols-outlined">
                house
                </span>
            <li class="li"> <a href="#">Home</a></li>
            <span class="material-symbols-outlined">
                travel_explore
                </span>
            <li class="li"><a href="visit.php">Explore</a></li>
            <span class="material-symbols-outlined">
                contacts
                </span>
            
            <li class="li"><a href="con2.php">Contact</a></li>
            <span class="material-symbols-outlined">
                info
                </span>
            <li class="li"><a href="about.php">About</a></li>

        </ul>

    </nav>


    <div id="div1">
       
            <h2 id="h">Welcome To Travel World</h2>
            <h3>we travel not to escape life <br> but life not to escape us</h3>
        
    </div>
   
<script>

    function fun()
    {

    let h2=document.getElementById('h');

    h2.style.color='rgb(12, 60, 102)'
    h2.style.backgroundColor='aliceblue'
    h2.style.fontFamily='cursive'
    h2.style.textShadow='-3px 3px #62d7d7'
        //console.log("hello ")
    }

   setTimeout(fun,4000);

   
   
</script>
   
</body>

</html>