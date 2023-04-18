<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>smallurl</title>
    <!-- bootstrap css -->
    <link rel="shortcut icon" href="url.png
    " type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- css  -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav class="navbar navbar-dark custom-bg">
        <div class="container-fluid">
            <a class="navbar-brand head-text" href="#">
                <img src="url.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top ">
                Mini URL
            </a>
        </div>
    </nav>


    <div class="container">
        <div class="col-8 m-auto">
            <div id="error">
                
            </div>

            <div class="input-group mb-3">
                <input type="text" id="longurl" class="form-control" placeholder="Enter or Paste long URL" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-custom" type="button" id="ls-button">Short URL</button>
            </div>
            <div id="success">
                
            </div>
        </div>

    </div>





    <!-- jquery  -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <!-- bootstrap javascript  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- javascript  -->
    <script src="index.js"></script>
</body>

</html>