# 🍕 Pizzaholic

**Pizzaholic** is a dynamic web-based pizza ordering application built using PHP, MySQL, Bootstrap, JavaScript, and HTML. It allows customers to browse pizzas, add them to a cart, and place orders online.

## 💠 Tech Stack

* **Backend**: PHP
* **Database**: MySQL
* **Frontend**: HTML, CSS (Bootstrap), JavaScript

## 📸 Features

* 🍕 Pizza catalog with images and descriptions
* 🛒 Add to cart functionality
* 👤 User registration & login
* 📦 Order placement & history
* 📊 Admin panel to manage products and orders
* 🔍 Responsive design using Bootstrap

## 📁 Project Structure

```
Pizzaholic/
├── index.html
├── css/
│   └── mystyle.css
├── js/
│   └── [JavaScript files]
├── photos/
│   └── [Image assets]
├── fonts/
│   └── [Font files]
├── admin/
│   ├── adminhome.php
│   ├── addproduct.php
│   ├── deleteproduct.php
│   ├── aprofiledetail.php
│   ├── aeditprofile.php
│   ├── aeditprofilelogic.php
│   ├── achangepassword.php
│   ├── achangepasswordlogic.php
│   ├── alogin.php
│   ├── aloginform.html
│   ├── alogout.php
│   ├── amore.php
│   ├── amoreupdate.php
│   ├── apizza.php
│   ├── apizzaupdate.php
│   └── ammore - Copy.php
├── user/
│   ├── formforinsertiondata.html
│   ├── insert.php
│   └── jsadvanceform.html
├── database/
│   └── more.sql
├── assets/
│   └── download (1).png
├── DBMS.txt
├── README.md
└── [Other files]
```

## 🚀 Getting Started

### Prerequisites

* PHP >= 7.x
* MySQL
* Web server (e.g., Apache or XAMPP)
* A browser

### Setup Instructions

1. **Clone the repo:**

   ```bash
   git clone https://github.com/harshitgupta36/Pizzaholic.git
   ```

2. **Import the database:**

   * Open `phpMyAdmin` or your MySQL client.
   * Create a new database, e.g., `pizzaholic`.
   * Import the `more.sql` file located in the `database/` directory.

3. **Configure DB connection:**

   * Locate the database configuration file (e.g., `config/db.php`) and update:

     ```php
     $host = "localhost";
     $user = "root";
     $pass = "";
     $db   = "pizzaholic";
     ```

4. **Start the server:**

   * If using XAMPP/MAMP, place the project in the `htdocs` folder.
   * Open browser: `http://localhost/Pizzaholic`

## ✨ Credits

Developed by [Harshit Gupta](https://github.com/harshitgupta36)

## 📄 License

This project is licensed under the MIT License.
