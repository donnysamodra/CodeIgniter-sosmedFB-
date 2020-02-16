<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Facebook</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-info bg-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <a class="navbar-brand" href="#">Facebook</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Beranda')?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Profil')?>">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary" href="<?= base_url('Beranda/logout')?>">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <h1 class="container mt-5">Edit Profil</h1>

        <form class="container mt-3" action="<?= base_url('Beranda/updateprofil')?>" method="POST">
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" value="<?= $_SESSION['username']?>" name="username" disabled>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" value="<?= $_SESSION['email']?>" name="email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" value="<?= $_SESSION['password']?>" name="password">
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" value="<?= $_SESSION['name']?>" name="name">
            </div>
            <div class="form-group">
                <label>Photo</label>
                <input type="text" class="form-control" value="<?= $_SESSION['photo']?>" name="photo">
            </div>
            <input type="hidden" value="<?= $_SESSION['username']?>" name="awal">
            <button type="submit" class="btn btn-primary mb-5">Edit</button>
        </form>
        </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>


