<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(to right, #4facfe, #00f2fe);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      color: #333;
    }
    header {
      text-align: center;
      margin-bottom: 30px;
    }
    h1 {
      font-size: 2.5em;
      margin: 0;
      color: white;
    }
    .login-container {
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      width: 350px;
      text-align: center;
    }
    .login-container input[type="text"],
    .login-container input[type="password"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
      transition: border-color 0.3s;
    }
    .login-container input:focus {
      border-color: #007aff;
      outline: none;
    }
    button {
      width: 100%;
      padding: 10px;
      background-color: #007aff;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 1em;
      transition: background-color 0.3s;
    }
    button:hover {
      background-color: #005bb5;
    }
    .footer {
      margin-top: 20px;
      font-size: 0.9em;
    }
    .footer a {
      color: #007aff;
      text-decoration: none;
      transition: color 0.3s;
    }
    .footer a:hover {
      color: #005bb5;
    }
    @media (max-width: 400px) {
      .login-container {
        width: 90%;
      }
    }
  </style>
</head>
<body>
  <header>
    <h1>Welcome guys!</h1>
  </header>
  
  <div class="login-container">
    <form>
      <input type="text" placeholder="Username" required>
      <input type="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
    <div class="footer">
      <p><a href="#">Forgot Password?</a></p>
      <p><a href="#">Create an Account</a></p>
    </div>
  </div>
</body>
</html>