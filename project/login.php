<?php
session_start();

if (isset($_POST['submit'])) {
    
    $conn = mysqli_connect("localhost", "root", "", "theater");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $username = $_POST['username'];
    $pass = $_POST['password'];

    $username = mysqli_real_escape_string($conn, $username);
    $password = password_hash($pass, PASSWORD_BCRYPT);

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    $data = mysqli_fetch_array($result);

    if (!empty($data) && password_verify($pass, $data['password'])) {
        $_SESSION['role'] = $data['role'];
        $_SESSION['username'] = $data['username'];
        header('Location: movie-list.php');
        exit();
    } else {
        echo "<div>
            <p>Account not found</p>
        </div>";
    }

    mysqli_close($conn);
}
?>

<style>
    div {
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
        padding: 10px 20px;
        border-radius: 5px;
        margin: 20px auto;
        width: 300px;
        text-align: center;
    }
</style>
