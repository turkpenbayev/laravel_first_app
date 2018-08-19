<!doctype html>
<head>
<title>Index</title>
</head>
<body>
    @foreach ($students as $student)
        <a href="students/{{$student->id}}">
            <li>{{$student->name}}</li>
        </a>
    @endforeach
</body>
</html>
