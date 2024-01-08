<?php
    require_once("../../../../wp-load.php");
    global $wpdb;

    $err = '';
    $success = '';
 
    global $wpdb, $PasswordHash, $current_user, $user_ID;
 
    if (isset($_POST['email']) && $_POST['email']) {
        //$pwd1 = $wpdb->escape(trim('@daya2020'));
        $pwd1 = $wpdb->escape(trim($_POST['userpass']));
        $fullname = $wpdb->escape(trim($_POST['full_name']));
        //$last_name = $wpdb->escape(trim($_POST['last_name']));
        $exploadname=explode(' ', $fullname);
        //print_r($exploadname);
        $first_name=$exploadname[0];
        $last_name=$exploadname[1];
       
        $email = $wpdb->escape(trim($_POST['email']));
        $username = $wpdb->escape(trim($_POST['email']));
       
        $veterinary_name = $wpdb->escape(isset($_POST['veterinary_name'])?trim($_POST['veterinary_name']):"");
         $postcode = $wpdb->escape(isset($_POST['postcode'])?trim($_POST['postcode']):"");
      
        $new_user_id = wp_insert_user(
            array(
              'user_login'    => $username,
              'user_pass'     => $pwd1,
              'user_email'    => $email,
              'first_name'    => $first_name,
              'last_name'     => $last_name,
              'user_registered' => date('Y-m-d H:i:s'),
              'role'        => 'subscriber'
               )
        );
  
         
        global $wpdb;
        
        $sub_to_pub =new WP_User($new_user_id);
        ;

     
        if ($new_user_id && !is_wp_error($new_user_id)) {
          
            update_user_meta($new_user_id, 'veterinary_name', $veterinary_name);
            update_user_meta($new_user_id, 'postcode', $postcode);
            add_user_meta($new_user_id, 'wpduact_status', 'active', true);

            // mail functionalonality for usere
            $headers  = "From:  UserInfo<noreply@interpathglobal.com>\n";
            $headers .= "Reply-To:UserInfo<noreply@interpathglobal.com>\r\n";
            $headers .= 'Return-Path: <noreply@interpathglobal.com>'."\r\n";
            $headers .= 'MIME-Version: 1.0' . "\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\n";
            $headers .= "Bcc:testformandmine@gmail.com,p.adhikari@andmine.com\r\n";
            $subject = 'User Information from Interpath ';
         
            $message =   '<html>
                                    <body>

                                Hello '.$fullname.', <br>
                               
                                <p>Your User/Email: '.$username.' </p>
                                <p>Your password: '.$_POST['userpass'].' </p>
                               
                                <p>Login Page <a href="'.home_url().'/professional-login/">Click Here</a></p>
                                <p>Forgot Password <a href="'.home_url().'/forgot-password/">Click Here</a></p>
                                <p>Thanks</p>

                                </body>
                                </html>';

            mail($_POST['email'], $subject, $message, $headers);
           
            $aheaders  = "From:  UserInfo<noreply@interpathglobal.com>\n";
            $aheaders .= "Reply-To:UserInfo<noreply@interpathglobal.com>\r\n";
            $aheaders .= 'Return-Path: <noreply@interpathglobal.com>'."\r\n";
            $aheaders .= 'MIME-Version: 1.0' . "\n";
            $aheaders .= 'Content-type: text/html; charset=iso-8859-1' . "\n";
            $aheaders .= "Bcc:testformandmine@gmail.com,p.adhikari@andmine.com\r\n";
            $asubject = 'User Information from Interpath';
            $amessagea =   '<html>
                                    <body>

                               User Information from Website <br>
                               <p>Full Name: '.$_POST['full_name'].' </p>
                                <p>User/Email: '.$_POST['email'].' </p>
                                <p>Veterinary Clinic: '.$_POST['veterinary_name'].' </p>
                               <p>Postcode: '.$_POST['postcode'].' </p>
                                <p>User/Password: '.$_POST['userpass'].' </p>
                                </body>
                                </html>';

            mail('p.adhikari@andmine.com', $asubject, $amessagea, $aheaders);

            //end for admin email


            echo json_encode(array('result'=>"success",'message'=>'You have been successfully registered. Please Check your email for login details.'));
        } else {
            echo json_encode(array('result'=>"error",'message'=>'Sorry, there is an error on user creation. Please try again.'));
            //$err.= 'Error on user creation.';
        }
    }
