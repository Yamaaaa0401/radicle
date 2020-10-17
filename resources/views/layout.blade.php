<!DOCTYPE HTML>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('title')</title>
        <link rel="stylesheet" href="/css/app.css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="/js/app.js" defer></script>

    </head>

    <body>
        <header>
            @include('header')
        </header>
        <br>
        <div class="container">
            @yield('content')
        </div>
        <footer class="footer bg-dark  fixed-bottom">
            @include('footer')
        </footer>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src=""></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        <script>
            $(function(){
                        $('#myfile').change(function(e){
                    //ファイルオブジェクトを取得する
                        var file = e.target.files[0];
                        var reader = new FileReader();
                    //画像でない場合は処理終了
                        if(file.type.indexOf("image") < 0){
                            alert("画像ファイルを指定してください。");
                        return false;
                        }
                    //アップロードした画像を設定する
                        reader.onload = (function(file){
                        return function(e){
                        $("#img1").attr("src", e.target.result);
                        $("#img1").attr("title", file.name);
                        };
                    })(file);
                        reader.readAsDataURL(file);
                    });
            });
        </script>
        <script>
            $(document).ready(function() {
// executes when HTML-Document is loaded and DOM is ready


if (location.hash !== '') $('a[href="' + location.hash + '"]').tab('show');
return $('a[data-toggle="tab"]').on('shown', function(e) {
return location.hash = $(e.target).attr('href').substr(1);
});


// document ready
});

        </script>
    </body>
    </body>

</html>