@extends('layout')
<head>
    <link rel="stylesheet" href="/css/style-article.css">
    <title>Grades</title>
</head>
@section('content')
    <body>
    <div class="ArticleContent">
        <a href="{{route('grades.create')}}" >
            <button> Add your grades here!</button>
        </a>
        <h1>Not Available</h1>
        <ul>
            <table border="6px" width="1000" height="1000" class="gradeTable">
                <tr>
                    <th bgcolor="#696969">Course Name</th>
                    <th bgcolor="#696969">Test Name</th>
                    <th bgcolor="#696969">Best Grade</th>
                    <th bgcolor="#696969">Edit</th>
                </tr>
            @foreach($grades as $grade)
                    <tr>
                        <td>{{$grade->course_name}}</td>
                        <td> {{$grade->test_name}}</td>
                        <td> {{$grade->best_grade}}</td>
                        <td> <a href="{{route('grades.edit', $grade)}}" >
            <button> Edit!</button>
        </a></td>
                    </tr>
            @endforeach
            </table>

        </ul>
    </div>
    </body>
@endsection
