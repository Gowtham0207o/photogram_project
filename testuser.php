<!--
// include 'libs/load.php';

// $user = "fooboo1";
// $pass = isset($_GET['pass']) ? $_GET['pass'] : '';
// $result = null;
// if (isset($_GET['logout'])) {
//     session::destroy();
//     die("Session destroyed, <a href='logintest.php'>Login Again</a>");

// }

// if (session::get('is_loggedin')) {
//     $username = session::get('session_username');
//     $userobj = new User($username);
//     print("Welcome Back ".$userobj->getFirstname());
//     print("<br>".$userobj->getBio());
//     $userobj->setBio("Making new things...");
//     print("<br>".$userobj->getBio());
// } else {
//     printf("No session found, trying to login now. <br>");
//     $result = User::login($user, $pass);
    
//     if ($result) {
//         $userobj = new User($user);
//         echo "Login Success ", $userobj->getUsername();
//         Session::set('is_loggedin', true);
//         Session::set('session_username', $result);
//     } else {
//         echo "Login failed, $user <br>";
//     }
// }

// echo <<<EOL
// <br><br><a href="logintest.php?logout">Logout</a>
// EOL; -->
<?php
include 'libs/load.php';

$value=user_session::authenticate("admin@mail.me","admin");
session::set("session_id","7fe6a2549dd3c145826cec43c82231f2");
print($value."\n");
print(session::get("session_id"));