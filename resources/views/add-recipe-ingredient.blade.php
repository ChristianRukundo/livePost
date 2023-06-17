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
                <!-- <div class="col-sm-2 col-2 text-start">
                    <a class="back" href="recipe.blade.php">Back</a>
                </div> -->
                <div class="col-sm-8 col-8">
                </div>
                <div class="col-sm-2 col-2 text-end">
                    <a href="{{ url('recipe') }}" class="btn btn-black btn-round btn-cross-lg">
                        <!-- <img src="img/icon/Close-light.png" alt=""> -->
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div class="container recipe">

        <div class="row my-4">
            <div class="col-lg-8 col-md-10 offset-lg-2 offset-md-1">

                <div class="row ">
                    <div class="col-sm-8 col-10 offset-sm-2">
                        <h1 class="recipe-title">Add Ingredient</h1>
                    </div>
                    <div class="col-sm-2 col-2 text-end">
                        <button type="button" class="btn btn-black btn-round btn-globe-lg" data-bs-toggle="modal"
                            data-bs-target="#addlinkModal">
                            <!-- <img src="img/icon/globe-light.png" alt=""> -->
                            <i class="fa fa-link" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-5 mb-3">
                        <input type="text" class="form-control" id="" placeholder="Ingredient">
                    </div>
                    <div class="col-sm-5 mb-3">
                        <input type="text" class="form-control" id="" placeholder="Gram">
                    </div>
                    <div class="col-sm-2 mb-3 text-end">
                        <button type="button" class="btn btn-theme btn-round btn-add-lg">
                            <!-- <img src="img/icon/Close-light.png" alt=""> -->
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="tablebox">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Link</td>
                                        <td>
                                            <a class="btn-delete btn" href="#">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Link</td>
                                        <td>
                                            <a class="btn-delete btn" href="#">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Link</td>
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
                <div class="row mb-3">
                    <div class="col-sm-8 offset-sm-2 col-12 d-grid">
                        <a href="{{ url('recipe') }}" class="btn btn-login">Upload</a>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Modal Ask survey -->
    <div class="modal fade" id="addlinkModal" tabindex="-1" aria-labelledby="addlinkModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 mb-4">
                            <h1 class="modal-title fs-5 text-center">
                                Add Link
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 mb-3">
                            <div class="addpoints">
                                <input type="Text" class="form-control" id="" placeholder="Add link">
                                <button type="button" class="btn btn-theme" style="min-width: 50px;">
                                    <!-- <img style="width:20px;" src="img/icon/plus-light.png" alt=""> -->
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Modal ask survey end-->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>

</html>
