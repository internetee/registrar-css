<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo basename(__DIR__); ?></title>
    <style type="text/css">
        * {margin:0;padding:0;}
        ul {list-style-type: none;padding-left: 10px;}
        h1 {font-size:20px; margin-bottom: 20px;}
        h3 {margin-top: 10px;}
        #content {width: 480px;max-width:100%;margin: 0 auto;padding: 30px 20px; background: white; margin-top: 10px;}
        body{width:100%;background:#f6f6f6;font:12px/20px Arial, sans-serif;color:#404040;}
        a{color:#007CC3;text-decoration:none;}
        a:hover{text-decoration:underline;}
    </style>
</head>
<body>
<div id="content">
    <h1><?php echo basename(__DIR__); ?> HTML Prototype</h1>
    <h3>Auth</h3>
    <ul>
        <li><a href="login.php">Login</a></li>
    </ul>
    <h3>Dashboard</h3>
    <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
    </ul>
    <h3>Account</h3>
    <ul>
        <li><a href="account-history.php">Account history</a></li>
        <li><a href="account-edit.php">Account edit</a></li>
    </ul>
    <h3>Domains</h3>
    <ul>
        <li><a href="domains.php">Domains</a></li>
        <li><a href="domain-add.php">Domain add</a></li>
        <li><a href="domain-detail.php">Domain detail</a></li>
        <li><a href="domain-bulkchange-step-1.php">Domain bulkchange (1)</a></li>
        <li><a href="domain-bulkchange-step-2.php">Domain bulkchange (2)</a></li>
        <li><a href="domain-bulkchange-step-3.php">Domain bulkchange (3)</a></li>
        <li><a href="domain-bulkchange-step-4.php">Domain bulkchange (4)</a></li>
        <li><a href="domain-transferral.php">Domain transferral</a></li>
    </ul>
    <h3>Contacts</h3>
    <ul>
        <li><a href="contacts.php">Contacts</a></li>
        <li><a href="contact-detail.php">Contact detail</a></li>
    </ul>
    <h3>Credit</h3>
    <ul>
        <li><a href="credit-add.php">Credit add</a></li>
        <li><a href="credit-payment.php">Credit payment</a></li>
    </ul>
    <h3>Invoices</h3>
    <ul>
        <li><a href="invoices.php">Invoices</a></li>
    </ul>
</div><!-- #content -->
</body>
</html>
