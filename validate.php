
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
 $servername="localhost";
 $username="root";
 $password="renu";
 $database="mydb";
 $conn=mysqli_connect($servername,$username,$password,$database);
 if(!$conn)
 {
     echo "Not connected";
 }
 echo "sucessfully connected";
 $email=$_POST['email'];
 $pass=$_POST['password'];
//$sql="insert into login ('renu','123')";
 //$sql="insert into login (username,password) values('$email','$pass')";
 //if(mysqli_query($conn,$sql))
 //echo"data inserted sucessfully";
 $sqlquery="select username,password from login";
 $result=mysqli_query($conn,$sqlquery);
$flag=0;
 if(mysqli_num_rows($result)>0)
 while($row=mysqli_fetch_assoc($result))
 {
     if($row['username']==$email and $row['password']==$pass)
    {
        echo"login sucessfully";
        $flag=1;
        break;
    }
     
 }
 if($flag==0)
 echo"login failed";
 
?>
</body>
</html>