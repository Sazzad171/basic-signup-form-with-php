<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dynamic Signup Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <style>
    .login-res-admin {
      margin: 10vh 0;
    }
    .login-res-admin a {
      color: #031936;
    }
    .login-res-admin .logo {
      text-align: center;
    }
    .login-res-admin .logo img {
      width: 80px;
      height: auto;
    }
    .login-res-admin .logo h5 {
      margin: 16px 0;
    }
    .login-res-admin .full-login {
      width: 40%;
      margin: 0 auto;
      background: #E5E5E5;
      border-radius: 8px;
      padding: 2.5rem 3rem;
    }
    .login-res-admin form {
      margin: 2rem 0;
    }
    .login-res-admin .submit-btn {
      color: #fff;
      background-image: linear-gradient(to right, #1A437B, #1D245C);
    }
    .login-res-admin .submit-btn:hover {
      box-shadow: none;
    }
    @media (max-width: 767px) {
      .login-res-admin .full-login {
        width: 90%;
      }
    }
  </style>
</head>
<body>
  <section class="login-res-admin">
    <div class="full-login">
     <div class="logo">
       <h5>Signup For New Account</h5>
     </div>
     <form action="action.php" method="POST">
        <div class="form-group">
          <input type="text" class="form-control" name="fName" placeholder="Enter first name">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="lName" placeholder="Enter second name">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="userName" placeholder="Enter username">
        </div>
       <div class="form-group">
         <input type="email" class="form-control" name="email" placeholder="Enter email">
       </div>
       <div class="form-group">
         <input type="password" class="form-control" name="passowrd" placeholder="Enter password">
       </div>
       <div class="form-group">
         <input type="radio" name="gender" value="Male" id="">Male
         <input type="radio" name="gender" value="Femlae" id="">Female
       </div>
       <div class="form-group">
         <input type="date" name="bDate" id="">
       </div>
       <button type="submit" class="form-control submit-btn">Submit</button>
     </form>
    </div>
  </section>
</body>
</html>