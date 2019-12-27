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
                                <div class="steps--item steps--item__active">
                                    <i class="fas fa-credit-card"></i>
                                    <p>Maksa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page--block page--block__dark">
                    <div class="wrapper wrapper__small">
                        <div class="page--block--header">
                            <h3>Makse detailid</h3>
                        </div>
                        <table>
                            <tbody>
                            <tr>
                                <td>Maksja:</td>
                                <td>Leo Lumememm</td>
                            </tr>
                            <tr>
                                <td>Makse tähtaeg:</td>
                                <td>05. oktoober 2017</td>
                            </tr>
                            <tr>
                                <td>Arve sisu:</td>
                                <td>domeenioksjoni tasu kinnisvara.ee</td>
                            </tr>
                            <tr>
                                <td>Summa:</td>
                                <td><strong>30.00 €</strong></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="wrapper wrapper__small">
                    <div class="tabs" role="tablist">
                        <div class="tabs--head">
                            <a href="#bank" class="tabs--head--item active" role="tab" aria-controls="bank">Maksa pangas</a>
                            <a href="#credit" class="tabs--head--item" role="tab" aria-controls="credit">Maksa krediitkaardiga</a>
                            <a href="#email" class="tabs--head--item" role="tab" aria-controls="email">Saada e-postiga</a>
                        </div>
                        <div class="tabs--tab active" role="tabpanel" aria-selected="true" aria-label="Maksa pangas" id="bank">
                            <div class="payment-methods">
                                <div class="payment-methods--item">
                                    <a href="#"><img src="public/swed.png" alt="Swedbank"></a>
                                </div>
                                <div class="payment-methods--item">
                                    <a href="#"><img src="public/seb.png" alt="SEB"></a>
                                </div>
                                <div class="payment-methods--item">
                                    <a href="#"><img src="public/luminor.png" alt="Luminor"></a>
                                </div>
                                <div class="payment-methods--item">
                                    <a href="#"><img src="public/lhv.png" alt="LHV"></a>
                                </div>
                                <div class="payment-methods--item">
                                    <a href="#">
                                        <i class="fas fa-credit-card-alt"></i>
                                        Maksa krediitkaardiga
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="tabs--tab" role="tabpanel" aria-selected="false" aria-label="Maksa krediitkaardiga" id="credit">
                            <form action="" class="form form__md form__center">
                                <div class="form--row">
                                    <label for="name" class="form--label">Kaardiomaniku nimi</label>
                                    <div class="form--field">
                                        <div class="form--input">
                                            <input type="text" name="name" id="name" class="input">
                                        </div>
                                    </div>
                                </div>
                                <div class="form--row">
                                    <label for="card-number" class="form--label">Krediitkaardi number</label>
                                    <div class="form--field">
                                        <div class="form--input">
                                            <span class="form--suffix"><i class="fas fa-credit-card-alt"></i></span>
                                            <input type="text" name="card-number" id="card-number" class="input">
                                        </div>
                                        <div class="form--input">
                                            <input type="number" aria-label="CCV number" name="ccv" id="ccv" class="input" placeholder="CCV number">
                                        </div>
                                    </div>
                                </div>
                                <div class="form--row">
                                    <label for="expiration-date" class="form--label">Kaardi kehtivuse lõpp</label>
                                    <div class="form--field">
                                        <div class="form--input">
                                            <select name="expiration-date" id="expiration-date">
                                                <option value="">Vali</option>
                                                <option value="valik-1">Valik 1</option>
                                                <option value="valik-2">Valik 2</option>
                                                <option value="valik-3">Valik 3</option>
                                            </select>
                                        </div>
                                        <div class="form--input">
                                            <select name="expiration-date-year" id="expiration-date-year" aria-label="Kaardi kehtivuse lõpp aasta">
                                                <option value="">Vali</option>
                                                <option value="valik-1">Valik 1</option>
                                                <option value="valik-2">Valik 2</option>
                                                <option value="valik-3">Valik 3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form--actions">
                                    <button class="button button--primary">Maksa</button>
                                </div>
                            </form>
                        </div>
                        <div class="tabs--tab" role="tabpanel" aria-selected="false" aria-label="Saada e-postiga" id="email">
                            <form action="" class="form form__sm form__center">
                                <div class="form--row">
                                    <label for="email" class="form--label">E-posti aadress</label>
                                    <div class="form--field">
                                        <div class="form--input">
                                            <input type="email" name="email" id="email" class="input">
                                        </div>
                                    </div>
                                </div>
                                <div class="form--actions">
                                    <button class="button button--primary">Saada</button>
                                </div>
                            </form>
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
