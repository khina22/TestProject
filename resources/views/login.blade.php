<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f4f4f4;
    }
    
    .login-form {
      max-width: 350px;
      margin: 0 auto;
      padding: 30px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #fff;
      margin-top: 100px;
    }
    
    .login-form h2 {
      text-align: center;
      margin-bottom: 30px;
    }
    
    .form-group label {
      font-weight: bold;
    }
    
    .form-group input[type="text"], .form-group input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }
    
    .form-group input[type="submit"] {
      width: 100%;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      padding: 10px;
      margin-top: 20px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="login-form">
      <h2>Login</h2>
      <form action="#" method="POST">
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
        </div>
        <input type="submit" value="Login">
      </form>
    </div>
  </div>
</body>
</html>
