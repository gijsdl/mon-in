<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon-in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-secondary-subtle">
<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
        <i class="bi bi-linkedin text-white me-2"></i><span class="text-white">Mon-In</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-2 ms-auto">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Login</a>
                </li>
        </div>
    </div>
</nav>
<div class="container mb-5">
    <div class="row justify-content-center mt-4">
        <div class="col-sm-12 col-md-10 col-lg-8 col-xl-8 p-0">
            <div class="row bg-white">
                <div class="col p-0">
                    <form method="post">
                        <div class="form-floating">
                        <textarea class="form-control post" placeholder="Maak een nieuwe post" id="post"
                                  name="post"></textarea>
                            <label for="post">Nieuwe post</label>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary m-2" name="submit">verzenden</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row my-4">
                <div class="col p-0">
                    <h2>Recent post</h2>
                </div>
            </div>
            <!-- post -->
            <div class="row mb-3">
                <div class="col bg-white">
                    <div class="row p-2">
                        <div class="col-1">
                            <img src="img/empty-profilepng.png" alt="image" class="img-fluid rounded">
                        </div>
                        <div class="col-6">
                            <p class="p-0 m-0"><b>Sarah Johnson</b></p>
                            <p class="p-0 m-0 text-secondary">Senior software engineer at Techcorp</p>
                            <p class="fs-6 text-secondary"> 2 uur ago</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col p-3">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam autem deleniti earum error
                            facilis harum ipsa magnam quae quia quos.
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <p><i class="bi bi-hand-thumbs-up"></i> 1</p>
                        </div>
                        <div class="col-2"><i class="bi bi-trash"></i> delete</div>
                    </div>
                </div>
            </div>
            <!-- /post -->
            <!-- post 2 -->
            <div class="row">
                <div class="col bg-white">
                    <div class="row p-2">
                        <div class="col-1">
                            <img src="img/empty-profilepng.png" alt="image" class="img-fluid rounded">
                        </div>
                        <div class="col-6">
                            <p class="p-0 m-0"><b>Sarah Johnson</b></p>
                            <p class="p-0 m-0 text-secondary">Senior software engineer at Techcorp</p>
                            <p class="fs-6 text-secondary"> 2 uur ago</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col p-3">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam autem deleniti earum error
                            facilis harum ipsa magnam quae quia quos.
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <p><i class="bi bi-hand-thumbs-up"></i> 1</p>
                        </div>
                        <div class="col-2"><i class="bi bi-trash"></i> delete</div>
                    </div>
                </div>
            </div>
            <!-- /post 2 -->
        </div>
    </div>
</div>
<footer class="row bg-primary fixed-bottom">
    <div class="col p-2 d-flex justify-content-center align-items-center">
        <p class="text-white m-0 p-0">&copy; de Lange</p>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous">
</script>
</body>
</html>
