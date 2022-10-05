<?
$check=false;
if (isset($_POST["username"]) and isset($_POST["email_id"]) and isset($_POST["phone"]) and isset($_POST["password"])) {
    $username=$_POST["username"];
    $email_id=$_POST["email_id"];
    $phone=$_POST["phone"];
    $password=$_POST["password"];
    $result=user::signup($username, $email_id, $phone, $password);
    echo $result;
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
  <center><img class="mb-5" src="/images/logo.ico" alt=""height="200" ></center>
  <center><h1 class="h3 mb-3 fw-normal" style="color:beige;">Signup here</h1></center>
    <div class="form-floating">
      <input name="username" type="text" class="form-control" id="floatingInputusername" placeholder="name@example.com" required>
      <label for="floatingInputusername">username</label>
    </div>
    <div class="form-floating">
      <input name="email_id" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input name="phone" type="text" class="form-control" id="floatingInputphone" placeholder="name@example.com" required>
      <label for="floatingInputphone">phone number</label>
    </div>
    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
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
