<?php
require 'inc/head.php'; ?>
<div class="container" style="margin-top:40px">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php
                    define('LOGIN','toto');
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        foreach ($_POST as $name => $input) {
                            $data[$name] = trim($input);
                        }
                        $errorMessage = '';

                        if (!empty($_POST)) {

                            if (!empty($_POST['login'])) {

                                if ($_POST['login'] !== LOGIN) {
                                    $errorMessage = 'Mauvais login !';
                                     ?> <p> <?php echo $errorMessage ?> </p> <?php
                                } else {
                                    session_start();
                                    $_SESSION['login'] = LOGIN;
                                    header('Location: http://localhost:8000/cart.php');
                                    exit();

                                }
                            } elseif(empty($_POST['login'])) {
                                $errorMessage = 'Veuillez inscrire vos identifiants svp !';
                                ?> <p> <?php echo $errorMessage ?> </p> <?php
                            }
                        }
                    }
                    ?>

                    <strong> Sign in to continue</strong>
                </div>
                <div class="panel-body">
                    <form role="form" action="#" method="POST">
                        <fieldset>
                            <div class="row">
                                <div class="center-block">
                                    <img class="profile-img"
                                         src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                                         alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                              <i class="glyphicon glyphicon-user"></i>
                                            </span>
                                            <input class="form-control" placeholder="Username" name="login"
                                                   type="text" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign in">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="panel-footer ">
                    Don't have an account ? <a href="#" onClick="">Too bad !</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require 'inc/foot.php'; ?>

