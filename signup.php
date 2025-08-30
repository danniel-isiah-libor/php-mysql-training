<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-900">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once 'dependencies.php'; ?>
    <title>Register</title>
</head>
<body class="h-full">
    <!-- <h1> Register </h1>

    <label>Full Name:</label>
    <input type="text" placeholder="Full Name">
    
    <br>
    
    <label>Email:</label>
    <input type="email" placeholder="Email">

    <br>

    <label>Password:</label>
    <input type="password" placeholder="Password">

    <br>

    <label>Confirm Password:</label>
    <input type="password" placeholder="Confirm Password">

    <br>

    <button>Register</button> -->


    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-900">
  <body class="h-full">
  ```
-->
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img src="/php-mysql-training/imgs/eye.jpg" alt="Your Company" class="mx-auto h-10 w-auto" />
    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-white">Register a New Account</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form action="/php-mysql-training/auth/register.php" method="POST" class="space-y-6">
    
      <?php include_once 'username-field.php'; ?>

      <?php include_once 'email-field.php'; ?>

      <?php include_once 'password-field.php'; ?>

      <div>
        <div class="flex items-center justify-between">
          <label for="confirmpassword" class="block text-sm/6 font-medium text-gray-100">Confirm Password</label>
        </div>
        <div class="mt-2">
          <input id="confirmpassword" type="password" name="confirmpassword" required class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
          <?php if (isset($_SESSION['errors']['confirmpassword'])): ?>
              <p class="mt-1 text-sm text-red-500">
                <?php echo $_SESSION['errors']['confirmpassword']; ?>
              </p>
          <?php endif; ?>
        </div>
      </div>

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-500 px-3 py-1.5 text-sm/6 font-semibold text-white hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Register</button>
      </div>
    </form>
  </div>
</div>
</body>
</html>