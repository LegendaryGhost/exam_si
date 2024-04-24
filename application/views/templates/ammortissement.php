<!DOCTYPE html>
<html data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>CV - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Ludens-basic-login.css">
    <link rel="stylesheet" href="assets/css/pikaday.min.css">
</head>

<body>
    <header>
        <?php include 'header.php' ?>
    </header>
    <main class="page cv-page">
        <section class="portfolio-block block-intro border-bottom">
            <div class="container">
                <div class="about-me">
                    <p><strong>ETAT DU PRET:</strong></p>
                    <p class="text-start">Mensualité a payer :</p>
                    <p class="text-start">Cout du crédits (Les intérêts):</p>
                    <p class="text-start">Cout total du prêt :</p>
                </div>
            </div>
        </section>
        <section class="portfolio-block cv">
            <div class="container">
                <div class="work-experience group">
                    <div class="heading">
                        <h2 class="text-center">Tableau d'ammortissement</h2>
                    </div>
                    <div class="item">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="background: var(--bs-danger);">Numero Mensualite</th>
                                        <th style="background: var(--bs-danger);">Date de vesrsement</th>
                                        <th style="background: var(--bs-danger);">Solde initial</th>
                                        <th style="background: var(--bs-danger);">Mensualite</th>
                                        <th style="background: var(--bs-danger);">Capital rembourses</th>
                                        <th style="background: var(--bs-danger);">Interets</th>
                                        <th style="background: var(--bs-danger);">Capital Restant</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Cell 1</td>
                                        <td>Cell 2</td>
                                        <td>Cell 3</td>
                                        <td>Cell 4</td>
                                        <td>Cell 5</td>
                                        <td>Cell 6</td>
                                        <td>Cell 7</td>
                                    </tr>
                                    <tr>
                                        <td>Cell 3</td>
                                        <td>Cell 4</td>
                                        <td>Cell 3</td>
                                        <td>Cell 4</td>
                                        <td>Cell 5</td>
                                        <td>Cell 6</td>
                                        <td>Cell 7</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="education group">
                    <div class="heading"></div>
                </div>
                <div class="group"></div>
                <div class="hobbies group">
                    <div class="heading"></div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <?php include 'footer.php' ?>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/pikaday.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>