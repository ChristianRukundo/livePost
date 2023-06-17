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
</head>

<style>
    .allergylist {}

    .allergylist .card-inner {
        justify-content: space-between;
    }

    .allergylist .card-inner a {
        display: inline-block;
    }

    /* .allergylist .card-inner a img{width: 20px;} */
    .allergy .form-check {
        position: relative;
        height: 80px;
        padding-left: 0;
    }

    .allergy .form-check input[type="checkbox"] {
        width: 100%;
        height: 100%;
        margin: 0;
        border-radius: 8px;
        box-shadow: 0 3px 15px rgba(0, 0, 0, 0.05);
    }

    .allergy .form-check label {
        position: absolute;
        z-index: 1;
        left: 20px;
        top: 50%;
        transform: translateY(-50%);
        pointer-events: none;
    }

    .allergy .form-check-input:checked[type="checkbox"] {
        --bs-form-check-bg-image: none;
        background-color: #e2c4c8;
        border-color: #e2c4c8;
    }

    .allergylist .edit {
        font-size: 20px;
        color: #111;
    }

    .allergylist .delete {
        font-size: 20px;
        color: #f00;
    }

    .btn-login {
        background-color: #94C43A;
        color: #fff;
        border-color: none;
        padding: 12px 15px;
        border-radius: 10px;
    }

    .btn-login:hover {
        background-color: #94C43A;
        color: #fff;
        border-color: #94C43A;
    }

    .allergy .form-check label {
        position: absolute;
        z-index: 1;
        left: 20px;
        top: 50%;
        transform: translateY(-50%);
        pointer-events: none;
    }

    .allergy .form-check-input:checked[type="checkbox"] {
        --bs-form-check-bg-image: none;
        background-color: #e2c4c8;
        border-color: #e2c4c8;
    }

    .form-check-input:checked {
        background-color: #37d380;
        border-color: #37d380;
    }
</style>

<body>

    <header>

        <body>
            <header>
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 text-start">
                        </div>
                        <div class="col-md-8">
                        </div>
                        <div class="col-md-2 text-end">
                            <a href="{{ route('allergy-list') }}" class="btn btn-black btn-round btn-cross-lg">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </header>
            <form class="container allergy" method="post" action="{{ url('edit-allergies/' . $allergy->id) }}">
                @csrf
                <div class="row mt-5">
                    <div class="col-md-12 text-center">
                        <h2>Intolerances</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4 offset-sm-4 mt-4">
                        <input type="text" name="name" value="{{ $allergy->name }}" class="form-control"
                            id="ingredientInput" placeholder="gluten">
                    </div>
                </div>

                <div class="row mt-4">
                    @foreach ($ingredients as $ingredient)
                        <div class="col-sm-4 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                    {{ in_array((string) $ingredient->id, json_decode($allergy->ingredients)) ? 'checked' : '' }}
                                    value="{{ $ingredient->id }}" name="ingredientCheckbox[]">
                                <label class="form-check-label">
                                    {{ $ingredient->name }}
                                </label>
                            </div>
                        </div>
                    @endforeach
                    <!-- Add more checkboxes for other ingredients -->
                </div>

                <div class="row mb-4">
                    <div class="col-sm-4 col-12 offset-sm-4 d-grid mt-4">
                        <button type="submit" class="btn btn-login">Save</button>
                    </div>
                </div>
            </form>


            <script></script>
        </body>

        </div>







        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>

</html>
