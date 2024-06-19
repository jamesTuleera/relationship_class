<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="row mt-5">
        <div class="col-4"></div>
        <div class="col-4 mt-5">
            <h2 class="text-dark">
                Next of Kin
            </h2>
            <div class="card">


                <dv class="card-body p-5">
                    <div class="error">
                        @foreach ($errors->all() as $error)
                            <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach
                    </div>
                    <form action="{{ route('create_kin') }}" method="POST">@csrf
                        <div class="form-group mt-3">
                            <label for="">Name  </label>
                            <input type="text" name="name" id="" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Phone  </label>
                            <input type="text" name="phone" id="" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Email  </label>
                            <input type="text" name="email" id="" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Address  </label>
                            <textarea name="address" id="" class="form-control"></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Relationship  </label>
                            <input type="text" name="relationship" id="" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                         <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </dv>

{{ $user->nextOfKin->address }}

            </div>
        </div>
    </div>
</body>
</html>
