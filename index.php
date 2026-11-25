<?php
// Dashboard Page (Owned by Student 3: UI/UX, Analytics & Theme)
require_once 'includes/header.php';
?>

<section class="page-header">
    <h1>Gym Dashboard Overview</h1>
    <p>Live statistics and quick insights from the Gym REST API.</p>
</section>

<!-- Loading & Error States -->
<div id="dashboard-loading" class="status-message">Loading dashboard statistics...</div>
<div id="dashboard-error" class="status-message error hidden"></div>

<!-- Summary Cards Grid (Populated by js/dashboard.js) -->
<section id="stats-grid" class="stats-grid">
    <!-- Student 3: Render Total Members, Active Classes, Monthly Revenue cards here -->
</section>

<script type="module" src="js/dashboard.js"></script>

<?php require_once 'includes/footer.php'; ?>
