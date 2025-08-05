<?php
// Basic login placeholder
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // This is just a mock
    if ($username === 'admin' && $password === 'password') {
        echo "Login successful!";
    } else {
        echo "Invalid credentials.";
    }
} else {
    echo '<form method="POST">
            <input type="text" name="username" placeholder="Username" required><br><br>
            <input type="password" name="password" placeholder="Password" required><br><br>
            <button type="submit">Login</button>
          </form>';
}
?>