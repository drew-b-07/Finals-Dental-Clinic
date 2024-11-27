<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="icon.png" type="image/x-icon">
  <title>Log In Secretary | Dental Care</title>
  <link rel="stylesheet" href="./src/css/style.css">
</head>
<body>
  <div id="wrapper">
    <header>
      <img src="./src/img/logo.png" alt="logo">
    </header>

    <main>
      <div class="first half">
        <img src="./src/img/icon.png" alt="icon">
      </div>
      <div class="second half">
        <div class="login">
          <div class="top">
            <h1><i>ADMIN</i></h1>
          </div>
          <form action="dashboard_admin/admin/authentication/admin-class.php" method="post">
            <input type="email" name="email" id="email" placeholder="Email" required>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <input type="submit" name="btn-admin-signin" value="Login">
          </form>
        </div>
      </div>
    </main>
  </div>
</body>
</html>