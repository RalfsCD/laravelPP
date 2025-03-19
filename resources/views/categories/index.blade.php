<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
</head>
<body>
    <h1>Categories:</h1>
    
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Color</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>
                        <span style="background-color: {{ $category->hex_color }}; color: white; padding: 5px 10px; border-radius: 5px;">
                            {{ $category->hex_color }}
                        </span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
