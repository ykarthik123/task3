<!DOCTYPE html>
<html>
<body>

<title>
    Displaying123 data
</title>
<style>
    table{
        margin-left: 100px;
        border-collapse: collapse;
        width: 1000px;
        color: black;
        font-size: 25px;
        text-align: left;
    }
    th{
        background-color: yellow;
        color: red;
    }
    tr1{
        font-size: 30px;
        margin-left:500px;
    }
    </style>


<div class = "table1">
<table border = 2 >
<tr1>
    Back-End Data
</tr1>
<tr>
<th>name</th>
<th>password</th>
<th>email</th>
</tr>
</br>
</div>
<?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "test";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
if ($conn->connect_error) {
    die("Could not connect to the database." .$conn->connect_error);
}

$sql = "SELECT * from regist";
$result = $conn->query($sql);
if($result-> num_rows > 0)
{
    while($row = $result->fetch_assoc()) 
    {
         echo  
         "<tr>
         <td >".$row["name"]."</td> 
         <td>".$row["password"]."</td>        
         <td>".$row["email"]."</td>    <br>
         </tr> " ;
    }
}
else
{
    echo "no results found";
}
$conn -> close()
?>

</tr>
</div>



</table>
</body>
</html>
<style>
    .table1{
        margin: left 500px;
    }
</style>
