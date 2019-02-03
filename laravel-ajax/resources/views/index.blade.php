<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <h1>HOLA</h1>
    @foreach ($products as $product)
      {{ $product->id}}
        {{ $product->nombre}}
    @endforeach
</body>

</html>
