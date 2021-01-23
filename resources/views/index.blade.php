<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nos articles</h1>
    @foreach ($articles as $article)
        <h2>{{$article->title}}</h2>
        <small>Ecrit le <?= $article['created_at'] ?></small>
        <p>{{$article->introduction}}</p>
        <a href="/article?id={{$article->id}}">Lire la suite</a>
        <a href="delete-article.php?id={{$article->id}}" onclick="return window.confirm(`Êtes vous sur de vouloir supprimer cet article ?!`)">Supprimer</a>
    @endforeach
</body>
</html>