<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Page</title>
</head>

<body>
    <h1>Tulisan ini berasal dari views product</h1><br>
    <ul>
        @foreach ($data as $d)
            <li>{{ $d }}</li>
        @endforeach
    </ul>
    <ul>
        ??????
    </ul>
</body>

</html>
