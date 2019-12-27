<!DOCTYPE html>
<html lang="et">
<head>
    <?php require_once("components/head.php") ?>
    <title>EIS | Toomas Mänd</title>
</head>
<body>
    <?php require_once("components/menu-mobile.php") ?>
    <div class="layout">
        <?php require_once("components/header.php") ?>
        <div class="layout--main">
            <div class="layout--hero">
                <h1>Toomas Mänd</h1>
                <a href="#" class="back-link">
                    <i class="fas fa-arrow-left"></i>
                    <span>Tagasi</span>
                </a>
            </div>
            <div class="page page--account-history">
                <div class="page--header">
                    <div class="wrapper">
                        <div class="row center-xs">
                            <div class="col-xs-auto">
                                <button class="button button--primary" type="button" data-dialog="contact-edit">
                                    Muuda
                                </button>
                            </div>
                            <div class="col-xs-auto">
                                <button class="button button--primary" type="button">
                                    Kustuta
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page--block">
                    <div class="wrapper">
                        <div class="col-xs-12 col-md-8 col-md-offset-2">
                            <div class="page--block--header">
                                <h2>General</h2>
                            </div>
                            <table class="table table__basic">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <td>48D16BD0</td>
                                    </tr>
                                    <tr>
                                        <th>Authinfo pw</th>
                                        <td>27f73d06d592b3e819e48c</td>
                                    </tr>
                                    <tr>
                                        <th>Ident</th>
                                        <td>38001010015 [EE priv]</td>
                                    </tr>
                                    <tr>
                                        <th>E-mail</th>
                                        <td>tman69@hot.ee</td>
                                    </tr>
                                    <tr>
                                        <th>Tel.</th>
                                        <td>+372 5123 4567</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="page--block">
                    <div class="wrapper">
                        <div class="col-xs-12 col-md-8 col-md-offset-2">
                            <div class="page--block--header">
                                <h2>Staatused</h2>
                            </div>
                            <table class="table table__basic">
                                <tbody>
                                    <tr>
                                        <th>
                                            <span class="chip">
                                                <i class="fas fa-check"></i> OK
                                            </span>
                                        </th>
                                        <td>Kontakt on õigesti vormistatud ja töökorras</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <span class="chip">
                                                <i class="fas fa-link"></i> Linked
                                            </span>
                                        </th>
                                        <td>Kontakt on ühendatud domeeniga</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="page--header">
                    <div class="wrapper">
                        <div class="row between-xs">
                            <div class="col-xs-auto">
                                <h2>Domeenid</h2>
                            </div>
                            <div class="col-xs-auto">
                                <form action="" class="filter">
                                    <label class="filter--item">
                                        <input type="checkbox" name="contact" value="registrant" checked>
                                        <span>Registreerija</span>
                                    </label>
                                    <label class="filter--item">
                                        <input type="checkbox" name="contact" value="admin" checked>
                                        <span>Admin kontakt</span>
                                    </label>
                                    <label class="filter--item">
                                        <input type="checkbox" name="contact" value="technical" checked>
                                        <span>Tehniline kotnakt</span>
                                    </label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper">
                    <div class="row">
                        <div class="col-xs-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nimi</th>
                                        <th>Registreerija</th>
                                        <th>Kehtiv kuni</th>
                                        <th>Rollid</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="domain-detail.php">lumememm.ee</a></td>
                                        <td>Leo Metsmaasikas</td>
                                        <td>12.12.2020</td>
                                        <td>Registreerija</td>
                                    </tr>
                                    <tr>
                                        <td><a href="domain-detail.php">lumememm.ee</a></td>
                                        <td>Leo Metsmaasikas</td>
                                        <td>12.12.2020</td>
                                        <td>Admin kontakt, tehniline kontakt</td>
                                    </tr>
                                    <tr>
                                        <td><a href="domain-detail.php">lumememm.ee</a></td>
                                        <td>Leo Metsmaasikas</td>
                                        <td>12.12.2020</td>
                                        <td>Registreerija, admin kontakt, tehniline kontakt</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="paginator">

                    </div>
                </div>
            </div>
        </div>
        <?php require_once("components/contact-add.php") ?>
        <?php require_once("components/footer.php") ?>
    </div>
    <script src="dist/app.js"></script>
</body>
</html>
