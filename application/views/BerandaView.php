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

<!--  -->


        <?= $this->session->flashdata('notif');?>
        <div class="container">
            <div class="row">
                <div align="center"class="col-sm-4">
                    
                    <img class="mt-5" src="<?= $_SESSION['photo'];?>" 
                         alt="Blank" height="240" width="240">
                    
                    <h1><?= $_SESSION['username'];?></h1>
                </div>

                <div class="col-sm-8">
                    <div class="col-sm-8">
                        <br>
                        <form class="mt-5" method="POST" action="<?= base_url('Beranda/create'); ?>">
                        <div class="form-group">
                            <textarea class="form-control" placeholder="What's on your mind?" rows="3" name="content"></textarea>
                        </div>
                        <input type="hidden" value="<?= $_SESSION['username'];?>" name="username">    
                        <button type="submit" class="btn btn-primary mb-5">Post</button>
                    </form>
                    </div>
                    <div class="col-sm-8">
<!--                        <h1><b>Post</b></h1>-->
                        <table class="container mb-5" border="0">
                        <tbody>
                            <?php foreach ($posts as $post):?> 
                                <tr>
                                    <td><img class="mt-5" src="<?= $post['photo']; ?>"
                         alt="Blank" height="80" width="80"></td>
                                    <td><a href="<?= base_url('Profil/viewprofil/') . $post['username']; ?>" class="text-decoration-none"><b><?= $post['username']; ?></b></a></td>
                                    <td><?= $post['email']; ?></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>"<?= $post['content']; ?>"</td>
                                </tr>
                                <tr>
                                    <td><br><hr></td>
                                    <td><br><hr></td>
                                    <td><br><hr></td>
                                </tr>
                        
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    </div>
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
