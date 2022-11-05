<?php
$option = filter_input(INPUT_POST, 'option');
$username = filter_input(INPUT_POST, 'username');
$feedback = filter_input(INPUT_POST, 'feedback');
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "data1";
$conn = mysqli_connect ($host, $dbusername, $dbpassword, $dbname);
$sql = "INSERT INTO feedbacks (option , username , feedback )
values ('$option','$username', '$feedback')";
if ($conn->query($sql))
{
echo "New record is inserted sucessfully";
}
$conn->close();
?>