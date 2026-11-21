# PHP Login System

A simple session-based login system built with plain PHP (no database). Users log in with an email and password, land on a protected dashboard, and can log out from the navigation bar.

**Version:** v1 (skeleton)

## Features

- Login form with email and password fields
- Server-side validation for empty fields, with error messages
- Session-based authentication (`$_SESSION`)
- Protected dashboard that redirects unauthenticated visitors to the login page
- Shared navigation bar with a logout button
- Hardcoded test users (no database required)

## Tech Stack

- PHP
- Apache
- HTML / CSS

## Project Structure

```
.
├── login.php       # Login form, shows validation errors
├── auth.php        # Handles login and logout requests
├── dashboard.php   # Protected page (requires an active session)
├── nav.php         # Navigation bar included in protected pages
└── style.css       # Navigation styles
```

## Getting Started

### Prerequisites

- Apache with PHP (for example XAMPP, WAMP or MAMP)

### Installation

1. Clone the repository into your Apache web root (`htdocs` for XAMPP):

   ```bash
   git clone <your-repo-url>
   ```

2. Start Apache from your control panel.
3. Open the project in your browser:

   ```
   http://localhost/<project-folder>/login.php
   ```

## Usage

1. Open `login.php`.
2. Enter an email and a password.
3. Submit the form to reach `dashboard.php`.
4. Click **logout** in the navigation bar to end the session.

## How It Works

1. `login.php` posts the form to `auth.php`.
2. `auth.php` checks that both fields are filled. If not, it stores an error in the session and redirects back to `login.php`.
3. On success, it sets `$_SESSION["logged"] = true` and redirects to `dashboard.php`.
4. `dashboard.php` checks the session flag and redirects to `login.php` if it is missing.
5. The logout button posts to `auth.php`, which destroys the session.

## Author

Zakaria Kiyani
