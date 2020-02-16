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

        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <?php foreach ($profil as $pro): ?>
                        <h3 class="mt-5"><?= $pro['username'] ?>'s Account</h3>
                        <table>
                            <tr>
                                <td rowspan="0"><img src="<?= $pro['photo']; ?>"
                                                     alt="Blank" height="160" width="160">
                                </td>
                                <td><h3 class="ml-3"><?= $pro['name']; ?></h3></td>
                            </tr>
                            <tr>
                                <td><a class="ml-3"><?= $pro['email']; ?></a></td>
                            </tr>
                        </table>
                    <?php endforeach; ?>
                        <h3><br><?= $pro['username'] ?>'s Post</h3>
                    <?php $n=1?>
                    <?php foreach ($posts as $post): ?>
                        <table class="container mt-5 mb-5" border="0">
                            <tr>
                                <td><?php echo $n; ?></td>
                                <td>"<?= $post['content']; ?>"</td>
                            </tr>
                        </table>
                        <hr>
                    <?php $n=$n+1;?>    
                    <?php endforeach; ?>
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


