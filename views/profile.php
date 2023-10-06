<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Profile</title>
</head>
<body>
    <?php
        require "../classes/User.php";

        session_start();
        include "nav.php";

        $user = new User;
        $user_data = $user->getUser($_SESSION["user_id"]);
    ?>

    <div class="container">
        <div class="row-justify-content-center">
            <div class="col-8">
                <div class="card my-5">
                    <div class="card-header">
                        <img src="../images/<?= $user_data["photo"] ?>" alt="<?= $user_data["username"] ?>" class="img-thumnail">
                    </div>

                    <form action="../actions/upload-photo.php" method="post" class="card-body" enctype="multipart/form-data">
                        <label for="photo" class="form-label">Choose Photo</label>
                        <input type="file" name="photo" id="photo" class="form-control">

                        <button type="submit" class="btn btn-outline-secondary mt-2">Upload Photo</button>

                        <h3 class="h4 mt-4"><?= $user_data["first_name"]." ".$user_data["last_name"] ?></h3>
                        <h4 class="h5"><?= $user_data["username"] ?></h4>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>