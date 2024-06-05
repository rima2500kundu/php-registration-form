<?php
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Form</title>

<!-- youtube link: https://www.youtube.com/watch?v=eyHJNyACVf8 -->
<!-- inset query mane data database e store hoa jbe -->
<!-- link: https://technosmarter.com/ -->

</head>
<body>
   
<form action="#" method="post">
    Name: <input type="text" name="name" />
    <br />
    <br />

    Gender:
    <input type="radio" name="gen" value="male" />Male
    <input type="radio" name="gen" value="female" />Female
    <br />
    <br />

    DOB: <input type="date" name="dob" />
    <br />
    <br />

    Email: <input type="email" name="email" />
    <br />
    <br />

    Mobile: <input type="tel" name="mobile" />
    <br />
    <br />

    Password: <input type="password" name="password" />
    <br />
    <br />

    <input type="submit" name="submit" value="Sign Up" />
</form>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $gender = $_POST['gen'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
}

$result = mysqli_query($mysqli, "insert into users values('', '$name', '$gender', '$dob', '$email', '$mobile', '$password')");
if($result){
    echo "Registration successfully";
}
else{
    echo "failed";
}

?>

























</body>
</html>