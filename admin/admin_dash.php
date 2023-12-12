<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../website/index.html");
    exit();
}

if ($_SESSION['usertype'] !== "admin") {
    // Redirect to the appropriate user dashboard
    header("Location: user_dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/custom.css">
    <link rel="shortcut icon" href="../assets/svg/ollcLogoNoName.svg" type="image/x-icon">
    <title>Admin Dashboard</title>
</head>
<body>
<header>
<div>
        <div class="flex py-4 px-14 justify-between items-center">
            <div>
                <img src="../assets/svg/ollclogo.svg" alt="">
            </div>
            <div class="inline-flex justify-between items-center gap-4">
                <div>
                    <button class="text-base"><a href="./index.html">Home</a></button>
                </div>
                <div class="relative group justify-center items-center">
                    <button id="admissionBtn" class="text-base focus:outline-none flex items-center gap-2 justify-center">Admission <img src="../assets/svg/arrow-down.svg" alt=""></button>
                    <ul id="admissionDropdown" class="absolute hidden bg-white text-gray-800 pt-2 group-hover:block">
                        <li><a href="./requirements.html" class="hover:text-blue-500">Requirements</a></li>
                        <li><a href="./pre-registration.html" class="hover:text-blue-500">Pre-Registration</a></li>
                    </ul>
                </div>
                <div class="relative group">
                    <button id="aboutBtn" class="text-base focus:outline-none flex items-center gap-2 justify-center">About OLLC <img src="../assets/svg/arrow-down.svg" alt=""></button>
                    <ul id="aboutDropdown" class="absolute hidden bg-white text-gray-800 pt-2 group-hover:block">
                        <li><a href="./mission-vision.html">Mission Vision</a></li>
                        <li><a href="./history.html">History</a></li>
                        <li><a href="./contact-us.html">Contact Us</a></li>
                    </ul>
                </div>
                <div>
                    <button class="text-base btn"><a href="../login/student/login.php">Student Portal</a></button>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/js/topbar.js"></script>
</header>
    
    <!-- Admin dashboard-->

    <footer>
    <div>
        <object data="../website/footer.html" type="text/html" width="100%" height="56px"></object>
    </div>
    </footer>
</body>
</html>
