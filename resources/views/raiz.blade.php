<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>FUNCION CUADRATICA</h1>
    
    <form action="{{route('raiz.store')}}" method="POST" enctype="multipart/form-data">
    
    @csrf
    
    <label>
        ingrese a:
        <br>
        <input type="number" name="a">
    </label>
    <br>
    <label>
        ingrese b:
        <br>
        <input type="number" name="b">
    </label>
    <br>
        ingrese c:
        <br>
        <input type="number" name="b">
    </label>
    <br>
    <button type="submit" id="btn1">Enviar Formulario:</button>
    </form>
</body>
</html>