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
                <div class="col-sm-2 col-2">
                    <a class="back" href="recipe.blade.php">Back</a>
                </div>
                <div class="col-sm-8 col-8">
                </div>
                <div class="col-sm-2 col-2 text-end">
                    <a href="recipe.blade.php" class="btn btn-black btn-round btn-cross-lg">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div class="container recipe">

        <form class="row my-4" action="/add-recipe" method="post" enctype="multipart/form-data">
            <div class="col-lg-6 col-md-8 offset-lg-3 offset-md-2">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="recipe-title">Create Recipes</h2>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-6 mb-3">
                        <div class="upload-btn-wrapper d-grid" style="height: 200px;">
                            <img id="previewImage" src="#" alt="Preview Image"
                                style="display: none; max-width:100%; max-height: 100%; object-fit: contain;">
                            <button class="btn btn-round">
                                <img src="img/upload-image.png" alt="" id="placeHolder"></button>
                            {{-- <input type="file" name="image" /> --}}
                            <input type="file" name="image" id="imageInput" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-12 mb-3">
                                <input type="text" class="form-control" name="title" id=""
                                    placeholder="Ttile">
                            </div>
                            <div class="col-sm-12 mb-3">
                                <input type="text" class="form-control" name="tag" id=""
                                    placeholder="Tag">
                            </div>
                            <div class="col-sm-12 mb-3">
                                <input type="text" class="form-control" name="oxydationType" id=""
                                    placeholder="Oxydation type">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 mb-3">
                        <textarea class="form-control" name="description" placeholder="Description" id="" rows="3"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-12 d-grid">
                        <button type="submit" class="btn btn-login">Add Recipe</button>
                    </div>
                </div>
            </div>
        </form>

    </div>

    <script>
        const imageInput = document.getElementById('imageInput');
        const previewImage = document.getElementById('previewImage');
        const placeHolder = document.getElementById('placeHolder');

        imageInput.addEventListener('change', function(event) {
            const file = event.target.files[0];

            if (file) {
                placeHolder.style.display = 'none';
                const reader = new FileReader();

                reader.addEventListener('load', function() {
                    previewImage.src = reader.result;
                    previewImage.style.display = 'block';
                });

                reader.readAsDataURL(file);
            } else {
                previewImage.src = '#';
                previewImage.style.display = 'none';
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>

</html>
