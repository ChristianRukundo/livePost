<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
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
                <div class="col-md-2 col-2">
                    <a href="#" id="togglemenu" class="togglemenubar"><i class="fa fa-bars"
                            aria-hidden="true"></i> </a>
                </div>
                <div class="col-md-8 col-8 text-center">
                    <h2 class="pagetitle">Manage point system</h2>
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
                    <li><a href="{{ url('manage-point-system') }}" class="active">Manage point system</a></li>
                    <li><a href="{{ url('applicant-list') }}">Applicant list</a></li>
                    <li><a href="{{ url('accounting-system') }}">Account setting</a></li>
                    <li><a href="{{ url('allergy-list') }}">Allergy list</a></li>
                    <li><a href="{{ url('customer-list') }}">Customer list</a></li>
                </ul>
            </div>



            <div class="contentbox">

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-6 text-start">

                    </div>
                    {{-- <div class="col-md-6 col-sm-6 col-6 text-end">
                        <a href="" class="btn btn-black btn-round btn-cross-lg" data-bs-toggle="modal"
                            data-bs-target="#addpointsModal">
                            <!-- <img src="img/icon/order-light.png" alt=""> -->
                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                        </a>
                    </div> --}}
                </div>
                <div class="row my-3">
                    <div class="col-lg-10 offset-lg-1 col-md-12 mt-2">

                        <form class="row" method="POST" action="manage-point-system">
                            <div class="col-sm-3 mb-3">
                                <input type="text" name="number" class="form-control" id=""
                                    placeholder="Points">
                            </div>
                            <div class="col-sm-4 mb-3">
                                <input type="text" class="form-control" name="name" id=""
                                    placeholder="Rangename">
                            </div>
                            <div class="col-sm-3 mb-3">
                                <input type="text" class="form-control" name="discount" id=""
                                    placeholder="Discount in %">
                            </div>
                            <div class="col-sm-2 mb-3 text-end">
                                <button type="submit" class="btn btn-theme btn-round btn-add-lg">
                                    <!-- <img src="img/icon/plus-light.png" alt=""> -->
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </button>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <div class="tablebox">
                                    <table>
                                        <tbody>
                                            @foreach ($points as $point)
                                                <tr>
                                                    <td>{{ $point->number }}</td>
                                                    <td>{{ $point->name }}</td>
                                                    <td>{{ $point->discount }}</td>
                                                    <td>
                                                        <form action="{{ url('delete-point/' . $point->id . '/') }}"
                                                            method="POST">
                                                            @method('DELETE')
                                                            <button type="submit" class="btn-delete btn">
                                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row mb-3">
                            <div class="col-sm-8 offset-sm-2 col-12 d-grid">
                                <button type="button" class="btn btn-login">Upload</button>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>




        </div>
    </div>



    <!-- Modal Ask survey -->
    <div class="modal fade" id="addpointsModal" tabindex="-1" aria-labelledby="addpointsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 mb-4">
                            <h1 class="modal-title fs-5 text-center">
                                points per touch
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 mb-3">
                            <div class="addpoints">
                                <input type="Text" class="form-control" id=""
                                    placeholder="Category name">
                                <button type="button" class="btn btn-theme" style="min-width: 50px;"><i
                                        class="fa fa-plus" aria-hidden="true"></i></button>
                            </div>
                            <div class="addpoints">
                                <input type="Text" class="form-control" id=""
                                    placeholder="Category name">
                                <button type="button" class="btn btn-theme" style="min-width: 50px;"><i
                                        class="fa fa-plus" aria-hidden="true"></i></button>
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
