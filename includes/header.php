<?php
// Shared Header & Navigation Frame (Owned by Student 3)
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IronPulse Gym Management System</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="navbar">
        <div class="container nav-container">
            <a href="index.php" class="logo">IronPulse <span>Gym</span></a>
            <nav class="nav-links">
                <a href="index.php" class="<?= $currentPage === 'index.php' ? 'active' : '' ?>">Dashboard</a>
                <a href="members.php" class="<?= $currentPage === 'members.php' ? 'active' : '' ?>">Members</a>
                <a href="classes.php" class="<?= $currentPage === 'classes.php' ? 'active' : '' ?>">Classes & Workouts</a>
            </nav>
            <button id="theme-toggle" class="btn-outline" type="button" aria-label="Toggle theme">Theme</button>
        </div>
    </header>
    <main class="container main-content">
