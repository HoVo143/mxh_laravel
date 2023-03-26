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
    <div class="container p-5 d-flex justify-content-center align-items-center ">
        <div class="col-6 m-5 d-flex justify-content-center align-items-center rounded p-5 ">
            <div class="containers">
            <div class="left">
                <h3  class="text-center">Hello friends</h3>
                    <h1 >Welcome to <span class="bg-danger text-white p-1 rounded " >Earth</span></h1>
                <p class="text-center mb-0" style="font-size: 20px;">Social network</p>
            </div>
        </div>
        </div>
        <div class="col-6 m-5 bg-white border rounded px-5 py-4 shadow-sm ">
                <h2  class="text-center mb-3 text-danger">Login</h2>
            <form>
                <div class="mb-3">
                    <label for="email" class="form-label">Email </label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" required>
                </div>
                <button style="width: 100%; font-size:23px"  type="submit" class="btn my-3 text-white bg-danger">Submit</button>
                <p class="text-center mt-3 {{ Request::route()->getName() === 'register'}}">
                    don't have an account? <a href="{{ route('register')}}">register now</a></p>
            </form>
        </div>
    </div>

</body>
</html>