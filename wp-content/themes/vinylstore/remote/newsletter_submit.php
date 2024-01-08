<?php 
require_once("../../../../wp-load.php");

global $wpdb,$post, $ada_ya;

$newsletter_sent_toemail=$ada_ya['newsletter_sent_toemail'];

if($newsletter_sent_toemail!=''){
if(isset($_POST['newsletter_email']) && !empty($_POST['newsletter_email'])) {

$newsletter_email=$_POST['newsletter_email'];
//$res= $wpdb->insert($wpdb->prefix.'newsletter_email',array('newsletter_email'=>$newsletter_email));

$headers  = "From: newsletter_email <".$newsletter_email.">\n"; 
//$headers .= 'Reply-To: s.lejeune@andmine.com' . "\n";
$headers .= 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\n";
 
$to=$newsletter_sent_toemail;

$subject = 'newsletter email';

$message =   "<html>
    <body>
     <p style='font-family:verdana; font-size:12px; margin:30px 0 0 30px; align=center'>
	 <strong> News Letter email </strong> <br>
     
	  <strong>Email: </strong> ".$newsletter_email."<br>
     </p>
    </body>
     </html>";
	
	$res = mail( $to, $subject, $message, $headers );


}


if($res)
{
echo json_encode(array('result'=>"success",'message'=>'Your message sent success'));
}
else
{
	echo json_encode(array('result'=>"error",'message'=>'Sending eroor pelase try again'));	
}
} else {
	echo json_encode(array('result'=>"error",'message'=>'Sending eroor pelase try again'));	
}

?>