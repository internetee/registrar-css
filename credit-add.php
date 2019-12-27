<!DOCTYPE html>
<html lang="et">
<head>
    <?php require_once("components/head.php") ?>
    <title>EIS | Krediidi lisamine</title>
</head>
<body>
    <?php require_once("components/menu-mobile.php") ?>
    <div class="layout">
        <?php require_once("components/header.php") ?>
        <div class="layout--main">
            <div class="layout--hero">
                <h1>Krediidi lisamine</h1>
            </div>
            <div class="page page--credit">
                <div class="page--header">
                    <div class="steps wrapper">
                        <div class="row center-xs">
                            <div class="col-md-2 col-xs-6">
                                <div class="steps--item steps--item__active">
                                    <i class="fas fa-pencil-alt"></i>
                                    <p>Vali summa</p>
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-6">
                                <div class="steps--item">
                                    <i class="fas fa-credit-card"></i>
                                    <p>Maksa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page--content">
                    <div class="wrapper">
                        <div class="row center-xs">
                            <div class="col-md-4 col-sm-8 col-xs-12">
                                <div class="paper paper__light">
                                    <div class="paper--content">
                                        <form action="credit-payment.php" class="form">
                                            <div class="form--row">
                                                <label for="prepayment" class="form--label">Ettemaksu summa</label>
                                                <div class="form--field">
                                                    <div class="form--input">
                                                        <span class="form--suffix">€</span>
                                                        <input type="number" id="prepayment" name="prepayment" class="input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form--row">
                                                <label for="description" class="form--label">Kirjeldus</label>
                                                <div class="form--field">
                                                    <div class="form--input">
                                                        <textarea name="description" class="textarea" id="description" cols="30" rows="4"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form--actions">
                                                <button class="button button--primary">Kinnita</button>
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
