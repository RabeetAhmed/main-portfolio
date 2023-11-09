<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception; 
 // servername => localhost
 // username => root
 // password => empty
 // database name => staff
 $conn = mysqli_connect("localhost", "u301512443_rabeet", "Rabeet@0846551", "u301512443_portfolio");
  
 // Check connection
 if($conn === false){
     die("ERROR: Could not connect. "
         . mysqli_connect_error());
 }
  if(isset($_POST["submit"]))
  {
// Taking all 5 values from the form data(input)
$username =  $_POST['nameContact'];
$email =  $_POST['emailContact'];
$msg = $_POST['messageContact'];
// $phone = $_POST['phone'];
// $date = $_POST['date'];
// $sq = $_POST['sq'];
// $service = $_POST['service'];

$sql=mysqli_query($conn,"SELECT * FROM `contact`");
 if($sql==true)
 {
// Performing insert query execution
// here our table name is college
$sql1 =mysqli_query($conn,"INSERT INTO `contact`(`name`, `email`, `msg`) VALUES ('$username','$email','$msg')");

if($sql1)
{
  $mailto = "rabeet0846551@gmail.com , rabeet.office.guest@gmail.com";  //My email address
 //getting customer data
 $name = $_POST['username']; //getting customer name
 $fromEmail = "master@rabeetahmed.social"; //getting customer email
//  $phone = $_POST['phone']; //getting customer Phome number
 $subject = $_POST['nameContact']; //getting subject line from client
 $subject2 = "Message From Client of - Portfolio"; // For customer confirmation
 
  //Email body I will receive
 $message = "Cleint Name: " . $username . "\n"
 . "Client Email :" . $email . "\n"
 . "Client Message: " . $msg . "\n" . $_POST['messageContact']
 . "Phone Number: " . $phone . "\n";
 
 //Message for client confirmation
 $message2 = 
 "Client Name: ". $username."\n".
 "Email: ".$email."\n\n". 
 "Client Message: ".$msg."\n" . 
 "Regards,"."\n".
 "Rabeet Ahmed";
 
 //Email headers
 $headers = "From: " . $fromEmail; // Client email, I will receive
 $headers2 = "From: " . $mailto; // This will receive client
 
 //PHP mailer function
 
  $result1 = mail($mailto, $subject, $message, $headers); // This email sent to My address
  $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client
 
  //Checking if Mails sent successfully
 
  if ($result1 && $result2) {
        header("Location:../thankyou.html?value=1");
  } else {
    header("Location:../index.php?value=2");
  }  
}
else{
    header("Location:../index.php?value=2");
}
 }
// if(mysqli_query($conn, $sql)){
//     echo "<h3>data stored in a database successfully."
//         . " Please browse your localhost php my admin"
//         . " to view the updated data</h3>";

//     echo nl2br("\n$first_name\n $last_name\n "
//         . "$gender\n $address\n $email");
// } else{
//     echo "ERROR: Hush! Sorry $sql. "
//         . mysqli_error($conn);
// }
  }
 
  
 // Close connection
 mysqli_close($conn);
 ?>