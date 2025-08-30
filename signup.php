<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-900">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php include_once "dependencies.php"; ?>
</head>

<body class="h-full">
    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-900">
  <body class="h-full">
  ```
-->
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" class="mx-auto h-10 w-auto" />
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-white">Sign up</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form action="/php-mysql-training/auth/Register.php" method="POST" class="space-y-6">
                <div>
                    <label for="full_name" class="block text-sm/6 font-medium text-gray-100">Full Name</label>
                    <div class="mt-2">
                        <input required id="full_name" type="text" name="fullName" required autocomplete="name" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />

                        <?php if (isset($_SESSION['errors']['fullName'])): ?>
                            <p class="mt-1 text-sm text-red-500">
                                <?php echo $_SESSION['errors']['fullName']; ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>

                <?php include_once 'email-field.php'; ?>

                <?php include_once 'password-field.php'; ?>

                <div>
                    <label for="confirm_password" class="block text-sm/6 font-medium text-gray-100">Confirm Password</label>
                    <div class="mt-2">
                        <input id="confirm_password" type="password" name="confirmPassword" required class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
                    </div>
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-500 px-3 py-1.5 text-sm/6 font-semibold text-white hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Sign up</button>
                </div>
            </form>

            <a href="/php-mysql-training/signin.php" class="text-white">Sign in here!</a>
        </div>
    </div>
</body>

</html>