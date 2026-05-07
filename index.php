<?php
include 'db_connect.php';

$customers = mysqli_query($conn, "SELECT * FROM customers LIMIT 5");
$bookings = mysqli_query($conn, "SELECT * FROM bookings LIMIT 5");
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
        <li>Customers</li>
        <li>Bookings</li>
        <li>Vehicles</li>
        <li>Payments</li>
        <li>Reports</li>
        <li>Mechanics</li>
    </ul>
</div>

<div class="main">

    <div class="topbar">
        <h1>Garage Management System</h1>
        <p>Manager Dashboard</p>
    </div>

    <div class="cards">

        <div class="card">
            <h3>Total Customers</h3>
            <p>
                <?php
                $count = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM customers"));
                echo $count;
                ?>
            </p>
        </div>

        <div class="card">
            <h3>Total Bookings</h3>
            <p>
                <?php
                $count = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM bookings"));
                echo $count;
                ?>
            </p>
        </div>

        <div class="card">
            <h3>Total Vehicles</h3>
            <p>
                <?php
                $count = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM vehicles"));
                echo $count;
                ?>
            </p>
        </div>

    </div>

    <div class="table-section">

        <div class="table-box">
            <h2>Recent Customers</h2>

            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                </tr>

                <?php while($row = mysqli_fetch_assoc($customers)) { ?>

                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                </tr>

                <?php } ?>

            </table>
        </div>

        <div class="table-box">
            <h2>Recent Bookings</h2>

            <table>
                <tr>
                    <th>ID</th>
                    <th>Status</th>
                </tr>

                <?php while($row = mysqli_fetch_assoc($bookings)) { ?>

                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                </tr>

                <?php } ?>

            </table>
        </div>

    </div>

</div>

</body>
</html>
