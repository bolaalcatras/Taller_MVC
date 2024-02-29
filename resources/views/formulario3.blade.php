<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body text="orange">
    <h1>formulario</h1>
    
    <form action="{{route('Table3.store')}}" method="POST" enctype="multipart/form-data">
    
    @csrf
    
    <label>
        Precio:
        <br>
        <input type="number" name="price">
    </label>
    <br>
    <label>
        Proveedor:
        <br>
        <input type="text" name="proveedor">
    </label>
    <br> 
        Fruta:
        <br> 
        <input type="text" name="fruit">
    </label>
    <br> 
        Peso:
        <br> 
        <input type="float" name="peso">
    </label>
    <br>
    <button type="submit" id="btn1">Enviar Formulario:</button>
    </form>
</body>
</html>