
<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = $_POST['token'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("SELECT user_id FROM registration_tokens WHERE token = ?");
    $stmt->execute([$token]);
    $user_id = $stmt->fetchColumn();

    if ($user_id) {
        $pdo->prepare("UPDATE users SET password = ? WHERE id = ?")->execute([$password, $user_id]);
        $pdo->prepare("DELETE FROM registration_tokens WHERE token = ?")->execute([$token]);
        echo "<p>Password set successfully. <a href='login.php'>Login now</a>.</p>";
    } else {
        echo "Invalid or expired token.";
    }
} else {
    $token = $_GET['token'] ?? '';
    echo "<form method='POST'>
        <input type='hidden' name='token' value='$token'>
        <label>Set Password:</label>
        <input type='password' name='password' required>
        <button type='submit'>Submit</button>
    </form>";
}
