<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        * {
            margin: 0;
            padding: 0;
        }
        .view {
            text-align: center;
            color: blue;
            margin: 20px 0;
        }
        table thead th {
            color: blue !important;
            padding: 20px;
            text-align: center;
            font-size: 18px;
        }
        table {
            margin: 20px auto;
            width: 90%;
            border-collapse: collapse;
        }
        table td {
            color: orange !important;
            padding: 10px;
            text-align: center;
        }
        .ram{
            color:blue!important;
            font-size:15px;
            font-weight:800;
        }
.back{
    background-color:blue;
    width:100px;
    height:30px;
    margin-top:-60px;
    float:right;
    border-radius:20px;
}
.status{
    color:green !important;
    font-size:15px;
            font-weight:800;
}
    </style>
<body>
<section>
       
       <div>
           <h1 class="view">PATIENT BOOKING APPOINTMENT VIEW</h1>

       </div>
       
      
      
       
       <table class="table table-bordered">
           <thead>
               <tr>
                   <th>ID</th>
                   <th>Name</th>
                    <th>PASSWORD</th>
                   <th>PHONE</th>
                   <th>EMAIL</th>
                     
               </tr>
           </thead>
           <tbody>
                <?php
               $connect = mysqli_connect("localhost", "root", "", "student");
                error_reporting(0);

                $sql = "SELECT * FROM details";
                $result = $connect->query($sql);

                if (!$result) {
                    die("Invalid query: " . $connect->error);
                }

                while ($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                         <td>{$row['password']}</td>
                        <td>{$row['phone']}</td>
                        <td>{$row['email']}</td>
                        <td><a href='edit.php?id= $row[id]'><button class='upp' >edit</button></a>
        <a href='delete.php?id= $row[id]'><button class='del' >delete</button></a></td>
                    </tr>";
                }
                ?>
    
</body>
</html>