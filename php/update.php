
<?php 
require_once('db.php');
error_reporting(0);
if($_SERVER['REQUEST_METHOD'] == 'POST')
// if($_POST['submit'])
{
    $id = $_POST['id'];
   $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $job = $_POST['job'];
    $city = $_POST['city'];
    $qualification = $_POST['qualification'];
    $employment = $_POST['employment'];
    $experience = $_POST['experience'];
    $adhar = $_POST['adhar'];
    $account = $_POST['account'];


   $table = "addmission";


   $query = "update $table set name='$name',email='$email', phone=$phone, gender='$gender', dob='$dob', job='$job',city='$city',
   qualification='$qualification',employment='$employment',experience='$experience',adhar=$adhar, account='$account' where id=$id";

   $data = mysqli_query($conn, $query);

   header("Location: application_table.php");
   exit();
}

?>
