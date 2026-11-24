# IronPulse — Gym Management System

A responsive web application for managing gym memberships, fitness classes, and live gym analytics using a PHP layout frame, PHP/JSON REST API, and modern ES6+ JavaScript (`fetch`, modules).

---

## Project Folder Structure (Skeleton)

```text
web_final-project/
├── api/
│   ├── members.php        # REST API for members (GET list/details, POST, PUT, DELETE)
│   └── classes.php        # REST API for classes (GET list & details by ID)
├── config/
│   └── config.js          # Centralized API Base URL, endpoints, and headers
├── services/
│   └── api.js             # Reusable async/await fetch() wrapper
├── data/
│   ├── members.json       # Persistent JSON data store for gym members
│   └── classes.json       # Persistent JSON data store for gym classes
├── includes/
│   ├── header.php         # Shared PHP Header & Navigation Bar
│   └── footer.php         # Shared PHP Footer
├── js/
│   ├── dashboard.js       # Dashboard stats logic (Student 3)
│   ├── members.js         # Members CRUD & form validation logic (Student 1)
│   ├── classes.js         # Classes search, filter, pagination & details (Student 2)
│   └── components/
│       └── modal.js       # Reusable Details View modal component (Student 2)
├── css/
│   └── style.css          # Responsive CSS Grid/Flexbox & Dark/Light theme (Student 3)
├── index.php              # Dashboard Page (Student 3)
├── members.php            # Members Management Page (Student 1)
└── classes.php            # Classes & Workouts Explorer Page (Student 2)
```

---

## Team Task Division (3 Students)

1. **Student 1 (Akobir) — Core API & Members Management (`config/`, `services/api.js`, `api/members.php`, `members.php`, `js/members.js`)**
   - Centralized API configuration & asynchronous `fetch()` service.
   - Members data listing (`GET`), Member registration (`POST`), Member editing (`PUT`), and deletion (`DELETE`).
   - Client-side form validation with user-friendly error/success feedback.

2. **Student 2 — Classes Explorer, Search/Filter, Pagination & Details View (`api/classes.php`, `classes.php`, `js/classes.js`, `js/components/modal.js`)**
   - Classes & workouts card listing (`GET`).
   - Search by keyword and filter by category (`Strength`, `HIIT`, `Yoga`, `Cardio`).
   - Pagination / "Load More" functionality.
   - Single-item Details Modal (`GET /api/classes.php?id=...`).

3. **Student 3 — PHP Layout Frame, Dashboard Analytics & Responsive UI/UX (`includes/`, `index.php`, `js/dashboard.js`, `css/style.css`, `README.md`)**
   - Shared PHP navigation frame with active page indicator.
   - Live Dashboard summary cards (Total Members, Monthly Revenue, Active Classes using ES6 `reduce`/`filter`).
   - Full mobile/tablet/desktop CSS Grid & Flexbox styling, loading spinners, and Dark/Light theme toggle.

---

## How to Run Locally

1. Open the project folder in **VS Code** (or place inside XAMPP `htdocs/`).
2. Start the built-in PHP development server in the terminal:
   ```bash
   php -S localhost:8000
   ```
3. Open `http://localhost:8000` in your browser.
