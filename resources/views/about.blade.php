<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About me</title>
</head>

<body>
    <a href="{{route('about')}}">page about</a>

    <h1>{{$page_title}}</h1>
    <p>{{$description}}</p>

    <div class="students">
        <!-- ciclo nell array students -->
        <h2>Students</h2>
        <ul>
            @foreach($students as $student)
            <li>{{$student}}</li>
            @endforeach
        </ul>
    </div>

    <div class="teachers">
        <!-- ciclo nell array students -->
        <h2>Teachers</h2>
        @if(count($teachers) > 0)
        <ul>
            @foreach($teachers as $teacher)
            <li>{{$teacher}}</li>
            @endforeach
        </ul>
        @else
        <p>No teachers for this class</p>
        @endif
    </div>

    <div class="teachers">
        <!-- ciclo nell array students -->
        <h2>Teachers</h2>
        <ul>
            @forelse($teachers as $teacher)
            <li>{{$teacher}}</li>
            @empty
            <li>No teachers</li>
            @endforelse
        </ul>
    </div>

</body>

</html>