<!DOCTYPE html>
<html lang="et">
<head>
    <?php require_once("components/head.php") ?>
    <title>EIS | Domeeni üleviimine</title>
</head>
<body>
    <?php require_once("components/menu-mobile.php") ?>
    <div class="layout">
        <?php require_once("components/header.php") ?>
        <div class="layout--main">
            <div class="layout--hero">
                <h1>Domeeni üleviimine</h1>
                <h4>lumememm.ee</h4>
                <a href="#" class="back-link">
                    <i class="fas fa-arrow-left"></i>
                    <span>Tagasi</span>
                </a>
            </div>
            <div class="page page--domains-transferral">
                <div class="page--content">
                    <div class="wrapper">
                        <div class="row center-xs">
                            <div class="col-md-4 col-sm-8 col-xs-12">
                                <div class="paper paper__light">
                                    <div class="paper--content">
                                        <form action="" class="form">
                                            <div class="form--header">
                                                <h3>Kasutajainfo</h3>
                                            </div>
                                            <div class="form--row">
                                                <label for="name" class="form--label">Nimi</label>
                                                <div class="form--field">
                                                    <div class="form--input">
                                                        <input type="text" name="name" id="name" class="input">
                                                    </div>
                                                    <div class="tooltip" data-tippy-content="Lorem ipsum doolor sit amet">
                                                        <i class="fas fa-question"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form--row">
                                                <label for="password" class="form--label">Salasõna</label>
                                                <div class="form--field">
                                                    <div class="form--input">
                                                        <input type="password" name="password" id="password" class="input">
                                                    </div>
                                                    <div class="tooltip" data-tippy-content="Lorem ipsum doolor sit amet">
                                                        <i class="fas fa-question"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form--header">
                                                <h3>Domeeni üleviimise dokument</h3>
                                                <div class="form--header--actions">
                                                    <div class="tooltip" data-tippy-content="Lorem ipsum doolor sit amet">
                                                        <i class="fas fa-question"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form--row">
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
                                                <button class="button button--primary">Too üle</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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
