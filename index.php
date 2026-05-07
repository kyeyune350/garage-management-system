<?php include 'db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Garage Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Garage Management System</h1>

<div class="container">

    <h2>Clients</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
        </tr>

        <?php
        $clients = mysqli_query($conn, "SELECT * FROM clients");

        while($row = mysqli_fetch_assoc($clients)) {
            echo "<tr>
                    <td>{$row['client_id']}</td>
                    <td>{$row['client_name']}</td>
                    <td>{$row['phone']}</td>
                    <td>{$row['email']}</td>
                  </tr>";
        }
        ?>
    </table>

    <h2>Cars</h2>

    <table>
        <tr>
            <th>Plate Number</th>
            <th>Model</th>
            <th>Brand</th>
            <th>Year</th>
        </tr>

        <?php
        $cars = mysqli_query($conn, "SELECT * FROM cars");

        while($row = mysqli_fetch_assoc($cars)) {
            echo "<tr>
                    <td>{$row['plate_number']}</td>
                    <td>{$row['model']}</td>
                    <td>{$row['brand']}</td>
                    <td>{$row['manufacture_year']}</td>
                  </tr>";
        }
        ?>
    </table>

</div>

</body>
</html>