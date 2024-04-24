<!DOCTYPE html>
<html data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Hire me - Brand</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700&amp;display=swap">
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/Ludens-basic-login.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/pikaday.min.css">
</head>

<body>
    <header>
        <?php include 'header.php' ?>
    </header>
    <section>
        <main class="page hire-me-page">
            <section class="portfolio-block hire-me">
                <div class="container">
                    <div class="heading">
                        <h2>Insertion Pret</h2>
                    </div>
                    <form class="border rounded border-0 shadow-lg p-3 p-md-5" data-bs-theme="light">
                        <div class="mb-3"><label class="form-label" for="email">Montant du pret</label><input class="form-control" type="email" id="email-3"></div>
                        <div class="mb-3"><label class="form-label" for="email">Taux d'effectif global (TEG)</label><input class="form-control" type="email" id="email-2"></div>
                        <div class="mb-3"><label class="form-label" for="email">Duree d'ammortissement du pret (en mois)</label><input class="form-control" type="email" id="email-1"></div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6"><label class="form-label" for="hire-date">Date de debut de l'emprunt</label><input class="form-control" id="hire-date" type="date"></div>
                                <div class="col-md-6 button"><button class="btn btn-primary d-block w-100" type="submit">Inserer</button></div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </main>
    </section>
    <footer>
        <?php include 'footer.php' ?>
    </footer>
    <script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/pikaday.min.js"></script>
    <script src="<?= base_url() ?>assets/js/theme.js"></script>
</body>

</html>