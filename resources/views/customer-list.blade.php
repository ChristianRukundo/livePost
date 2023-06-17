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
<style>
    .customer-row {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .col1 {
        flex: 1;
    }

    .col2 {
        flex: 1;
        text-align: center;
    }

    .col3 {
        flex: 1;
        text-align: right;
    }

    .modal-title {
        text-align: center;
    }

    .modal-body {
        padding: 20px;
    }

    .customer-info {
        margin-top: 20px;
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
                    <h2 class="pagetitle">Customer list</h2>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid mtop order">
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
                    <li><a href="{{ url('applicant-list') }}">Applicant list</a></li>
                    <li><a href="{{ url('accounting-system') }}">Account setting</a></li>
                    <li><a href="{{ url('allergy-list') }}">Allergy list</a></li>
                    <li><a href="{{ url('customer-list') }}" class="active">Customer list</a></li>
                </ul>
            </div>


            <div class="contentbox">

                <div class="row">
                    <div class="col-sm-6 col-4 text-start">
                        <button type="button" class="btn btn-black btn-round btn-cross-lg">
                            <!-- <img src="img/icon/Close-light.png" alt=""> -->
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                    </div>
                    <div class="col-sm-6 col-8 text-end">
                        <a href="{{ url('request-coach') }}">
                            <h4>Request a coach</h4>
                        </a>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-6 offset-md-3">
                        <input type="text" class="form-control" id="customer-search" id=""
                            placeholder="Enter a name">
                    </div>
                </div>

                <hr class="my-4">

                <div class="row mt-4 " id="customerListContainer">
                    @foreach ($customers as $customer)
                        <div class="col-md-4 col-sm-6 mb-3 customerlist" data-customer="{{ json_encode($customer) }}">
                            <div class="card allergylist">
                                <div class="card-body">
                                    <div class="card-inner">
                                        <div>
                                            <h5 class="customer-name" style="cursor: pointer">
                                                {{ $customer->firstname }} {{ $customer->lastname }}
                                            </h5>
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






    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button> -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Customer Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4 id="customer-name" class="text-center"></h4>
                    <div class="customer-info">
                        <div class="customer-row">
                            <div class="col1">
                                Address
                            </div>
                            <div class="col2">
                                Biceps (mm)<br>
                                Triceps (mm)
                            </div>
                            <div class="col3">
                                <span id="address"></span><br>
                                <span id="biceps"></span><br>
                                <span id="triceps"></span>
                            </div>
                        </div>
                        <div class="customer-row">
                            <div class="col1">
                                Mobile Number
                            </div>
                            <div class="col2">
                                Jerks (mm)<br>
                                Bout (mm)
                            </div>
                            <div class="col3">
                                <span id="mobilenumber"></span><br>
                                <span id="jerks"></span><br>
                                <span id="bout"></span>
                            </div>
                        </div>
                        <div class="customer-row">
                            <div class="col1">
                                Date of Birth
                            </div>
                            <div class="col2">
                                Weight (kg)
                            </div>
                            <div class="col3">
                                <span id="date_of_birth"></span><br>
                                <span id="weight"></span>
                            </div>
                        </div>
                        <div class="customer-row">
                            <div class="col1">
                                Start Date of Program
                            </div>
                            <div class="col2">
                                Fat Content (%)
                            </div>
                            <div class="col3">
                                <span id="start_date_of_program"></span><br>
                                <span id="fat_content"></span>
                            </div>
                        </div>
                        <div class="customer-row">
                            <div class="col1">
                                Oxydation Type
                            </div>
                            <div class="col2">
                                Fat Content (kg)
                            </div>
                            <div class="col3">
                                <span id="oxydation_type"></span><br>
                                <span id="fat_content_kg"></span>
                            </div>
                        </div>
                        <div class="customer-row">
                            <div class="col1">
                                Starting Weight
                            </div>
                            <div class="col2">
                                Major Mass (kg)
                            </div>
                            <div class="col3">
                                <span id="starting_weight"></span><br>
                                <span id="major_mass"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script>
        // Event handler for customer click




        const searchInput = document.getElementById('customer-search');
        searchInput.addEventListener('input', searchCustomers)

        function searchCustomers() {
            // Get the search input element and the recipe container element
            const input = document.getElementById('customer-search');
            const container = document.getElementById('customerListContainer');

            // Get the search query entered by the user
            const query = input.value.toLowerCase();

            // Get all the recipe cards
            const customers = container.getElementsByClassName('card');

            // Loop through each recipe card and hide/show based on the search query
            for (let i = 0; i < customers.length; i++) {
                const customer = customers[i];
                const names = customer.querySelector('.customer-name').textContent.toLowerCase();

                if (names.includes(query)) {
                    customer.style.display = 'block'; // Show the customer card
                } else {
                    customer.style.display = 'none'; // Hide the recipe card
                }
            }
        }


        $(document).ready(function() {

            const customers = @json($customers);
            $(".customerlist").on("click", function() {
                // Get the customer data
                var customerData = $(this).data("customer");

                var customer = customers.find(function(c) {
                    return c.id === customerData.id;
                });
                console.log(customer)
                // Display the modal with customer data
                displayCustomerModal(customer);
            });

            // Function to display the modal and populate data
            function displayCustomerModal(customer) {
                // Set the customer name
                $("#customer-name").text(customer.firstname + " " + customer.lastname);

                // Populate customer data
                $("#address").text(customer.address);
                $("#biceps").text(customer.biceps);
                $("#triceps").text(customer.triceps);
                $("#mobilenumber").text(customer.mobilenumber);
                $("#jerks").text(customer.jerks);
                $("#bout").text(customer.bout);
                $("#date_of_birth").text(customer.date_of_birth);
                $("#weight").text(customer.weight);
                $("#start_date_of_program").text(customer.start_date_of_program);
                $("#fat_content").text(customer.fat_content);
                $("#oxydation_type").text(customer.oxydation_type);
                $("#fat_content_kg").text(customer.fat_content_kg);
                $("#starting_weight").text(customer.starting_weight);
                $("#major_mass").text(customer.major_mass);

                // Show the modal
                $("#exampleModal").modal("show");
            }


        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="js/lionbars.js"></script>

    <script type="text/javascript">
        $("#togglemenu").click(function() {
            $("#sidemenubox").toggle(300);
        });
    </script>

</body>

</html>
