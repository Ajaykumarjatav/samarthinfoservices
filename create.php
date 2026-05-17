<?php
include 'db_connection.php';

$name =  $_REQUEST['name'];
$email =  $_REQUEST['email'];
$phoneNumber =  $_REQUEST['phone'];
$webUrl =  $_REQUEST['web_url'];
$message =  $_REQUEST['message'];
$budget =  $_REQUEST['budget'];

$ipaddress = '';
if (getenv('HTTP_CLIENT_IP'))
    $ipaddress = getenv('HTTP_CLIENT_IP');
else if(getenv('HTTP_X_FORWARDED_FOR'))
    $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
else if(getenv('HTTP_X_FORWARDED'))
    $ipaddress = getenv('HTTP_X_FORWARDED');
else if(getenv('HTTP_FORWARDED_FOR'))
    $ipaddress = getenv('HTTP_FORWARDED_FOR');
else if(getenv('HTTP_FORWARDED'))
   $ipaddress = getenv('HTTP_FORWARDED');
else if(getenv('REMOTE_ADDR'))
    $ipaddress = getenv('REMOTE_ADDR');
else
    $ipaddress = 'UNKNOWN';
$ip = $ipaddress;
$urlParam = $_SERVER['QUERY_STRING'];
// Performing insert query execution
// here our table name is college
// $sql = "INSERT INTO leads (full_name,email,phone_number,web_url,budget,message_description,ip,url_param)  VALUES (
//     '$name','$email','$phoneNumber','$webUrl','$budget','$message','$ip','$urlParam')";

// Prepared statement for safety
$stmt = $conn->prepare("
    INSERT INTO leads 
    (full_name, email, phone_number, web_url, budget, message_description, ip, url_param)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)
");
$stmt->bind_param("ssssssss", $name, $email, $phoneNumber, $webUrl, $budget, $message, $ip, $urlParam);
 
if($stmt->execute()){
    $to = 'shiva.ml1991@gmail.com';
    $subject = 'Lead details';
    
    $Body .= "Full Name: ";
    $Body .= $name;
    $Body .= "Email: ";
    $Body .= $email;
    $Body .= "Phone Number: ";
    $Body .= $phoneNumber;
    $Body .= "Budget: ";
    $Body .= $budget;
    $Body .= "Website Url: ";
    $Body .= $webUrl;
    $Body .= "Message: ";
    $Body .= $message;
    
    $from = 'test@mailinator.com';
    $headers .= 'Cc: ajayjatav439@gmail.com' . "\r\n";
     
    // Sending email
    if(mail($to, $subject, $Body,$headers)){
        echo 'Your mail has been sent successfully.';
        header("Location: thank-you.php"); 
        exit();
    } else{
        echo 'Unable to send email. Please try again.';
        header("Location: thank-you.php"); 
        exit();
    }
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// include 'db_connection.php';

// $name = trim($_POST['name'] ?? '');
// $email = trim($_POST['email'] ?? '');
// $phoneNumber = trim($_POST['phone'] ?? '');
// $webUrl = trim($_POST['web_url'] ?? '');
// $message = trim($_POST['message'] ?? '');
// $budget = trim($_POST['budget'] ?? '');

// // Get IP address safely
// $ip = $_SERVER['REMOTE_ADDR'] ?? 'UNKNOWN';
// $urlParam = $_SERVER['QUERY_STRING'] ?? '';

// // ✅ Prepared statement for safety
// $stmt = $conn->prepare("
//     INSERT INTO leads 
//     (full_name, email, phone_number, web_url, budget, message_description, ip, url_param)
//     VALUES (?, ?, ?, ?, ?, ?, ?, ?)
// ");
// $stmt->bind_param("ssssssss", $name, $email, $phoneNumber, $webUrl, $budget, $message, $ip, $urlParam);

// if ($stmt->execute()) {
//     // Proceed to email only if insert succeeded
//     $to = 'shiva.ml1991@gmail.com';
//     $subject = 'Lead details';
    
//     // Build safe email body
//     $Body = "Full Name: $name\n";
//     $Body .= "Email: $email\n";
//     $Body .= "Phone Number: $phoneNumber\n";
//     $Body .= "Budget: $budget\n";
//     $Body .= "Website URL: $webUrl\n";
//     $Body .= "Message: $message\n";
//     $Body .= "IP: $ip\n";

//     $headers = "From: test@mailinator.com\r\n";
//     $headers .= "Cc: ajayjatav439@gmail.com\r\n";
    
//     if (mail($to, $subject, $Body, $headers)) {
//         header("Location: thank-you.php");
//         exit();
//     } else {
//         header("Location: thank-you.php?error=email");
//         exit();
//     }
// } else {
//     error_log("Database error: " . $stmt->error);
//     echo "An error occurred. Please try again later.";
// }
?>