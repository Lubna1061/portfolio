<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background-color: #162e41;
            color: white;
        }
        html {
            scroll-behavior: smooth;
        }

       .nav-item{
        font-size:20px;
        margin-right:15%;
       }
        .navbar {
            padding: 20px 0; 
            background-color: #162e41;
        }
        .nav-link {
            color: white; 
            text-decoration: none; 
            position: relative; 
            padding: 5px 10px;
             
        }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0; 
            height: 2px; 
            bottom: -5px; 
            left: 0; 
            background-color: aqua; 
            transition: width 0.3s; 
        }
        .nav-link:hover::after {
            width: 100%; 
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm">
        <div class="container-fluid">
            <a class="navbar-brand mx-5" href="#"><h1>Lubna</h1></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link"   href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-4 "  href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-4 "  href="#education">Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-4 "  href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-4 "  href="#Contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>