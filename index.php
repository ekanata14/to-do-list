<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List | Landing Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="d-flex justify-content-center">
    <div class="h-100 d-flex justify-content-center align-items-center flex-column w-25">
        <div class="auth-wrapper bg-primary d-flex flex-column align-items-center p-4 text-center rounded">
            <h1>Welcome to Your Sh#t List</h1>
            <form action="sys/login.php" method="post" class="w-75">
                <div class="mt-3 input-group d-flex flex-column align-items-center">
                    <label for="username" class="mb-3 fs-5">Username</label>
                    <input type="text" name="username" class="w-100 rounded" style="height: 40px;" required autofocus>
                </div>
                <div class="mt-3 input-group d-flex flex-column align-items-center">
                    <label for="password" class="mb-3 fs-5">Password</label>
                    <input type="password" name="password" class="w-100 rounded" style="height: 40px;" required autofocus>
                </div>
                <button type="submit" class="mt-4 btn btn-success fs-6">Login</button>
            </form>
            <a href="pages/regisPage.php" class="btn btn-warning mt-3">Wanna make an account?</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>