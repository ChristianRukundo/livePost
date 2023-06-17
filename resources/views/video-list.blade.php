<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <link rel="stylesheet" href="{{ asset('css/lionbars.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="css/lionbars.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script>


</head>

<style>
    .videos {
        margin: 0;
        padding: 0;
        list-style: none;
        display: flex;
        flex-wrap: wrap;
        flex-direction: column;
    }

    .video-item {
        width: 100%;
        margin-bottom: 20px;

    }

    .video-content {
        /* Adjust the styling of video content as needed */
    }

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
                    <h2 class="pagetitle">Videos </h2>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid mtop">
        <div class="mainbox">
            <div id="sidemenubox" class="sidebarbox fixed">
                <ul>
                    <li><a href="{{ url('video-list') }}" class="active">Video</a></li>

                    <li><a href="{{ url('ready-meal') }}">Ready Meal</a></li>
                    <li><a href="{{ url('recipe') }}">Recipe</a></li>
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

                <div class="row mt-1">
                    <div class="col-md-3 col-sm-6 col-6">
                        <div class="custom-select">
                            <select id="categoryFilter" class="form-select" aria-label="Default select example">
                                <option selected>select</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->name }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-6 col-6 text-end">
                        <a href="#" class="btn btn-theme btn-round btn-add-lg mx-2" data-bs-toggle="modal"
                            data-bs-target="#addcategoryModal">
                            <!-- <img src="img/icon/filter-light.png"> -->
                            <i class="fa fa-sitemap" aria-hidden="true"></i>
                            <!-- <i class="fa fa-sort" aria-hidden="true"></i> -->
                        </a>
                        <a href="#" class="btn btn-theme btn-round btn-add-lg" data-bs-toggle="modal"
                            data-bs-target="#addvideoModal">
                            <!-- <img src="img/icon/add-round.png"> -->
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="row mt-3 videos-container">

                    @foreach ($videos as $video)
                        <div class="col-lg-6 my-2 videos">
                            <div class="card video-overview video-item" data-category="{{ $video->category }}">
                                <div class="card-body">
                                    <div class="card-inner align-items-center">
                                        <div class="dragimg">
                                            <!-- <img src="img/icon/dragdrop.png"> -->
                                            <i class="fa fa-th" aria-hidden="true"></i>
                                        </div>
                                        <div class="card-video">
                                            <img style="width: 100%; object-fit:cover" src={{ $video->imgUrl }}
                                                alt="">
                                        </div>

                                        <div class="card-content">
                                            <h4 class="card-title mb-2" title="Tset new 27 edit">{{ $video->title }}
                                            </h4>
                                            <p>{{ $video->updated_at }}</p>
                                        </div>
                                        <div class="buttonbox">
                                            <div class="text-end">
                                                <a class="videoview" href="#">

                                                    <i class="fa fa-eye-slash viewInfoModalBtn" data-bs-toggle="modal"
                                                        data-modal-id="{{ $video->id }}" aria-hidden="true"></i>

                                                </a>
                                                {{-- <a href="#" class="btn btn-primary">
                                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                                </a> --}}

                                                <a href="#" class="videoedit">
                                                    <!-- <img src="img/icon/edit.png"> -->
                                                    <i class="fa fa-pencil viewEditVideoModel"
                                                        data-modal-id="{{ $video->id }}" data-bs-toggle="modal"
                                                        aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="text-end mt-2">
                                                <a href="#" class="videodelete"
                                                    data-video-id="{{ $video->id }}" onclick="deleteVideo(event)">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </a>
                                            </div>

                                            <!-- ... -->
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




                                                function deleteVideo(event) {
                                                    event.preventDefault();
                                                    if (confirm('Are you sure you want to delete this video?')) {
                                                        const link = $(event.currentTarget);
                                                        const videoId = link.attr('data-video-id');
                                                        const url = 'api/v1/videos/' + videoId;


                                                        const videoElement = link.closest('.card.video-overview');

                                                        function adjustLayout() {

                                                            const videoContainer = $('.video-container');

                                                        }

                                                        videoElement.slideUp('fast', function() {

                                                            $.ajax({
                                                                url: url,
                                                                type: 'DELETE',
                                                                headers: {
                                                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                                },
                                                                success: function() {

                                                                    alert('Video deleted!');

                                                                    videoElement.remove();

                                                                    adjustLayout();
                                                                },
                                                                error: function() {

                                                                    alert('An error occurred while deleting the video.');
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
                        </div>
                    @endforeach
                </div>



            </div>
        </div>
    </div>



    {{-- Modal View video information --}}

    <div class="modal fade" id="viewVideoInfoModal" tabindex="-1" aria-labelledby="viewVideoInfoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewVideoInfoModalLabel">Video Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="videoInfoContent"></div>
                </div>
            </div>
        </div>
    </div>
    {{-- end of view video information --}}

    {{-- Modal View Category information --}}

    <div class="modal fade" id="viewCategoryInfoModal" tabindex="-1" aria-labelledby="viewCategoryInfoLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewCategoryInfoLabel">Category Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="categoryInfoContent"></div>
                </div>
            </div>
        </div>
    </div>
    {{-- end of view video information --}}


    <!-- Modal add category -->
    <div class="modal fade" id="addcategoryModal" tabindex="-1" aria-labelledby="addcategoryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 mb-4">
                            <h1 class="modal-title fs-5 text-center">Category List
                                <a href="#" class="addcategory" data-bs-toggle="modal" id="uploadCategoryId">
                                    <!-- <img src="img/icon/plus-light.png" alt=""> -->
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </a>
                            </h1>
                        </div>
                        <div class="col-sm-12 mb-3">
                            @foreach ($categories as $category)
                                <div class="add-cat-list" data-category-id="{{ $category->id }}">
                                    <div class="dragdrop mx-2">
                                        <i class="fa fa-th" aria-hidden="true"></i>
                                    </div>
                                    <div class="draginput mx-1">
                                        <span>{{ $category->name }}</span>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-primary viewEditCategoryModel"
                                            data-bs-toggle="modal" data-modal-id="{{ $category->id }}">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger">
                                            <i class="fa fa-trash-o" aria-hidden="true"
                                                onclick="deleteCategory(event)"></i>
                                        </a>
                                        <a href="#" class="btn btn-default">
                                            {{-- <i class="fa fa-eye" aria-hidden="true"></i> --}}
                                            <i class="fa fa-eye-slash viewCategoryInfoModalBtn" data-bs-toggle="modal"
                                                data-modal-id="{{ $category->id }}" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                            <script>
                                function deleteCategory(event) {
                                    event.preventDefault();
                                    if (confirm('Are you sure you want to delete this category?')) {
                                        const link = $(event.currentTarget);
                                        const categoryId = link.closest('.add-cat-list').data('category-id');
                                        const url = 'api/v1/categories/' + categoryId;

                                        $.ajax({
                                            url: url,
                                            type: 'DELETE',
                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            },
                                            success: function() {
                                                alert('Category deleted!');
                                                link.closest('.add-cat-list').remove();
                                            },
                                            error: function() {
                                                alert('An error occurred while deleting the category.');
                                            }
                                        });
                                    }
                                }
                            </script>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Modal add category end-->


    <!-- Modal upload category -->
    <div class="modal fade" id="uploadcategoryModal" tabindex="-1" aria-labelledby="uploadcategoryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <!-- <h1 class="modal-title fs-5" id="">Upload Category</h1> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row" method="post" action="/add-category" enctype="multipart/form-data">
                        <div class="col-sm-12 mb-4">
                            <h1 class="modal-title fs-5 text-center">Upload Category</h1>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <div class="upload-btn-wrapper d-grid">
                                <button class="btn btn-round"><img src="img/upload-image.png"
                                        alt=""></button>
                                <input type="file" name="image" class="imageInput"
                                    data-preview="previewImage" />
                                <img id="previewImage" src="#" alt="Preview Image"
                                    style="display: none; max-width:100%; max-height: 300px; object-fit: contain;">
                            </div>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <input type="Text" name="name" class="form-control" id=""
                                placeholder="Categoryname">
                        </div>
                        <div class="col-sm-12 mb-3">
                            <textarea class="form-control" name="description" placeholder="Description" id="" rows="3"></textarea>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <div class="upload-btn-wrapper d-grid">
                                <button class="btn btn-round"><img src="img/video.png" alt=""></button>
                                <input type="file" id="videoInput" name="video">
                                <video id="previewVideo" width="400" height="300" controls loop
                                    style="display: none;"></video>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-2 d-grid">
                            <button type="submit" class="btn btn-login" data-bs-dismiss="modal"
                                aria-label="Close">Upload</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal upload category end -->


    <!-- Modal edit category -->
    <div class="modal fade" id="editcategoryModal" tabindex="-1" aria-labelledby="editcategoryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Upload Category</h1> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row" id="edit-form" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="col-sm-12 mb-4">
                            <h1 class="modal-title fs-5 text-center">Edit Category</h1>
                        </div>
                        <div class="col-sm-12 mb-3 relative">
                            <div class="upload-btn-wrapper d-grid">
                                <button class="btn btn-round"><img src="img/upload-image.png"
                                        alt=""></button>
                                <input type="file" name="image" class="imageInput"
                                    data-preview="previewImage" />
                                <img id="previewImage2" src="#" alt="Preview Image"
                                    style="display: none; max-width:100%; max-height: 300px; object-fit: contain;">

                            </div>
                            <a href="#" class="edit-category">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="col-sm-12 mb-3 relative">
                            <input type="Text" name="name" class="form-control" id=""
                                placeholder="Name">
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
                        <div class="col-sm-12 mb-3 relative">
                            <div class="upload-btn-wrapper d-grid">
                                <button class="btn btn-round"><img src="img/video.png" alt=""></button>
                                <input type="file" name="video" />
                            </div>
                            <a href="#" class="edit-category">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="col-sm-12 mb-2 d-grid">
                            <button type="submit" class="btn btn-login">Edit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal edit category end -->


    <!-- Modal add video -->
    <div class="modal fade" id="addvideoModal" tabindex="-1" aria-labelledby="addvideoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row" method="post" action="/add-video" enctype="multipart/form-data">
                        @csrf
                        <div class="col-sm-12 mb-4">
                            <h1 class="modal-title fs-5 text-center">Video Upload</h1>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <div class="upload-btn-wrapper d-grid">
                                <button class="btn btn-round"><img src="img/upload-image.png"
                                        alt=""></button>
                                <input type="file" name="image" class="imageInput"
                                    data-preview="previewImage2" />
                                <img id="previewImage2" src="#" alt="Preview Image"
                                    style="display: none; max-width:100%; max-height: 300px; object-fit: contain;">
                            </div>
                        </div>
                </div>
                <div class="col-sm-12 mb-3">
                    <input type="Text" name="title" class="form-control" id="" placeholder="Title">
                </div>
                <div class="col-sm-12 mb-3">
                    <textarea class="form-control" placeholder="Description" name="description" id="" rows="3"></textarea>
                </div>

                <div class="col-sm-12 mb-3">
                    <select class="form-select form-control" aria-label="Default select example" name="category">

                        <option selected>Select category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->name }}">{{ $category->name }}</option>
                        @endforeach

                    </select>

                </div>

                <div class="col-sm-12 text-center">
                    <div class="form-check form-switch mb-3" style="display: inline-block;">
                        {{-- <input class="form-check-input" type="checkbox" role="switch"
                            id="multiple-choice-checkbox">
                        <label class="form-check-label" for="multiple-choice-checkbox">Multiple choice</label> --}}

                    </div>
                </div>
                <div class="col-sm-12 mb-2 d-grid">
                    <button type="submit" class="btn btn-login" data-bs-toggle="modal"
                        id="multiplechoiceId">Continue</button>
                </div>
                </form>
            </div>
        </div>


    </div>
    {{-- Modal edit the video --}}
    <div class="modal fade" id="editVideoModal" tabindex="-1" aria-labelledby="addvideoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row" id="edit-form" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="col-sm-12 mb-4">
                            <h1 class="modal-title fs-5 text-center">Edit Video</h1>
                        </div>
                        <div class="col-sm-12 mb-3">

                            <label for="img" class="btn btn-round">
                                <img id="previewImage3" class="previewImage" src="img/upload-image.png"
                                    style="width: 100%; height: 400px; object-fit: contain;" alt="Click to add image">
                            </label>
                            <input type="file" style="display: none;" class="imageInput" id="img"
                                data-preview="previewImage3" name="image" />


                        </div>

                        <div class="col-sm-12 mb-3">
                            <input type="Text" name="title" class="form-control" id=""
                                placeholder="Title">
                        </div>
                        <div class="col-sm-12 mb-3">
                            <textarea class="form-control" placeholder="Description" name="description" id="" rows="3"></textarea>
                        </div>

                        <div class="col-sm-12 mb-3">
                            <select class="form-select form-control" aria-label="Default select example"
                                name="category">

                                <option selected>Select category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->name }}">{{ $category->name }}</option>
                                @endforeach

                            </select>

                        </div>

                        <div class="col-sm-12 text-center">
                            <div class="form-check form-switch mb-3" style="display: inline-block;">
                                {{-- <input class="form-check-input" type="checkbox" role="switch"
                                    id="multiple-choice-checkbox">
                                <label class="form-check-label" for="multiple-choice-checkbox">Multiple choice</label> --}}

                            </div>
                        </div>
                        <div class="col-sm-12 mb-2 d-grid">
                            <button type="submit" class="btn btn-login" data-bs-toggle="modal"
                                id="multiplechoiceId">Update
                                video</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    </div>

    </div>
    </div>
    </div>

    </div>
    </div>
    <!-- Modal add video next end-->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="js/lionbars.js"></script>




    <script>
        $("#uploadCategoryId").on("click", function() {
            $('#uploadcategoryModal').modal('show');
            $('#addcategoryModal').modal('hide');
        });


        var videos = @json($videos); // Convert the PHP $videos array to JSON

        $('.viewInfoModalBtn').on("click", function() {
            var videoId = $(this).data('modal-id');
            var video = videos.find(function(video) {
                return video.id === videoId; // Find the video in the JavaScript array based on the ID
            });

            var videoInfoContent =
                "<img src='" + video.imgUrl + "' alt='Video Image' class='video-image'>" +
                "Video ID: " + videoId + "<br>" +
                "Title:       " + video.title + "<br>" +
                "Category:    " + video.category + "<br>" +
                "Description: " + video.description;
            $('#viewVideoInfoModal .modal-body').html(videoInfoContent);
            $('#viewVideoInfoModal').modal('show');
        });



        var categories = @json($categories); // Convert the PHP $videos array to JSON

        $('.viewCategoryInfoModalBtn').on("click", function() {
            var categoryId = $(this).data('modal-id');
            var category = categories.find(function(category) {
                return category.id === categoryId; // Find the video in the JavaScript array based on the ID
            });


            console.log(category);
            var categoryInfoContent =
                "<h3>Category Image</h3>" +
                "<img src='" + category.imgUrl + "' alt='category Image' class='video-image'>" +
                "<h3>Category Video</h3>" +
                "<div class='video-container'>" +
                "<video src='" + category.videoUrl + "' class='video-image'  controls></video>" +
                "</div>" +
                "category ID: " + category.id + "<br>" +
                "Category:    " + category.name + "<br>" +
                "Description: " + category.description;
            $('#viewCategoryInfoModal .modal-body').html(categoryInfoContent);
            $('#viewCategoryInfoModal').modal('show');
            $('#addcategoryModal').modal('hide');
        });



        var videos = @json($videos); // Convert the PHP $videos array to JSON

        $('.viewEditVideoModel').on("click", function() {
            var videoId = $(this).data('modal-id');
            var video = videos.find(function(video) {
                return video.id === videoId; // Find the video in the JavaScript array based on the ID
            });

            $('#editVideoModal input[name="title"]').val(video.title);
            $('#editVideoModal textarea[name="description"]').val(video.description);
            $('#editVideoModal select[name="category"]').val(video.category);
            $('#editVideoModal #previewImage2').attr('src', video.imgUrl);
            $('#editVideoModal #edit-form').attr('action', '/edit-video/' + video.id);
            $('#editVideoModal').modal('show');
        });




        var categories = @json($categories); // Convert the PHP $videos array to JSON

        $('.viewEditCategoryModel').on("click", function() {
            var categoryId = $(this).data('modal-id');
            var category = categories.find(function(category) {
                return category.id === categoryId; // Find the video in the JavaScript array based on the ID
            });

            $('#editcategoryModal input[name="name"]').val(category.name);
            $('#editcategoryModal textarea[name="description"]').val(category.description);
            $('#editcategoryModal #edit-form').attr('action', '/edit-category/' + category.id);
            $('#editcategoryModal').modal('show');
            $('#addcategoryModal').modal('hide');
        });



        $("#multiplechoiceId").on("click", function() {
            $('#multiplechoiceModal').modal('show');
            $('#addvideoModal').modal('hide');
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


        const videoInput = document.getElementById('videoInput');
        const previewVideo = document.getElementById('previewVideo');

        videoInput.addEventListener('change', function(event) {
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();

                reader.addEventListener('load', function() {
                    previewVideo.src = reader.result;
                    previewVideo.style.display = 'block';
                });

                reader.readAsDataURL(file);
            } else {
                previewVideo.src = '';
                previewVideo.style.display = 'none';
            }
        });
    </script>


</body>

</html>
