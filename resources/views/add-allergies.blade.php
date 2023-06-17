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

            <form class="container allergy" method="post" action="add-allergy">
                @csrf
                <div class="row mt-5">
                    <div class="col-md-12 text-center">
                        <h2>Intolerances</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4 offset-sm-4 mt-4">
                        <input type="text" name="name" class="form-control" id="ingredientInput"
                            placeholder="gluten">
                    </div>
                </div>

                <div class="row mt-4">
                    @foreach ($ingredients as $ingredient)
                        {{-- <div class="col-sm-4 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="{{ $ingredient->id }}"
                                    id="ingredientCheckbox1">
                                <label class="form-check-label" for="ingredientCheckbox1">
                                    {{ $ingredient->name }}

                                </label>
                            </div>
                        </div> --}}
                        <div class="col-sm-4 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="{{ $ingredient->id }}"
                                    name="ingredientCheckbox[]">
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
                        <button type="submit" class="btn btn-login">Add</button>
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
