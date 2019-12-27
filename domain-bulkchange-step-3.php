<!DOCTYPE html>
<html lang="et">
<head>
    <?php require_once("components/head.php") ?>
    <title>EIS | Domeeni massmuudatus</title>
</head>
<body>
    <?php require_once("components/menu-mobile.php") ?>
    <div class="layout">
        <?php require_once("components/header.php") ?>
        <div class="layout--main">
            <div class="layout--hero">
                <h1>Domeeni massmuutus</h1>
                <a href="#" class="back-link">
                    <i class="fas fa-arrow-left"></i>
                    <span>Tagasi</span>
                </a>
            </div>
            <div class="page page--domains-bulkchange">
                <div class="page--header">
                    <div class="steps wrapper">
                        <div class="row center-xs">
                            <div class="col-md-2 col-xs-4">
                                <div class="steps--item steps--item__active">
                                    <i class="fas fa-pencil-alt"></i>
                                    <p>Vali muudatus</p>
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-4">
                                <div class="steps--item steps--item__active">
                                    <i class="fas fa-list"></i>
                                    <p>Vali domeenid</p>
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-4">
                                <div class="steps--item">
                                    <i class="fas fa-check"></i>
                                    <p>Teosta muudatus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper">
                    <div class="row center-xs">
                        <div class="col-md-4 col-sm-8 col-xs-12">
                            <div class="paper paper__light">
                                <form action="domain-bulkchange-step-3.php" class="form">
                                    <div class="form--row">
                                        <label for="bulkchange-type" class="form--label">Vali muudatus</label>
                                        <div class="form--input">
                                            <select name="bulkchange-type" id="bulkchange-type">
                                                <option value="">Vali</option>
                                                <option value="registrar-change">Registripidaja vahetus</option>
                                                <option value="technical-contact-change" selected>Tehnilise kontakti vahetus</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page--block">
                    <div class="wrapper">
                        <div class="page--block--header center">
                            <h2>Leia domeenid, mida soovid muuta</h2>
                        </div>
                        <form action="domain-bulkchange-step-3.php" class="form form--filters open">
                            <div class="row bottom-sm">
                                <div class="col-sm col-xs-12">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <label for="technical-contact" class="form--label">Tehniline kontakt</label>
                                            <div class="form--field">
                                                <div class="form--input small">
                                                    <input type="text" name="technical-contact" id="technical-contact" class="input" placeholder="Otsi tehnilist kontakti">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <label for="registrar" class="form--label">Registreerija</label>
                                            <div class="form--field">
                                                <div class="form--input small">
                                                    <input type="text" name="registrar" id="registrar" class="input" placeholder="Otsi registreerijat">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <label for="server" class="form--label">Nimeserver</label>
                                            <div class="form--field">
                                                <div class="form--input small">
                                                    <input type="text" name="server" id="server" class="input" placeholder="Otsi nimeserverit">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <label for="ident-code" class="form--label">Isiku kood</label>
                                            <div class="form--field">
                                                <div class="form--input small">
                                                    <input type="text" name="ident-code" id="ident-code" class="input" placeholder="Isikukood">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-auto col-xs-12">
                                    <button class="button button--primary small">Otsi</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="search-results">
                    <div class="wrapper">
                        <form action="domain-bulkchange-step-4.php">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="table--action">
                                        <div class="checkbox">
                                            <input type="checkbox" name="check_all" id="check_all">
                                            <label for="check_all"></label>
                                        </div>
                                    </th>
                                    <th>Nimi</th>
                                    <th>Registreerija</th>
                                    <th>Kehtiv kuni</th>
                                    <th class="table--action">Muuda</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th class="table--action">
                                        <div class="checkbox">
                                            <input type="checkbox" name="check_1" id="check_1">
                                            <label for="check_1"></label>
                                        </div>
                                    </th>
                                    <td><a href="#">lumememm.ee</a></td>
                                    <td>Leo Metsmaasikas</td>
                                    <td>12.12.2018</td>
                                    <td class="table--action"><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
                                </tr>
                                <tr>
                                    <th class="table--action">
                                        <div class="checkbox">
                                            <input type="checkbox" name="check_2" id="check_2">
                                            <label for="check_2"></label>
                                        </div>
                                    </th>
                                    <td><a href="#">lumememm.ee</a></td>
                                    <td>Leo Metsmaasikas</td>
                                    <td>12.12.2018</td>
                                    <td class="table--action"><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
                                </tr>
                                <tr>
                                    <th class="table--action">
                                        <div class="checkbox">
                                            <input type="checkbox" name="check_3" id="check_3">
                                            <label for="check_3"></label>
                                        </div>
                                    </th>
                                    <td><a href="#">lumememm.ee</a></td>
                                    <td>Leo Metsmaasikas</td>
                                    <td>12.12.2018</td>
                                    <td class="table--action"><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
                                </tr>
                                <tr>
                                    <th class="table--action">
                                        <div class="checkbox">
                                            <input type="checkbox" name="check_4" id="check_4">
                                            <label for="check_4"></label>
                                        </div>
                                    </th>
                                    <td><a href="#">lumememm.ee</a></td>
                                    <td>Leo Metsmaasikas</td>
                                    <td>12.12.2018</td>
                                    <td class="table--action"><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="form--actions">
                                <button class="button button--primary" type="submit">Järmine samm</button>
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
