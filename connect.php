<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $checkin_date = $_POST["checkin-date"];
    $room_number = $_POST["room-number"];
    $service_quality = $_POST["service-quality"];
    $recommendation = $_POST["recommendation"];
    $info_clearness = $_POST["info-clearness"];
    $comments = $_POST["comments"];
    $to = "dipeshgautam899@gmail.com";
    $subject = "Feedback Form Submission";
    $message ="Name: " . $name . "\n" . "Email: " . $email . "\n" . "Checked In Date: " . $checkin_date . "\n" . "Room Number: " . $room_number . "\n" . "Service Quality: " . $service_quality . "\n" . "Recommendation: " . $recommendation . "\n" . "Info Clearness: " . $info_clearness . "\n"  . "Comments: " . $comments . "\n" ;
    $headers = "From: " . $email;
    mail($to, $subject, $message, $headers);
    echo "Form submitted successfully!";
?>
