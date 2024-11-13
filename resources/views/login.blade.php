<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url('{{ asset('images/background.gif') }}');
      background-size: cover;
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-container {
      background-color: #2a2a72;
      border-radius: 15px;
      padding: 40px;
      width: 500px;
      height: 400px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .login-container input[type="text"],
    .login-container input[type="password"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: none;
      border-radius: 5px;
    }

    .login-container .remember-me {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
    }

    .login-container .remember-me input {
      margin-right: 10px;
    }

    .login-container .actions {
      display: flex;
      justify-content: space-between;
      margin-bottom: 15px;
      
    }
    .login-container .actions:hover {
        color: #6a6aff;
    }

    .login-container button {
      width: 100%;
      padding: 10px;
      background-color: #4e4eff;
      color: #fff;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }
    

    .login-container button:hover {
      background-color: #6a6aff;
    }

    .login-container .create-account {
      text-align: center;
      margin-top: 20px;
    }

    .login-container .create-account a {
      color: #b3b3ff;
      text-decoration: none;
    }

    .login-container .create-account a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>LOGIN</h2>
    <form>
      <input type="text" placeholder="User Name" required>
      <input type="password" placeholder="Password" required>
      <div class="remember-me">
        <input type="checkbox" id="remember-me">
        <label for="remember-me">Remember me</label>
      </div>
      <div class="actions">
        <a href="#" style="color:white;">Forgot password?</a>
      </div>
      <button type="submit">Login</button>
    </form>
    <div class="create-account">
      <a href="#">Create Account</a>
    </div>
  </div>
</body>
</html>
