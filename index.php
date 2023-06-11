
<?php
require_once'assets/php/functions.php';


if(isset($_SESSION['Auth']))
    $user = getUser($_SESSION['userdata']['id']);
   


$pagecount = count($_GET);


//to manage pages

if(isset($_SESSION['Auth']) && $user ['acc_status']==1 && !$pagecount){
    displayPage('header',['page_title'=>'Home']);
    displayPage('nav');
    displayPage('wall');

}elseif (isset($_SESSION['Auth']) && $user ['acc_status']==0 && !$pagecount){
    displayPage('header',['page_title'=>'Email Verification']);
    displayPage('verify_email');

}elseif (isset($_SESSION['Auth']) && $user ['acc_status']==2 && !$pagecount){
    displayPage('header',['page_title'=>'Blocked']);
    displayPage('blocked');    

} elseif(isset($_SESSION['Auth']) && isset($_GET['editprofile']) && $user ['acc_status']==1 ){
    displayPage('header',['page_title'=>'Edit Profile']);
    displayPage('nav');
    displayPage('edit_profile');

} elseif(isset($_SESSION['Auth']) && isset($_GET['u']) && $user ['acc_status']==1 ){
    $profile=getUserByUsername(($_GET['u']));
    if(!$profile){
        displayPage('header',['page_title'=>'User not found']);
        displayPage('nav');
        displayPage('user_not_found');
    }


}   elseif(isset($_GET['signup'])){
    displayPage('header',['page_title'=>'Conagram - SignUp']);
    displayPage('signup');

}elseif(isset($_GET['login'])){
    displayPage('header',['page_title'=>'Conagram - Login']);
    displayPage('login');
}else{

    if(isset($_SESSION['Auth'])  && $user ['acc_status']==1 ){
    displayPage('header',['page_title'=>'Home']);
    displayPage('nav');
    displayPage('wall');
    
}elseif (isset($_SESSION['Auth']) && $user ['acc_status']==0){
    displayPage('header',['page_title'=>'Email Verification']);
    displayPage('verify_email');

}elseif (isset($_SESSION['Auth']) && $user ['acc_status']==2){
    displayPage('header',['page_title'=>'Blocked']);
    displayPage('blocked');
}else{
    displayPage('header',['page_title'=>'Conagram - Login']);
    displayPage('login');
}
}



displayPage('footer');
unset($_SESSION['error']);
unset($_SESSION['formdata']); 