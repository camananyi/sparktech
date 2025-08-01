<?php
require_once 'config.php';

function send_notification($data) {
    $to = "info@sparktechafrica.com";
    $subject = "New SPARK Registration: " . ucfirst($data['role']);
    $message = "New " . $data['role'] . " registration:\n\n"
        . "Name: " . $data['name'] . "\n"
        . "Email: " . $data['email'] . "\n";
    $headers = "From: SPARK Tech Africa <sparktechafrica@my9ja.com>\r\n";
    // $headers = "From: sparktechafrica@my9ja.com\r\n";
    //$headers = "From: hello@sparktechafrica.com\r\n";   
    $headers .= "Reply-To: info@sparktechafrica.com\r\n";

    mail($to, $subject, $message, $headers);
}

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($conn->connect_error) die("Connection failed");

$role = $_POST['role'];
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$phone = $conn->real_escape_string($_POST['phone'] ?? '');

$conn->query("INSERT INTO users (role, name, email, phone) VALUES ('$role', '$name', '$email', '$phone')");
$user_id = $conn->insert_id;

if ($role == 'mentee') {
    $age = intval($_POST['age']);
    $school = $conn->real_escape_string($_POST['school']);
    $why = $conn->real_escape_string($_POST['why']);
    $experience = $conn->real_escape_string($_POST['experience']);
    $conn->query("INSERT INTO mentees (user_id, age, school, why, experience) VALUES ($user_id, $age, '$school', '$why', '$experience')");
}

elseif ($role == 'mentor') {
    $org = $conn->real_escape_string($_POST['org']);
    $linkedin = $conn->real_escape_string($_POST['linkedin']);
    $bio = $conn->real_escape_string($_POST['bio']);
    $availability = $conn->real_escape_string($_POST['availability']);
    $interests = isset($_POST['interests']) ? implode(',', $_POST['interests']) : '';
    $conn->query("INSERT INTO mentors (user_id, org, linkedin, bio, interests, availability) VALUES ($user_id, '$org', '$linkedin', '$bio', '$interests', '$availability')");
}

elseif ($role == 'parent') {
    $num_kids = intval($_POST['num_kids']);
    $child_name = $conn->real_escape_string($_POST['child_name']);
    $child_email = $conn->real_escape_string($_POST['child_email']);
    $consent = isset($_POST['consent']) ? 1 : 0;
    $conn->query("INSERT INTO parents (user_id, num_kids, child_name, child_email, consent) VALUES ($user_id, $num_kids, '$child_name', '$child_email', $consent)");
}

send_notification(['role' => $role, 'name' => $name, 'email' => $email]);
header("Location: thanks.html");
?>