<!DOCTYPE html>
<html>
  <head>
    <script src="aa/ouical.js"></script>
    <link rel="stylesheet" href="aa/main.css">
    <title>OuiCal Example</title>
  </head>
	
  <body>
    <div class="new-cal"></div>
  <script>
      var myCalendar = createCalendar({
        options: {
          class: 'my-class',
          id: 'my-id'                               // You need to pass an ID. If you don't, one will be generated for you.
        },
        data: {
          title: 'Java Guru',     // Event title
          start: new Date('March 28, 2018 15:00'),   // Event start date
          duration: 120,                            // Event duration (IN MINUTES)
          end: new Date('March 28, 2018 18:00'),     // You can also choose to set an end time.
                                                    // If an end time is set, this will take precedence over duration
          address: 'The internet',
          description: 'Get on the front page of HN, then prepare for world domination.'
        }
      });
      document.querySelector('.new-cal').appendChild(myCalendar);
  </script>
  </body>
</html>

<?php


// echo $_GET['accept'];
// //send_mail();
// $con=mysqli_connect("localhost","root","","evm") or die("couldn't to the  server");

// $orderid=$_GET['accept'];

// $data=mysqli_query($con,"SELECT * FROM temporary_table where event_no=$orderid");


// if(($data) && (mysqli_num_rows($data) >0)){

// //echo "hi";

// //getting data and generating a row
// while($row=mysqli_fetch_assoc($data))
// {
	
// //$order=$row['event_no'];    ///event id
// $studentid=$row['studentid'];
// //echo $studentid;
// $data1=mysqli_query($con,"SELECT * FROM council where cid=$studentid");

// 		while($row1=mysqli_fetch_assoc($data1))
// 		{
			
// 			//$order=$row['event_no'];    ///event id
// 			$email=$row1['email'];

// 			echo $email;
// 			email($email);





// 		}		

// }

// }

require 'php-textlocal-sms/mysms.php';


function email($email)
{
	require_once('PHPMailer-master/PHPMailerAutoload.php');
		$mail = new PHPMailer();
		//$mail->CharSet =  "utf-8";
		$mail->IsSMTP();
		$mail->SMTPDebug= "1";  
		// enable SMTP authentication
		$mail->SMTPAuth = true;    
		$mail->SMTPSecure = "ssl";       
		$mail->Host = "smtp.gmail.com";     
		$mail->Port = "465";    
		$mail->IsHTML(true);
		// GMAIL username
		$mail->Username = "rsny14@gmail.com";
		// GMAIL password
		$mail->Password = "yravi7367";       // add the password

		// sets GMAIL as the SMTP server
		$mail->setFrom("rsny14@gmail.com");

		// set the SMTP port for the GMAIL server

		// $mail->From='rajeev11430@gmail.com';
		// $mail->FromName='Rajeevkumar Yadav';
		  // recepient address          this is functions one parameter
		$mail->Subject  =  'SMTP Mail Testing';

		$mail->Body    = 'Hi there , This is just a testing mail from php';    // you can give subject also as parameter
		$mail->AddAddress($email); 
		if($mail->Send())
		{
			echo "Message was  Send :)";             // specific messages to be sent as a parameter
			//header('Location:index.php');
		}
		else
		{
			echo "Mail Error - >".$mail->ErrorInfo;
		}
}


?>



