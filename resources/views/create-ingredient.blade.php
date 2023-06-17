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
                <div class="col-sm-10 col-10">
                </div>
                <div class="col-sm-2 col-2 text-end">
                    <a href="food-overview.blade.php" class="btn btn-black btn-round btn-cross-lg">
                        <!-- <img src="img/icon/Close-light.png" alt=""> -->
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div class="container profile">


        <div class="row my-4">
            <div class="col-lg-6 col-md-8 offset-lg-3 offset-md-2">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="profile-title">Lebensmittel anlegen</h2>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-12 mb-2">
                                <input type="text" class="form-control" id="" placeholder="Title">
                            </div>
                            <div class="col-sm-12 mb-2">
                                <input type="text" class="form-control" id="" placeholder="Unit">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-2">
                            <div class="upload-btn-wrapper d-grid">
                                <button class="btn btn-round"><img src="img/upload-image.png" alt=""></button>
                                <input type="file" name="myfile" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-6 mb-2">
                        <div class="">
                            <textarea class="form-control" id="" placeholder="Description" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-12 mb-2">
                                <input type="text" class="form-control" id=""
                                    placeholder="Calories per 100g">
                            </div>
                            <div class="col-sm-12 mb-2">
                                <input type="text" class="form-control" id="" placeholder="Weight in gram">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-sm-12 col-12 d-grid">
                        <a href="{{ url('add-nutritional-values') }}" type="button"
                            class="btn btn-login">N&auml;hrwerte
                            zuweisen</a>
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
