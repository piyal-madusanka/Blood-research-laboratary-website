<?php
session_start();
include_once'includes/connection.php';
if (isset($_POST['login_btn']))
{
$email_login=$_POST['email'];
$password_login=$_POST['password'];
$query="SELECT * FROM admin_register WHERE email='$email_login' AND password='$password_login '";
$query_run=mysqli_query($conn,$query);
if(mysqli_num_rows($query_run) )
{
$query2 = "SELECT * FROM admin_register ";
$query_run2 = mysqli_query($conn,$query);
if(mysqli_num_rows($query_run2 )>0){
while ($row=mysqli_fetch_assoc($query_run ))
{
$_SESSION['username']=$row['username'];
header('Location:index.php');
}
}
}else
{
$_SESSION['status']="Email/password is invalid";
echo "<script>
alert('invalid user name and password');
window.location.href='login.php';
</script>";
// header('Location:login.php');
}
}

if (isset($_POST['registerbtn'])) {


$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];
if($password == $confirmpassword){
$query="INSERT INTO admin_register(username,email,password) VALUES ('$username','$email','$password')";
$query_run=mysqli_query($conn,$query);

if($query_run){
//echo "saved";
$_SESSION['success']="admin profile added";
echo "<script>
alert('admin profile added');
window.location.href='register.php';
</script>";
//header('location:register.php');
}else {
// echo "not saved";
$_SESSION['status']="admin profile not added";
echo "<script>
alert('admin profile not added');
window.location.href='register.php';
</script>";
//header('location:register.php');

}
}else{
$_SESSION['status']="password and confirm password does not match";
echo "<script>
alert('password and confirm password does not match');
window.location.href='register.php';
</script>";
//header('location:register.php');
}
}
if (isset($_POST['updatebtn']))
{
$id=$_POST['edit_id'];
$username=$_POST['edit_username'];
$email=$_POST['edit_email'];
$password=$_POST['edit_password'];

$query="UPDATE admin_register SET username='$username',email='$email',password='$password' WHERE id='$id'";
$query_run=mysqli_query($conn,$query);
if($query_run)
{
$_SESSION['success']="Admin profile data is updated";
echo "<script>
alert('Admin profile data is updated');
window.location.href='register.php';
</script>";
//header('Location:register.php');
}else
{
$_SESSION['status']="Your data is not updated";

echo "<script>
alert('Your data is not updated');
window.location.href='register.php';
</script>";
//header('Location:register.php');
}

}
if (isset($_POST['deletbtn']))
{
$id=$_POST['delet_id'];
$query="DELETE FROM admin_register WHERE id='$id'";
$query_run=mysqli_query($conn,$query);
if($query_run)
{
$_SESSION['success']="Your data is Deleted";
header('Location:register.php');
}else
{
$_SESSION['status']="Your data is not Deleted";
header('Location:register.php');
}
}
if (isset($_POST['frontpost_deletbtn']))
{
$id=$_POST['delet_id'];
$query="DELETE FROM user WHERE id='$id'";
$query_run=mysqli_query($conn,$query);
if($query_run)
{
$_SESSION['success']="Your data is Deleted";
header('Location:postupload.php');
}else
{
$_SESSION['status']="Your data is not Deleted";
header('Location:postupload.php');
}
}
if (isset($_POST['topbatsmenspost_deletbtn']))
{
$id=$_POST['delet_id'];
$query="DELETE FROM cryo_presev_user WHERE id='$id'";
$query_run=mysqli_query($conn,$query);
if($query_run)
{
$_SESSION['success']="Your data is Deleted";
header('Location:topbatmensupload.php');
}else
{
$_SESSION['status']="Your data is not Deleted";
header('Location:topbatmensupload.php');
}
}
if (isset($_POST['medihistory_deletbtn']))
{
$id=$_POST['delet_id'];
$query="DELETE FROM cryo_medi_history WHERE id='$id'";
$query_run=mysqli_query($conn,$query);
if($query_run)
{
$_SESSION['success']="Your data is Deleted";
header('Location:showusermedihistory.php');
}else
{
$_SESSION['status']="Your data is not Deleted";
header('Location:showusermedihistory.php');
}
}
if (isset($_POST['statusregisterbtn'])) {

$username=$_POST['username'];
$id=$_POST['id'];
$container=$_POST['container'];
$remaining=$_POST['remaining'];
$tecnician=$_POST['tecnician'];
$date=$_POST['date'];
$recent=$_POST['recent'];

$query="INSERT INTO sample_status( id,username,container,remaining,tecnician,sample_date,recently) VALUES ('$id','$username',' $container','$remaining','$tecnician','$date','$recent')";
$query_run=mysqli_query($conn,$query);

if($query_run){
//echo "saved";
$_SESSION['success']="sample status added";
header('location:addsamplestatus.php');

}else {
// echo "not saved";
$_SESSION['status']="sample status not added";
header('location:addsamplestatus.php');

}
}
if (isset($_POST['statusupdatebtn']))
{
$id=$_POST['edit_id'];
$remaining=$_POST['edit_remaining'];
$container=$_POST['edit_container'];
$tecnician=$_POST['edit_tecnician'];
$date=$_POST['edit_date'];
$recently=$_POST['edit_recently'];



$query="UPDATE sample_status SET   container='$container',remaining='$remaining',tecnician='$tecnician', sample_date='$date',  recently='$recently' WHERE id='$id'";
$query_run=mysqli_query($conn,$query);
if($query_run)
{
$_SESSION['success']="Your data is updated";
header('Location:addsamplestatus.php');
}else
{
$_SESSION['status']="Your data is not updated";
header('Location:addsamplestatus.php');
}

}



?>