<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
</head>
<body>

<h1>{{$article[0]->title}}</h1>
<small>Ecrit le {{$article[0]->created_at}}</small>
<p>{{$article[0]->introduction}}</p>
<hr>
{!!$article[0]->content!!}

@if($comments->count() == 4)
    echo "salut";
@endif

</body>
</html>