<?php
include'includes/autoload.inc.php';
include_once'../includes/connection.php';
session_start();
if(isset($_POST['registerbtn'])){
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$password=$_POST['password'];
$password2=$_POST['password2'];
$testobj=new test();
$testobj->addusers($first_name,$last_name,$email,$password,$password2);
}
if(isset($_POST['loginbutton'])){
$name=$_POST['name_reg'];
$pass=$_POST['pass_reg'];
$testobj1=new test();
$testobj1->loginuser($name,$pass);
}
if(isset($_POST['Cryopresevbutton'])){
$first_name=$_POST['first'];
$last_name=$_POST['last'];
$email=$_POST['email'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$status=$_POST['status'];
$allergies=$_POST['allergies'];
$blood=$_POST['blood'];
$weight=$_POST['weight'];
$destination=$_SESSION['destination'];
$time=$_SESSION['time'];
$date=$_SESSION['date'];
if(!empty($phone)) // phone number is not empty
{
if(preg_match('/^\d{10}$/',$phone)) // phone number is valid
{
$phone = '0' . $phone;
$query="INSERT INTO cryo_presev_user(first_name,last_name,email,address,phone,status,alergies,blood_group,weight,destination,time,date) VALUES ('$first_name','$last_name','$email','$address','$phone','$status','$allergies','$blood','$weight','$destination','$time','$date')";
$query_run=mysqli_query($conn,$query);
if($query_run){
$space=" ";
$_SESSION["invoice_name"]=$first_name.$space.$last_name;
header("location:new/medi-history.php")  ;
}else {
$_SESSION["not_working"]="something is is wrong please check again and";
header("location:new/cryo-register.php");
}
}
else // phone number is not valid
{

echo "<script>
alert('your phone number is not valid');
window.location.href='new/cryo-register.php';
</script>";
}
}
else // phone number is empty
{
echo "<script>
alert('your phone number is empty');
window.location.href='new/cryo-register.php';
</script>";
}
}
if(isset($_POST['medi_history_button'])){
$full_name= $_SESSION["invoice_name"];
$gender=$_POST['gender'];
$c_condition=$_POST['c_condition'];
$c_symptoms=$_POST['c_symptoms'];
$c_medication=$_POST['c_medication'];
$c_allergies=$_POST['c_allergies'];
$c_tobbaco=$_POST['c_tobbaco'];
$c_drugs=$_POST['c_drugs'];
$c_alcohol=$_POST['c_alcohol'];
$query="INSERT INTO cryo_medi_history(name,gender,c_condition,c_symptoms,c_medication,c_allergies,  c_tobbaco,c_alcohol,c_drugs) VALUES ('$full_name','$gender','$c_condition','$c_symptoms','$c_medication','$c_allergies','$c_tobbaco','$c_alcohol','$c_drugs')";
$query_run=mysqli_query($conn,$query);
if($query_run){
header("location:invoice/invoice.php")  ;
}else {
$_SESSION["not_working"]="something is is wrong please check again and";
header("location:new/medi-history.php");
}
}
if(isset($_POST['mobileregister'])){
$test=$_POST['test'];
if($test=="CA 125"){
$price="1500";
}elseif($test=="Blood Picture"){
$price="1000";
} elseif($test=="Creatinine"){
$price="800";
} else if($test=="ANA/ANF"){
$price="700";
} elseif($test=="APTT/PTTK"){
$price="900";
}elseif ($test=="Ferritin") {
$price="900";
}elseif ($test=="EGFR(Estimated GFR)") {
$price=="750";
}elseif ($test=="Cloride") {
$price=="650";
}else{
$price="500";
}
$full_name=$_POST['full_name'];
$email=$_POST['email'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$destination=$_SESSION['destinationM'];
$time=$_SESSION['timeM'];
$date=$_SESSION['dateM'];


if(!empty($phone)) // phone number is not empty
{
    if(preg_match('/^\d{10}$/',$phone)) // phone number is valid
    {
      $phone = '0' . $phone;

     $query="INSERT INTO mobile_test_user(name,email,address,phone,test,price,destination,time,date) VALUES ('$full_name','$email','$address','$phone','$test','$price','$destination','$time','$date')";
$query_run=mysqli_query($conn,$query);
if($query_run){
$_SESSION["invoice_name2"]=$full_name;
$_SESSION["test"]=$test;
header("location:invoice/invoice2.php")  ;
}else {
echo "not working";
$_SESSION["not_working"]="something is is wrong please check again and";
header("location:new/register.php");
}
    }
    else // phone number is not valid
    {
      echo "<script>
alert('your phone number is not valid');
window.location.href='new/register.php';
</script>";
    }
}
else // phone number is empty
{
       echo "<script>
alert('your phone number is empty');
window.location.href='new/register.php';
</script>";
}




}
?>