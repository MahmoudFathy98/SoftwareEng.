<h1 style='margin-left:660px'>تعديل استمارة طلب تطوع</h1> 
<?php
$id = $_GET['id'];
    $con = new mysqli("localhost", "root", "","redcrescent");
$sql="SELECT * FROM user where ID = '".$id."'";
    
$result = mysqli_query($con,$sql);	
    while($row = mysqli_fetch_array($result))
    {
       $username = $row['UserName'];
        $address = $row['Address'];
        $mobile = $row['Mobile'];
    }
if(isset($_POST['edit']))
{
    $user = $_POST['username'];
    $addr = $_POST['address'];
    $mob = $_POST['mobile'];
    $query = "UPDATE user SET UserName='$user', Address='$addr' , Mobile='$mob'  WHERE ID='$id'";
$result = mysqli_query($con, $query);
    header("Location:Egyptionsrequest.php");
}
?>

<form id="form" action="" method="post">
       
        <label >اسم المستخدم</label>
         <input type="text" id="kidschedule" name="username" value="<?php echo $username; ?>">
    <br>
                 
        <label >العنوان</label>
         <input type="text"  name="address" value="<?php echo $address; ?>">
    <br>
    <label >رقم الهاتف</label>
         <input type="text"  name="mobile" value="<?php echo $mobile; ?>">
    <br>
 
                <hr>
                 <input type="submit" name="edit" value="Edit">
                <br>
        </form>