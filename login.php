<html>
<head>
    <title>User Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type"text/css"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
</head>
  <body>
      <div class="container">
          <div class="login-box">
       <div class="row">
           <div class="col-md-6 login-left">
               <h2>Login Here</h2>
               <form action="profile.php" method="post">
                   <div class="form-group">
                       <label>Username</label>
                       <input type="text" name="user" class="form-control" required>
                   </div>
                   
                    <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="pwd" class="form-control" required>
                   </div>
                   <button type="submit" class="btn btn-primary">Login</button>
               </form>
           </div>
           
            <div class="col-md-6 login-right">
               <h2>Signup Here</h2>
               <form action="signup.php" method="post">
                   <div class="form-group">
                       <label>Username</label>
                       <input type="text" name="user" class="form-control" required>
                   </div>
                   
                    <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="pwd" class="form-control" required>
                   </div>
                   
                   <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="pwd" class="form-control" required>
                   </div>
                   <button type="submit" class="btn btn-primary">Signup</button>
               </form>
           </div>
           </div>
          </div>       
      </div>
    </body>
</html>