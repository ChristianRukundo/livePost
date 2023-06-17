<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fonts/stylesheet.css">
</head>

<body>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    <a class="back" href="recipe.blade.php">Back</a>
                </div>
                <div class="col-md-10">
                </div>
                <div class="col-md-1 text-end">
                    <a href="recipe.blade.php" type="button" class="btn btn-black btn-round btn-cross-lg">
                        <!-- <img src="img/icon/Close-light.png" alt=""> -->
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div class="container recipe">
        <div class="row mt-4">
            <div class="col-md-6 offset-md-3">
                <h2 class="profile-title">Upload the picture of your day</h2>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-md-6 offset-md-3">
                <div class="row mb-4">
                    <div class="col-sm-12">
                        <div class="upload-btn-wrapper d-grid">
                            <button class="btn btn-round"><img src="img/upload-image.png" alt=""></button>
                            <input type="file" name="myfile" />
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-sm-12">
                        <input type="password" class="form-control" id="" placeholder="Tag">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-sm-12 col-12 d-grid mt-2">
                        <a href="create-recipe.blade.php" type="button" class="btn btn-login">Create recipe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>

</html>
