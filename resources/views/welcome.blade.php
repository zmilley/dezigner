<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <ul>
    @foreach ($tasks as $task)
        <li>{{$task}}</li>
    @endforeach
    </ul>
</body>
</html>