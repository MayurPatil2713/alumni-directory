<!DOCTYPE html>
<html>
<head>
    <title>Alumni Directory</title>
</head>
<body>
    <h1>Alumni Directory</h1>

    <form method="GET" action="{{ route('alumni.index') }}">
        <label for="batch_year">Filter by batch:</label>

        <select name="batch_year" id="batch_year">
            <option value="">All batches</option>

            @foreach ($batches as $batch)
                <option value="{{ $batch }}" @selected($selectedBatch == $batch)>
                    {{ $batch }}
                </option>
            @endforeach
        </select>

        <button type="submit">Search</button>
        <a href="{{ route('alumni.index') }}">Clear filter</a>
    </form>

    <br>

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
            @forelse ($alumni as $alumnus)
                <tr>
                    <td>{{ $alumnus->name }}</td>
                    <td>{{ $alumnus->batch_year }}</td>
                    <td>{{ $alumnus->company }}</td>
                    <td>{{ $alumnus->designation }}</td>
                    <td>{{ $alumnus->city }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No alumni found for this batch.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>