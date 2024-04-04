<?php

$username= $_POST["username"];
$password= $_POST["password"];

if(!empty($username)||!empty($password)) {
    // Database configuration
$host = 'localhost'; // This is often 'localhost' for many setups.
$dbname = 'WeByte'; // Your actual database name.

$username = 'root'; // Your MySQL username.
$password = ''; // Your MySQL password.
$conn=new mysqli ($host,$dbname,$username,$password);
if(mysqli_connect_error()){
    die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());

}
else{
    $SELECT="SELECT username From users Where username=? Limit 1";
    $INSERT = "INSERT Into users (username, password) values(?,?)";
    $stmt = $conn -> prepare ($SELECT);
    $stmt->bind_param ("s",$username);
    $stmt->execute();
    $stmt->bind_result($username);
    $stmt->store_result();
    $rnum = $stmt->num_rows;

    if($rbum==0){
        $stmt->close();

        $stmt= $conn->prepare($INSERT);
        $stmt->bind_param("ss",$username,$password);
        $stmt-> execute();
        echo "New record inserted successfully";
    } else {
        echo "Someone already regesterd using this username";
    }
    $stmt-> close();
    $conn->close();
}
}
else {
    echo "all fields are required";
    die();
};
?>
