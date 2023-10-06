<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="../actions/login.php" method="post" class="border rounded-2 my-5 mx-auto w-50 p-3">
            <h1 class="display-6 text-center">LOGIN</h1>

            <input type="text" name="username" id="username" class="form-control mb-3">
            <input type="text" name="password" id="password" class="form-control mb-4">

            <button type="submit" class="btn btn-primary w-100 mb-3">Log in</button>

            <p class="text-center">
                <a href="register.php" class="text-decoration-none">Create account</a>
            </p>
        </form>
    </div>
</body>
</html>