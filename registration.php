<?php
if($_POST){
  $student_name = "";
  $date_of_birth = "";
  $aadhaar_number = "";
  $class = "";
  $previous_class_result = "";
  $previous_school = "";
  $school_address = "";
  $board_name = "";
  $religion = "";
  $caste = "";
  $category = "";
  $mother_tongue = "";
  $fathers_name = "";
  $fathers_contact = "";
  $fathers_aadhaar = "";
  $fathers_ration = "";
  $fathers_occupation = "";
  $fathers_qualification = "";
  $fathers_income = "";
  $mothers_name = "";
  $mothers_contact = "";
  $mothers_aadhaar = "";
  $mothers_ration = "";
  $mothers_occupation = "";
  $mothers_qualification = "";
  $mothers_income = "";
  $home_address = "";
  $email_id = "";
  $guardians_name = "";
  $guardians_address = "";
  $guardians_contact = "";
  $sibling1_name = "";
  $sibling1_class = "";
  $sibling2_name = "";
  $sibling2_class = "";
  $sibling3_name = "";
  $sibling3_class = "";
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
  if(isset($_POST['aadhaar_number'])) {
        $aadhaar_number = filter_var($_POST['aadhaar_number'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Aadhaar Number:</b></label>&nbsp;<span>".$aadhaar_number."</span>
                        </div>";
  }
  if(isset($_POST['class'])) {
        $class = filter_var($_POST['class'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Class:</b></label>&nbsp;<span>".$class."</span>
                        </div>";
  }
  if(isset($_POST['previous_class_result'])) {
        $previous_class_result = filter_var($_POST['previous_class_result'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Previous Class Result:</b></label>&nbsp;<span>".$previous_class_result."</span>
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
  if(isset($_POST['board_name'])) {
        $board_name = filter_var($_POST['board_name'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Board Name:</b></label>&nbsp;<span>".$board_name."</span>
                        </div>";
  }
  if(isset($_POST['religion'])) {
        $religion = filter_var($_POST['religion'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Religion:</b></label>&nbsp;<span>".$religion."</span>
                        </div>";
  }
  if(isset($_POST['caste'])) {
        $caste = filter_var($_POST['caste'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Caste:</b></label>&nbsp;<span>".$caste."</span>
                        </div>";
  }
  if(isset($_POST['category'])) {
        $category = filter_var($_POST['category'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Category:</b></label>&nbsp;<span>".$category."</span>
                        </div>";
  }
  if(isset($_POST['mother_tongue'])) {
        $mother_tongue = filter_var($_POST['mother_tongue'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Mother Tongue:</b></label>&nbsp;<span>".$mother_tongue."</span>
                        </div>";
  }
  if(isset($_POST['fathers_name'])) {
        $fathers_name = filter_var($_POST['fathers_name'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Father's Full Name:</b></label>&nbsp;<span>".$fathers_name."</span>
                        </div>";
  }
  if(isset($_POST['fathers_contact'])) {
        $fathers_contact = filter_var($_POST['fathers_contact'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Father's Contact Number:</b></label>&nbsp;<span>".$fathers_contact."</span>
                        </div>";
  }
  if(isset($_POST['fathers_aadhaar'])) {
        $fathers_aadhaar = filter_var($_POST['fathers_aadhaar'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Father's Aadhaar Number:</b></label>&nbsp;<span>".$fathers_aadhaar."</span>
                        </div>";
  }
  if(isset($_POST['fathers_ration'])) {
        $fathers_ration = filter_var($_POST['fathers_ration'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Father's Ration Card Number:</b></label>&nbsp;<span>".$fathers_ration."</span>
                        </div>";
  }
  if(isset($_POST['fathers_occupation'])) {
        $fathers_occupation = filter_var($_POST['fathers_occupation'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Father's Occupation:</b></label>&nbsp;<span>".$fathers_occupation."</span>
                        </div>";
  }
  if(isset($_POST['fathers_qualification'])) {
        $fathers_qualification = filter_var($_POST['fathers_qualification'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Father's Qualification:</b></label>&nbsp;<span>".$fathers_qualification."</span>
                        </div>";
  }
  if(isset($_POST['fathers_income'])) {
        $fathers_income = filter_var($_POST['fathers_income'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Father's Income:</b></label>&nbsp;<span>".$fathers_income."</span>
                        </div>";
  }
  if(isset($_POST['mothers_name'])) {
        $mothers_name = filter_var($_POST['mothers_name'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Mother's Full Name:</b></label>&nbsp;<span>".$mothers_name."</span>
                        </div>";
  }
  if(isset($_POST['mothers_contact'])) {
        $mothers_contact = filter_var($_POST['mothers_contact'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Mother's Contact Number:</b></label>&nbsp;<span>".$mothers_contact."</span>
                        </div>";
  }
  if(isset($_POST['mothers_aadhaar'])) {
        $mothers_aadhaar = filter_var($_POST['mothers_aadhaar'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Mother's Aadhaar Number:</b></label>&nbsp;<span>".$mothers_aadhaar."</span>
                        </div>";
  }
  if(isset($_POST['mothers_ration'])) {
        $mothers_ration = filter_var($_POST['mothers_ration'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Mother's Ration Card Number:</b></label>&nbsp;<span>".$mothers_ration."</span>
                        </div>";
  }
  if(isset($_POST['mothers_occupation'])) {
        $mothers_occupation = filter_var($_POST['mothers_occupation'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Mother's Occupation:</b></label>&nbsp;<span>".$mothers_occupation."</span>
                        </div>";
  }
  if(isset($_POST['mothers_qualification'])) {
        $mothers_qualification = filter_var($_POST['mothers_qualification'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Mother's Qualification:</b></label>&nbsp;<span>".$mothers_qualification."</span>
                        </div>";
  }
  if(isset($_POST['mothers_income'])) {
        $mothers_income = filter_var($_POST['mothers_income'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Mother's Income:</b></label>&nbsp;<span>".$mothers_income."</span>
                        </div>";
  }
  if(isset($_POST['home_address'])) {
        $home_address = filter_var($_POST['home_address'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Home Address:</b></label>&nbsp;<span>".$home_address."</span>
                        </div>";
  }
  if(isset($_POST['email_id'])) {
        $email_id = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email_id']);
        $email_id = filter_var($email_id, FILTER_VALIDATE_EMAIL);
        $email_body .= "<div>
                          <label><b>Email Id:</b></label>&nbsp;<span>".$email_id."</span>
                        </div>";
  }
  if(isset($_POST['guardians_name'])) {
        $guardians_name = filter_var($_POST['guardians_name'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Guardian's Full Name:</b></label>&nbsp;<span>".$guardians_name."</span>
                        </div>";
  }
  if(isset($_POST['guardians_address'])) {
        $guardians_address = filter_var($_POST['guardians_address'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Guardian's Address:</b></label>&nbsp;<span>".$guardians_address."</span>
                        </div>";
  }
  if(isset($_POST['guardians_contact'])) {
        $guardians_contact = filter_var($_POST['guardians_contact'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Guardian's Contact Number:</b></label>&nbsp;<span>".$guardians_contact."</span>
                        </div>";
  }
  if(isset($_POST['sibling1_name'])) {
        $sibling1_name = filter_var($_POST['sibling1_name'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Sibling1 Full Name:</b></label>&nbsp;<span>".$sibling1_name."</span>
                        </div>";
  }
  if(isset($_POST['sibling1_class'])) {
        $sibling1_class = filter_var($_POST['sibling1_class'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Sibling1 Class:</b></label>&nbsp;<span>".$sibling1_class."</span>
                        </div>";

  }
  if(isset($_POST['sibling2_name'])) {
        $sibling2_name = filter_var($_POST['sibling2_name'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Sibling2 Full Name:</b></label>&nbsp;<span>".$sibling2_name."</span>
                        </div>";
  }
  if(isset($_POST['sibling2_class'])) {
        $sibling2_class = filter_var($_POST['sibling2_class'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Sibling2 Class:</b></label>&nbsp;<span>".$sibling2_class."</span>
                        </div>";
  }
  if(isset($_POST['sibling3_name'])) {
        $sibling3_name = filter_var($_POST['sibling3_name'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Sibling3 Full Name:</b></label>&nbsp;<span>".$sibling3_name."</span>
                        </div>";
  }
  if(isset($_POST['sibling3_class'])) {
        $sibling3_class = filter_var($_POST['sibling3_class'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                          <label><b>Sibling3 Class:</b></label>&nbsp;<span>".$sibling3_class."</span>
                        </div>";
  }


  $recipient = "info@prodigyvidyalay.com";
  $email_body .= "</div>";
  $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $email_id . "\r\n";

  if(mail($recipient,$student_name,$email_body,$headers)){
    echo "<p>Thank you for filling out the Registration Form, $student_name.</p>";
  }
  else{
    echo "<p>We are sorry but the email did not go through. Please try again.</p>";
  }
}
else{
  echo "<p>Something went wrong. Please try again.</p>";
}
?>
