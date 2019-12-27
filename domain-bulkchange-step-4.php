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
                            <div class="col-md-2 col-xs-6">
                                <div class="steps--item steps--item__active">
                                    <i class="fas fa-pencil-alt"></i>
                                    <p>Vali muudatus</p>
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-6">
                                <div class="steps--item steps--item__active">
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
                                <form action="domain-bulkchange-step-4.php" class="form">
                                    <div class="form--row">
                                        <div class="form--header">
                                            <h3>Registripidaja vahetus</h3>
                                        </div>
                                        <div class="message message__error">
                                            <p>Error</p>
                                        </div>
                                        <div class="message message__success">
                                            <p>Success</p>
                                        </div>
                                        <div class="message message__info">
                                            <p>Info</p>
                                        </div>
                                        <div class="form--header">
                                            <h3>Lae üles CSV fail</h3>
                                            <div class="form--header--actions">
                                                <div class="tooltip" data-tippy-content="Lorem ipsum doolor sit amet">
                                                    <i class="fas fa-question"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form--field">
                                            <div class="form--input">
                                                <ul class="file--list"></ul>
                                                <label class="file" for="file">
                                                    <input type="file" name="file" id="file" hidden="hidden" multiple>
                                                    <i class="fas fa-folder-open"></i>
                                                    <strong>Vali fail arvutist</strong>
                                                    <span>(max. 8MB)</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form--actions">
                                        <button class="button button--primary" type="submit">Kinnita muudatus</button>
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
