<?php
$username = filter_input(INPUT_POST, 'username');
$email = filter_input(INPUT_POST, 'email');
$number = filter_input(INPUT_POST, 'number');
$landmark = filter_input (INPUT_POST , 'landmark');
$dish = filter_input(INPUT_POST ,'dish');
$quantity =filter_input(INPUT_POST ,'quantity');
$address = filter_input(INPUT_POST,'address');
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "data1";
$conn = mysqli_connect ($host, $dbusername, $dbpassword, $dbname);
$sql = "INSERT INTO orders (username , email , number ,landmark , dish , quantity , address)
values ('$username','$email', '$number' ,'$landmark', '$dish' , '$quantity' , '$address')";
if ($conn->query($sql))
{
echo "New record is inserted sucessfully";
}
$conn->close();
?>