<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
   <div class="container">
       <div>
           <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="container-fluid">
                   <a class="navbar-brand" href="#">Navbar</a>
                   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class="collapse navbar-collapse" id="navbarNav">
                       <ul class="navbar-nav">
                           <li class="nav-item">
                               <a class="nav-link active" aria-current="page" href="">Home</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="{{}}">Category</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="#">Pricing</a>
                           </li>
                       </ul>
                   </div>
               </div>
           </nav>
       </div>
       <div style="min-height: 80vh; text-align: center;">
           @yield('content')
       </div>
       <div style="background-color: red; height: 10vh; color: #e2e8f0">footer</div>
   </div>
</body>
</html>