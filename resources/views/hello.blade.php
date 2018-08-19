<!doctype html>
<head>
<title>Hello, {{$title}}</title>
</head>
<body>
    @foreach ($tasks as $task)
        <li>{{$task}}</li>
    @endforeach
</body>
</html>
