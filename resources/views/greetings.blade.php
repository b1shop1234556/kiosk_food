<!-- <!DOCTYPE html>
<html>
<head>
    <title>Laravel View</title>
</head>
<body>
    <h1>Welcome to Laravel Views</h1>
    <p>This is a basic Laravel view.</p>
</body>
</html> -->

<!-- <!DOCTYPE html>
<html>
<head>
    <title>Laravel View</title>
</head>
<body>
    <h1>Hello {{$name}}, Welcome to Laravel Views</h1>
    <p>This is a basic Laravel view.</p>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
    <title>Laravel View</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        /* table {
        width: 80%;
        max-width: 800px;
        margin: 20px auto;
        } */
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <!-- <h1>Hello {{$name}}, Welcome to Laravel Views</h1> -->
    <p>Your subject for this semester:</p>

    @if($enrolled)
        <!-- <h2>Your Enrolled Subjects</h2> -->
        <table>
            <thead>
                <tr>
                    <th>Subject</th>
                    <th>Units</th>
                    <th>Professor</th>
                    <!-- <th>Units</th> -->
                </tr>
            </thead>
            <tbody>
                @foreach($classes as $class)
                    <tr>
                        <td>{{ $class->subject }}</td>
                        <td>{{ $class->units }}</td>
                        <td>{{ $class->professor }}</td>
                        <!-- <td>{{ $class->units }}</td> -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>You are not enrolled in any subjects.</p>
    @endif

</body>
</html>
