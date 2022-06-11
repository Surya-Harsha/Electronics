<?php
$host='localhost';
$username='root';
$password='';
$db='electronics';
$con=new mysqli($host, $username, $password, $db);
if(!$con)
{
    die ("Could not connect".mysqli.error());
}
$username=$_POST['username'];
$password=$_POST['password'];
$query=$con->prepare("SELECT pwd from creds WHERE user=?");
$query->bind_param('s',$username);
$query->execute();
$result=$query->get_result();
$r=$result->fetch_assoc();
if($username=='Admin01')
{
    echo "Cannot login!!! : Please check your credentials";
}
else{
if($r['pwd'] == $password)
{
echo "Welcome";
}
else
{
    echo "Wrong Credentials!!! ---- Please check again";
}
}
?>