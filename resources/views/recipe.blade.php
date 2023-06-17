<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <link rel="stylesheet" href="css/lionbars.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<style>
    .video-image {
        width: 100%;
        height: 500px;
        border-radius: 1rem;
        object-fit: contain;

    }
</style>

<body>

    <header class="fixed">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 col-2">
                    <a href="#" id="togglemenu" class="togglemenubar"><i class="fa fa-bars"
                            aria-hidden="true"></i> </a>
                </div>
                <div class="col-md-8 col-8 text-center">
                    <h2 class="pagetitle">Recipe</h2>
                </div>
                <div class="col-md-2 col-2 text-start">
                    <!-- <button type="button" class="btn btn-black btn-circle btn-menu-lg">
                        <img src="img/icon/menu.png" alt="">
                    </button> -->
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid mtop recipe">
        <div class="mainbox">
            <div id="sidemenubox" class="sidebarbox fixed">
                <ul>
                    <li><a href="{{ url('video-list') }}">Video</a></li>

                    <li><a href="{{ url('ready-meal') }}">Ready Meal</a></li>
                    <li><a href="{{ url('recipe') }}" class="active">Recipe</a></li>
                    <li><a href="{{ url('product') }}">Product</a></li>
                    <li><a href="{{ url('push-notification') }}">Push notification</a></li>
                    <li><a href="{{ url('recommendation') }}">recommendation</a></li>
                    <li><a href="{{ url('restaurant-profile-setting') }}">Administration</a></li>
                    <li><a href="{{ url('manage-point-system') }}">Manage point system</a></li>
                    <li><a href="{{ url('applicant-list') }}">Applicant list</a></li>
                    <li><a href="{{ url('accounting-system') }}">Account setting</a></li>
                    <li><a href="{{ url('allergy-list') }}">Allergy list</a></li>
                    <li><a href="{{ url('customer-list') }}">Customer list</a></li>
                </ul>
            </div>
            <div class="contentbox">

                <div class="modal fade" id="viewRecipeInfoModal" tabindex="-1"
                    aria-labelledby="viewRecipeInfoModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="viewVideoInfoModalLabel">Video Information</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div id="recipeInfoContent"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="editcategoryModal" tabindex="-1" aria-labelledby="editcategoryModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                            <div class="modal-header">
                                <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Upload Category</h1> -->
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="row" id="edit-form" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="col-sm-12 mb-4">
                                        <h1 class="modal-title fs-5 text-center">Edit Recipe</h1>
                                    </div>
                                    <div class="col-sm-12 mb-3 relative">
                                        <div class="upload-btn-wrapper d-grid">
                                            <button class="btn btn-round"><img src="img/upload-image.png"
                                                    alt=""></button>
                                            <input type="file" name="image" />
                                        </div>
                                        <a href="#" class="edit-category">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-12 mb-3 relative">
                                        <input type="Text" name="title" class="form-control" id=""
                                            placeholder="title">
                                        <a href="#" class="edit-category">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-12 mb-3 relative">
                                        <input type="Text" name="oxydationType" class="form-control"
                                            id="" placeholder="oxydationType">
                                        <a href="#" class="edit-category">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-12 mb-3 relative">
                                        <input type="Text" name="tag" class="form-control" id=""
                                            placeholder="Tag">
                                        <a href="#" class="edit-category">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-12 mb-3 relative">
                                        <textarea class="form-control" placeholder="Description" name="description" rows="3"></textarea>
                                        <a href="#" class="edit-category">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                    </div>

                                    <div class="col-sm-12 mb-2 d-grid">
                                        <button type="submit" class="btn btn-login">Update recipe</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row mt-1">
                    <div class="col-md-4 col-sm-6 col-7 offset-md-4">
                        <div class="input-group">
                            <input id="recipe-search" type="text" class="form-control"
                                placeholder="Find your recipe" aria-label="">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-5 text-end">
                        <a href="/create-recipe" class="btn btn-theme btn-round btn-add-lg mx-2">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </a>
                        <a href="/add-recipe-ingredient" class="btn btn-black btn-round btn-add-lg">
                            <i class="fa fa-asterisk" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="row mt-3" id="recipe-container">
                    @foreach ($recipes as $recipe)
                        <div class="col-md-4 my-2">
                            <div class="card food-overview">
                                <div class="card-body">
                                    <div class="card-inner">
                                        <div class="card-img">
                                            <img src="{{ $recipe->imgUrl }}" alt="">
                                        </div>
                                        <div class="card-content">
                                            <h5 class="card-title mb-4">{{ $recipe->title }}</h5>
                                            <span class=""> <strong> </strong> </span>
                                            <div>
                                                <a href="#" class="card-link red"
                                                    data-video-id="{{ $recipe->id }}"
                                                    onclick="deleteRecipe(event)">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" class="card-link" style="margin: 2rem">
                                                    <i class="fa fa-eye-slash viewRecipeInfoModalBtn"
                                                        data-bs-toggle="modal" data-modal-id="{{ $recipe->id }}"
                                                        aria-hidden="true"></i>
                                                </a>

                                                <a href="#">
                                                    <i class="fa fa-pencil viewEditCategoryModel"
                                                        data-bs-toggle="modal"
                                                        data-modal-id="{{ $recipe->id }}"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="js/lionbars.js"></script>

    <script>
        function deleteRecipe(event) {
            event.preventDefault();
            if (confirm('Are you sure you want to delete this video?')) {
                const link = $(event.currentTarget);
                const recipeId = link.attr('data-video-id');
                const url = 'api/v1/recipes/' + recipeId;

                const foodElement = link.closest('.card.food-overview');

                function adjustLayout() {

                    const videoContainer = $('.recipe-container');

                }

                foodElement.slideUp('fast', function() {

                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function() {

                            alert('Meal deleted!');

                            foodElement.remove();

                            adjustLayout();
                        },
                        error: function() {

                            alert('An error occurred while deleting the video.');
                        }
                    });
                });
            }
        }



        let recipes = @json($recipes)

        $('.viewRecipeInfoModalBtn').on("click", function() {
            var recipeId = $(this).data('modal-id');
            var recipe = recipes.find(function(recipe) {
                return recipe.id === recipeId; // Find the video in the JavaScript array based on the ID
            });


            var recipeContent =
                "<h3>Recipe Image</h3>" +
                "<img src='" + recipe.imgUrl + "' alt='category Image' class='video-image'>" +
                "<h3>Category Video</h3>" +
                "recipe ID: " + recipe.id + "<br> <br>" +
                "Title:    " + recipe.title + "<br> <br>" +
                "Description: " + recipe.description + "<br> <br>" +
                "tag : " + recipe.tag + "<br> <br>" +
                "oxydationType: " + recipe.oxydationType;
            $('#viewRecipeInfoModal .modal-body').html(recipeContent);
            $('#viewRecipeInfoModal').modal('show');
        });
    </script>
    <script type="text/javascript">
        $("#togglemenu").click(function() {
            $("#sidemenubox").toggle(300);
        });


        const imageInputs = document.querySelectorAll('.imageInput');

        imageInputs.forEach(function(imageInput) {
            const previewId = imageInput.dataset.preview;
            const previewImage = document.getElementById(previewId);

            imageInput.addEventListener('change', function(event) {
                const file = event.target.files[0];

                if (file) {
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
        });



        const searchInput = document.getElementById('recipe-search');
        searchInput.addEventListener('input', searchRecipes)

        function searchRecipes() {
            // Get the search input element and the recipe container element
            const input = document.getElementById('recipe-search');
            const container = document.getElementById('recipe-container');

            // Get the search query entered by the user
            const query = input.value.toLowerCase();

            // Get all the recipe cards
            const recipes = container.getElementsByClassName('card');

            // Loop through each recipe card and hide/show based on the search query
            for (let i = 0; i < recipes.length; i++) {
                const recipe = recipes[i];
                const title = recipe.querySelector('.card-title').textContent.toLowerCase();

                if (title.includes(query)) {
                    recipe.style.display = 'block'; // Show the recipe card
                } else {
                    recipe.style.display = 'none'; // Hide the recipe card
                }
            }
        }


        var categories = @json($recipes); // Convert the PHP $videos array to JSON

        $('.viewEditCategoryModel').on("click", function() {
            var categoryId = $(this).data('modal-id');
            var category = categories.find(function(category) {
                return category.id === categoryId; // Find the video in the JavaScript array based on the ID
            });

            $('#editcategoryModal input[name="title"]').val(category.title);
            $('#editcategoryModal input[name="oxydationType"]').val(category.oxydationType);
            $('#editcategoryModal textarea[name="description"]').val(category.description);
            $('#editcategoryModal input[name="tag"]').val(category.tag);
            $('#editcategoryModal #edit-form').attr('action', '/edit-recipe/' + category.id);
            $('#editcategoryModal').modal('show');
            $('#addcategoryModal').modal('hide');
        });
    </script>


</body>

</html>
