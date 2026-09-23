<!DOCTYPE html>
<html>
<head>
    <title>Alumni Directory</title>
</head>
<body>
    <h1>Alumni Directory</h1>

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>Name</th>
                <th>Batch</th>
                <th>Company</th>
                <th>Designation</th>
                <th>City</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($alumni as $alumnus)
                <tr>
                    <td>{{ $alumnus->name }}</td>
                    <td>{{ $alumnus->batch_year }}</td>
                    <td>{{ $alumnus->company }}</td>
                    <td>{{ $alumnus->designation }}</td>
                    <td>{{ $alumnus->city }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>