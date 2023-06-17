<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/lionbars.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
</head>

<body>

    <header class="fixed">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 col-2">
                    <a href="#" id="togglemenu" class="togglemenubar"><i class="fa fa-bars"
                            aria-hidden="true"></i> </a>
                </div>
                <div class="col-md-8 col-8 text-center">
                    <h2 class="pagetitle">Push up notifiaction</h2>
                </div>
            </div>
        </div>
    </header>


    <div class="container-fluid mtop">
        <div class="mainbox">
            <div id="sidemenubox" class="sidebarbox fixed">
                <ul>
                    <li><a href="{{ url('video-list') }}">Video</a></li>

                    <li><a href="{{ url('ready-meal') }}">Ready Meal</a></li>
                    <li><a href="{{ url('recipe') }}">Recipe</a></li>
                    <li><a href="{{ url('product') }}">Product</a></li>
                    <li><a href="{{ url('push-notification') }}" class="active">Push notification</a></li>
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

                <section>

                    <div class="container">
                        <div class="row ">
                            <!-- <div class="col-md-2 text-start">
                            <button type="button" class="btn btn-black btn-round btn-add-lg">
                                <img src="img/icon/add-round.png" alt="">
                            </button>
                        </div> -->
                            <div class="col-md-8 offset-md-2 text-center push-noti">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="neww-tab" data-bs-toggle="tab"
                                            data-bs-target="#news-tab-pane" type="button" role="tab"
                                            aria-controls="news-tab-pane" aria-selected="true">News</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="survey-tab" data-bs-toggle="tab"
                                            data-bs-target="#survey-tab-pane" type="button" role="tab"
                                            aria-controls="survey-tab-pane" aria-selected="false">Survey</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="valuation-tab" data-bs-toggle="tab"
                                            data-bs-target="#valuation-tab-pane" type="button" role="tab"
                                            aria-controls="valuation-tab-pane" aria-selected="false">Valuation</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </section>

                <div class="order">

                    <div class="tab-content mt-3" id="myTabContent">


                        <div class="tab-pane fade show active" id="news-tab-pane" role="tabpanel"
                            aria-labelledby="news-tab" tabindex="0">
                            <div class="row mb-3">
                                <div class="col-md-2 text-start">
                                    <button type="button" class="btn btn-black btn-round btn-add-lg"
                                        data-bs-toggle="modal" data-bs-target="#addnewsModal">
                                        <!-- <img src="img/icon/add-round.png" alt=""> -->
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 my-2">
                                    <div class="card news">
                                        <div class="card-body relative">
                                            <p class="card-text">7 Days</p>
                                            <h6 class="card-title">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                                tenetur porro
                                                laborum ipsa enim. Suscipit ea maxime consectetur sed dolorem?
                                            </h6>
                                            <a href="#" class="close"><i class="fa fa-times"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2">
                                    <div class="card news">
                                        <div class="card-body relative">
                                            <p class="card-text">7 Days</p>
                                            <h6 class="card-title">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                                tenetur porro
                                                laborum ipsa enim. Suscipit ea maxime consectetur sed dolorem?
                                            </h6>
                                            <a href="#" class="close"><i class="fa fa-times"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2">
                                    <div class="card news">
                                        <div class="card-body relative">
                                            <p class="card-text">7 Days</p>
                                            <h6 class="card-title">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                                tenetur porro
                                                laborum ipsa enim. Suscipit ea maxime consectetur sed dolorem?
                                            </h6>
                                            <a href="#" class="close"><i class="fa fa-times"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2">
                                    <div class="card news">
                                        <div class="card-body relative">
                                            <p class="card-text">7 Days</p>
                                            <h6 class="card-title">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                                tenetur porro
                                                laborum ipsa enim. Suscipit ea maxime consectetur sed dolorem?
                                            </h6>
                                            <a href="#" class="close"><i class="fa fa-times"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2">
                                    <div class="card news">
                                        <div class="card-body relative">
                                            <p class="card-text">7 Days</p>
                                            <h6 class="card-title">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                                tenetur porro
                                                laborum ipsa enim. Suscipit ea maxime consectetur sed dolorem?
                                            </h6>
                                            <a href="#" class="close"><i class="fa fa-times"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2">
                                    <div class="card news">
                                        <div class="card-body relative">
                                            <p class="card-text">7 Days</p>
                                            <h6 class="card-title">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                                tenetur porro
                                                laborum ipsa enim. Suscipit ea maxime consectetur sed dolorem?
                                            </h6>
                                            <a href="#" class="close"><i class="fa fa-times"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="survey-tab-pane" role="tabpanel" aria-labelledby="survey-tab"
                            tabindex="0">
                            <div class="row mb-3">
                                <div class="col-md-2 text-start">
                                    <button type="button" class="btn btn-black btn-round btn-add-lg"
                                        data-bs-toggle="modal" data-bs-target="#addsurveyModal">
                                        <!-- <img src="img/icon/add-round.png" alt=""> -->
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 my-2">
                                    <div class="card news">
                                        <div class="card-body relative">
                                            <p class="card-text">Date</p>
                                            <h6 class="card-title">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                                tenetur porro
                                                laborum ipsa enim. Suscipit ea maxime consectetur sed dolorem?
                                            </h6>
                                            <a href="#" class="close"><i class="fa fa-times"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2">
                                    <div class="card news">
                                        <div class="card-body relative">
                                            <p class="card-text">Date</p>
                                            <h6 class="card-title">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                                tenetur porro
                                                laborum ipsa enim. Suscipit ea maxime consectetur sed dolorem?
                                            </h6>
                                            <a href="#" class="close"><i class="fa fa-times"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2">
                                    <div class="card news">
                                        <div class="card-body relative">
                                            <p class="card-text">Date</p>
                                            <h6 class="card-title">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                                tenetur porro
                                                laborum ipsa enim. Suscipit ea maxime consectetur sed dolorem?
                                            </h6>
                                            <a href="#" class="close"><i class="fa fa-times"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2">
                                    <div class="card news">
                                        <div class="card-body relative">
                                            <p class="card-text">Date</p>
                                            <h6 class="card-title">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                                tenetur porro
                                                laborum ipsa enim. Suscipit ea maxime consectetur sed dolorem?
                                            </h6>
                                            <a href="#" class="close"><i class="fa fa-times"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2">
                                    <div class="card news">
                                        <div class="card-body relative">
                                            <p class="card-text">Date</p>
                                            <h6 class="card-title">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                                tenetur porro
                                                laborum ipsa enim. Suscipit ea maxime consectetur sed dolorem?
                                            </h6>
                                            <a href="#" class="close"><i class="fa fa-times"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2">
                                    <div class="card news">
                                        <div class="card-body relative">
                                            <p class="card-text">Date</p>
                                            <h6 class="card-title">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                                tenetur porro
                                                laborum ipsa enim. Suscipit ea maxime consectetur sed dolorem?
                                            </h6>
                                            <a href="#" class="close"><i class="fa fa-times"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="valuation-tab-pane" role="tabpanel"
                            aria-labelledby="valuation-tab" tabindex="0">
                            <div class="row mb-3">
                                <div class="col-md-2 text-start">
                                    <button type="button" class="btn btn-black btn-round btn-add-lg"
                                        data-bs-toggle="modal" data-bs-target="#addvalueModal">
                                        <!-- <img src="img/icon/add-round.png" alt=""> -->
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 my-2">
                                    <div class="card news">
                                        <div class="card-body relative">
                                            <p class="card-text">Date</p>
                                            <h6 class="card-title">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                                tenetur porro
                                                laborum ipsa enim. Suscipit ea maxime consectetur sed dolorem?
                                            </h6>
                                            <a href="#" class="close"><i class="fa fa-times"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2">
                                    <div class="card news">
                                        <div class="card-body relative">
                                            <p class="card-text">Date</p>
                                            <h6 class="card-title">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                                tenetur porro
                                                laborum ipsa enim. Suscipit ea maxime consectetur sed dolorem?
                                            </h6>
                                            <a href="#" class="close"><i class="fa fa-times"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2">
                                    <div class="card news">
                                        <div class="card-body relative">
                                            <p class="card-text">Date</p>
                                            <h6 class="card-title">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                                tenetur porro
                                                laborum ipsa enim. Suscipit ea maxime consectetur sed dolorem?
                                            </h6>
                                            <a href="#" class="close"><i class="fa fa-times"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2">
                                    <div class="card news">
                                        <div class="card-body relative">
                                            <p class="card-text">Date</p>
                                            <h6 class="card-title">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                                tenetur porro
                                                laborum ipsa enim. Suscipit ea maxime consectetur sed dolorem?
                                            </h6>
                                            <a href="#" class="close"><i class="fa fa-times"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2">
                                    <div class="card news">
                                        <div class="card-body relative">
                                            <p class="card-text">Date</p>
                                            <h6 class="card-title">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                                tenetur porro
                                                laborum ipsa enim. Suscipit ea maxime consectetur sed dolorem?
                                            </h6>
                                            <a href="#" class="close"><i class="fa fa-times"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2">
                                    <div class="card news">
                                        <div class="card-body relative">
                                            <p class="card-text">Date</p>
                                            <h6 class="card-title">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                                tenetur porro
                                                laborum ipsa enim. Suscipit ea maxime consectetur sed dolorem?
                                            </h6>
                                            <a href="#" class="close"><i class="fa fa-times"
                                                    aria-hidden="true"></i></a>
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



    <!-- Modal news -->
    <div class="modal fade" id="addnewsModal" tabindex="-1" aria-labelledby="addnewsModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 mb-4">
                            <h1 class="modal-title fs-5 text-center">
                                All customers or individual selections?
                            </h1>
                        </div>
                    </div>
                    <div class="row pushnotifi">
                        <div class="col-sm-12 d-grid mb-3">
                            <button type="button" class="btn btn-dark">All</button>
                        </div>
                        <div class="col-sm-12 d-grid mb-4">
                            <button type="button" class="btn btn-dark">Seperate</button>
                        </div>
                        <!-- <div class="">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                <label class="form-check-label" for="flexCheckIndeterminate"> All </label>
                              </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                <label class="form-check-label" for="flexCheckIndeterminate"> Seperate </label>
                              </div>
                        </div> -->
                        <div class="col-sm-12 d-grid">
                            <button type="button" class="btn btn-login" data-bs-toggle="modal"
                                id="addnewscustomerId">Continue</button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- Modal news end-->



    <!-- Modal news customer -->
    <div class="modal fade" id="addnewscustomerModal" tabindex="-1" aria-labelledby="addnewscustomerModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 mb-4">
                            <h1 class="modal-title fs-5 text-center">
                                All customers or individual selections?
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-12 mb-3">
                            <div class="form-check text-center">
                                <input class="form-check-input" type="checkbox" value="" id=""
                                    checked>
                                <label class="form-check-label" for="">
                                    Checkbox
                                </label>
                            </div>
                            <div class="form-check text-center">
                                <input class="form-check-input" type="checkbox" value="" id="">
                                <label class="form-check-label" for="">
                                    Checkbox
                                </label>
                            </div>
                            <div class="form-check text-center">
                                <input class="form-check-input" type="checkbox" value="" id="">
                                <label class="form-check-label" for="">
                                    Checkbox
                                </label>
                            </div>
                            <div class="form-check text-center">
                                <input class="form-check-input" type="checkbox" value="" id="">
                                <label class="form-check-label" for="">
                                    Checkbox
                                </label>
                            </div>
                            <div class="form-check text-center">
                                <input class="form-check-input" type="checkbox" value="" id="">
                                <label class="form-check-label" for="">
                                    Checkbox
                                </label>
                            </div>
                            <div class="form-check text-center">
                                <input class="form-check-input" type="checkbox" value="" id="">
                                <label class="form-check-label" for="">
                                    Checkbox
                                </label>
                            </div>
                            <div class="form-check text-center">
                                <input class="form-check-input" type="checkbox" value="" id="">
                                <label class="form-check-label" for="">
                                    Checkbox
                                </label>
                            </div>
                            <div class="form-check text-center">
                                <input class="form-check-input" type="checkbox" value="" id="">
                                <label class="form-check-label" for="">
                                    Checkbox
                                </label>
                            </div>
                            <div class="form-check text-center">
                                <input class="form-check-input" type="checkbox" value="" id="">
                                <label class="form-check-label" for="">
                                    Checkbox
                                </label>
                            </div>
                            <div class="form-check text-center">
                                <input class="form-check-input" type="checkbox" value="" id="">
                                <label class="form-check-label" for="">
                                    Checkbox
                                </label>
                            </div>
                        </div>

                        <div class="col-sm-12 d-grid">
                            <button type="button" class="btn btn-login" data-bs-toggle="modal"
                                id="addnewstypeId">Continue</button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- Modal news customer end-->



    <!-- Modal news type-->
    <div class="modal fade" id="addnewstypeModal" tabindex="-1" aria-labelledby="addnewstypeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 mb-4">
                            <h2 class="modal-title fs-5 text-center">
                                Which type should be uploaded?
                            </h2>
                        </div>
                    </div>
                    <div class="row pushnotifi">
                        <div class="col-sm-12 d-grid mb-3">
                            <button type="button" class="btn btn-dark">News</button>
                        </div>
                        <div class="col-sm-12 d-grid mb-3">
                            <button type="button" class="btn btn-dark">Survey</button>
                        </div>
                        <div class="col-sm-12 d-grid mb-4">
                            <button type="button" class="btn btn-dark">Valuation</button>
                        </div>
                        <div class="col-sm-12 d-grid">
                            <button type="button" class="btn btn-login" data-bs-toggle="modal"
                                id="newsaddId">Continue</button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- Modal news type end-->



    <!-- Modal news add type-->
    <div class="modal fade" id="newsaddModal" tabindex="-1" aria-labelledby="newsaddModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 mb-4">
                            <h2 class="modal-title fs-5 text-center">
                                News
                            </h2>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="" placeholder="News">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id=""
                                placeholder="Distance of days">
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-sm-12 d-grid">
                            <button type="button" class="btn btn-login" data-bs-toggle="modal"
                                id="addvaluationId">Send</button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- Modal news add end-->



    <!-- Modal add valuation type-->
    <div class="modal fade" id="addvaluationModal" tabindex="-1" aria-labelledby="addvaluationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 mb-4">
                            <h2 class="modal-title fs-5 text-center">
                                Valuation
                            </h2>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="" placeholder="Enter your ask">
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-sm-12 d-grid">
                            <button type="button" class="btn btn-login" data-bs-toggle="modal"
                                id="addquestionId">Upload</button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- Modal add valuation end-->



    <!-- Modal add question type-->
    <div class="modal fade" id="addquestionModal" tabindex="-1" aria-labelledby="addquestionModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 mb-4">
                            <h2 class="modal-title fs-5 text-center">
                                Which question should be answered
                            </h2>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="" placeholder="Question">
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-sm-12 d-grid">
                            <button type="button" class="btn btn-login" data-bs-toggle="modal"
                                id="addmultichoiceId">Continue</button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- Modal add question end-->



    <!-- Modal add multiple choice-->
    <div class="modal fade" id="addmultichoiceModal" tabindex="-1" aria-labelledby="addmultichoiceModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 mb-4">
                            <h2 class="modal-title fs-5 text-center">
                                Multiple choice
                            </h2>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="" placeholder="Pizza">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="" placeholder="Doner">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="" placeholder="Lamacun">
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-sm-12 d-grid">
                            <button type="button" class="btn btn-login" data-bs-toggle="modal"
                                id="">Upload</button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- Modal add multiple choice end-->



    <!-- Modal Ask survey -->
    <div class="modal fade" id="addsurveyModal" tabindex="-1" aria-labelledby="addsurveyModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 mb-4">
                            <h1 class="modal-title fs-5 text-center">
                                Ask
                            </h1>
                        </div>
                        <div class="col-sm-12 mb-3">

                            <div style="padding: 20px;">
                                <div>
                                    <p>Participating users: <span style="float: right;">100</span></p>
                                    <p>Contain: <span style="float: right;">10</span></p>
                                </div>
                                <div class="valuesurveyrow">
                                    <span>Pizza</span>
                                    <span>25%</span>
                                </div>
                                <div class="valuesurveyrow">
                                    <span>Doner</span>
                                    <span>25%</span>
                                </div>
                                <div class="valuesurveyrow">
                                    <span>Lamacun</span>
                                    <span>30%</span>
                                </div>
                                <div class="valuesurveyrow">
                                    <span>Lamacun</span>
                                    <span>20%</span>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Modal ask survey end-->



    <!-- Modal Ask value -->
    <div class="modal fade" id="addvalueModal" tabindex="-1" aria-labelledby="addvalueModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 mb-4">
                            <h1 class="modal-title fs-5 text-center">
                                Ask
                            </h1>
                        </div>
                        <div class="col-sm-12 mb-3">

                            <div class="starvaules">
                                <span>
                                    <!-- <img src="img/icon/star-outline-gray.png" alt=""> -->
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </span>
                                <span><i class="fa fa-star-o" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star-o" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star-o" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star-o" aria-hidden="true"></i></span>
                            </div>
                            <div style="padding: 20px;">
                                <div>
                                    <p>Participating users: <span style="float: right;"></span></p>
                                    <p>Contain: <span style="float: right;"></span></p>
                                    <p>Average: <span style="float: right;"></span></p>
                                </div>
                                <div class="valuerow">
                                    <span>1</span>
                                    <sapn class="star"><i class="fa fa-star-o" aria-hidden="true"></i></sapn>
                                    <span>30</span>
                                </div>
                                <div class="valuerow">
                                    <span>2</span>
                                    <sapn class="star"><i class="fa fa-star-o" aria-hidden="true"></i></sapn>
                                    <span>30</span>
                                </div>
                                <div class="valuerow">
                                    <span>3</span>
                                    <sapn class="star"><i class="fa fa-star-o" aria-hidden="true"></i></sapn>
                                    <span>30</span>
                                </div>
                                <div class="valuerow">
                                    <span>4</span>
                                    <sapn class="star"><i class="fa fa-star-o" aria-hidden="true"></i></sapn>
                                    <span>30</span>
                                </div>
                                <div class="valuerow">
                                    <span>5</span>
                                    <sapn class="star"><i class="fa fa-star-o" aria-hidden="true"></i></sapn>
                                    <span>30</span>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Modal Ask value end-->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="js/lionbars.js"></script>

    <script>
        $("#addnewscustomerId").on("click", function() {
            $('#addnewscustomerModal').modal('show');
            $('#addnewsModal').modal('hide');
        });

        $("#addnewstypeId").on("click", function() {
            $('#addnewstypeModal').modal('show');
            $('#addnewscustomerModal').modal('hide');
        });

        $("#newsaddId").on("click", function() {
            $('#newsaddModal').modal('show');
            $('#addnewstypeModal').modal('hide');
        });

        $("#addvaluationId").on("click", function() {
            $('#addvaluationModal').modal('show');
            $('#newsaddModal').modal('hide');
        });

        $("#addquestionId").on("click", function() {
            $('#addquestionModal').modal('show');
            $('#addvaluationModal').modal('hide');
        });

        $("#addmultichoiceId").on("click", function() {
            $('#addmultichoiceModal').modal('show');
            $('#addquestionModal').modal('hide');
        });
    </script>

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
