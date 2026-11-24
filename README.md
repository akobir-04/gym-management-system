# IronPulse – Gym Management System

## Description

A web-based gym management platform developed using PHP, RESTful JSON APIs, and modern ES6+ JavaScript. The application provides an integrated interface for managing gym memberships, browsing fitness classes and workout schedules, and monitoring real-time facility statistics through asynchronous data fetching.

> **Status:** Project is currently under active development. Core components, REST API integration, and UI modules are being implemented incrementally.

---

## Main Components

- **PHP Application Frame:** Modular server-side layout templates (`includes/header.php`, `includes/footer.php`) managing navigation state and multi-page structure.
- **RESTful API Layer:** Dedicated backend endpoints (`api/members.php`, `api/classes.php`) providing persistent JSON storage and supporting `GET`, `POST`, `PUT`, and `DELETE` HTTP operations.
- **Asynchronous API Service:** Decoupled ES6 JavaScript service layer (`config/config.js`, `services/api.js`) handling asynchronous `fetch()` calls, HTTP status validation, and error propagation.
- **Interactive Frontend Views:** Responsive dashboard, member management directory, and workout class catalog built with semantic HTML5, CSS Grid, and Flexbox.

---

## Planned Functionality

- **Live Dashboard Analytics:** Automated aggregation of active memberships, tier distributions, and estimated monthly revenue using functional JavaScript array methods (`map`, `filter`, `reduce`).
- **Member Directory & CRUD Operations:** Full lifecycle management allowing staff to list, register (`POST`), update (`PUT`), and remove (`DELETE`) member records with persistent storage.
- **Client-Side Form Validation:** Real-time input verification for required fields, name lengths, email formatting, and membership tier selection with inline error feedback.
- **Class & Workout Explorer:** Dynamic catalog featuring keyword search, category filtering (`Strength`, `HIIT`, `Yoga`, `Cardio`), and incremental pagination ("Load More").
- **Single-Resource Details View:** On-demand fetching of detailed class schedules, trainer profiles, and capacity limits via itemized REST queries (`GET /api/classes.php?id=:id`) displayed in an accessible modal.
- **Responsive UI & Theme Toggle:** Mobile-first layout adapting across mobile, tablet, and desktop breakpoints with persistent Dark/Light theme selection.

---

## Technologies

- **PHP (v8.0+)**
- **JavaScript (ES6+ Modules, Async/Await, Fetch API, DOM Manipulation)**
- **HTML5 (Semantic Markup)**
- **CSS3 (Custom Properties, CSS Grid, Flexbox, Media Queries)**
- **REST API & JSON Data Persistence**
- **Git & GitHub (Branch-based collaborative workflow)**

---

## How to Run Locally

1. Clone the repository:
   ```bash
   git clone https://github.com/akobir-04/gym-management-system.git
   cd gym-management-system
   ```
2. Start the PHP development server from the project root (or place the folder inside XAMPP `htdocs/`):
   ```bash
   php -S localhost:8000
   ```
3. Open `http://localhost:8000` in your browser.

---

## Known Limitations

- Data persistence currently uses local server-side JSON files (`data/members.json` and `data/classes.json`) rather than a relational production database, designed for lightweight local testing and demonstration.
- Role-based staff authentication is omitted in the current scope to prioritize direct CRUD and REST API workflow demonstration.
