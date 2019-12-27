<!DOCTYPE html>
<html lang="et">
<head>
    <?php require_once("components/head.php") ?>
    <title>EIS | Konto ajalugu</title>
</head>
<body>
    <?php require_once('components/menu-mobile.php') ?>
    <div class="layout">
        <?php require_once("components/header.php") ?>
        <div class="layout--main">
            <div class="layout--hero">
                <h1>Konto ajalugu</h1>
                <a href="#" class="back-link">
                    <i class="fas fa-arrow-left"></i>
                    <span>Tagasi</span>
                </a>
            </div>
            <div class="page page--account-history">
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
                                        <button class="button button--toggle" data-toggle="filters" type="button">
                                            <span>Ava filter</span>
                                            <span>Sulge filter</span>
                                            <i class="fas fa-filter"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div id="filters" class="form--filters">
                                <div class="row bottom-xs">
                                    <div class="col-xs-auto">
                                        <label for="date-time-range" id="date-time-range" class="form--label">Kuupäev</label>
                                        <div class="form--field">
                                            <div class="form--input small">
                                                <input type="date" class="datepicker" name="date-time-range-from" id="date-time-range-from" aria-labelledby="date-time-range">
                                                <span class="form--suffix"><i class="fas fa-calendar"></i></span>
                                            </div>
                                            <span class="form--sep">-</span>
                                            <div class="form--input small">
                                                <input type="date" class="datepicker" name="date-time-range-to" id="date-time-range-to" aria-labelledby="date-time-range">
                                                <span class="form--suffix"><i class="fas fa-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12">
                                        <label for="activity-type" class="form--label">Tüüp</label>
                                        <div class="form--field">
                                            <div class="form--input small">
                                                <select name="activity-type" id="activity-type">
                                                    <option value="">Vali</option>
                                                    <option value="domain-expiration">Domeeni aegumine</option>
                                                    <option value="domain-auction">Domeenioksjon</option>
                                                    <option value="invoice-payment">Arve maksmine</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12">
                                        <label for="user" class="form--label">Kasutaja</label>
                                        <div class="form--field">
                                            <div class="form--input small">
                                                <select name="user" id="user">
                                                    <option value="">Vali</option>
                                                    <option value="user-1">Leo lumemees</option>
                                                    <option value="user-2">Leo lumemees</option>
                                                    <option value="user-3">Leo lumemees</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-auto col-xs-12">
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
                <div class="wrapper">
                    <table class="table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Kuupäev</th>
                                <th>Kellaaeg</th>
                                <th>Tüüp</th>
                                <th>Kirjeldus</th>
                                <th>Krediit</th>
                                <th>Kes tegi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><i class="fas fa-life-ring"></i></td>
                                <td>19.09.2017</td>
                                <td>15:13</td>
                                <td>Domeeni aegumine</td>
                                <td>Domeen tere.ee aegus</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-gavel"></i></td>
                                <td>19.09.2017</td>
                                <td>15:13</td>
                                <td>Domeenioksjon</td>
                                <td>Pakkumine lumememm.ee domeenile</td>
                                <td></td>
                                <td>Leo Lumemees</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-file-alt"></i></td>
                                <td>19.09.2017</td>
                                <td>15:13</td>
                                <td>Arve maksmine</td>
                                <td>Krediidi lisamine</td>
                                <td>+12€</td>
                                <td>Leo Lumemees</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-life-ring"></i></td>
                                <td>19.09.2017</td>
                                <td>15:13</td>
                                <td>Domeeni aegumine</td>
                                <td>Domeen tere.ee aegus</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-gavel"></i></td>
                                <td>19.09.2017</td>
                                <td>15:13</td>
                                <td>Domeenioksjon</td>
                                <td>Pakkumine lumememm.ee domeenile</td>
                                <td></td>
                                <td>Leo Lumemees</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-file-alt"></i></td>
                                <td>19.09.2017</td>
                                <td>15:13</td>
                                <td>Arve maksmine</td>
                                <td>Krediidi lisamine</td>
                                <td>+12€</td>
                                <td>Leo Lumemees</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-life-ring"></i></td>
                                <td>19.09.2017</td>
                                <td>15:13</td>
                                <td>Domeeni aegumine</td>
                                <td>Domeen tere.ee aegus</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-gavel"></i></td>
                                <td>19.09.2017</td>
                                <td>15:13</td>
                                <td>Domeenioksjon</td>
                                <td>Pakkumine lumememm.ee domeenile</td>
                                <td></td>
                                <td>Leo Lumemees</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-file-alt"></i></td>
                                <td>19.09.2017</td>
                                <td>15:13</td>
                                <td>Arve maksmine</td>
                                <td>Krediidi lisamine</td>
                                <td>+12€</td>
                                <td>Leo Lumemees</td>
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
