<?php
include 'db_connect.php';

// COUNT TABLE RECORDS - Using helper function for better error handling
$bookings = getRowCount($conn, 'Bookings');
$clients = getRowCount($conn, 'Clients');
$repairs = getRowCount($conn, 'Repair History');
$cars = getRowCount($conn, 'cars');
$services = getRowCount($conn, 'Service');
$technicians = getRowCount($conn, 'Technicians');
$transactions = getRowCount($conn, 'transactions');

// FETCH RECENT BOOKINGS (with error handling)
$recentBookingsResult = executeQuery($conn, "SELECT * FROM Bookings LIMIT 5");
$recentBookings = ($recentBookingsResult) ? $recentBookingsResult : false;

// FETCH RECENT CLIENTS (with error handling)
$recentClientsResult = executeQuery($conn, "SELECT * FROM Clients LIMIT 5");
$recentClients = ($recentClientsResult) ? $recentClientsResult : false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Garage Management Dashboard - Vehicle Service & Booking System">
    <title>Garage Management Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="sidebar">
    <div class="sidebar-header">
        <h2>🔧 Garage DBMS</h2>
    </div>

    <nav class="sidebar-nav">
        <ul>
            <li><a href="#" class="nav-link active">📊 Dashboard</a></li>
            <li><a href="#" class="nav-link">📅 Bookings</a></li>
            <li><a href="#" class="nav-link">👥 Clients</a></li>
            <li><a href="#" class="nav-link">🚗 Cars</a></li>
            <li><a href="#" class="nav-link">🔧 Services</a></li>
            <li><a href="#" class="nav-link">👨‍🔧 Technicians</a></li>
            <li><a href="#" class="nav-link">💰 Transactions</a></li>
            <li><a href="#" class="nav-link">📋 Repair History</a></li>
        </ul>
    </nav>
</div>

<div class="main">

    <div class="topbar">
        <h1>Garage Management Dashboard</h1>
        <p>Vehicle Service & Booking System</p>
    </div>

    <div class="cards">
        <div class="card">
            <div class="card-icon">📅</div>
            <h3>Bookings</h3>
            <p class="card-number"><?php echo htmlspecialchars($bookings); ?></p>
        </div>

        <div class="card">
            <div class="card-icon">👥</div>
            <h3>Clients</h3>
            <p class="card-number"><?php echo htmlspecialchars($clients); ?></p>
        </div>

        <div class="card">
            <div class="card-icon">🚗</div>
            <h3>Cars</h3>
            <p class="card-number"><?php echo htmlspecialchars($cars); ?></p>
        </div>

        <div class="card">
            <div class="card-icon">🔧</div>
            <h3>Services</h3>
            <p class="card-number"><?php echo htmlspecialchars($services); ?></p>
        </div>

        <div class="card">
            <div class="card-icon">👨‍🔧</div>
            <h3>Technicians</h3>
            <p class="card-number"><?php echo htmlspecialchars($technicians); ?></p>
        </div>

        <div class="card">
            <div class="card-icon">💰</div>
            <h3>Transactions</h3>
            <p class="card-number"><?php echo htmlspecialchars($transactions); ?></p>
        </div>

        <div class="card">
            <div class="card-icon">📋</div>
            <h3>Repair History</h3>
            <p class="card-number"><?php echo htmlspecialchars($repairs); ?></p>
        </div>
    </div>

    <div class="table-section">

        <div class="table-box">
            <h2>📅 Recent Bookings</h2>
            <?php if ($recentBookings && mysqli_num_rows($recentBookings) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Booking Details</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_assoc($recentBookings)): 
                        $keys = array_keys($row);
                        $firstKey = $keys[0] ?? null;
                        $secondKey = $keys[1] ?? null;
                    ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row[$firstKey] ?? 'N/A'); ?></td>
                        <td><?php echo htmlspecialchars($row[$secondKey] ?? 'N/A'); ?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <?php else: ?>
                <p class="no-data">No bookings available.</p>
            <?php endif; ?>
        </div>

        <div class="table-box">
            <h2>👥 Recent Clients</h2>
            <?php if ($recentClients && mysqli_num_rows($recentClients) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Client Details</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_assoc($recentClients)): 
                        $keys = array_keys($row);
                        $firstKey = $keys[0] ?? null;
                        $secondKey = $keys[1] ?? null;
                    ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row[$firstKey] ?? 'N/A'); ?></td>
                        <td><?php echo htmlspecialchars($row[$secondKey] ?? 'N/A'); ?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <?php else: ?>
                <p class="no-data">No clients available.</p>
            <?php endif; ?>
        </div>

    </div>

</div>

</body>
</html>
