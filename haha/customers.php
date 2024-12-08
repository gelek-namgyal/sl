<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Contenet Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="Container mt-5"></div>
    <h2 class ="text-center mb-4">Customers Content</h2>
    

    <?php
    //database configuration
    require('dbconnect.php');
    
    $tbname = "customers";
    //Query Fetch data
    $sql = "SELECT `CustomerId`, `CustomerName`, `ContactName`, `Address`, `City`, `PostalCode`, `Country` FROM $tbname"; //echo $sql;
    $result = $conn->query($sql);

    if($result && $result->num_rows > 0) {
        echo '<table class = "table table-striped">';
        echo '<thead class ="table-dark">';
        echo '<tr></tr>';
        echo '<th>CustomerId</th>';
        echo '<th>CustomerName</th>';
        echo '<th>ContactName</th>';
        echo '<th>Address</th>';
        echo '<th>City</th>';
        echo '<th>PostalCOde</th>';
        echo '<th>Country</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

    
    //output of the fetchwd data
    while ($row = $result->fetch_array() ){
        echo '<tr>';
        echo '<td>' . $row['CustomerId'] . '</td>';
        echo '<td>' . $row['CustomerName'] . '</td>';
        echo '<td>' . $row['ContactName'] . '</td>';
        echo '<td>' . $row['Address'] . '</td>';
        echo '<td>' . $row['City'] . '</td>';
        echo '<td>' . $row['PostalCode'] . '</td>';
        echo '<td>' . $row['Country'] . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</tables>';
}else{
    echo '<div class = "alert alert-warning">No Records Found</div>';
}

    //close the connection
    $conn->close()
    ?>
</body>
</html>