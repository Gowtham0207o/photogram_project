<?php
$check=false;
if (isset($_POST['submit']))
{
$username = $_POST['email_id'];
$password = $_POST['password'];
$result = login_check($username,$password);
$check=true;
}
if ($check){
    if (!$result){
      header('location:/app');
} if($result){
  ?>
  <main class="container">
  <div class="bg-dark p-3"  style=margin:-1px;>
    <h1 style=color:white;>signup failed</h1>
    <p class="lead" style=color:white;> <?echo "$result";?></p>
  </div>
</main>
<? 
}
}

?>
<main class="form-signin">
  <form method="POST" action="login.php">
    <center><img class="mb-5" src="/images/logo.ico" alt=""height="200" ></center>
    <h1 class="h3 mb-3 fw-normal" style="color:beige;">Please sign in</h1>

    <div class="form-floating">
      <input name="email_id" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3" style="color:beige;">
      <label>
        <input type="checkbox" value="remember-me"> Remember me &nbsp;&nbsp;&nbsp;
      </label>
      <a href="#">forgetten password?</a>
    </div>
    <button class="w-100 btn btn-lg btn-primary hvr-shrink" name="submit"type="submt">Sign in</button>
    <br>
    <br>
    <p style="color:beige;">New user??</p>
    <a class="w-80 btn btn-primary hvr-shrink" href="/app/signup.php" role="button">Sign up</a>
    <p class="mt-5 mb-3 text-muted">© 2021-2028</p>
  </form>
</main>









