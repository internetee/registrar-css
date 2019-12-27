<!DOCTYPE html>
<html lang="et">
<head>
    <?php require_once("components/head.php") ?>
    <title>EIS | Domeenid</title>
</head>
<body>
    <?php require_once("components/menu-mobile.php") ?>
    <div class="layout">
        <?php require_once("components/header.php") ?>
        <div class="layout--main">
            <div class="layout--hero">
                <h1>Domeenid</h1>
                <a href="#" class="back-link">
                    <i class="fas fa-arrow-left"></i>
                    <span>Tagasi</span>
                </a>
            </div>
            <div class="page page--domains">
                <div class="page--header">
                    <div class="wrapper">
                        <form action="" class="form">
                            <div class="row">
                                <div class="col-md-5 col-md-offset-4 col-xs">
                                    <div class="form--field">
                                        <div class="form--input large">
                                            <button class="button button--primary" type="submit">
                                                <i class="fas fa-arrow-right"></i>
                                            </button>
                                            <input type="text" name="search" id="search" aria-label="Otsi" class="input search" placeholder="Otsi">
                                        </div>
                                        <button class="button button--toggle" data-toggle="filters">
                                            <span>Ava filter</span>
                                            <span>Sulge filter</span>
                                            <i class="fas fa-filter"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div id="filters" class="form--filters">
                                <div class="row bottom-xs">
                                    <div class="col-md-4 col-xs-12">
                                        <label for="registrar" class="form--label">Registreerija</label>
                                        <div class="form--field">
                                            <div class="form--input small">
                                                <select name="registrar" id="registrar">
                                                    <option value="">Vali</option>
                                                    <option value="registrar-1">Registreerija 1</option>
                                                    <option value="registrar-2">Registreerija 2</option>
                                                    <option value="registrat-3">Registreerija 3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <label for="contact-ident" class="form--label">Kontakti ident</label>
                                        <div class="form--field">
                                            <div class="form--input small">
                                                <input type="text" name="contact-ident" id="contact-ident" class="input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <label for="server" class="form--label">Nimeserver</label>
                                        <div class="form--field">
                                            <div class="form--input small">
                                                <input type="text" name="server" id="server" class="input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-auto">
                                        <label for="date-range" class="form--label">Ajavahemik</label>
                                        <div class="form--field">
                                            <div class="form--input small">
                                                <input type="date" name="date-range-from" id="date-range-from" class="datepicker">
                                                <div class="form--suffix"><i class="fas fa-calendar"></i></div>
                                            </div>
                                            <span class="form--sep">-</span>
                                            <div class="form--input small">
                                                <input type="date" name="date-range-to" id="date-range-to" class="datepicker">
                                                <div class="form--suffix"><i class="fas fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <label for="status" class="form--label">Staatus</label>
                                        <div class="form--field">
                                            <div class="form--input small">
                                                <select name="status" id="status">
                                                    <option value="">Vali</option>
                                                    <option value="status-1">Staatus 1</option>
                                                    <option value="status-2">Staatus 2</option>
                                                    <option value="status-3">Staatus-3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <div class="form--actions">
                                            <button type="submit" class="button button--primary small">Filtreeri</button>
                                            <button type="reset" class="button button--link">Tühista filter</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="page--message page--message__success">
                    <div class="wrapper">
                        <h2>Uus domeen lisatud</h2>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><a href="#">lumememm.ee</a></td>
                                    <td>Leo Metsmaasikas</td>
                                    <td>12.12.2018</td>
                                    <td class="table--action"><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="page--actions">
                    <div class="wrapper">
                        <div class="page--actions__left">
                            <a href="domain-add.php" class="button button--secondary">Lisa uus domeen</a>
                            <a href="domain-transferral.php" class="button button--primary">Domeeni üleviimine</a>
                        </div>
                        <div class="page--actions__right">
                            <a href="#">Lae alla <i class="fas fa-download"></i></a>
                            <a href="domain-bulkchange-step-1.php">Massmuutmine <i class="fas fa-pencil-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="wrapper">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nimi</th>
                                <th>Registreerija</th>
                                <th>Kehtiv kuni</th>
                                <th class="table--action">Muuda</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#">lumememm.ee</a></td>
                                <td>Leo Metsmaasikas</td>
                                <td>12.12.2018</td>
                                <td class="table--action"><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td><a href="#">lumememm.ee</a></td>
                                <td>Leo Metsmaasikas</td>
                                <td>12.12.2018</td>
                                <td class="table--action"><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td><a href="#">lumememm.ee</a></td>
                                <td>Leo Metsmaasikas</td>
                                <td>12.12.2018</td>
                                <td class="table--action"><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td><a href="#">lumememm.ee</a></td>
                                <td>Leo Metsmaasikas</td>
                                <td>12.12.2018</td>
                                <td class="table--action"><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td><a href="#">lumememm.ee</a></td>
                                <td>Leo Metsmaasikas</td>
                                <td>12.12.2018</td>
                                <td class="table--action"><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td><a href="#">lumememm.ee</a></td>
                                <td>Leo Metsmaasikas</td>
                                <td>12.12.2018</td>
                                <td class="table--action"><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td><a href="#">lumememm.ee</a></td>
                                <td>Leo Metsmaasikas</td>
                                <td>12.12.2018</td>
                                <td class="table--action"><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td><a href="#">lumememm.ee</a></td>
                                <td>Leo Metsmaasikas</td>
                                <td>12.12.2018</td>
                                <td class="table--action"><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="pagination">
                        <div class="pagination--menu">
                            <a href="?page=1" aria-current="false" tabindex="-1" class="pagination--prev disabled">
                                <i class="fas fa-arrow-left"></i>
                                <span>Eelmised</span>
                            </a>
                            <a href="?page=1" aria-current="true" tabindex="0" class="pagination--item active">1</a>
                            <a href="?page=2" aria-current="false" tabindex="0" class="pagination--item">2</a>
                            <a href="?page=3" aria-current="false" tabindex="0" class="pagination--item">3</a>
                            <a href="?page=4" aria-current="false" tabindex="0" class="pagination--item">4</a>
                            <span class="pagination--item pagination--item__ellipsis">...</span>
                            <a href="?page=13" aria-current="false" tabindex="0" class="pagination--item">13</a>
                            <a href="?page=2" aria-current="false" tabIndex="-1" class="pagination--next">
                                <span>Järgmised</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <form action="" class="form pagination--form">
                            <div class="form--field">
                                <label for="results" class="form--label">Tulemusi lehel</label>
                                <div class="form--input small">
                                    <select name="results" id="results">
                                        <option value="20">20</option>
                                        <option value="10">10</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once("components/footer.php") ?>
    </div>
    <script src="dist/app.js"></script>
</body>
</html>
