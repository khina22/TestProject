<!DOCTYPE html>
<html>
<head>
  <titl> Role Management</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f4f4f4;
    }
    
    .registration-form {
      max-width: 350px;
      margin: 0 auto;
      padding: 30px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #fff;
      margin-top: 100px;
    }
    
    .registration-form h2 {
      text-align: center;
      margin-bottom: 30px;
    }
    
    .form-group label {
      font-weight: bold;
    }
    
    .form-group input[type="text"], .form-group input[type="email"], .form-group input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }
    
    .form-group button[type="submit"] {
      width: 100%;
      padding: 10px;
      margin-top: 20px;
      cursor: pointer;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 3px;
    }
    
    .form-group button[type="submit"]:hover {
      background-color: #45a049;
    }

      .container {
      max-width: 350px;
      margin: 0 auto;
      padding: 30px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #fff;
      margin-top: 100px;

    }
    

  </style>
</head>
<body>
  <div class="container">
    <div class="login-form">
      <h2>Edit Role</h2>
      <form action="/update_role" method="post">
        <div class="form-group">
            @csrf
        <label>Role Name:</label>
        <input type="text" value="{{$data->name}} " id="role_name" name="role_name" > 
        <input type="hidden" value="{{$data->id}}" name="record_id" > </div>
        <input type="hidden" value="{{$data->status}}" id="status_id"  > </div>

        <div class="form-group">
        <label>Status:</label> <br/>
        <label>Active:</label>
        
        <input type="radio" value='active' id="status1" name="status" > <br/>
        <label>Inactive:</label>
        <input type="radio" value='inactive' id="status2" name="status" > <br/>


        <script>
          let status_value=document.getElementById("status_id").value;
          //alert(status_value)
          if(status_value=="active"){
            document.getElementById('status1').checked = true;
          }
          else {
            document.getElementById('status2').checked = true;
          }
  
      </script>
        <br/>

        </div>
        <input type="submit" value="Update">
      </form>
    </div>
  </div>
</body>
</html>
