<!DOCTYPE html>
<html lang="en">

<head>
  <title></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

    @foreach ($listings as $item)
      <p>{{ $item['id'] }}</p>
      <p>{{ $item['title'] }} <a href="/listing/{{ $item['id'] }}">come</a></p>
      <p>{{ $item['description'] }}</p>
    @endforeach

</body>

</html>
