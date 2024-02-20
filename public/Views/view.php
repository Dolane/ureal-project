<?php

//$model = new AppModel();
//$array = $model->getTask(1);
//$controller = new Controller();
//pp($model->getTask());
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ureal</title>
    <link rel="stylesheet" href="main.css">
    <link rel="icon" type="image/png" sizes="32x32" href="/public/images/logo.png">312
</head>
<body>
<h1>NATIONAL MULTIMEDIA TEST</h1>
<h3>Variant <?php echo 1 ?></h3>
<form action="" >
<!--    --><?php //$model->getTask(1)?>
<?php //foreach ($array as $k => $v): ?>
    <div class="container">
        <div class="image">
<!--            <h1>--><?php //echo $v['num'] ?><!-- </h1>-->
<!--              <img src="--><?php //echo $v['description']?><!--" alt="Зображення">-->
            <label class="checkbox-container">
                <input type="checkbox">
                <span class="checkbox-background">
            <span class="checkbox-mark"></span>
                </span>

            </label>
        </div>
    </div>

<?php //endforeach ?>
    <button type="submit">Підбити підсумки)</button>
</form>
</body>
</html>