<!doctype html>
<html lang="en" ng-app="myapp">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css"/>

    <script src="/bower_components/jquery/jquery.min.js"></script>
    <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

</head>
<body>

<?=view("product._navbar")?>

<div class="container">
    <div class="row">
        <?=view("product._menu")?>
        <div class="col-sm-9">
            <?=$content?>
        </div>
    </div>
</div>

</body>
</html>