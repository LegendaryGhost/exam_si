<!DOCTYPE html>
<html data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Projet pret</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700&amp;display=swap">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/Ludens-basic-login.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/pikaday.min.css">
</head>

<body>
    <div class="d-flex d-xl-flex align-items-center align-items-xl-center" style="width: 100%;height: 100%;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-12 col-xl-10">
                    <div class="card shadow-lg o-hidden border-0 my-5">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-12 col-xl-12" style="padding-left: 228px;margin-left: -90px;">
                                    <div class="p-5" style="padding-left: 156px;background: var(--bs-tertiary-bg);">
                                        <div class="text-center">
                                            <h4 class="text-dark mb-4">Inscrivez-vous!</h4>
                                        </div>
                                        <form class="user">
                                            <div class="mb-3"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Entree votre nom..." name="email"></div>
                                            <div class="mb-3"><input class="form-control form-control-user" type="email" id="exampleInputEmail-1" aria-describedby="emailHelp" placeholder="Entree Adresse Email ..." name="email"></div>
                                            <div class="mb-3"><input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Mot de passe" name="password"></div>
                                            <div class="mb-3">
                                                <div class="custom-control custom-checkbox small"></div>
                                            </div><button class="btn btn-dark d-block btn-user w-100" type="submit" style="background: #32ffa3;padding-left: 0px;margin-left: 2px;">S'inscrire</button>
                                            <hr>
                                            <hr>
                                        </form>
                                        <div class="text-center"><a class="small" href="connexion.html" style="color: #142fbb;">Se connecter?</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/pikaday.min.js"></script>
    <script src="<?= base_url() ?>assets/js/theme.js"></script>
</body>

</html>