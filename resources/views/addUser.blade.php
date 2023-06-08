<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Add User | Laravel Demo</title>
</head>
    <body>
        <div class="container">
            <div class="">
                <h1 class="display-4 mx-3">Register Here</h1>
                <hr>
                <form name="SignupForm" action="addUser" method="post">
                    @csrf
                    <div class="form-group col-md-6">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="your name here.."
                            required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Email1">Email address</label>
                        <input type="email" class="form-control" id="Email" name="email" placeholder="your email here.."
                            required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phone">Phone Number:</label>
                        <input type="tel" class="form-control" id="phone" name="phone_number"
                            placeholder="your phone number here.." required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" id="Password" name="password"
                            placeholder="your password here.." required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="cnfPassword">Confirm Password</label>
                        <input type="password" class="form-control" id="cnfPassword" name="cnfpassword"
                            placeholder="confirm the password" required>
                        <small> <i>confirm password should be same as the entered password</i> </small>
                    </div>
                    <div class="form-group form-check mx-3">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <div>
                            <button type="submit" class="btn btn-outline-primary mx-3">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>