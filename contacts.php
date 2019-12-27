<!DOCTYPE html>
<html lang="et">
<head>
    <?php require_once("components/head.php") ?>
    <title>EIS | Kontaktid</title>
</head>
<body>
    <?php require_once("components/menu-mobile.php") ?>
    <div class="layout">
        <?php require_once("components/header.php") ?>
        <div class="layout--main">
            <div class="layout--hero">
                <h1>Kontaktid</h1>
                <a href="#" class="back-link">
                    <i class="fas fa-arrow-left"></i>
                    <span>Tagasi</span>
                </a>
            </div>
            <div class="page page--contacts">
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
                                        <label for="name" class="form--label">Nimi</label>
                                        <div class="form--field">
                                            <div class="form--input small">
                                                <input type="text" name="name" id="name" class="input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12">
                                        <label for="id" class="form--label">Id</label>
                                        <div class="form--field">
                                            <div class="form--input small">
                                                <input type="text" name="id" id="id" class="input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12">
                                        <label for="ident" class="form--label">Ident</label>
                                        <div class="form--field">
                                            <div class="form--input small">
                                                <input type="text" name="ident" id="ident" class="input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12">
                                        <label for="ident-type" class="form--label">Ident tüüp</label>
                                        <div class="form--field">
                                            <div class="form--input small">
                                                <select name="ident-type" id="ident-type">
                                                    <option value="">Vali</option>
                                                    <option value="value-1">Valik 1</option>
                                                    <option value="value-2">Valik 2</option>
                                                    <option value="value-3">Valik 3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12">
                                        <label for="email" class="form--label">Email</label>
                                        <div class="form--field">
                                            <div class="form--input small">
                                                <input type="email" name="email" id="email" class="input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12">
                                        <label for="country" class="form--label">Riik</label>
                                        <div class="form--field">
                                            <div class="form--input small">
                                                <select name="country" id="country">
                                                    <option value="">Vali</option>
                                                    <option value="value-1">Valik 1</option>
                                                    <option value="value-2">Valik 2</option>
                                                    <option value="value-3">Valik 3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12">
                                        <label for="contact-type" class="form--label">Kontakti tüüp</label>
                                        <div class="form--field">
                                            <div class="form--input small">
                                                <select name="contact-type" id="contact-type">
                                                    <option value="">Vali</option>
                                                    <option value="value-1">Registrant</option>
                                                    <option value="value-2">Admin</option>
                                                    <option value="value-3">Tech</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12">
                                        <label for="registrar" class="form--label">Registreerija</label>
                                        <div class="form--field">
                                            <div class="form--input small">
                                                <select name="registrar" id="registrar">
                                                    <option value="">Vali</option>
                                                    <option value="value-1">Registrant</option>
                                                    <option value="value-2">Admin</option>
                                                    <option value="value-3">Tech</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-auto">
                                        <label class="form--label">Loodud ajavahemik</label>
                                        <div class="form--field">
                                            <div class="form--input small">
                                                <input type="date" name="created-from" id="created-from" class="datepicker">
                                                <div class="form--suffix"><i class="fas fa-calendar"></i></div>
                                            </div>
                                            <span class="form--sep">-</span>
                                            <div class="form--input small">
                                                <input type="date" class="datepicker" id="created-to" name="created-to">
                                                <div class="form--suffix"><i class="fas fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12">
                                        <label for="updated-at" class="form--label">Uuendatud kuupäev</label>
                                        <div class="form--field">
                                            <div class="form--input small">
                                                <input type="text" name="updated-at" id="updated-at" class="input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12">
                                        <label for="status" class="form--label">Staatus</label>
                                        <div class="form--field">
                                            <div class="form--input small">
                                                <select name="status" id="status">
                                                    <option value="">Vali</option>
                                                    <option value="status-1">Staatus 1</option>
                                                    <option value="status-2">Staatus 2</option>
                                                    <option value="status-3">Staatus 3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12">
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
                <div class="page--actions">
                    <div class="wrapper">
                        <div class="page--actions__left">
                            <button class="button button--secondary" type="button" data-dialog="contact-edit">Lisa uus kontakt</button>
                        </div>
                    </div>
                </div>
                <div class="wrapper">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nimi</th>
                                <th>ID</th>
                                <th>Ident</th>
                                <th>Loodud</th>
                                <th class="table--action">Muuda</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Juhan Mets</td>
                                <td>EIS:TEST:KOOD-123</td>
                                <td>47510220302 [EE priv]</td>
                                <td>12.12.2018</td>
                                 <td class="table--action"><a href="contact-detail.php"><i class="fas fa-pencil-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>Juhan Mets</td>
                                <td>EIS:TEST:KOOD-123</td>
                                <td>47510220302 [EE priv]</td>
                                <td>12.12.2018</td>
                                 <td class="table--action"><a href="contact-detail.php"><i class="fas fa-pencil-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>Juhan Mets</td>
                                <td>EIS:TEST:KOOD-123</td>
                                <td>47510220302 [EE priv]</td>
                                <td>12.12.2018</td>
                                 <td class="table--action"><a href="contact-detail.php"><i class="fas fa-pencil-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>Juhan Mets</td>
                                <td>EIS:TEST:KOOD-123</td>
                                <td>47510220302 [EE priv]</td>
                                <td>12.12.2018</td>
                                 <td class="table--action"><a href="contact-detail.php"><i class="fas fa-pencil-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>Juhan Mets</td>
                                <td>EIS:TEST:KOOD-123</td>
                                <td>47510220302 [EE priv]</td>
                                <td>12.12.2018</td>
                                 <td class="table--action"><a href="contact-detail.php"><i class="fas fa-pencil-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>Juhan Mets</td>
                                <td>EIS:TEST:KOOD-123</td>
                                <td>47510220302 [EE priv]</td>
                                <td>12.12.2018</td>
                                 <td class="table--action"><a href="contact-detail.php"><i class="fas fa-pencil-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>Juhan Mets</td>
                                <td>EIS:TEST:KOOD-123</td>
                                <td>47510220302 [EE priv]</td>
                                <td>12.12.2018</td>
                                 <td class="table--action"><a href="contact-detail.php"><i class="fas fa-pencil-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>Juhan Mets</td>
                                <td>EIS:TEST:KOOD-123</td>
                                <td>47510220302 [EE priv]</td>
                                <td>12.12.2018</td>
                                 <td class="table--action"><a href="contact-detail.php"><i class="fas fa-pencil-alt"></i></a></td>
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
        <?php require_once("components/contact-add.php") ?>
        <?php require_once("components/footer.php") ?>
    </div>
    <script src="dist/app.js"></script>
</body>
</html>
