<!DOCTYPE html>
<html lang="et">
<head>
    <?php require_once("components/head.php") ?>
    <title>EIS | Arvete ülevaade</title>
</head>
<body>
    <?php require_once("components/menu-mobile.php") ?>
    <div class="layout">
        <?php require_once("components/header.php") ?>
        <div class="layout--main">
            <div class="layout--hero">
                <h1>Arvete ülevaade</h1>
                <a href="#" class="back-link">
                    <i class="fas fa-arrow-left"></i>
                    <span>Tagasi</span>
                </a>
            </div>
        </div>
        <div class="page page--invoices">
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
                                <div class="col-md-3 col-xs-12">
                                    <label for="invoice-nr" class="form--label">Arve number</label>
                                    <div class="form--field">
                                        <div class="form--input small">
                                            <input type="text" name="invoice-nr" id="invoice-nr" class="input">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-auto">
                                    <label class="form--label">Makse tähtaeg</label>
                                    <div class="form--field">
                                        <div class="form--input small">
                                            <input type="date" name="invoice-date-range-from" id="invoice-date-range-from" class="datepicker" aria-label="Makse tähtaeg algus">
                                            <div class="form--suffix"><i class="fas fa-calendar"></i></div>
                                        </div>
                                        <span class="form--sep">-</span>
                                        <div class="form--input small">
                                            <input type="date" name="invoice-date-range-to" id="invoice-date-range-to" class="datepicker" aria-label="Makse tähtaeg lõpp">
                                            <span class="form--suffix"><i class="fas fa-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-auto">
                                    <label class="form--label">Laekumise kuupäev</label>
                                    <div class="form--field">
                                        <div class="form--input small">
                                            <input type="date" name="due-date-from" id="due-date-from" class="datepicker">
                                            <div class="form--suffix"><i class="fas fa-calendar"></i></div>
                                        </div>
                                        <span class="form--sep">-</span>
                                        <div class="form--input small">
                                            <input type="date" name="due-date-to" id="due-date-to" class="datepicker">
                                            <div class="form--suffix"><i class="fas fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    <label for="status" class="form--label">Staatus</label>
                                    <div class="form--field">
                                        <div class="form--input small">
                                            <select name="status" id="status">
                                                <option value="">Vali</option>
                                                <option value="paid">Makstud</option>
                                                <option value="unpaid">Maksmata</option>
                                                <option value="cancelled">Tühistatud</option>
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
                            <th>Arve number</th>
                            <th>Makse tähtaeg</th>
                            <th>Laekumise kuupäev</th>
                            <th>Summa</th>
                            <th class="table--action">Tühista</th>
                            <th class="table--action">Maksa</th>
                            <th class="table--action">Lae alla</th>
                            <th class="table--action">E-post</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href="#">Arve nr. 3008339</a>
                            </td>
                            <td>21.09.2017</td>
                            <td>
                                <i class="fas fa-exclamation-triangle"></i>
                                <strong>Maksmata</strong>
                            </td>
                            <td>2.40€</td>
                             <td class="table--action"><a href="#"><i class="fas fa-times"></i></a></td>
                             <td class="table--action"><a href="#"><i class="fas fa-credit-card"></i></a></td>
                             <td class="table--action"><a href="#"><i class="fas fa-download"></i></a></td>
                             <td class="table--action"><a href="mailto:example@example.com"><i class="fas fa-envelope"></i></a></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Arve nr. 3008339</a>
                            </td>
                            <td>21.09.2017</td>
                            <td>21.09.2016</td>
                            <td>2.40€</td>
                             <td class="table--action"><a href="#"><i class="fas fa-times"></i></a></td>
                             <td class="table--action"><a href="#"><i class="fas fa-credit-card"></i></a></td>
                             <td class="table--action"><a href="#"><i class="fas fa-download"></i></a></td>
                             <td class="table--action"><a href="mailto:example@example.com"><i class="fas fa-envelope"></i></a></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Arve nr. 3008339</a>
                            </td>
                            <td>21.09.2017</td>
                            <td>21.09.2016</td>
                            <td>2.40€</td>
                             <td class="table--action"><a href="#"><i class="fas fa-times"></i></a></td>
                             <td class="table--action"><a href="#"><i class="fas fa-credit-card"></i></a></td>
                             <td class="table--action"><a href="#"><i class="fas fa-download"></i></a></td>
                             <td class="table--action"><a href="mailto:example@example.com"><i class="fas fa-envelope"></i></a></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Arve nr. 3008339</a>
                            </td>
                            <td>21.09.2017</td>
                            <td>21.09.2016</td>
                            <td>2.40€</td>
                             <td class="table--action"><a href="#"><i class="fas fa-times"></i></a></td>
                             <td class="table--action"><a href="#"><i class="fas fa-credit-card"></i></a></td>
                             <td class="table--action"><a href="#"><i class="fas fa-download"></i></a></td>
                             <td class="table--action"><a href="mailto:example@example.com"><i class="fas fa-envelope"></i></a></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Arve nr. 3008339</a>
                            </td>
                            <td>21.09.2017</td>
                            <td>21.09.2016</td>
                            <td>2.40€</td>
                             <td class="table--action"><a href="#"><i class="fas fa-times"></i></a></td>
                             <td class="table--action"><a href="#"><i class="fas fa-credit-card"></i></a></td>
                             <td class="table--action"><a href="#"><i class="fas fa-download"></i></a></td>
                             <td class="table--action"><a href="mailto:example@example.com"><i class="fas fa-envelope"></i></a></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Arve nr. 3008339</a>
                            </td>
                            <td>21.09.2017</td>
                            <td>21.09.2016</td>
                            <td>2.40€</td>
                             <td class="table--action"><a href="#"><i class="fas fa-times"></i></a></td>
                             <td class="table--action"><a href="#"><i class="fas fa-credit-card"></i></a></td>
                             <td class="table--action"><a href="#"><i class="fas fa-download"></i></a></td>
                             <td class="table--action"><a href="mailto:example@example.com"><i class="fas fa-envelope"></i></a></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Arve nr. 3008339</a>
                            </td>
                            <td>21.09.2017</td>
                            <td>21.09.2016</td>
                            <td>2.40€</td>
                             <td class="table--action"><a href="#"><i class="fas fa-times"></i></a></td>
                             <td class="table--action"><a href="#"><i class="fas fa-credit-card"></i></a></td>
                             <td class="table--action"><a href="#"><i class="fas fa-download"></i></a></td>
                             <td class="table--action"><a href="mailto:example@example.com"><i class="fas fa-envelope"></i></a></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Arve nr. 3008339</a>
                            </td>
                            <td>21.09.2017</td>
                            <td>21.09.2016</td>
                            <td>2.40€</td>
                             <td class="table--action"><a href="#"><i class="fas fa-times"></i></a></td>
                             <td class="table--action"><a href="#"><i class="fas fa-credit-card"></i></a></td>
                             <td class="table--action"><a href="#"><i class="fas fa-download"></i></a></td>
                             <td class="table--action"><a href="mailto:example@example.com"><i class="fas fa-envelope"></i></a></td>
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
        <?php require_once("components/footer.php") ?>
    </div>
    <script src="dist/app.js"></script>
</body>
</html>
