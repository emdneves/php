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
    {{$myVar}}

    <br>
    <br>

    @php
        $myVarLaravel = '$myVarLaravel - Sou uma variável de php laravel';
        $myEmptyVar = null;
    @endphp

    {{$myVarLaravel}}

    @if(!@empty($myEmptyVar))
        {{$myEmptyVar}}
    @else
        {{$myVarLaravel}}
    @endif

        

    


</head>
<body>
    sdfsdgf
</body>
</html>