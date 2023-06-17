<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lionbars.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <header class="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 col-2">
                    <a href="#" id="togglemenu" class="togglemenubar"><i class="fa fa-bars"
                            aria-hidden="true"></i> </a>
                </div>
                <div class="col-md-8 col-8 text-center">
                    <h2 class="pagetitle">User Dashboard</h2>
                </div>
            </div>
        </div>
    </header>

    <!-- <div class="container">
    <div class="row mt-1">
      <div class="col-md-2 col-2 text-start">
        <a class="back" href="product.blade.php">Back</a>
      </div>
      <div class="col-md-8 col-8 text-start">
      </div>
      <div class="col-md-2 text-end">
        <a href="" class="btn btn-black btn-round btn-add-lg">
          <i class="fa fa-exchange" aria-hidden="true"></i>
        </a>
      </div>
    </div>
  </div> -->

    <div class="container-fluid">
        <div class="mainbox dashboard">

            <div id="sidemenubox" class="sidebarbox fixed">
                <ul>
                    <li> <a href="#" class="">All users</a> </li>
                    <li> <a href="#">Active users</a> </li>
                    <li> <a href="#">Converted coaches</a> </li>
                    <li> <a href="#">New registration</a> </li>
                    <li> <a href="#">Non-active users</a> </li>
                </ul>
            </div>

            <div class="dashboardcontentbox">

                <div class="row mt-1">
                    <div class="col-md-2 col-2 text-start">
                        <a class="back" href="product.blade.php">Back</a>
                    </div>
                    <div class="col-md-8 col-8 text-start">
                    </div>
                    <div class="col-md-2 col-2 text-end">
                        <a href="" class="btn btn-black btn-round btn-add-lg">
                            <!-- <img src="img/icon/filter1-light.png" alt=""> -->
                            <i class="fa fa-exchange" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12">
                        <div class="dashboardpanel">
                            User Dashboard
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr
      .net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $("#togglemenu").click(function() {
            $("#sidemenubox").toggle(300);
        });
    </script>
</body>

</html>
