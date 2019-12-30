<?php
$servername="localhost";
$username="root";
$password="renu";
$database="phpdb";
 
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
    echo("Connection failed:".mysqli_connect_error());
}
else
echo"connection successful";

// $sql="create table sample(name varchar(20),id int primary key,marks int)";
// if(mysqli_query($conn,$sql))
// {
//     echo "Table MyGuests created successfully";
// } else {
//     echo "Error creating table: " . mysqli_error($conn);
// }

//insert data in table
//$sql="insert into sample values('renu',12,123);";
// $sql ="insert into sample values('abc',15,89);";
// $sql .="insert into sample values('pqr',23,78);";
// $sql .="insert into sample values('xyz',78,90);";

// if (mysqli_multi_query($conn, $sql)) 
// {
//     echo "inserted";
// }
// echo"not inserted";

$sql="select name,id,marks from sample";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result))
    {
        echo "  name:".$row["name"]. "   id".$row["id"]. "   marks".$row["marks"]."<br>";
    }
}
mysqli_close($conn);  


?>