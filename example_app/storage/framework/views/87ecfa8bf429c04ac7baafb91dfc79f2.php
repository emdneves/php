<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My blade</title>
    <h1>sou um blade Laravel</h1>
    <br>
    <br>


    <?php
    $myVar = ' $myVar -Sou uma variável simples';
    echo $myVar;
    ?>
    <?php echo e($myVar); ?>


    <br>
    <br>

    <?php
        $myVarLaravel = '$myVarLaravel - Sou uma variável de php laravel';
        $myEmptyVar = null;
    ?>

    <?php echo e($myVarLaravel); ?>


    <?php if(!@empty($myEmptyVar)): ?>
        <?php echo e($myEmptyVar); ?>

    <?php else: ?>
        <?php echo e($myVarLaravel); ?>

    <?php endif; ?>

        

    


</head>
<body>
    sdfsdgf
</body>
</html><?php /**PATH C:\Users\sdev0223\Documents\Cesae-SoftwareDeveloper\Programacao_Web\#02 - WEB - Server Side PHP&Laravel\example-app\resources\views/my_laravel.blade.php ENDPATH**/ ?>