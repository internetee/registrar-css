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
                                <div class="steps--item">
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
                                <form action="domain-bulkchange-step-2.php" class="form">
                                    <div class="form--row">
                                        <label for="bulkchange-type" class="form--label">Vali muudatus</label>
                                        <div class="form--input">
                                            <select name="bulkchange-type" id="bulkchange-type">
                                                <option value="">Vali</option>
                                                <option value="registrar-change">Registripidaja vahetus</option>
                                                <option value="technical-contact-change">Tehnilise kontakti vahetus</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form--actions">
                                        <button class="button button--primary" type="submit">Järgmine samm</button>
                                    </div>
                                </form>
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
