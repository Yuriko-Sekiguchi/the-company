<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Edit User</title>
</head>
<body>
    <?php
        require "../classes/User.php";
        session_start();
        include "nav.php";

        $user_id = $_GET["user_id"];

        $user = new User;
        $user_data = $user->getUser($user_id);

    ?>

    <div class="container">
        <div class="row-justify-content-center">
            <div class="col-5">
                <form action="../actions/edit-user.php" method="post" class="my-5">

                    <h2 class="display-6">Edit User</h2>

                    <input type="hidden" value="<?= $user_data["id"] ?>" name="user_id">

                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" name="first_name" value="<?= $user_data["first_name"] ?>" id="first-name" class="form-control mb-2">

                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" name="last_name" value="<?= $user_data["last_name"] ?>" id="last-name" class="form-control mb-2">

                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" value="<?= $user_data["username"] ?>" id="username" class="form-control mb-4">

                    <button type="submit" class="btn btn-warning me-2">Save</button>
                    <a href="dashboard.php" class="btn btn-secondary">Cancel</a>

                </form>
            </div>
        </div>
    </div>    

</body>
</html>