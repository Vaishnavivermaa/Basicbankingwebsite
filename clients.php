<?php
include 'connection.php';
$sql="SELECT * FROM clients";
$result=mysqli_query($conn,$sql);

?>
<nav class="navbar navbar-expand-sm bg-secondary navbar-dark justify-content-between">
      <a class="navbar-brand" href="#"><i class="fa fa-university fa-lg"></i>ABCD BANK</a>
      <ul class="navbar-nav navbar-right ">

        <li class="nav-item active">
          <a class="nav-link" href="index.php">HOME</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="viewusers.php">TRANSFER AMOUNT</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="history.php">TRANSACTION HISTORY</a>
        </li>
      </ul>
    </nav>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
.content-table{
    border-collapse:collapse;
    margin:30px 10px;
    font-size: 0.9em;
    min-width: 450px;
    display: flex;
    align-items:center;
    justify-content:center;
    /* padding:3px 30px; */
    /* border-radius:5px 5px 0 0;
    overflow:hidden;
    box-shadow:0 0 20px rgba(0,0,0,0.15); */
}
.content-table tr{
    border-radius:8px 8px 0 0;
    overflow:hidden;
    box-shadow:0 0 20px rgba(0,0,0,0.15);

}
.content-table tr th{
    background-color:#009879;
    color:#ffffff;
    /* text-align:left; */
    font-weight:bold;
    padding:3px 30px;
    /* text-align:center; */
    /* border-radius:5px 5px 0 0;
    overflow:hidden;
    box-shadow:0 0 20px rgba(0,0,0,0.15); */


}
.content-table th,
.content-table td{
    padding: 12px 15px;
}
.content-table tbody tr{
    border-bottom:1px solid #dddddd;
}
.content-table tbody tr:nth-of-type(even){
    background-color:#f3f3f3;


}
.content-table tbody tr:last-of-type{
    border-bottom:2px solid #009879;

}
</style>
<body>
<!-- <table class="content-table"> -->
<!-- <table width="600" border="1" cellpadding="1" cellspacing="1"> -->
<table class="content-table">
<tr>
<th>NAME </th>
<th>PHONE NUMBER</th>
<th>ACCOUNT TYPE </th>
<th>EMAIL ID</th>
<th>CITIZENSHIP </th>
</tr>
<?php 
while($row=mysqli_fetch_array($result)){
    echo "<tr>";

    echo "<td>".$row['NAME']."</td>";
    echo "<td>" .$row['PHONE NUMBER']."</td>";
    echo "<td>" .$row['ACCOUNT TYPE']."</td>";
    echo "<td>" .$row['EMAIL ID']."</td>";
    echo "<td>" .$row['CITIZENSHIP']."</td>";
    
    
    echo"</tr>";
}    
 ?>               
                    
            
        
</body>
</html>