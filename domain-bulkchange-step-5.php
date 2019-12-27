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
                                <div class="steps--item steps--item__active">
                                    <i class="fas fa-check"></i>
                                    <p>Teosta muudatus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page--content">
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 col-sm-6 col-xs-12">
                                <div class="paper paper__simple">
                                    <div class="paper--header">
                                        <h2>Praegune tehniline kontakt</h2>
                                        <p>Leo Metsmaasikas</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="paper paper__light">
                                    <form action="" class="form">
                                        <div class="form--header">
                                            <h3>Muuda tehniline kontakt</h3>
                                        </div>
                                        <div class="form--row">
                                            <label for="technical-contact" class="form--label">Tehniline kontakt</label>
                                            <div class="form--field">
                                                <div class="form--input">
                                                    <input type="text" name="technical-contact" id="technical-contact" class="input">
                                                </div>
                                                <div class="tooltip" data-tippy-content="Lorem ipsum doolor sit amet">
                                                    <i class="fas fa-question"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form--row">
                                            <button class="button button--link" role="button" data-dialog="contact-edit">Lisa uus kontakt</button>
                                        </div>
                                        <div class="form--actions">
                                            <button class="button button--primary">Kinnita muudatus</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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
