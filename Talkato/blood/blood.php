<!DOCTYpE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="icon" href="" type="image/jpg"> -->
    <title>Talkato | BloodDonate</title>
    <link rel="stylesheet" href="./style.css">
</head>

<style>
    .home{
        position:fixed;
        top:10px;
        left:10px;
    }
    .home button{
    font-size:20px;
    font-weight:bold;
    border-radius:12px;
    }
</style>

<body>
    <div class="home">
    <button onclick="goBack()">Go back</button>
    </div>
    <header>

        <img class="logo" src="https://www.ircstelangana.org/images/slider/img3.png" alt="imagem de doação" srcset="">
       <br> <h2>Your Donation Matters</h2>
        <p> In Every 2 Second, someone in the country is in need of blood</p>

        <p>In Every year our nation requires about 4 Crore units of blood</p>

        <p>Out of which only a meager 5 Lakh units of blood are available</p>

        <button id="btn">I want to help</button>
    </header>
    <section class="form hide">
        <h2>Enter your details</h2>
        <form action="blood.php" method="post">
            <input type="text" name="name" id="" placeholder="Name please">
            <input type="text" name="phone_no" id="" placeholder="phone number">

            <input type="text" name="email" id="" placeholder="Email">
            <input type="text" name="blood" id="" placeholder="blood group">
          <br>  <input class="sub" type="submit" value="submit">
        </form>
    </section>



    <footer><br><br><br>
        <p class="end">A Drop of water makes ocean. A Unit of Blood SAVES LIFE.</p>

    </footer>
    <script src="./script.js"></script> 
<?php

    $name=filter_input(INPUT_POST,'name');
    $phone_no=filter_input(INPUT_POST,'phone_no');
    $email=filter_input(INPUT_POST,'email');
    $blood=filter_input(INPUT_POST,'blood');
    if(!empty($name)){
    if(!empty($phone_no)){
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="facebook";
    //creating connection
    $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
    // if(!mysqli_connect_error()){
    //     echo "ho gya h";
    // }
    if(mysqli_connect_error()){
        die('Connect Error ('.mysqli_connect_error().')'.mysqli_connect_error());
    }
    else{
        $sql="INSERT INTO store (name,phone_no,email,blood)
        values('$name','$phone_no','$email','$blood')";
        if($conn->query($sql)){
            echo "<script>alert('new record inserted successfully!')</script>";
        }
        else{
            echo "Error: ".$sql."<br>".$conn->error;
        }
        $conn->close();
    }
    }
    else{
        echo "usernmae should not be impty";
        die();
    }
    }

?>
</body>

</html>