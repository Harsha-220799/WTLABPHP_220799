# PHP Online Exam – MongoDB + MySQL + Google OAuth

## 🔧 Requirements

- XAMPP (Apache + PHP)
- MongoDB Community Server
- MongoDB Compass (optional)
- Composer

## 📦 Installation Steps

1. Clone the repository
2. Run:
   composer install
3. Create `.env` file:

GOOGLE_CLIENT_ID=your_id  
GOOGLE_CLIENT_SECRET=your_secret  
GOOGLE_REDIRECT_URI=http://localhost/php_onlineexam/google-callback.php  

MONGO_URI=mongodb://localhost:27017  
MONGO_DB=online_exam  

4. Start Apache and MongoDB

## 🧪 Features

### MySQL
- Normal signup/login

### Google OAuth
- Login with Google

### MongoDB
- Signup
- Login
- Dashboard
- List users
- Update user
- Delete user
- Duplicate email prevention
- Validation

## 🌐 MongoDB URLs

Signup:
http://localhost/php_onlineexam/signup_mongo.php

Login:
http://localhost/php_onlineexam/login_mongo.php

Users List:
http://localhost/php_onlineexam/users_mongo.php

Dashboard:
http://localhost/php_onlineexam/mongo_dashboard.php

## 📂 Folder Structure

config/
php/
vendor/ (ignored)
.env (ignored)

## ⚠️ Note
Run `composer install` after cloning to install dependencies.