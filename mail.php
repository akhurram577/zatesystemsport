<?php
  $name = $_GET['Name'];
  $company_name = $_GET['Company-name'];
  $email = $_GET['email'];
  $services = [];
  if (isset($_GET['Webflow-Development'])) {
    $services[] = 'Webflow Development';
  }
  if (isset($_GET['Maintenance-Support'])) {
    $services[] = 'Maintenance & Support';
  }
  
  $budget = $_GET['Budget'];
  $project_brief = $_GET['Project-Brief'];

  $to = "contact@zatesystems.com"; 
  $subject = "Form Submission";
  $headers = "From: $email\r\nReply-To: $email";

  $body = "Name: $name\n";
  $body .= "Company Name: $company_name\n";
  $body .= "Email: $email\n";
  $body .= "Services: " . implode(', ', $services) . "\n";
  $body .= "Budget: $budget\n";
  $body .= "Project Brief: $project_brief\n";

  mail($to, $subject, $body, $headers);

  header("Location: thank-you.html");
?>