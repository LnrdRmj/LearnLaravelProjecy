<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <h3>{{ $description }}</h3>

    @foreach ($data as $product)
        <p> {{ $product }} </p>
    @endforeach

</body>
</html>