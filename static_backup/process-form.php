<?php
// process-form.php
// This is a basic PHP script that simulates processing the contact form.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate inputs
    $firstName = htmlspecialchars(trim($_POST["first_name"] ?? ''));
    $lastName = htmlspecialchars(trim($_POST["last_name"] ?? ''));
    $email = filter_var(trim($_POST["email"] ?? ''), FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(trim($_POST["subject"] ?? ''));
    $message = htmlspecialchars(trim($_POST["message"] ?? ''));

    // Basic validation
    if (empty($firstName) || empty($lastName) || empty($email) || empty($message)) {
        die("Please fill in all required fields.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    // In a real application, you would use mail() or a package like PHPMailer to send the email.
    // Example:
    /*
    $to = "info@euroworld.edu";
    $email_subject = "New Contact from: $firstName $lastName - $subject";
    $email_body = "You have received a new message.\n\n".
                  "Name: $firstName $lastName\n".
                  "Email: $email\n\n".
                  "Message:\n$message";
    $headers = "From: noreply@euroworld.edu\n";
    $headers .= "Reply-To: $email";
    mail($to, $email_subject, $email_body, $headers);
    */

    // For now, we will simulate a successful submission and redirect to a success page or show a message.
    $successMessage = "Thank you, $firstName! Your message has been received. Our team will contact you shortly.";
} else {
    // Not a POST request
    header("Location: contact.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Sent - Euro World Education</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen font-sans">
    <div class="bg-white p-10 rounded-2xl shadow-xl max-w-lg w-full text-center border border-gray-100">
        <div class="w-20 h-20 bg-green-50 text-green-500 rounded-full flex items-center justify-center mx-auto mb-6 text-4xl">
            <i class="fa-solid fa-check"></i>
        </div>
        <h1 class="text-3xl font-extrabold text-[#0b1b3d] mb-4">Message Sent!</h1>
        <p class="text-gray-600 mb-8 leading-relaxed"><?= $successMessage ?></p>
        <a href="index.html" class="inline-block bg-[#0b1b3d] text-white px-8 py-3 rounded-lg font-bold hover:bg-gray-900 transition-colors shadow-md">
            Return to Homepage
        </a>
    </div>
</body>
</html>
