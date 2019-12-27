<!DOCTYPE html>
<html lang="et">
<head>
    <?php require_once("components/head.php") ?>
    <title>EIS | Lisa uus domeen</title>
</head>
<body>
    <?php require_once("components/menu-mobile.php") ?>
    <div class="layout">
        <?php require_once("components/header.php") ?>
        <div class="layout--main">
            <div class="layout--hero">
                <h1>Lisa uus domeen</h1>
                <a href="#" class="back-link">
                    <i class="fas fa-arrow-left"></i>
                    <span>Tagasi</span>
                </a>
            </div>
            <div class="page page--domains--add">
                <div class="page--content">
                    <div class="wrapper">
                        <form action="domain-detail.php" class="form form__styled">
                            <div class="row">
                                <div class="col-xs-12 col-md-8 col-md-offset-2">
                                    <div class="form--header">
                                        <h3>Info</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form--row">
                                                <label for="name" class="form--label">Nimi *</label>
                                                <div class="form--field">
                                                    <div class="form--input">
                                                        <input type="text" class="input" name="name" id="name">
                                                    </div>
                                                    <div class="tooltip" data-tippy-content="Lorem ipsum doolor sit amet">
                                                        <i class="fas fa-question"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form--row">
                                                <label for="period" class="form--label">Periood *</label>
                                                <div class="form--field">
                                                    <div class="form--input">
                                                        <select name="period" id="period">
                                                            <option value="">Vali periood</option>
                                                            <option value="value-1">Periood 1</option>
                                                            <option value="value-2">Periood 2</option>
                                                            <option value="value-3">Periood 3</option>
                                                        </select>
                                                    </div>
                                                    <div class="tooltip" data-tippy-content="Lorem ipsum doolor sit amet">
                                                        <i class="fas fa-question"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form--row">
                                                <label for="registrar" class="form--label">Registreerija</label>
                                                <div class="form--field">
                                                    <div class="form--input">
                                                        <select name="registrar" id="registrar">
                                                            <option value="">Vali</option>
                                                            <option value="value-1" data-custom-properties="ID: 9832566386238">Leo Lumemees</option>
                                                            <option value="value-2" data-custom-properties="ID: 9832566386238">Leo Lumemees</option>
                                                            <option value="value-3" data-custom-properties="ID: 9832566386238">Leo Lumemees</option>
                                                        </select>
                                                    </div>
                                                    <div class="tooltip" data-tippy-content="Lorem ipsum doolor sit amet">
                                                        <i class="fas fa-question"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form--row">
                                                <label for="password" class="form--label">Reserveeritud salasõna</label>
                                                <div class="form--field">
                                                    <div class="form--input">
                                                        <input type="password" name="password" id="password" class="input">
                                                    </div>
                                                    <div class="tooltip" data-tippy-content="Lorem ipsum doolor sit amet">
                                                        <i class="fas fa-question"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="form--break"></span>
                            <div class="row">
                                <div class="col-md-4 col-xs-12">
                                    <div class="form--header">
                                        <h3>Kontaktid</h3>
                                        <div class="form--header--actions">
                                            <a href="#">Lisa uus kontakt</a>
                                        </div>
                                    </div>
                                    <div class="form--row">
                                        <label for="contact" class="form--label">Tehniline kontakt</label>
                                        <div class="form--field">
                                            <div class="form--input">
                                                <input type="text" name="contact" id="contact" class="input">
                                            </div>
                                            <div class="tooltip" data-tippy-content="Lorem ipsum doolor sit amet">
                                                <i class="fas fa-question"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form--row">
                                        <div class="form--field">
                                            <div class="checkbox">
                                                <input type="checkbox" name="contact-confirm" id="contact-confirm">
                                                <label for="contact-confirm">
                                                    <span>Haldusliides on erinev registreerijast</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">
                                    <div class="form--header">
                                        <h3>Nimeserver</h3>
                                        <div class="form--header--actions">
                                            <a href="#">Lisa veel</a>
                                            <a href="#">Kustuta</a>
                                        </div>
                                    </div>
                                    <div class="form--row">
                                        <label for="hostname" class="form--label">Hostname</label>
                                        <div class="form--field">
                                            <div class="form--input">
                                                <input type="text" name="hostname" id="hostname" class="input">
                                            </div>
                                            <div class="tooltip" data-tippy-content="Lorem ipsum doolor sit amet">
                                                <i class="fas fa-question"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form--row">
                                        <label for="IPv4" class="form--label">IPv4</label>
                                        <div class="form--field">
                                            <div class="form--input">
                                                <input type="text" name="IPv4" id="IPv4" class="input">
                                            </div>
                                            <div class="tooltip" data-tippy-content="Lorem ipsum doolor sit amet">
                                                <i class="fas fa-question"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form--row">
                                        <label for="ipv6" class="form--label">IPv6</label>
                                        <div class="form--field">
                                            <div class="form--input">
                                                <input type="text" name="ipv6" id="ipv6" class="input">
                                            </div>
                                            <div class="tooltip" data-tippy-content="Lorem ipsum doolor sit amet">
                                                <i class="fas fa-question"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form--header">
                                        <h3>Nimeserver 2</h3>
                                        <div class="form--header--actions">
                                            <a href="#">Lisa veel</a>
                                            <a href="#">Kustuta</a>
                                        </div>
                                    </div>
                                    <div class="form--row">
                                        <label for="hostname-2" class="form--label">Hostname</label>
                                        <div class="form--field">
                                            <div class="form--input">
                                                <input type="text" name="hostname-2" id="hostname-2" class="input">
                                            </div>
                                            <div class="tooltip" data-tippy-content="Lorem ipsum doolor sit amet">
                                                <i class="fas fa-question"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form--row">
                                        <label for="ipv4-2" class="form--label">IPv4</label>
                                        <div class="form--field">
                                            <div class="form--input">
                                                <input type="text" name="ipv4-2" id="ipv4-2" class="input">
                                            </div>
                                            <div class="tooltip" data-tippy-content="Lorem ipsum doolor sit amet">
                                                <i class="fas fa-question"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form--row">
                                        <label for="ipv6-2" class="form--label">IPv6</label>
                                        <div class="form--field">
                                            <div class="form--input">
                                                <input type="text" name="ipv6-2" id="ipv6-2" class="input">
                                            </div>
                                            <div class="tooltip" data-tippy-content="Lorem ipsum doolor sit amet">
                                                <i class="fas fa-question"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">
                                    <div class="form--header">
                                        <h3>DSN key</h3>
                                        <div class="form--header--actions">
                                            <a href="#">Lisa veel</a>
                                            <a href="#">Kustuta</a>
                                        </div>
                                    </div>
                                    <div class="form--row">
                                        <label for="flags" class="form--label">Flags</label>
                                        <div class="form--field">
                                            <div class="form--input">
                                                <select name="flags" id="flags">
                                                    <option value="">Vali</option>
                                                    <option value="value-1">Valik 1</option>
                                                    <option value="value-2">Valik 2</option>
                                                    <option value="value-3">Valik 3</option>
                                                </select>
                                            </div>
                                            <div class="tooltip" data-tippy-content="Lorem ipsum doolor sit amet">
                                                <i class="fas fa-question"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form--row">
                                        <label for="protocol" class="form--label">Protocol</label>
                                        <div class="form--field">
                                            <div class="form--input">
                                                <select name="protocol" id="protocol">
                                                    <option value="">Vali</option>
                                                    <option value="value-1">Valik 1</option>
                                                    <option value="value-2">Valik 2</option>
                                                    <option value="value-3">Valik 3</option>
                                                </select>
                                            </div>
                                            <div class="tooltip" data-tippy-content="Lorem ipsum doolor sit amet">
                                                <i class="fas fa-question"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form--row">
                                        <label for="algorithm" class="form--label">Algorithm</label>
                                        <div class="form--field">
                                            <div class="form--input">
                                                <select name="algorithm" id="algorithm">
                                                    <option value="">Vali</option>
                                                    <option value="value-1">Valik 1</option>
                                                    <option value="value-2">Valik 2</option>
                                                    <option value="value-3">Valik 3</option>
                                                </select>
                                            </div>
                                            <div class="tooltip" data-tippy-content="Lorem ipsum doolor sit amet">
                                                <i class="fas fa-question"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form--row">
                                        <label for="public-key" class="form--label">Public key</label>
                                        <div class="form--field">
                                            <div class="form--input">
                                                <select name="public-key" id="public-key">
                                                    <option value="">Vali</option>
                                                    <option value="value-1">Valik 1</option>
                                                    <option value="value-2">Valik 2</option>
                                                    <option value="value-3">Valik 3</option>
                                                </select>
                                            </div>
                                            <div class="tooltip" data-tippy-content="Lorem ipsum doolor sit amet">
                                                <i class="fas fa-question"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="form--break"></span>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 col-xs-12">
                                    <div class="form--header">
                                        <h3>Domeeni registreerimise avaldus</h3>
                                        <div class="form--header--actions">
                                            <div class="tooltip" data-tippy-content="Lorem ipsum doolor sit amet">
                                                <i class="fas fa-question"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form--row">
                                        <p>Uue domeeni loomisel tuleb kaasa lisada allkirjastatud domeeni registreerimise avaldus</p>
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
                                        <button class="button button--primary">Salvesta</button>
                                    </div>
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
