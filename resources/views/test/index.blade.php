<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{!! $article->title !!}</title>
    <link rel="stylesheet" href="{!! asset('assets/css/general.css') !!}">
</head>
<body>
    <h1>Articulo:{!! $article->title !!}</h1>
    </hr>
    <h3>Contenido {!! $article->content !!}</h3>
    </hr>
    <h4>Editado por: {!! $article->user->name !!} | Categoria: {!! $article->category->name !!} | Tags:
        @foreach($article->tags as $tag)
            {!! $tag->name !!}
        @endforeach
    </h4>
</body>
</html>