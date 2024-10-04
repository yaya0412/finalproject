
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senior Medical Operation Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .header {
            background: url('https://ww2.kqed.org/app/uploads/sites/10/2021/07/WheelchairGeneric-1020x680.jpg') no-repeat center center;
            background-size: cover;
            height: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        .header h1 {
            color: white;
            font-size: 3em;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }
        .nav {
            background-color: #007BFF;
            padding: 10px;
            text-align: center;
        }
        .nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1.2em;
        }
        .container {
            text-align: center;
            margin: 30px auto;
        }
        .button-container {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .button {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease;
            width: 150px;
            position: relative;
        }
        .button img {
            width: 80px;
            height: 80px;
            margin-bottom: 10px;
        }
        .button h3 {
            font-size: 1.2em;
            color: #333;
        }
        .button:hover {
            transform: scale(1.05);
        }
        .blue-background {
            background-color: #007BFF;
            color: white;
            padding: 50px 20px;
            text-align: center;
        }
        .blue-background h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        .blue-background p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <div class="header">
        <h1>Senior Medical Operation</h1>
    </div>

    <!-- Navigation Bar -->
    <div class="nav">
        <a href="resident.php">Residents</a>
        <a href="../chart/dashboardchart.php">Statistics</a>
        <a href="organization_chart.php">Organization Chart</a>
    </div>

    <!-- Main Container for Buttons -->
    <div class="container">
        <div class="button-container">
            <!-- Resident Button -->
            <div class="button">
                <a href="resident.php">
                    <img src="https://empoweredaging.org/wp-content/uploads/2021/06/side-view-of-nurse-interacting-with-senior-woman-a-4uhfv98-scaled.jpg" alt="Resident">
                    <h3>Resident</h3>
                </a>
            </div>

            <!-- Statistic Button -->
            <div class="button">
                <a href="../chart/dashboardchart.php">
                    <img src="https://cdn3.vectorstock.com/i/1000x1000/96/57/statistic-graphic-isolated-icon-vector-17079657.jpg" alt="Statistic">
                    <h3>Statistic</h3>
                </a>
            </div>

            <!-- Organization Chart Button -->
            <div class="button">
                <a href="organization_chart.php">
                    <img src="https://img.kyodonews.net/english/public/images/posts/7c65d61449699fe38d2f5191c0ff1149/cropped_image_l.jpg" alt="Organization Chart">
                    <h3>Organization Chart</h3>
                </a>
            </div>
        </div>
    </div>

    <!-- New Section with Blue Background -->
    <div class="blue-background">
        <h2>Welcome to the Dashboard</h2>
        <p>This platform is designed to manage senior residents effectively, ensuring their health and well-being.</p>
    </div>

</body>
</html>
