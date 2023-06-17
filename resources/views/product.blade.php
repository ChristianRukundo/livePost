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

<body>

    <header class="fixed">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 col-2 text-start order-first order-lg-last order-sm-first">
                    <a href="#" id="togglemenu" class="togglemenubar"><i class="fa fa-bars"
                            aria-hidden="true"></i> </a>
                </div>
                <div class="col-md-8 col-8 text-center">
                    <h2 class="pagetitle">Product</h2>
                </div>
                <div class="col-md-2 col-2 text-start order-last order-lg-first order-sm-last">
                    <a href="userdashboard.blade.php" class="btn btn-dashboard">
                        <!-- <img src="img/icon/menu.png" alt=""> -->
                        <i class="fa fa-th-large" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid mtop order">
        <div class="mainbox">
            <div id="sidemenubox" class="sidebarbox  fixed">
                <ul>
                    <li><a href="{{ url('video-list') }}">Video</a></li>

                    <li><a href="{{ url('ready-meal') }}">Ready Meal</a></li>
                    <li><a href="{{ url('recipe') }}">Recipe</a></li>
                    <li><a href="{{ url('product') }}" class="active">Product</a></li>
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


                <div class="row mt-1">
                    <div class="col-md-4 col-2 mb-3 text-start">
                        <a href="#" class="btn btn-theme btn-round btn-add-lg" data-bs-toggle="modal"
                            data-bs-target="#addordercategoyModal">
                            <!-- <img src="img/icon/filter-light.png" alt=""> -->
                            <i class="fa fa-sitemap" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="col-md-4 col-8 mb-3">
                        <div class="input-group ">
                            <input type="text" class="form-control" id="product-search" placeholder="Find product"
                                aria-label="">
                        </div>
                    </div>
                    <div class="col-md-4 col-2 mb-3 text-end">
                        <button type="button" class="btn btn-black btn-round btn-add-lg" data-bs-toggle="modal"
                            data-bs-target="#addorderModal">
                            <!-- <img src="img/icon/add-round.png" alt=""> -->
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>

                <div class="row mt-2" id="product-container">
                    @foreach ($products as $product)
                        <div class="col-md-4 my-2 product-container">
                            <div class="card food-overview product-overview">
                                <div class="card-body">
                                    <div class="card-inner">
                                        <div class="card-img">
                                            <img src="{{ $product->imgUrl }}" alt="">
                                        </div>
                                        <div class="card-content">
                                            <h6 class="card-title mb-4 ">{{ $product->title }}</h6>
                                            <a href="#" class="videodelete card-link trash-top  red"
                                                data-product-id="{{ $product->id }}" onclick="deleteProduct(event)">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="card-link edit">
                                                <!-- <img src="img/icon/edit.png" alt=""> -->
                                                <i class="fa fa-pencil" style="margin: 1rem;" aria-hidden="true"></i>
                                            </a>
                                            <span class="price">{{ $product->price }}€</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <script>
                        $(document).ready(function() {
                            // Initialize Masonry
                            var grid = new Masonry('.videos-container', {
                                itemSelector: '.video-item',
                                columnWidth: '.video-item',
                                percentPosition: true
                            });

                            $('#categoryFilter').on('change', function() {
                                var selectedCategory = $(this).val();
                                $('.video-item').hide(); // Hide all video items

                                if (selectedCategory && selectedCategory !== 'select') {
                                    $('.video-item[data-category="' + selectedCategory + '"]').show();
                                } else {
                                    $('.video-item').show();
                                }

                                grid.layout();
                            });
                        });




                        function deleteProduct(event) {
                            event.preventDefault();
                            if (confirm('Are you sure you want to delete this product?')) {
                                const link = $(event.currentTarget);
                                const productId = link.attr('data-product-id');
                                const url = 'api/v1/products/' + productId;


                                const productElement = link.closest('.card.product-overview');

                                function adjustLayout() {

                                    const productContainer = $('.product-container');

                                }

                                productElement.slideUp('fast', function() {

                                    $.ajax({
                                        url: url,
                                        type: 'DELETE',
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        },
                                        success: function() {

                                            alert('product deleted!');

                                            productElement.remove();

                                            adjustLayout();
                                        },
                                        error: function() {

                                            alert('An error occurred while deleting the product.');
                                        }
                                    });
                                });
                            }
                        }
                    </script>
                </div>


            </div>
        </div>
    </div>




    <!-- Modal add order -->
    <div class="modal fade" id="addorderModal" tabindex="-1" aria-labelledby="addorderModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row" class="row" action="add-product" method="post"
                        enctype="multipart/form-data">
                        <div class="col-sm-12 mb-2">
                            <h1 class="modal-title fs-5 text-center">Upload order</h1>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <div class="upload-btn-wrapper d-grid">
                                        <button class="btn btn-round"><img src="img/upload-image.png"
                                                alt=""></button>
                                        <input type="file" name="image" class="imageInput"
                                            data-preview="previewImage" />
                                        <img id="previewImage" src="#" alt="Preview Image"
                                            style="display: none; max-width:100%; max-height: 300px; object-fit: contain;">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <input type="Text" class="form-control" name="title" id=""
                                        placeholder="Title">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="description" placeholder="Description" id="" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <select class="form-select form-control" name="category"
                                        aria-label="Default select example">
                                        <option selected>order category 1</option>
                                        <option value="category2">order category 2</option>
                                        <option value="category3">order category 3</option>
                                        <option value="category4">order category 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <input type="number" name="price" class="form-control" id=""
                                        placeholder="Price">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-12 d-grid">
                                    <button type="submit" class="btn btn-login">Upload</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- Modal add order end-->


    <!-- Modal add oreder category -->
    <div class="modal fade" id="addordercategoyModal" tabindex="-1" aria-labelledby="addordercategoryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 mb-2">
                            <h1 class="modal-title fs-5 text-center">Upload category</h1>
                        </div>
                        <div class="col-sm-12 text-center">

                            <div class="row">
                                <div class="col-sm-10 mb-3">
                                    <input type="text" class="form-control" id=""
                                        placeholder="Category">
                                </div>
                                <div class="col-md-2 mb-3 text-end">
                                    <button type="button" class="btn btn-theme btn-round btn-add-lg">
                                        <!-- <img src="img/icon/add-round.png" alt=""> -->
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <div class="subcategorybox">
                                        <!-- <img src="img/icon/trash-red.png" alt=""> -->
                                        <a href="#" class="deletesubcat">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </a>
                                        <div class="subcat">
                                            <input type="text" class="form-control" id=""
                                                placeholder="Subcategory">
                                        </div>
                                    </div>
                                    <div class="subcategorybox">
                                        <a href="#" class="deletesubcat">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </a>
                                        <div class="subcat">
                                            <input type="text" class="form-control" id=""
                                                placeholder="Subcategory">
                                        </div>
                                    </div>
                                    <div class="subcategorybox">
                                        <a href="#" class="deletesubcat">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </a>
                                        <div class="subcat">
                                            <input type="text" class="form-control" id=""
                                                placeholder="Subcategory">
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <button type="button" class="btn btn-theme btn-round btn-add-lg">
                                            <!-- <img src="img/icon/add-round.png" alt=""> -->
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Modal add oreder category -->


    <script>
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


        const searchInput = document.getElementById('product-search');
        searchInput.addEventListener('input', searchProducts)

        function searchProducts() {
            const input = document.getElementById('product-search');
            const container = document.getElementById('product-container');

            const query = input.value.toLowerCase();

            // Get all the recipe cards
            const products = container.getElementsByClassName('card');

            // Loop through each recipe card and hide/show based on the search query
            for (let i = 0; i < products.length; i++) {
                const product = products[i];
                const title = product.querySelector('.card-title').textContent.toLowerCase();

                if (title.includes(query)) {
                    product.style.display = 'block'; // Show the product card
                } else {
                    product.style.display = 'none'; // Hide the product card
                }
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="js/lionbars.js"></script>


    <script type="text/javascript">
        $("#togglemenu").click(function() {
            $("#sidemenubox").toggle(300);
        });

        // $(document).ready(function() {
        //     $('#accordionSidebar').lionbars();
        // });
    </script>

</body>

</html>
