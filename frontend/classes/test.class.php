<?php
session_start();
/**
*
*/
class test extends dbh
{



public function addusers($firstname,$lastname,$email,$password,$password2){
if($password==$password2){
$sql="INSERT INTO user(first_name,last_name,email,password) VALUES(?,?,?,?)";
$stmt=$this->connect()->prepare($sql);
$stmt->execute([$firstname,$lastname,$email,$password]);
if ($stmt) {
$_SESSION["user"]=$firstname." ,your account is created";
echo "<script>
alert('your account is created');
window.location.href='log/index.php';
</script>";
// header("location:log/index.php");
}else{
$_SESSION["not_user"]="something is is wrong please check again and";
echo "<script>
alert('something is is wrong please check again and');
window.location.href='log/index2.php';
</script>";
// header("location:log/index2.php");
}
}else{
$_SESSION["password_error"]="please check your passwords again and";
//header("location:log/index2.php");
echo "<script>
alert('your password is didnt match for confirm psssword');
window.location.href='log/index2.php';
</script>";
}
}
public function loginuser($username,$password){
$sql="SELECT * FROM user WHERE first_name = ? AND password = ?";
$stmt=$this->connect()->prepare($sql);
$stmt->execute([$username,$password]);
$count=$stmt->rowCount();
if ($count>0) {
$_SESSION["logged_in"]=$username;
if (isset($_SESSION['invalid1'])) {
header("location:ambulance2.php");
}elseif(isset($_SESSION['invalid2'])){
header("location:ambulance.php");
}elseif(isset($_SESSION['invalid3'])){
header("location:new/online-report.php");
}else {
header("location:profile.php");
}
}else{
$_SESSION["wrong"]="invalid user name and password";
echo "<script>
alert('invalid user name and password');
window.location.href='log/index.php';
</script>";
//header("location:log/index.php");
}
}
public function addCryousers($firstname,$lastname,$email,$address,$phone,$status,$alergies,$blood,$weight,$destination, $time, $date){
$sql="INSERT INTO cryo_presev_user(first_name,last_name,email,address,phone,status,alergies,blood_group,weight,destination,time,date) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt=$this->connect()->prepare($sql);
$stmt->execute([$firstname,$lastname,$email,$address,$phone,$status,$alergies,$blood,$weight,$destination, $time, $date]);
if ($stmt) {
$_SESSION["invoice_name"]=$firstname."".$lastname;
header("location:new/medi-history.php")  ;
}else{
$_SESSION["not_working"]="something is is wrong please check again and";
echo "<script>
alert('invalid user name and password');
window.location.href='new/cryo-register.php';
</script>";
//header("location:new/cryo-register.php");
}
}
public function addCryousersmedihistory($full_name,$phone,$gender,$c_condition,$c_symptoms,$c_medication,$c_allergies,$c_tobbaco,$c_drugs,$c_alcohol){
$sql="INSERT INTO cryo_medi_history(name,phone,gender,c_condition,c_ symptoms,c_medication,c_allergies,c_tobbaco,c_drugs,  c_alcohol) VALUES(?,?,?,?,?,?,?,?,?,?)";
$stmt=$this->connect()->prepare($sql);
$stmt->execute([$full_name,$phone,$gender,$c_condition,$c_symptoms,$c_medication,$c_allergies,$c_tobbaco,$c_drugs,$c_alcohol]);
if ($stmt) {
header("location:invoice/invoice.php")  ;
}else{
$_SESSION["not_working"]="something is is wrong please check again and";
echo "<script>
alert('invalid user name and password');
window.location.href='new/medi-history.php';
</script>";
//header("location:new/medi-history.php");
}
}
}
?>