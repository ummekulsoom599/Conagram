<?php

require_once 'functions.php';
require_once 'send_code.php';


//SIGN UP management
if(isset($_GET['signup'])){
$response=validateSignupForm($_POST);
if($response['status']){

    if(createUser($_POST)){

    header('location:../../?login&newuser');

    }else{
        echo "<script>alert('Something is wrong')</script>";
    }

}else{
    $_SESSION['error']=$response;
    $_SESSION['formdata']=$_POST;
    header("location:../../?signup");
}

}

//LOG IN management
if(isset($_GET['login'])){


    $response=validateLoginForm($_POST);
    if($response['status']){
       $_SESSION['Auth']= true;
       $_SESSION['userdata'] = $response['user'];

       if($response['user']['acc_status']==0){

        $_SESSION['code']=$code = rand(111111, 999999);
        sendCode($response['user']['email'],'Verify your email',$code);

       }


       header("location:../../"); 

    }else{
        $_SESSION['error']=$response;
        $_SESSION['formdata']=$_POST;
        header("location:../../?login");
    } 
    }
    
    if(isset($_GET['resend_code'])){

            $_SESSION['code']=$code = rand(111111, 999999);
            sendCode($_SESSION['userdata']['email'],'Verify your email',$code);
          header('location:../../?resended');
           
    }

    if(isset($_GET['verify_email'])){
        $user_code = $_POST['code'];
        $code = $_SESSION['code'];
        if($code==$user_code){
        if(verifyEmail($_SESSION['userdata']['email'])){

         header('location:../../');

        }else{
            echo "something is wrong";
        }
 
        }else{
            $response['msg']='incorrect verifictaion code !';
            if(!$_POST['code']){
             $response['msg']='enter 6 digit code !';
 
            }
            $response['field']='email_verify';
         $_SESSION['error']=$response;
         header('location:../../');
 
        }

    }
       
    //Logout user

  if(isset($_GET['logout'])){

    session_destroy();
    header('location:../../');
  }

  if(isset($_GET['updateprofile'])){

  $response=validateUpdateForm ($_POST,$FILES['profile_picture']);
  if($response['status']){

    if(updateProfile ($_POST, $_FILES['profile_picture'])){
        header("location:../../?editprofile&success");
        
    }else{

        echo "something went wrong";
    }

}else{
    $_SESSION['error']=$response;
    header("location:../../?editprofile");
}

}

  //for add post management

  if(isset($_GET['addpost'])){
   $response= validatePostImage($_FILES['post_img']);

   if($response['status']){
   
    if(createPost($_POST,$_FILES['post_img'])){
        header("location:../../?new_post_added");
    }
    else{
        echo "something went wrong";
    }

    }else{
    $_SESSION['error']=$response;
    header("location:../../");
    }
  }
