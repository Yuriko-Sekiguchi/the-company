<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="../actions/register.php" method="post" class="border rounded-2 my-5 mx-auto w-50 p-3">

        <h1 class="display-6 text-center">REGISTER</h1>

        <label for="first_name" class="form-label">First Name</label>
        <input type="text" name="first_name" id="first_name" class="form-control mb-2">

        <label for="last_name" class="form-label">LAST NAME</label>
        <input type="text" name="last_name" id="last_name" class="form-control mb-2">

        <label for="username" class="form-label fw-bold">Username</label>
        <input type="text" name="username" id="username" class="form-control mb-2">

        <label for="password" class="form-label fw-bold">Password</label>
        <input type="password" name="password" id="password" class="form-control mb-4">

        <button type="submit" class="btn btn-success w-100">Register</button>

        <p class="text-center">
            Registered already? <a href="index.php">Log in</a>
        </p>
    </form>
</body>
</html>