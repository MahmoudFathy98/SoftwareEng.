<html>
    <link href='login.css' rel='stylesheet' >
    <style>
    
        body
    {
        margin: 0;
        padding: 0;
        background: url('snowman.jpg');
        background-size: cover;
        color:white;
        font-family: sans-serif;
    } 
    .loginbox{
        width:360px;
        height:380px;
        background:#000;
        color:#fff;
        opacity: .8;
        top:50%;
        left:50%;
        position:absolute;
        transform: translate(-50%,-50%);
        box-sizing:border-box;  
        padding: 30px 30px;
    }
    .school{
        width:100px;
        height:100px;
        border-radius:50%;
        position:absolute;
        top:-50px;
        left: calc(50% - 50px);
    }
    h1{
        font-weight: bold;
    }
    .loginbox input[type="text"], input[type="password"]{
        border:none;
        border-bottom: 1px solid #fff;
        background: transparent;
        height:25px;
        color:white;
        font-size:16px;
    }
    .loginbox input[type="submit"]{
        border:none;
        height:40px;
        color:red;
        font-size:18px;
        border-radius:20px;
    }

    body {
      font-family: 'Open Sans', sans-serif;
    }

    div#layout {
      text-align: center;
    }

    div#container {
      width: 1000px;
      height: 600px;
      margin: auto;
    }

    text.title {
      font-size: 22px;
      font-weight: 600;
    }

    text.label {
      font-size: 14px;
      font-weight: 400;
    }


    </style>
    <div class="loginbox">
    <img src="user.png" class="school"> 
    <h1>Login</h1>

 <form action="" method="post">
        <p>Email:</p>
              <input type="text" name="Email" placeholder="name@***.***"><br>
        <p>Password:</p>
             <input type="password" name="Pass" placeholder="enter you Password"><br><br>
                <input type="submit" value="submit" name="submit" id="addBtn">
            </form>
    </div>
</html>
<?php
session_start();
$con = new mysqli("localhost", "root", "","webapp");

    
   
if(isset($_POST['submit'])){
    $sql = "Select * from user where Email ='".$_POST["Email"]."'
            and Password = '".$_POST["Pass"]."'";
    $result = mysqli_query($con , $sql);
    if($row = mysqli_fetch_array($result))
    {
        $_SESSION["ID"] = $row["typeID"];
        $sql2="Select URL from pages where pageID LIKE (select pageID from links where typeID LIKE '".$_SESSION["ID"]."' )";
            $result2 = mysqli_query($con , $sql2);
if($row = mysqli_fetch_array($result2))
    {
        $url = $row["URL"];
        header("Location:$url");
    }
        
    }

        else {echo "Wrong UserName Or Password!";}
}
?>

