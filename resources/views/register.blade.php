<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
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
  </style>

<!-- @include('common.css')  -->
  
</head>


<body>
  <div class="container">
    <div class="registration-form">
      <h2>Registration</h2>

      <!-- <form action="/create_role" method="POST"> -->
        <form action="/register_new_user" method="POST">
        @csrf
        <div class="dropdown">
        <label for="role">Select a Role:</label>
            <select name="role" id="role">
            <option value="">Select a Role </option>
                <!-- This Laravel Blade directive starts a loop to iterate over the $response_data array, which should contain the role data retrieved from the controller. -->
            @foreach ($response_data as $i=> $data)  
                <!-- this line generates an option for each role in the $response_data array.  -->
                <option value="{{$data->id}}">  
                {{$data->name}}</option>
            @endforeach
          </select>       
        </div>
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
        </div>
      
        <button style="background-color:beige;">Register</button>
      </form>
    </div>
  </div>
</body>

</html>
