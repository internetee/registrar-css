<!DOCTYPE html>
<html lang="et">
<head>
    <?php require_once("components/head.php") ?>
    <title>EIS | Avaleht</title>
</head>
<body>
    <?php require_once("components/menu-mobile.php") ?>
    <div class="layout">
        <?php require_once("components/header.php") ?>
        <div class="layout--main">
            <div class="layout--hero">
                <h1>Hei, Voldemar Mesipuu</h1>
                <p>Tere tulemast tagasi. Viimati külastasid portaali: 20.08.2017 kell 08:23</p>
                <a href="#" class="back-link">
                    <i class="fas fa-arrow-left"></i>
                    <span>Tagasi</span>
                </a>
            </div>
            <div class="page page--dashboard">
                <div class="quicklinks">
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-md-4 col-xs-12">
                                <div class="bills">
                                    <p>Kontojääk<strong>12.00 €</strong></p>
                                    <a class="button button--primary" href="credit-add.php">Lisa krediiti</a>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <a href="account-history.php" class="quicklinks--link">
                                    <i class="fas fa-list"></i>
                                    <span>Sündmuste logi</span>
                                </a>
                                <p>Siin on ülevaade sinu makstud ja maksmata arvetest</p>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <a href="invoices.php" class="quicklinks--link">
                                    <i class="fas fa-file-alt"></i>
                                    <span>Arvete ajalugu</span>
                                </a>
                                <p>Siin on ülevaade sinu domeenide, kontaktide ja krediidiga seotud muudatustest</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="search-boxes">
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <article class="paper paper--text__center">
                                    <header class="paper--header">
                                        <h2>Domeenid <span>(341)</span></h2>
                                        <nav class="menu--simple">
                                            <ul>
                                                <li><a href="domain-add.php">Lisa uus domeen</a></li>
                                                <li><a href="domain-transferral.php">Domeeni üleviimine</a></li>
                                                <li><a href="domain-bulkchange-step-1.php">Massmuutmine</a></li>
                                            </ul>
                                        </nav>
                                    </header>
                                    <div class="paper--content">
                                        <form action="domains.php" class="form">
                                            <div class="form--row">
                                                <div class="form--field">
                                                    <div class="form--input large">
                                                        <button class="button button--primary" type="submit">
                                                            <i class="fas fa-arrow-right"></i>
                                                        </button>
                                                        <input class="input" type="text" placeholder="Otsi domeeni">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form--filters-toggle">
                                                <button class="button button--toggle" data-toggle="domains-filters">
                                                    <span>Ava filter</span>
                                                    <span>Sulge filter</span>
                                                    <i class="fas fa-filter"></i>
                                                </button>
                                            </div>
                                            <div id="domains-filters" class="form--filters">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <label for="name" class="form--label">Domeen</label>
                                                        <div class="form--field">
                                                            <div class="form--input small">
                                                                <input type="text" name="name" id="domainname" class="input">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <article class="paper paper--text__center">
                                    <header class="paper--header">
                                        <h2>Kontaktid <span>(12)</span></h2>
                                        <nav class="menu--simple">
                                            <ul>
                                                <li><a href="">Lisa uus kontakt</a></li>
                                            </ul>
                                        </nav>
                                    </header>
                                    <div class="paper--content">
                                        <form action="contacts.php" class="form">
                                            <div class="form--row">
                                                <div class="form--field">
                                                    <div class="form--input large">
                                                        <button class="button button--primary" type="submit">
                                                            <i class="fas fa-arrow-right"></i>
                                                        </button>
                                                        <input class="input" type="text" placeholder="Otsi kontakti">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form--filters-toggle">
                                                <button class="button button--toggle" data-toggle="contacts-filters">
                                                    <span>Ava filter</span>
                                                    <span>Sulge filter</span>
                                                    <i class="fas fa-filter"></i>
                                                </button>
                                            </div>
                                            <div id="contacts-filters" class="form--filters">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <label for="name" class="form--label">Nimi</label>
                                                        <div class="form--field">
                                                            <div class="form--input small">
                                                                <input type="text" name="name" id="name" class="input">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="user-data">
                    <h2>Minu andmed</h2>
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-md-3 col-xs-12">
                                <a href="" class="user-data--link">
                                    <i class="fas fa-user"></i>
                                    <h4>Minu kontaktid</h4>
                                </a>
                                <p>+372 53 373 3733</p>
                                <p>voldemar.mesipuu@hitsa.ee</p>
                            </div>
                            <div class="col-md-3 col-xs-12">
                                <a href="" class="user-data--link">
                                    <i class="fas fa-building"></i>
                                    <h4>Esindatavad ettevõtted</h4>
                                </a>
                                <p>Hariduse Infotehnoloogia Sihtasutus (12345566)</p>
                            </div>
                            <div class="col-md-3 col-xs-12">
                                <a href="" class="user-data--link">
                                    <i class="fas fa-user"></i>
                                    <h4>Arve andmed</h4>
                                </a>
                                <p>Hariduse Infotehnoloogia Sihtasutus</p>
                                <p>arved@hitsa.ee</p>
                                <p>Tuise tee 15, Tallinn 10414, Eesti</p>
                            </div>
                            <div class="col-md-3 col-xs-12">
                                <a href="" class="user-data--link">
                                    <i class="fas fa-check-square"></i>
                                    <h4>Minu testid</h4>
                                </a>
                                <p>Minu poolt läbitud testide ülevaade</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once("components/footer.php") ?>
    </div>
    <script src="dist/app.js"></script>
</body>
</html>
