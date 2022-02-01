<?
$check=false;
if (isset($_POST["username"]) and isset($_POST["email_id"]) and isset($_POST["phone"]) and isset($_POST["password"])) {
    $username=$_POST["username"];
    $email_id=$_POST["email_id"];
    $phone=$_POST["phone"];
    $password=$_POST["password"];
    $result=signup($username, $email_id, $phone, $password);
    $check=true;
}
if ($check) {
  if (!$result){
    ?><main class="container">
    <div class="bg-dark p-4"  style=margin:-1px;>
      <h1 style=color:white;>signup success</h1>
      <p class="lead" style=color:white;> now you can signin and enjoy our app please use the below signin</p>
      <a class="btn btn-lg btn-primary" href="/app/login.php" role="button">sign in »</a>
    </div>
  </main>
  <?
  } else{
    ?>
    <main class="container">
    <div class="bg-dark p-3"  style=margin:-1px;>
      <h1 style=color:white;>signup failed</h1>
      <p class="lead" style=color:white;> <?echo "$result";?></p>
    </div>
  </main>
 <? }

}

  
?>
<main class="form-signup">
  <form method="POST" action="signup.php">
    <center><img class="mb-5" src="https://lh3.googleusercontent.com/bzbvHcAVmGzFDwYtzzPk-IpYmjzv6ToZ5eoS6DJzsDXlTRAWkB2BysUfjAcOfSUUSV6kw-iuzOjtX7MP0GYy2fZ_AqhewY3Z4OE6qwJSH-ajN0Bu0stJT-IeOIizf5Hy6puRVbD9MHf9iXFht6tIbJoe-l5-EHC5Kxr2NYKuaR9gPF7S0zILLcdElvidwZ7NrLgN3Dxhsa_2pj7p55Sptvvfds7v4rlzNpal3-0vLv4v3Fy0eJWZXQRyjlBjPwMC7U3gDOj-cUwnIDWTyGdY-Mnn-wa6sxufuNk5Mn5I6W78-pr0HMwntkU0j7InwldUvLvvasUF3kZXqdo9PZhQqcd7o6fF17CvUHaIOL7G--VGLS_10fXoAKN98oGwwt2fHc13WkPDyBdJ7KdAWZvMP029tLPy1JHcntnOpEwknMR6xMaFFuNkuzNCb1iqFOI6tvqEtSPR9r_cV6ZuERMW1wiu6Mg8DVu1cNwK_3R2EXBdijqc0czsABvZnn0s4TrG3MjsR0VxhmoPQ0ZVkOogcIasy9aFF8aQ7qPpoFpSppQIe546ijkejieQJA7fPip-RgZM0pFgRBBjWC6eaqMZ6lkyFVMnyCRJ4WScu525TtJ8Xirl_mfzisU7k4OeLqeJqsgAQoD2v8Zb3l1kbwZpRFt_yBzhXVnwe4V8HuZUGQmRr7BADmsz2vB2NM6NuU-ZnstS8TDQ_KKkV8cZUT3T2Mo=s250-k-rw-no" alt=""height="175" ></center>
    <center><h1 class="h3 mb-3 fw-normal" style="color:beige;">Signup here</h1></center>
    <div class="form-floating">
      <input name="username" type="text" class="form-control" id="floatingInputusername" placeholder="name@example.com">
      <label for="floatingInputusername">username</label>
    </div>
    <div class="form-floating">
      <input name="email_id" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input name="phone" type="text" class="form-control" id="floatingInputphone" placeholder="name@example.com">
      <label for="floatingInputphone">phone number</label>
    </div>
    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
</div>
    <button class="w-100 btn btn-lg btn-primary hvr-shrink"type="submit">Sign up</button>
    <br>
    <br>
    <p style="color:beige;">already a user??</p>
    <a class="w-80 btn btn-primary hvr-shrink" href="/app/login.php" role="button">Sign in</a>
    <p class="mt-5 mb-3 text-muted">© 2021-2028</p>
  </form>
</main>
