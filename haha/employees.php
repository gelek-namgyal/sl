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
    <h2 class ="text-center mb-4">Employees Content</h2>
    

    <?php
     function displayrecord(){
    //database configuration
    require('dbconnect.php');
    
    $tbname = "employees";
    //Query Fetch data
    $sql = "SELECT `EmployeeId`, `LastName`, `FirstName`, `BirthDate`, `Photo`, `Notes` FROM $tbname"; //echo $sql;
    $result = $conn->query($sql);

    if($result && $result->num_rows > 0) {
        echo '<table class = "table table-striped">';
        echo '<thead class ="table-dark">';
        echo '<tr></tr>';
        echo '<th>EmployeeId</th>';
        echo '<th>LastName</th>';
        echo '<th>FirstName</th>';
        echo '<th>BirthDate</th>';
        echo '<th>Photo</th>';
        echo '<th>Notes</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

    
    //output of the fetchwd data
    while ($row = $result->fetch_array() ){
        echo '<tr>';
        echo '<td>' . $row['EmployeeId'] . '</td>';
        echo '<td>' . $row['LastName'] . '</td>';
        echo '<td>' . $row['FirstName'] . '</td>';
        echo '<td>' . $row['BirthDate'] . '</td>';
        echo '<td>' . $row['Photo'] . '</td>';
        echo '<td>' . $row['Notes'] . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</tables>';
}else{
    echo '<div class = "alert alert-warning">No Records Found</div>';
}

    //close the connection
    $conn->close()
}

function createrecord($){

}
    ?>
</body>
</html>