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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
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
                    <h2 class="pagetitle">Applicant list</h2>
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
                    <li><a href="{{ url('recipe') }}">Recipe</a></li>
                    <li><a href="{{ url('product') }}">Product</a></li>
                    <li><a href="{{ url('push-notification') }}">Push notification</a></li>
                    <li><a href="{{ url('recommendation') }}">recommendation</a></li>
                    <li><a href="{{ url('restaurant-profile-setting') }}">Administration</a></li>
                    <li><a href="{{ url('manage-point-system') }}">Manage point system</a></li>
                    <li><a href="{{ url('applicant-list') }}" class="active">Applicant list</a></li>
                    <li><a href="{{ url('accounting-system') }}">Account setting</a></li>
                    <li><a href="{{ url('allergy-list') }}">Allergy list</a></li>
                    <li><a href="{{ url('customer-list') }}">Customer list</a></li>
                </ul>
            </div>


            <div class="contentbox">

                <section>
                    <div class="">
                        <div class="row ">
                            <div class="col-md-8 offset-md-2 text-center applicantlist">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="coach-tab" data-bs-toggle="tab"
                                            data-bs-target="#coach-tab-pane" type="button" role="tab"
                                            aria-controls="coach-tab-pane" aria-selected="true">In Progress </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="restaurant-tab" data-bs-toggle="tab"
                                            data-bs-target="#restaurant-tab-pane" type="button" role="tab"
                                            aria-controls="restaurant-tab-pane" aria-selected="false">Completed</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="notdone-tab" data-bs-toggle="tab"
                                            data-bs-target="#notdone-tab-pane" type="button" role="tab"
                                            aria-controls="notdone-tab-pane" aria-selected="false">Not Done</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="order">


                    <div class="row mt-3">
                        <div class="col-md-12">

                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active" id="coach-tab-pane" role="tabpanel"
                                    aria-labelledby="coach-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-sm-6 col-6 text-start">
                                            <div class="sorting">
                                                <div class="dropdown">
                                                    <button class="btn btn-sort dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Sort by
                                                        <!--<img src="img/icon/sort.png" alt="">--> <i
                                                            class="fa fa-sort-amount-asc" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('get-applicant-list', ['sort_by' => 'best_results']) }}">Best
                                                                results</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('get-applicant-list', ['sort_by' => 'surname']) }}">Surname</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('get-applicant-list', ['sort_by' => 'role']) }}">Role</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-6 text-end">
                                            <!-- <a href="#"><img style="width: 30px;" src="img/icon/filterline.png" alt=""></a> -->
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        @foreach ($applicants as $applicant)
                                            @if ($applicant->status == 'In Progress')
                                                <div class="col-sm-6">
                                                    <div class="card applicantlist my-2">
                                                        <div class="card-body">
                                                            <div class="card-inner">
                                                                <div>
                                                                    <div class="card-img">
                                                                        <img src="{{ $applicant->imgUrl }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="card-content">
                                                                    <h4 class="card-title mb-2">
                                                                        {{ $applicant->firstname }}</h4>
                                                                    <p>{{ $applicant->phone_number }}</p>
                                                                    <p class="calendar">
                                                                        <img class="width18"
                                                                            src="img/icon/calendar.png"
                                                                            alt="">
                                                                        {{ explode(',', $applicant->availability)[0] }}
                                                                    </p>
                                                                    <p class="calendar">
                                                                        <img class="width18"
                                                                            src="img/icon/calendar.png"
                                                                            alt="">
                                                                        {{ explode(',', $applicant->availability)[1] }}
                                                                    </p>
                                                                </div>
                                                                <a href="#" class="cross"><i
                                                                        class="fa fa-times"
                                                                        aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>


                                <div class="tab-pane fade" id="restaurant-tab-pane" role="tabpanel"
                                    aria-labelledby="restaurant-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-sm-6 col-6 text-start">
                                            <div class="sorting">
                                                <div class="dropdown">
                                                    <button class="btn btn-sort dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Sort by
                                                        <!--<img src="img/icon/sort.png" alt="">--> <i
                                                            class="fa fa-sort-amount-asc" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('get-applicant-list', ['sort_by' => 'best_results']) }}">Best
                                                                results</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('get-applicant-list', ['sort_by' => 'surname']) }}">Surname</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('get-applicant-list', ['sort_by' => 'role']) }}">Role</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-6 text-end">
                                            <!-- <a href="#"><img style="width: 30px;" src="img/icon/filterline.png" alt=""></a> -->
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        @foreach ($applicants as $applicant)
                                            @if ($applicant->status == 'Completed')
                                                <div class="col-sm-6">
                                                    <div class="card applicantlist my-2">
                                                        <div class="card-body">
                                                            <div class="card-inner">
                                                                <div>
                                                                    <div class="card-img">
                                                                        <img src="{{ $applicant->imgUrl }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="card-content">
                                                                    <h4 class="card-title mb-2">
                                                                        {{ $applicant->firstname }}</h4>
                                                                    <p>{{ $applicant->phone_number }}</p>
                                                                    <p class="calendar">
                                                                        <img class="width18"
                                                                            src="img/icon/calendar.png"
                                                                            alt="">
                                                                        {{ explode(',', $applicant->availability)[0] }}
                                                                    </p>
                                                                    <p class="calendar">
                                                                        <img class="width18"
                                                                            src="img/icon/calendar.png"
                                                                            alt="">
                                                                        {{ explode(',', $applicant->availability)[1] }}
                                                                    </p>
                                                                </div>
                                                                <a href="#" class="cross"><i
                                                                        class="fa fa-times"
                                                                        aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>


                                <div class="tab-pane fade" id="notdone-tab-pane" role="tabpanel"
                                    aria-labelledby="notdone-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-sm-6 col-6 text-start">
                                            <div class="sorting">
                                                <div class="dropdown">
                                                    <button class="btn btn-sort dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Sort by
                                                        <!--<img src="img/icon/sort.png" alt="">--> <i
                                                            class="fa fa-sort-amount-asc" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('get-applicant-list', ['sort_by' => 'best_results']) }}">Best
                                                                results</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('get-applicant-list', ['sort_by' => 'surname']) }}">Surname</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('get-applicant-list', ['sort_by' => 'role']) }}">Role</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-6 text-end">
                                            <!-- <a href="#"><img style="width: 30px;" src="img/icon/filterline.png" alt=""></a> -->
                                        </div>
                                    </div>
                                    <div class="row mt-3">

                                        @foreach ($applicants as $applicant)
                                            @if ($applicant->status == 'Not Done')
                                                <div class="col-sm-6">
                                                    <div class="card applicantlist my-2">
                                                        <div class="card-body">
                                                            <div class="card-inner">
                                                                <div>
                                                                    <div class="card-img">
                                                                        <img src="{{ $applicant->imgUrl }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="card-content">
                                                                    <h4 class="card-title mb-2">
                                                                        {{ $applicant->firstname }}</h4>
                                                                    <p>{{ $applicant->phone_number }}</p>
                                                                    <p class="calendar">
                                                                        <img class="width18"
                                                                            src="img/icon/calendar.png"
                                                                            alt="">
                                                                        {{ explode(',', $applicant->availability)[0] }}
                                                                    </p>
                                                                    <p class="calendar">
                                                                        <img class="width18"
                                                                            src="img/icon/calendar.png"
                                                                            alt="">
                                                                        {{ explode(',', $applicant->availability)[1] }}
                                                                    </p>
                                                                </div>
                                                                <a href="#" class="cross"><i
                                                                        class="fa fa-times"
                                                                        aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>





            </div>





        </div>
    </div>



    <!-- Modal filter -->
    {{-- <div class="modal fade" id="addfilterModal" tabindex="-1" aria-labelledby="addfilterModalLabel"
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
                                Sort with
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
                        </div>

                        <div class="col-sm-12 d-grid">
                            <button type="button" class="btn btn-login" data-bs-toggle="modal"
                                id="addnewstypeId">Continue</button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div> --}}
    <!-- Modal filter end-->



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
