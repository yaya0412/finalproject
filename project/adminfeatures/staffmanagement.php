
<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "staffmanagement";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle create staff action
if (isset($_POST['create'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password']; // Removed the password hashing
    $phonenumber = $_POST['phonenumber'];
    $sql = "INSERT INTO staff (username, emailstaff, PASSWORD, phonenumber) VALUES ('$username', '$email', '$password', '$phonenumber')";
    if (!$conn->query($sql)) {
        die("Error creating staff: " . $conn->error);
    }
}

// Handle update staff action
if (isset($_POST['update'])) {
    $username = $_POST['username']; // Use username for updating
    $newUsername = $_POST['new_username'];
    $emailstaff = $_POST['emailstaff'];
    $password = $_POST['password'];
    $phonenumber = $_POST['phonenumber'];

    if ($password) {
        // Update with new password
        $sql = "UPDATE staff SET username='$newUsername', emailstaff='$emailstaff', PASSWORD='$password', phonenumber='$phonenumber' WHERE username='$username'";
    } else {
        // Update without changing the password
        $sql = "UPDATE staff SET username='$newUsername', emailstaff='$emailstaff', phonenumber='$phonenumber' WHERE username='$username'";
    }

    if (!$conn->query($sql)) {
        die("Error updating staff: " . $conn->error);
    }
}

// Handle delete staff action
if (isset($_GET['delete'])) {
    $username = $_GET['delete'];
    $sql = "DELETE FROM staff WHERE username='$username'";
    if (!$conn->query($sql)) {
        die("Error deleting staff: " . $conn->error);
    }
}

// Fetching staff data
$sql = "SELECT username, emailstaff, PASSWORD, phonenumber FROM staff";
$result = $conn->query($sql);

if (!$result) {
    die("Query failed: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Management</title>
    <style>
        body {
            background-color: #e0f7fa;
            font-family: 'Arial', sans-serif;
            color: #333;
        }
        h1 {
            text-align: center;
            color: #006064;
        }
        form {
            margin: 20px auto;
            max-width: 400px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            background-color: #00796b;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background-color: #004d40;
        }
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 80%;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #009688;
            color: white;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
        }
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            border-radius: 8px;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover, .close:focus {
            color: black;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Manage Staff Accounts</h1>

    <!-- Form for creating a new staff account -->
    <form action="staffmanagement.php" method="POST">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="text" name="phonenumber" placeholder="Phone Number" required><br>
        <button type="submit" name="create">Create Staff</button>
    </form>

    <hr>

    <!-- List of all staff accounts with options to delete or edit -->
    <table border="1">
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Password</th> <!-- Displaying password directly -->
            <th>Actions</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo htmlspecialchars($row['username']); ?></td>
            <td><?php echo htmlspecialchars($row['emailstaff']); ?></td>
            <td><?php echo htmlspecialchars($row['phonenumber']); ?></td>
            <td><?php echo htmlspecialchars($row['PASSWORD']); ?></td> <!-- Displaying plain text password -->
            <td>
                <button onclick="openEditModal('<?php echo $row['username']; ?>', '<?php echo htmlspecialchars($row['username']); ?>', '<?php echo htmlspecialchars($row['emailstaff']); ?>', '<?php echo htmlspecialchars($row['phonenumber']); ?>')">Edit</button>
                <button onclick="openDeleteModal('<?php echo $row['username']; ?>')">Delete</button>
            </td>
        </tr>
        <?php } ?>
    </table>

    <!-- Modals for editing and deleting remain the same -->
</body>
</html>
