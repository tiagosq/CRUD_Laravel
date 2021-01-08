<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('/app.css') }}" />
        <title>CRUD</title>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <h1>Table<span class="yellow"> Products</span></h1>
        <h2>by Felipe Kowalczuk</h2>
        <div class="action">
            <a href="product">New Product</a>
        </div>
        <table class="container">
            <thead>
                <tr>
                    <th><h1>id</h1></th>
                    <th><h1>name</h1></th>
                    <th><h1>description</h1></th>
                    <th><h1>type</h1></th>
                    <th><h1>price</h1></th>
                    <th><h1>created_at</h1></th>
                    <th><h1>updated_at</h1></th>
                    <th><h1>actions</h1></th>
                </tr>
            </thead>
            <tbody>
            @forelse ($products as $prod)
                <tr>
                    <td>{{ $prod->id }}</td>
                    <td>{{ $prod->name }}</td>
                    <td>{{ $prod->description }}</td>
                    <td>{{ $prod->type }}</td>
                    <td>{{ $prod->price }}</td>
                    <td>{{ $prod->created_at->format("d/m/Y") }}</td>
                    <td>{{ $prod->updated_at->format("d/m/Y") }}</td>
                    <td>
                        <a href="product/{{ $prod->id }}">Editar</a>
                        <a href="product/remove/{{ $prod->id }}">Delete</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8">No Results</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        </div>
    </body>
</html>
