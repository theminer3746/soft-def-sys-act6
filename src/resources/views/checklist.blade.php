<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Docker compose</title>
    <link rel="stylesheet" href="css/bulma.css">
</head>
<body>
    <div class="container">
        @if (count($items) > 0)
            <div class="content">
                <ol>
                    @foreach ($items as $item)
                        <li>{{ $item->name }}</li>
                    @endforeach
                </ol>
            </div>
        @else
            <div class="content">
                <p>No records to show, add some</p>
            </div>
        @endif

        <form action="checklists" method="post">
            <div class="columns">
                <div class="column">
                    <input class="input" type="text" name="name" maxlength="200">
                </div>
                <div class="column">
                    <input class="button is-link" type="submit" value="Add">
                </div>
            </div>
            @csrf
        </form>
        <form action="checklists" method="post">
            @method('DELETE')
            <div class="columns">
                <div class="column">
                    <input class="button is-danger" type="submit" value="Delete all records">
                </div>
            </div>
            @csrf
        </form>
    </div>
</body>
</html>
