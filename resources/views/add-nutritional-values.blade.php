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
                <div class="col-md-10">
                </div>
                <div class="col-md-2 text-end">
                    <a href="{{ url('food-overview') }}" class="btn btn-black btn-round btn-cross-lg">
                        <!-- <img src="img/icon/Close-light.png" alt=""> -->
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div class="container profile">

        <div class="row mt-4">
            <div class="col-md-6 offset-md-3">
                <h1 class="profile-title">N&auml;hrwerte Zuweisen</h1>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-md-6 offset-md-3">

                <div class="row ">
                    <div class="col-md-5 mb-2">
                        <input type="text" class="form-control" id="" placeholder="Nutritional values">
                    </div>
                    <div class="col-md-5 mb-2">
                        <input type="text" class="form-control" id="" placeholder="Amount per 100g">
                    </div>
                    <div class="col-md-2 mb-2 text-end">
                        <button type="button" class="btn btn-theme btn-round btn-add-lg">
                            <!-- <img src="img/icon/Close-light.png" alt=""> -->
                            <i class="fas-solid fa-plus" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-12 mb-4">
                        <div class="tablebox">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Calcium</td>
                                        <td>1</td>
                                        <td>
                                            <a class="btn-delete btn" href="#">
                                                <!-- <img src="img/icon/trash-light.png" alt=""> -->
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Carbohydrate</td>
                                        <td>2</td>
                                        <td>
                                            <a class="btn-delete btn" href="#">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-sm-8 offset-sm-2 col-12 d-grid">
                        <a href="{{ url('food-overview') }}" class="btn btn-login">Upload</a>
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
