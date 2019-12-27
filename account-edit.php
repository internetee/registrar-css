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
            <h1>Voldermar Mesipuu</h1>
            <a href="#" class="back-link">
                <i class="fas fa-arrow-left"></i>
                <span>Tagasi</span>
            </a>
        </div>
        <div class="page page--domains--add">
            <div class="page--content">
                <div class="wrapper">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <div class="paper">
                                <div class="paper--header">
                                    <h3>Details</h3>
                                </div>
                                <div class="paper--content">
                                    <form action="" class="form">
                                        <div class="form--row">
                                            <label for="email" class="form--label">Arvete e-post *</label>
                                            <div class="form--field">
                                                <div class="form--input">
                                                    <input type="email" class="input" name="email" id="email" value="voldermar@volli.ee">
                                                </div>
                                                <div class="tooltip" data-tippy-content="Lorem ipsum doolor sit amet">
                                                    <i class="fas fa-question"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form--row">
                                            <label for="iban" class="form--label">Arvete IBAN *</label>
                                            <div class="form--field">
                                                <div class="form--input">
                                                    <input type="text" class="input" name="iban" id="iban" value="12435367358">
                                                </div>
                                                <div class="tooltip" data-tippy-content="Lorem ipsum doolor sit amet">
                                                    <i class="fas fa-question"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form--actions">
                                            <button class="button button--primary" type="submit">Salvesta</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="paper">
                                <div class="paper--header">
                                    <h3>Linked users</h3>
                                </div>
                                <div class="paper--content">
                                    <table class="table table__basic">
                                        <thead>
                                            <tr>
                                                <th>User</th>
                                                <th>Type</th>
                                                <th class="table--action">Switch</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>3553352532</td>
                                            <td>Super</td>
                                            <td class="table--action"><a href=""><i class="fas fa-sign-in-alt"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Voldemar</td>
                                            <td>Super</td>
                                            <td class="table--action"><a href=""><i class="fas fa-sign-in-alt"></i></a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="paper">
                                <div class="paper--header">
                                    <h3>Balance auto-reload</h3>
                                </div>
                                <div class="paper--content">
                                    <p>Disabled</p>
                                </div>
                                <div class="paper--footer">
                                    <button class="button button--primary" type="button">Enable</button>
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
