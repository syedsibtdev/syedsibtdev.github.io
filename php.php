<?php
// PHP code to send contact form to both client and owner
if (isset($_POST['submit'])) { // Check if user enter data
    $mailto = "Hi@syedsibt.me"; //My email address
    $from = $_POST['email']; // Senders email address
    $name = $_POST['name'];  // User name
    $subject = $_POST['subject'];
    $subject2 = "Your message Submitted Successfully"
    $message = "Client Name: " . $name. ", Wrote the following message". "\n\n" . $_POST['message'];
    $message2 = "Dear ". $name. "\n\n" ."Thankyou for contacting us! We will get back to you soon";
    $headers = "From: ". $from; //Use entered email address
    $headers2 = "From: ". $mailto; // This will receive to client
    $result = mail($mailto, $subject, $message, $headers);// Send email to website owner
    $result2 = mail($from, $subject2, $message2, $headers2); // Send email to client
    if ($result) {
        echo '<script type="text/javascript">alert("Message was sent Successfuly, We will come back to you soon") </script>';
    }else {
        echo '<script type="text/javascript">alert("Submission failed! Try again later") </script>';
    }
}
?>