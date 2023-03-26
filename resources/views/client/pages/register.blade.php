<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
   
    <div class="container p-5 d-flex justify-content-center ">
        <div class="col-6 mx-5 bg-white border rounded p-4 shadow-sm ">
                <h2  class="text-center mb-3 text-danger">Register</h2>
            <form>
                <div class="d-flex gap-3">
                    <div class="mb-2 mt-1 col-6">
                        <label for="firstname" class="form-label">First name</label>
                        <input type="text" class="form-control" id="firstname">
                    </div>
                    <div class="mb-2 mt-1 col-5 ">
                        <label for="lastname" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="lastname">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <div class="mb-3">
                    <label for="confirmpassword" class="form-label">Confirm password</label>
                    <input type="password" class="form-control" id="confirmpassword">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Number phone</label>
                    <input type="text" class="form-control" id="phone">
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date">
                </div>
                <div class="d-flex gap-3 my-3">
                    <div class="form-check ">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            male
                        </label>
                    </div>
                    <div class="form-check ">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            female
                        </label>
                    </div>
                </div>
                <div class="form-check my-3">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        I agree to the terms.
                    </label>
                </div>
                <button style="width: 100%; font-size:23px"  type="submit" class="btn my-2 text-white bg-danger">Submit</button>
                <!-- <p class="text-center mt-2">already have an account? <a href="./login.php">login now</a></p> -->
            </form>
        </div>
    </div>
    <script src="{{asset('assets/js/register.js')}}"></script>
</body>
</html>