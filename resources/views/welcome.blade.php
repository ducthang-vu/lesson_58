<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Welcome</h1>
    <main>
        <h2>Students list</h2>

        @foreach ($students as $student)
            <div class="student">
                <h4>{{ $student->name}}</h4>
                <p>{{ $student->description}}</p>
            </div>
        @endforeach

        <h2>Teachers list</h2>
        @foreach ($teachers as $teacher)
            <div class="teachers">
                <h4>{{ $teacher->name}}</h4>
                <p>{{ $teacher->description}}</p>
            </div>
        @endforeach
    </main>
</body>
</html>
