<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="">
    @include('inc.navbar')
    <section class="container m-4">
        @include('inc.messages')
        @yield('content')
    </section>

    @include('inc.footer')


    <script src="/ckeditor/ckeditor.js"></script>
    <script src="/ckeditor/styles.js"></script>
    <script>
        // CKEDITOR.replace( 'article-ckeditor',{toolbar: 'Basic', language: 'en'} );
        CKEDITOR.replace( 'article-ckeditor', { uiColor: '#9AB8F3'  ,customConfig: '/custom/ckeditor_config.js'});
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>