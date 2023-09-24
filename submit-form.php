<?php
    // Include the WordPress core files
    require_once('../../../wp-load.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = sanitize_text_field($_POST['name']);
        $phone = sanitize_text_field($_POST['phone']);
        $email = sanitize_email($_POST['email']);
        $interest = sanitize_text_field($_POST['interest']);
        $message = wp_kses_post($_POST['message']);
    
        // Set the recipient email address
        $to = 'integraleather@gmail.com'; // Replace with your Gmail address
    
        // Email subject
        $subject = 'Integra Contact Form Submission from ' . $name;
    
        // Email headers
        $headers = array('Content-Type: text/html; charset=UTF-8', 'From: ' . $name . ' <' . $email . '>');
    
        // Email message body
        $message_body = 'Name: ' . $name . '<br>';
        $message_body .= 'Phone Number: ' . $phone . '<br>';
        $message_body .= 'Email: ' . $email . '<br>';
        $message_body .= 'Interested In: ' . $interest . '<br>';
        $message_body .= 'Message:<br>' . $message;
    
        // Send the email
        if (wp_mail($to, $subject, $message_body, $headers)) {
            // Email sent successfully
            // Redirect or display a success message
            wp_redirect(home_url('/')); // Redirect to a thank you page
            exit();
        } else {
            // Email sending failed
            // Handle the failure (e.g., display an error message)
            echo 'Email sending failed. Please try again.';
        }
    } else {
        // Form was not submitted, handle this case as needed
        echo 'Form submission error. Please try again.';
    }
    
?>