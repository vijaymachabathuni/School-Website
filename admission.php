<?php
if($_POST){
  $student_name = "";
  $date_of_birth = "";
  $fathers_name = "";
  $class = "";
  $previous_school = "";
  $school_address = "";
  $email_id = "";
  $contact_number = "";
  $email_body = "<div>";

  if(isset($_POST['student_name'])) {
        $student_name = filter_var($_POST['student_name'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Student's Full Name:</b></label>&nbsp;<span>".$student_name."</span>
                        </div>";
  }
  if(isset($_POST['date_of_birth'])) {
        $date_of_birth = filter_var($_POST['date_of_birth'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Date of Birth:</b></label>&nbsp;<span>".$date_of_birth."</span>
                        </div>";
  }
  if(isset($_POST['fathers_name'])) {
        $fathers_name = filter_var($_POST['fathers_name'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Father's Full Name:</b></label>&nbsp;<span>".$fathers_name."</span>
                        </div>";
  }
  if(isset($_POST['class'])) {
        $class = filter_var($_POST['class'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Class:</b></label>&nbsp;<span>".$class."</span>
                        </div>";
  }
  if(isset($_POST['previous_school'])) {
        $previous_school = filter_var($_POST['previous_school'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Previous School:</b></label>&nbsp;<span>".$previous_school."</span>
                        </div>";
  }
  if(isset($_POST['school_address'])) {
        $school_address = filter_var($_POST['school_address'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>School Address:</b></label>&nbsp;<span>".$school_address."</span>
                        </div>";
  }
  if(isset($_POST['email_id'])) {
        $email_id = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email_id']);
        $email_id = filter_var($email_id, FILTER_VALIDATE_EMAIL);
        $email_body .= "<div>
                          <label><b>Email Id:</b></label>&nbsp;<span>".$email_id."</span>
                        </div>";
  }
  if(isset($_POST['contact_number'])) {
        $contact_number = filter_var($_POST['contact_number'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Contact Number:</b></label>&nbsp;<span>".$contact_number."</span>
                        </div>";
  }

  $recipient = "info@prodigyvidyalay.com";
  $email_body .= "</div>";
  $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $email_id . "\r\n";

  if(mail($recipient,$student_name,$email_body,$headers)){
    echo "<p>Thank you for contacting us, $student_name. You will get a reply within 24 hours.</p>";
  }
  else{
    echo "<p>We are sorry but the email did not go through. Please try again.</p>";
  }
}
else{
  echo "<p>Something went wrong. Please try again.</p>";
}
?>
