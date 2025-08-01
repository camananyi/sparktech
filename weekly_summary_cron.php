
<?php
require_once 'config.php';
$toAdmin = "info@sparktechafrica.com";

$oneWeekAgo = date('Y-m-d H:i:s', strtotime('-7 days'));
$stmt = $pdo->prepare("SELECT u.name, u.email, p.summary, p.created_at FROM progress_updates p JOIN users u ON p.mentee_id = u.id WHERE p.created_at >= ?");
$stmt->execute([$oneWeekAgo]);
$updates = $stmt->fetchAll();

$grouped = [];
foreach ($updates as $u) {
    $grouped[$u['email']][] = $u;
}

// Send summary to parents and admin
foreach ($grouped as $email => $entries) {
    $body = "Weekly progress update for your child(ren):

";
    foreach ($entries as $entry) {
        $body .= "Name: {$entry['name']}
Date: {$entry['created_at']}
Summary:
{$entry['summary']}

";
    }
    mail($email, "SPARK Weekly Progress Update", $body, "From: SPARK <info@sparktechafrica.com>");
}

// Admin summary
$adminBody = "All progress updates in the last 7 days:

";
foreach ($updates as $entry) {
    $adminBody .= "Name: {$entry['name']}
Email: {$entry['email']}
Date: {$entry['created_at']}
Summary:
{$entry['summary']}

";
}
mail($toAdmin, "SPARK Admin Weekly Digest", $adminBody, "From: SPARK <info@sparktechafrica.com>");
?>
