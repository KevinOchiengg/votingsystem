   <?php
  if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // More headers
    $header = "From:" .$name. "<" .$email.">\r\n";
    $recipient = "kevinochieng932@gmail.com"; 

    $mail = mail($recipient, $subject, $message, $header);

    if ($mail) {
      echo "<script>alert('Mail Send.');</script>";
    }else {
      echo "<script>alert('Mail Not Send.');</script>";
    }
  }
?>