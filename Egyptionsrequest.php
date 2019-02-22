<html>
    <link href='login.css' rel='stylesheet' >
    <style>
    
        body
    {
        margin: 0;
        padding: 0;
        background: url('blue.jpg');
        background-size: cover;
        color:white;
        font-family: sans-serif;
    } 
    .loginbox{
        width:460px;
        height:1500px;
        background:#000;
        color:#fff;
        opacity: .8;
        top:160%;
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
        margin-left:15%;
    }
    .loginbox input[type="text"], input[type="number"], input[type="date"], input[type="password"], input[type="checkbox"]{
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
    <img src="helal3.jpg" class="school"> 
    <h1>استمارة طلب تطوع</h1>

 <form action="" method="post">
        <p>الاسم الاول:</p>
              <input type="text" name="fname" placeholder="السم الاول"><br>
        <p>اسم الاب:</p>
             <input type="text" name="secname" placeholder="اسم الاب"><br><br>
        <p>اسم العائلة:</p>
             <input type="text" name="famname" placeholder="اسم العائلة"><br><br> 
        <p>اسم الجد:</p>
             <input type="text" name="grandname" placeholder="اسم الجد"><br><br>
       <p>اسم المستخدم:</p>
             <input type="text" name="username" placeholder="اسم المستخدم"><br><br>
       <p>كلمة السر:</p>
             <input type="password" name="pass" placeholder="كلمة السر"><br><br>
       <p>الجنس:</p>
             <input type="text" name="gender" placeholder="الجنس"><br><br>
       <p>تاريخ الميلاد:</p>
             <input type="date" name="date" placeholder="تاريخ الميلاد"><br><br> 
       <p>رقم البطاقة:</p>
             <input type="text" name="nationalid" placeholder="رقم البطاقة"><br><br> 
       <p>رقم الهاتف المحمول:</p>
             <input type="text" name="mobile" placeholder="رقم الهاتف المحمول"><br><br>   
       <p>البريد الالكتروني:</p>
             <input type="text" name="email" placeholder="البريد الالكتروني"><br><br>
       <p>الجنسية:</p>
             <input type="text" name="nationailty" placeholder="الجنسية"><br><br>
     <p>العنوان:</p>
             <input type="text" name="address" placeholder="العنوان"><br><br>
     <p>المحافظة:</p>
             <input type="text" name="city" placeholder="المحافظة"><br><br>
     <p>افضل طريقة للتواصل:</p>
              الهاتف<input type="radio" name="radio" value="Mobile">
              البريد الاكتروني<input type="radio" name="radio" value="email">
     
               <input type="submit" value="submit" name="submit" id="addBtn">
               <button name="show">اظهر الاستمارات</button>
            </form>
    </div>
</html>

<?php
$con = new mysqli("localhost", "root", "","redcrescent");
if (isset($_POST['submit'])) {
	$fname = $_POST['fname'];
	$secname = $_POST['secname'];
    $famname = $_POST['famname'];
    $gname = $_POST['grandname'];
    $username = $_POST['username'];
    $password = $_POST['pass'];
	$sex = $_POST['gender'];
	$date = $_POST['date'];
	$Nid = $_POST['nationalid'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
    $nation = $_POST['nationailty'];
	$address = $_POST['address'];
    $City = $_POST['city'];
if(isset($_POST['radio']))
{
    $Best = $_POST['radio'];
}
 $sql = "insert into user(FirstName,SecondName,FamilyName,GrandName,UserName,Password,Gender,DateOfBirth,NationalID,Mobile,Email,Nationality,Address,City,BestComWay) values('$fname','$secname', '$famname' ,'$gname','$username', '$password','$sex','$date','$Nid','$mobile','$email', '$nation','$address','$City','$Best')";
	 mysqli_query($con,$sql);
  
}

 if(isset($_POST['show']))
{
    $selectsql= "SELECT ID,FirstName,SecondName,FamilyName,GrandName,UserName,Gender,DateOfBirth,NationalID,Mobile,Email,Nationality,Address,City,BestComWay FROM user";
    $result = mysqli_query($con,$selectsql);
    
    if(mysqli_num_rows($result) > 0)
{
	echo"
    <table>
	<tr bgcolor='#0769B7'>
	<td>الاسم الاول</td>
    <td>اسم الاب</td>
    <td>اسم العائلة</td>
    <td>اسم الجد</td>
    <td>اسم المستخدم</td>
	<td>الجنس</td>
    <td>تاريخ الميلاد</td>
    <td>رقم البطاقة</td>
    <td>رقم الهاتف المحمول</td>
    <td>البريد الالكتروني</td>
    <td>الجنسية</td>
    <td>العنوان</td>
    <td>المحافظة</td>
    <td>افضل طريقة تواصل</td>
    <td>تعديل</td>
    <td>مسح</td>
	</tr>";
	while($row = mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>" . $row['FirstName'] . "</td>";
		echo "<td>". $row['SecondName'] ."</td>";
        echo "<td>". $row['FamilyName'] ."</td>";
        echo "<td>". $row['GrandName'] ."</td>";
        echo "<td>". $row['UserName'] ."</td>";
        echo "<td>". $row['Gender'] ."</td>";
        echo "<td>". $row['DateOfBirth'] ."</td>";
        echo "<td>". $row['NationalID'] ."</td>";
        echo "<td>". $row['Mobile'] ."</td>";
        echo "<td>". $row['Email'] ."</td>";
        echo "<td>". $row['Nationality'] ."</td>";
        echo "<td>". $row['Address'] ."</td>";
        echo "<td>". $row['City'] ."</td>";
        echo "<td>". $row['BestComWay'] ."</td>";
		echo "<td bgcolor='#12C8A7'><a href='editestmara.php?id=".$row['ID']."'>Edit</a></td>";
        echo "<td bgcolor='#12C8A7'><a href='delestmara.php?id=".$row['ID']."'>Delete</a></td>";
      
		
    }
    echo"</table>";
 }
        else echo "<h1 style='margin-left:660px'>ليس هناك استمارات الان!</h1>";

 }
?>

