<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row col-md-6 col-md-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h1 class="text-center">Registration Form</h1>
                    </div>
                
                    <div class="panel-body">
                        <form action="{{url('registration')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="username">First Name</label>
                                <input type="text" class="form-control" name="username" id="username">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Password Confirm</label>
                                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
                            </div>

                            <input type="submit" class="btn btn-primary">
                        </form>
                    </div>
                    <div class="panel-footer">
                        <small>&copy; Poonam Bharara</small>
                    </div>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>