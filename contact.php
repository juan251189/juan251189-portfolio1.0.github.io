
<?php

/*
 // define variables and set to empty values
$name_error = $lastname_error = $email_error = $message_error = $phone_error = $url_error = "" ;
 $name = $lastname = $email = $phone = $message  = $url = "";

 //form is submitted with post method

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $name_error = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $name_error= "Only letters and white space allowed";
    }
  }

  if(empty($_POST["lastname"])) {
    $lastname_error  = "Last Name is required";
  } else {
    $lastname = test_input($_POST["lastname"]);
    //check if name only contains letter and whitespace
    if(!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $lastname_error= "Only letters and white space allowed";
 }
}


if (empty($_POST["email"])) {
  $email_error = "Email is required";
} else {
  $email = test_input($_POST["email"]);
  // check if e-mail address is well-formed
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email_error= "Invalid email format";
  }
}

  if (empty($_POST["phone"])){
    $phone_error = "Phone is required";
  } else {
    $phone = test_input($_POST["phone"]);
    // check if email address is well formed


    if(!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i",$phone)){
      $phone_error="Invalid phone number";
    }
}

if (empty($_POST["message"])) {
  $message= "";
  $message_error="Please write your message";
}else {
  $message = test_input($_POST["message"]);
 }
}

function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
}

*/




// define variables and set to empty values
$name_error= $email_error= $message_error= $lastname_error = "";
$name =  $lastname = $email = $message = $comment = $website  =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $name_error= "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $name_error = "Only letters and white space allowed";
    }
  }



  if (empty($_POST["lastname"])) {
    $lastname_error= "Last Name is required";
  } else {
    $lastname = test_input($_POST["lastname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
      $lastname_error= "Only letters and white space allowed";
    }
  }




  if (empty($_POST["email"])) {
    $email_error= "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_error = "Invalid email format";
    }
  }


  if (empty($_POST["message"])) {
    $message = "";
  } else {
    $message = test_input($_POST["message"]);
  }


if ($name_error == '' and $lastname_error == '' and $email_error == ''){
    $message_body = "";
    unset($_POST['submit']);
    foreach ($_POST as $key => $value) {
      $message_body .= "$key: $value\n";
    }

    $to = 'juan251189@hotmail.com';
    $subjet = 'Contact Form Submit';

    if (mail($to, $subjet, $message)){
      $success = "Message sent, Thank you for contacting us!";
      $name =  $lastname = $email = $message = $comment = $website  =  "";    }

}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
