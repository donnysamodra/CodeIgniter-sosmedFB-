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
                        <a class="nav-link" href="<?= base_url('Beranda') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Profil') ?>">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary" href="<?= base_url('Beranda/logout') ?>">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        <?= $this->session->flashdata('notif'); ?>
        <?php
        $npost = 0;
        $nfriend = 0;
        foreach ($mine as $me) {
            $npost++;
        }
        foreach ($profils as $profil) {
            $nfriend++;
        }
        ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="mt-5">Your Account</h3>
                    <table>
                        <tr>
                            <td rowspan="0"><img src="<?= $_SESSION['photo']; ?>"
                                                 alt="Blank" height="160" width="160">
                            </td>
                            <td><h3 class="ml-3"><?= $_SESSION['username']; ?></h3></td>
                            <td><a class="btn btn-dark" href="<?= base_url('Beranda/editprofil/' . $_SESSION['username']) ?>">Edit Profil</a>
                                <a class="btn btn-danger" href="<?= base_url('Beranda/hapusprofil/' . $_SESSION['username']) ?>">Delete Profil</a></td>
                        </tr>
                        <tr>
                            <td><a class="ml-3"><?= $_SESSION['name']; ?> - <?= $_SESSION['email']; ?></a></td>
                        </tr>
                        <tr>
                            <td><a class="ml-3">Post : <?= $npost?> posts</a><br><a class="ml-3">Friend : <?= $nfriend?> friends</a></td>
                        </tr>
                    </table>
                    <h3><br>Your Post</h3>
                    <table class="container mb-5" border="0">
                        <?php foreach ($mine as $me): ?>
                            <tr>
                                <td>"<?= $me['content']; ?>"</td>

                                <td><a class="btn btn-dark" href="Beranda/editpost/<?= $me['id']; ?>">Edit</a>
                                    <a class="btn btn-danger" href="Beranda/deletepost/<?= $me['id']; ?>/<?= $me['username']; ?>">Delete</a></td>
                            </tr>
                            <tr>
                                <td><br><hr></td>
                                <td><br><hr></td>
                                <td><br><hr></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <div class="col-sm-3">
                    <table class="table">
                        <h3 class="mt-5">Your Friends</h3>
                        <?php foreach ($profils as $profil): ?>
                            <tr>
                                <td><img src="<?= $profil['photo']; ?>" height="80" width="80"></td>
                                <td><a href="<?= base_url('Profil/viewprofil/') . $profil['username']; ?>" class="text-decoration-none"><b><?= $profil['username']; ?></b></a><br>
                                    <?= $profil['name']; ?></td> 
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>

        </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>

