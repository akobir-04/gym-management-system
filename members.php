<?php
// Members Management Page (Owned by Student 1: Core API, Members CRUD & Form Validation)
require_once 'includes/header.php';
?>

<section class="page-header">
    <h1>Gym Members Management</h1>
    <p>View, register, update, and remove gym memberships.</p>
</section>

<div class="members-layout">
    <!-- Left/Top: Create / Update Member Form -->
    <section class="card form-section">
        <h2 id="form-title">Register New Member</h2>
        <div id="form-feedback" class="status-message hidden"></div>

        <form id="member-form" novalidate>
            <input type="hidden" id="member-id" value="">

            <div class="form-group">
                <label for="full-name">Full Name *</label>
                <input type="text" id="full-name" placeholder="e.g. Alex Johnson" required>
                <small class="field-error" id="error-name"></small>
            </div>

            <div class="form-group">
                <label for="email">Email Address *</label>
                <input type="email" id="email" placeholder="e.g. alex@example.com" required>
                <small class="field-error" id="error-email"></small>
            </div>

            <div class="form-group">
                <label for="plan">Membership Plan *</label>
                <select id="plan" required>
                    <option value="">Select a plan...</option>
                    <option value="Basic">Basic ($29/mo)</option>
                    <option value="Pro">Pro ($49/mo)</option>
                    <option value="VIP">VIP ($79/mo)</option>
                </select>
                <small class="field-error" id="error-plan"></small>
            </div>

            <div class="form-actions">
                <button type="submit" id="submit-btn" class="btn-primary">Save Member</button>
                <button type="button" id="cancel-edit-btn" class="btn-outline hidden">Cancel Edit</button>
            </div>
        </form>
    </section>

    <!-- Right/Bottom: Members List -->
    <section class="list-section">
        <div id="members-loading" class="status-message">Loading members...</div>
        <div id="members-error" class="status-message error hidden"></div>
        <div id="members-list" class="cards-grid"></div>
    </section>
</div>

<script type="module" src="js/members.js"></script>

<?php require_once 'includes/footer.php'; ?>
