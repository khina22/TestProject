<!DOCTYPE html>
<html>
<head>
  <titl> Role Management</title>
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
      <h2>Role Management</h2>
      <form action="create_role" method="POST">
        <div class="form-group">
            @csrf
          <label>Role Name:</label>
          <input type="text" id="role_name" name="role_name" > 
        </div>
        <div class="form-group">
        <label>Status:</label> <br/>
        <label>Active:</label>
        <input type="radio" value='active' id="status1" name="status" > <br/>
        <label>Inactive:</label>
        <input type="radio" value='inactive' id="status2" name="status" >
        <br/>

        </div>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</body>
</html>
