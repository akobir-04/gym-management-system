<?php
// Classes & Workouts Page (Owned by Student 2: Search, Filter, Pagination & Details Modal)
require_once 'includes/header.php';
?>

<section class="page-header">
    <h1>Classes & Workouts Explorer</h1>
    <p>Search, filter, and inspect detailed schedules for gym sessions.</p>
</section>

<!-- Search and Category Filter Controls -->
<section class="filters-bar card">
    <input type="search" id="search-classes" placeholder="Search classes or trainers...">
    <select id="filter-category">
        <option value="all">All Categories</option>
        <option value="Strength">Strength</option>
        <option value="Cardio">Cardio</option>
        <option value="Yoga">Yoga & Mobility</option>
        <option value="HIIT">HIIT</option>
    </select>
</section>

<!-- Loading & Error States -->
<div id="classes-loading" class="status-message">Loading classes...</div>
<div id="classes-error" class="status-message error hidden"></div>

<!-- Classes Listing Grid -->
<section id="classes-list" class="cards-grid"></section>

<!-- Pagination / Load More -->
<div class="pagination-controls">
    <button id="load-more-btn" class="btn-outline hidden" type="button">Load More Classes</button>
</div>

<!-- Details Modal (Populated via GET /api/classes.php?id=...) -->
<div id="details-modal" class="modal-overlay hidden">
    <div class="modal-card">
        <button id="close-modal-btn" class="modal-close" type="button">&times;</button>
        <div id="modal-body"></div>
    </div>
</div>

<script type="module" src="js/classes.js"></script>

<?php require_once 'includes/footer.php'; ?>
