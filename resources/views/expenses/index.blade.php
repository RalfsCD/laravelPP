<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expenses</title>
</head>
<body>
    <h1>Expenses:</h1>
    
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Amount</th>
                <th>Category</th>
                <th>Notes</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($expenses as $expense)
                <tr>
                    <td>{{ $expense->date }}</td>
                    <td>${{ number_format($expense->amount, 2) }}</td>
                    <td>{{ $expense->category->name }}</td>
                    <td>{{ $expense->notes ?? 'N/A' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
