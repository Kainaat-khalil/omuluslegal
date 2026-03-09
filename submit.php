<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

$first_name   = htmlspecialchars(trim($_POST['first_name'] ?? ''));
$last_name    = htmlspecialchars(trim($_POST['last_name'] ?? ''));
$email        = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$phone        = htmlspecialchars(trim($_POST['phone'] ?? ''));
$specialty    = htmlspecialchars(trim($_POST['specialty'] ?? ''));
$sms_consent  = $_POST['sms_consent'] ?? '';

if (!$first_name || !$last_name || !$email || !$phone) {
    http_response_code(400);
    echo json_encode(['error' => 'Missing required fields']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid email address']);
    exit;
}

// Send notification email (configure SMTP or use PHP mail)
$to      = 'support@omulus.ai';
$subject = "New Demo Request: {$first_name} {$last_name}";
$body    = "New demo request received:\n\n"
         . "Name: {$first_name} {$last_name}\n"
         . "Email: {$email}\n"
         . "Phone: {$phone}\n"
         . "Specialty: {$specialty}\n"
         . "SMS Consent: " . ($sms_consent === 'yes' ? 'Yes' : 'No') . "\n"
         . "Submitted: " . date('Y-m-d H:i:s') . "\n";

$headers = "From: noreply@omuluslegal.com\r\nReply-To: {$email}";

@mail($to, $subject, $body, $headers);

// Respond with success
echo json_encode(['success' => true, 'message' => 'Thank you! We will be in touch shortly.']);
