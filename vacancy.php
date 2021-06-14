<?php
if($_POST){
  $teacher_name = "";
  $date_of_birth = "";
  $fathers_name = "";
  $post_applied = "";
  $teaching_subjects = "";
  $qualification = "";
  $teaching_experience = "";
  $marital_status = "";
  $home_address = "";
  $email_id = "";
  $contact_number = "";
  $email_body = "<div>";

  if(isset($_POST['teacher_name'])) {
        $teacher_name = filter_var($_POST['teacher_name'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Teacher Name:</b></label>&nbsp;<span>".$teacher_name."</span>
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
                          <label><b>Father's Name:</b></label>&nbsp;<span>".$fathers_name."</span>
                        </div>";
  }
  if(isset($_POST['post_applied'])) {
        $post_applied = filter_var($_POST['post_applied'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Post Applied:</b></label>&nbsp;<span>".$post_applied."</span>
                        </div>";
  }
  if(isset($_POST['teaching_subjects'])) {
        $teaching_subjects = filter_var($_POST['teaching_subjects'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Teaching Subjects:</b></label>&nbsp;<span>".$teaching_subjects."</span>
                        </div>";
  }
  if(isset($_POST['qualification'])) {
        $qualification = filter_var($_POST['qualification'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Qualification:</b></label>&nbsp;<span>".qualification."</span>
                        </div>";
  }
  if(isset($_POST['teaching_experience'])) {
        $teaching_experience = filter_var($_POST['teaching_experience'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Teaching Experience:</b></label>&nbsp;<span>".$teaching_experience."</span>
                        </div>";
  }
  if(isset($_POST['marital_status'])) {
        $marital_status = filter_var($_POST['marital_status'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Marital Status:</b></label>&nbsp;<span>".$marital_status."</span>
                        </div>";
  }
  if(isset($_POST['home_address'])) {
        $home_address = filter_var($_POST['home_address'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Address:</b></label>&nbsp;<span>".$home_address."</span>
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

  if(mail($recipient,$teacher_name,$email_body,$headers)){
    echo "<p>Thank you for contacting us, $teacher_name. You will get a reply within 24 hours.</p>";
  }
  else{
    echo "<p>We are sorry but the email did not go through. Please try again.</p>";
  }
}
else{
  echo "<p>Something went wrong. Please try again.</p>";
}
?>
