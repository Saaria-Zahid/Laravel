<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Simple Navbar</title>
  
  <style>
    /* Resetting default margin and padding */
body, ul{
  margin: 0;
  padding: 0;
}

/* Navbar styling */
nav {
  background-color: #333;
  color: white;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
}

.nav-links {
  list-style: none;
  display: flex;
}

.nav-links li {
  margin-right: 20px;
}

.nav-links li a {
  color: white;
  text-decoration: none;
}

.nav-links li a:hover {
  color: #ffcc00;
}

.logo h1 {
  margin: 0;
}

/* Content styling */
.content {
  text-align: center;
  padding: 50px;
}

  </style>
</head>
<body>

<nav>
  <div class="logo">
    <h1>Logo</h1>
  </div>
  <ul class="nav-links">
    <li><a href="#">Home</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Services</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
</nav>

<div class="content">
  <h2>Welcome to My Website!</h2>
  <p>This is a simple example of a website with a navigation bar.</p>
</div>

</body>
</html>
