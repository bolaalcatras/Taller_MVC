<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body text="orange">
    <h1>formulario</h1>
    
    <form action="{{route('Table2.store')}}" method="POST" enctype="multipart/form-data">
    
    @csrf
    
    <label>
        Precio:
        <br>
        <input type="number" name="price">
    </label>
    <br>
    <label>
        Modelo:
        <br>
        <input type="text" name="model">
    </label>
    <br> 
        Marca:
        <br> 
        <input type="text" name="marca">
    </label>
    <br> 
        Numero de celular:
        <br> 
        <input type="text" name="number">
    </label>
    <br>
    <button type="submit" id="btn1">Enviar Formulario:</button>
    </form>
</body>
</html>