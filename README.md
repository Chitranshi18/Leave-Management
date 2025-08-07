# 🗂️ Leave Management System

A web-based application for managing employee leave requests, approvals, and tracking. Built using PHP, MySQL, HTML, CSS, and JavaScript for a responsive and efficient experience.

---

## 🚀 Overview

This project provides a simple and effective solution for:

- Employee leave request submission  
- Admin approval/rejection of requests  
- Leave history tracking  
- Role-based access control  
- Responsive user interface

---

## ✨ Features

- 🧑‍💼 Employee Portal: Submit leave requests and view status  
- 🛡️ Admin Dashboard: Approve/reject requests and manage users  
- 📊 Leave History: Track past leave records  
- 🔐 Authentication: Secure login system  
- 🎨 Responsive Design: Built with HTML, CSS, and JavaScript  
- 🗃️ Database Integration: MySQL for persistent data storage

---

## 💼 Use Cases

- HR departments managing employee leaves  
- Small to mid-sized organizations  
- Students learning full-stack web development with PHP and MySQL

---

## ⚙️ How It Works

- **Login System**: Authenticates users based on role  
- **Leave Request Form**: Captures leave details and submits to backend  
- **Admin Panel**: Displays pending requests with approve/reject options  
- **Leave History**: Shows approved/rejected requests for each user  
- **Database**: Stores user credentials, leave requests, and statuses

---

## 📦 Requirements

- PHP 7.x or higher  
- MySQL 5.x or higher  
- Web server (e.g., XAMPP, WAMP, LAMP)  
- Modern browser (Chrome, Firefox, Edge)

---

## 🛠️ Installation & Setup

1. **Clone the repository:**
   ```bash
   git clone https://github.com/Chitranshi18/Leave-Management.git

2. Create a new database:
- Name it: `leave_management`

3. Import the provided `.sql` file:
- Click on the database name  
- Go to the **Import** tab  
- Choose the `.sql` file and click **Go**

---

### ⚙️ Configure Database Connection

Edit the `config.php` file (or equivalent) with your MySQL credentials:

```php
$host = "localhost";
$user = "root";
$password = "";
$database = "leave_management";
```

---

## 🚀 Run the Application
Open your browser and visit:
```
  http://localhost/Leave-Management
```
---

## ⚙️ Configuration

Adjustable parameters in `config.php`:

- `DB_HOST`: Database host (default: `localhost`)  
- `DB_USER`: Database username  
- `DB_PASS`: Database password  
- `DB_NAME`: Database name

---

## 🛡️ Error Handling & Reliability

- Input validation for forms  
- Session management for secure access  
- Alerts for failed login or invalid actions  
- Graceful fallback for missing pages or data

---

## 💡 Acknowledgements

This project uses:

- **PHP** for server-side scripting  
- **MySQL** for database management  
- **HTML/CSS/JS** for frontend design  
- **Bootstrap** (optional) for responsive UI

---

## 📄 License

This project is licensed under the MIT License. See `LICENSE` for details.

---

## 🤝 Contribution

Contributions, issues, and feature requests are welcome!  
Feel free to open an issue or submit a pull request.

---

## 🔗 Contact

For questions or support, please contact:  
📧 csrivastava182000@gmail.com



