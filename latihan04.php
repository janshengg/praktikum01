<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial scale=1.0">
        <link rel="stylesheet" href="css/latihan01a.css">
        <title>Query ke Database</title>
    </head>
    <body>
        <h1>Klasemen Sementara (HTML + PHP + MySQL)</h1>
        <table class="styled-table">
        <thead>
            <tr>
                <th>Rank</th>
                <th>Name</th>
                <th>Points</th>
                <th>Team</th>
            </tr>
        </thead>
        <tbody>
       <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "praktikum01";


        $conn = new mysqli($servername, $username, $password, $dbname);


        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT rank, name, points, team
        FROM klasemen";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["rank"] . "</td><td>" . $row["name"].
                "</td><td>" . $row["points"]. "</td><td>" . $row['team'] . "<br>";
            }
        } else {
            echo "0 results";
        }
        
        $conn->close();
?>
</tbody>
    </body>
</html>