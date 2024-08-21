








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking</title>
    
<link rel="shortcut icon" type="image/x-icon" href="fevi.png">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    *{
    margin: 0;
    padding: 0;
   
}
.view{
    text-align: center;
    color: blue;
}
table th{
    
    color: green;
    padding: 20px;
    align-items: center;
    font-size: 18px;
}
table{
    margin-left: 20px;
}
table td{
    
    color:orange;
    padding: 10px;
}
.upp{
    background: green;
    width: 50px;
    color:white;
}
.del{
    background-color: red;
    color: white;
}
.back{
    background-color:blue;
    width:100px;
    height:30px;
    margin-top:-30px;
    float:right;
    border-radius:20px;
}
</style>

  <section>
    <div> <h1 class="view">PATIENT BOOKING APPOINMENT VIEW</h1></div>
    
    <table class="table-bordered">
    <tr >
        <th>id</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>PASSWORD</th>
      
        
    </tr>
   <tbody>
    <?php include "conn.php";
    $sql="select * from users";
    $result =$conn->query($sql);
    if(!$result){
        die("invalid query");
    }
        while($row=$result->fetch_assoc())
    {
echo "
        <tr>
        <th> $row[id]</th>
        <td> $row[name] </td>
        <td>  $row[email]</td>
        <td>  $row[password]</td>
        <td><a href='deletee.php?id= $row[id]'><button class='del' >delete</button></a></td>
        
       
        

</tr>
";
        

    }



?>
  
</table>

</section>
  
    
    
    
</body>
</html>