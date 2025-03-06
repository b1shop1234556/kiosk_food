<!DOCTYPE html>
<html>
<head>
    <title>Class Details</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin-top: 20px;
        }
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

    <h1>Class Details</h1>
    <table>
        <tr>
            <th>Subject</th>
            <td>{{ $class->subject }}</td>
        </tr>
        <tr>
            <th>Professor</th>
            <td>{{ $class->professor }}</td>
        </tr>
        <tr>
            <th>Units</th>
            <td>{{ $class->units }}</td>
        </tr>
    </table>

</body>
</html>
