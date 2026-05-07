<?php
include 'db_connect.php';

// COUNT TABLE RECORDS
$bookings = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM Bookings"));
$clients = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM Clients"));
$repairs = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `Repair History`"));
$cars = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM cars"));
$services = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM Service"));
$technicians = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM Technicians"));
$transactions = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM transactions"));

// RECENT BOOKINGS
$recentBookings = mysqli_query($conn,"SELECT * FROM Bookings LIMIT 5");

// RECENT CLIENTS
$recentClients = mysqli_query($conn,"SELECT * FROM Clients LIMIT 5");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Garage Management Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="sidebar">

    <h2>Garage DBMS</h2>

    <ul>
        <li>Dashboard</li>
        <li>Bookings</li>
        <li>Clients</li>
        <li>Cars</li>
        <li>Services</li>
        <li>Technicians</li>
        <li>Transactions</li>
        <li>Repair History</li>
    </ul>

</div>

<div class="main">

    <div class="topbar">
        <h1>Garage Management Dashboard</h1>
        <p>Vehicle Service & Booking System</p>
    </div>

    <div class="cards">

        <div class="card">
            <h3>Bookings</h3>
            <p><?php echo $bookings; ?></p>
        </div>

        <div class="card">
            <h3>Clients</h3>
            <p><?php echo $clients; ?></p>
        </div>

        <div class="card">
            <h3>Cars</h3>
            <p><?php echo $cars; ?></p>
        </div>

        <div class="card">
            <h3>Services</h3>
            <p><?php echo $services; ?></p>
        </div>

        <div class="card">
            <h3>Technicians</h3>
            <p><?php echo $technicians; ?></p>
        </div>

        <div class="card">
            <h3>Transactions</h3>
            <p><?php echo $transactions; ?></p>
        </div>

        <div class="card">
            <h3>Repair History</h3>
            <p><?php echo $repairs; ?></p>
        </div>

    </div>

    <div class="table-section">

        <div class="table-box">

            <h2>Recent Bookings</h2>

            <table>

                <tr>
                    <th>ID</th>
                    <th>Booking</th>
                </tr>

                <?php while($row = mysqli_fetch_assoc($recentBookings)) { ?>

                <tr>
                    <td><?php echo $row[array_key_first($row)]; ?></td>
                    <td><?php echo $row[array_keys($row)[1]]; ?></td>
                </tr>

                <?php } ?>

            </table>

        </div>

        <div class="table-box">

            <h2>Recent Clients</h2>

            <table>

                <tr>
                    <th>ID</th>
                    <th>Client</th>
                </tr>

                <?php while($row = mysqli_fetch_assoc($recentClients)) { ?>

                <tr>
                    <td><?php echo $row[array_key_first($row)]; ?></td>
                    <td><?php echo $row[array_keys($row)[1]]; ?></td>
                </tr>

                <?php } ?>

            </table>

        </div>

    </div>

</div>

</body>
</html>
