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
    <h2 class ="text-center mb-4">Database Content</h2>
    

    <?php
    //database configuration
    require('dbconnect.php');
    
    $tbname = "categories";
    //Query Fetch data
    $sql = "SELECT `CategoryId`, `CategoryName`, `Description` FROM $tbname"; // echo $sql;
    $result = $conn->query($sql);

    if($result && $result->num_rows > 0) {
        echo '<table class = "table table-striped">';
        echo '<thead class ="table-dark">';
        echo '<tr></tr>';
        echo '<th>ID</th>';
        echo '<th>Name</th>';
        echo '<th>Description</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

    
    //output of the fetchwd data
    while ($row = $result->fetch_array() ){
        echo '<tr>';
        echo '<td>' . $row[0] . '</td>';
        echo '<td>' . $row['CategoryName'] . '</td>';
        echo '<td>' . $row['Description'] . '</td>';
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
    
    function createrecord ($)
</body>
</html>