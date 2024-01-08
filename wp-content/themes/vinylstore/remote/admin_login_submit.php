<?php
    require_once("../../../../wp-load.php");
    //require_once("../../../../wp-config.php");
    global $wpdb;
    $username=addslashes($_POST['txtUserName']);
    $password=addslashes($_POST['txtPass']);
     //echo $password;
    //$ahpra=addslashes($_POST['ahpra']);
    //$status = get_user_meta($userID, 'user_ahpra', true);
    $user=get_user_by('login', $username);
   
    //$status = get_user_meta($user->ID, 'user_ahpra', true);
    $allowed_roles = array('editor', 'administrator', 'author', 'subscriber', 'contributor');
    $correct=$user && array_intersect($allowed_roles, $user->roles) && wp_check_password($password, $user->data->user_pass, $user->ID);
    // if($user==$username){
    //     $correct=$user && array_intersect($allowed_roles, $user->roles) && wp_check_password($password, $user->data->user_pass, $user->ID);
    // } else {
    //     $correct=$user && array_intersect($allowed_roles, $user->roles) && wp_check_password('notsucess', $user->data->user_pass, $user->ID);
    // }
    if ($correct) {
       // echo "praksh"; exit;
        programmatic_login($username);
        echo json_encode(array("result"=>"success", "message"=>"User and Passsword are  Correct"));
    } else {
        echo json_encode(array("result"=>"error", "message"=>"Login details are Incorrect"));
    }
