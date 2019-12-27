<!DOCTYPE html>
<html lang="et">
<head>
    <?php require_once("components/head.php") ?>
    <title>EIS | Logi sisse</title>
</head>
<body>
    <?php require_once("components/menu-mobile.php") ?>
    <div class="layout">
        <?php require_once("components/header.php") ?>
        <div class="layout--main">
            <div class="layout--hero">
                <h1>Sisene</h1>
            </div>
            <div class="page">
                <div class="page--content">
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <article class="paper">
                                    <header class="paper--header">
                                        <h3>Logi sisse isikut tõendava dokumendiga.</h3>
                                    </header>
                                    <div class="paper--content">
                                        <div class="paper--text">
                                            <p>Sisene kasutades Eesti (sh e-residendi) ID kaarti,
                                                Mobiil-IDd, pangalinki või EU liikmeriikide elektroonset isikutunnistust (EIDAS).
                                            </p>
                                            <p><a href="dashboard.php" class="button button--primary">Sisene</a></p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <article class="paper">
                                    <header class="paper--header">
                                        <h3>Logi sisse salasõnaga</h3>
                                    </header>
                                    <div class="paper--content">
                                        <form action="dashboard.php" class="form">
                                            <div class="form--row">
                                                <label class="form--label" for="email">E-post</label>
                                                <div class="form--field">
                                                    <div class="form--input">
                                                        <input id="email" class="input" type="email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form--row">
                                                <label class="form--label" for="password">Salasõna</label>
                                                <div class="form--field">
                                                    <div class="form--input">
                                                        <input id="password" class="input" type="password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form--row">
                                                <div class="form--field">
                                                    <div class="form--checkbox">
                                                        <div class="checkbox">
                                                            <input id="remember" name="remember" type="checkbox">
                                                            <label for="remember">
                                                                <span>Mäleta mind</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form--actions">
                                                <button class="button button--primary" type="submit">Sisene</button>
                                                <button class="button button--secondary" type="submit">Loo konto</button>
                                            </div>
                                        </form>
                                        <div class="paper--text">
                                            <p><a href="">Unustasid parooli?</a></p>
                                            <p><a href="">Ei saanud e-posti aadressi kinnituskirja?</a></p>
                                        </div>
                                    </div>
                                </article>
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
