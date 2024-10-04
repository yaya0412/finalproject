
<?php
session_start();

// Ensure the user is logged in as an admin
if (!isset($_SESSION['loggedin']) || $_SESSION['user_type'] !== 'admin') {
    header("Location: adminlogin.php"); // Redirect to login if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Senior Medical Operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f4f4;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1 class="text-center">Admin Dashboard</h1>
        <div class="row">
            <!-- Manage Staff Account -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Manage Staff Account</h5>
                        <p class="card-text">Add, update, and remove staff accounts.</p>
                        <a href="manage_staff.php" class="btn btn-primary">Manage Staff</a>
                    </div>
                </div>
            </div>

            <!-- Manage Resident -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Manage Resident</h5>
                        <p class="card-text">Add or update resident details.</p>
                        <a href="manage_resident.php" class="btn btn-primary">Manage Resident</a>
                    </div>
                </div>
            </div>

            <!-- Manage Chart -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Manage Chart</h5>
                        <p class="card-text">View and generate statistics charts.</p>
                        <a href="manage_chart.php" class="btn btn-primary">View Chart</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
    </div>

</body>
</html>
