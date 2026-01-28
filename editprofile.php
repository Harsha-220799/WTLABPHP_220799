<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Edit Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
    <h1>Edit Profile</h1>
    <p>Update your personal information</p>
    </header>
   <nav class="navbar">
    <a href="profile.php">GO Back</a>
    <a href="logout.php">Logout</a>
</nav> 

<section class="section edit-profile-section">
    <h2>Profile Details</h2>

    <form class="edit-profile-form" action="profile.php" method="POST">

        <div class="form-group">
            <label>Full Name</label>
            <input type="text" placeholder="Enter full name">
        </div>

        <div class="form-group">
            <label>Email Address</label>
            <input type="email" placeholder="Enter email">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" placeholder="Change password">
        </div>

        <div class="form-group">
            <label>Course</label>
            <select>
                <option>Select course</option>
                <option>HTML</option>
                <option>CSS</option>
                <option>Python</option>
                <option>C Programming</option>
            </select>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn">Save Changes</button>
            <button type="reset" class="btn secondary-btn">Reset</button>
        </div>

    </form>
</section>
</body>
</html>
