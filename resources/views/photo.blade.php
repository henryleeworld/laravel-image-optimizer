<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <style type="text/css">
        .custom-file-input:lang(zh-Hant) ~ .custom-file-label::after {
            content: "瀏覽";
        }
        </style>
    </head>
    <body>
        <div class="container">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>抱歉！</strong>你的 HTML 網頁的輸入還有以下問題。<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="/photos" enctype="multipart/form-data" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">照片</label>
                            <div class="input-group hdtuto control-group lst increment">
                                <input type="file" class="custom-file-input myfrm form-control" id="customFileLang" lang="zh-Hant" name="photo[]" multiple>
                                <label class="custom-file-label" for="customFileLang">選擇文件</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">上傳</button>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script>
        $(document).ready(function() {
            $('.custom-file-input').on('change',function(){
                var fileName = $.map(document.getElementById("customFileLang").files, function (file) {
                    return file.name;
                });
                $(this).next('.custom-file-label').addClass("selected").html(fileName.join(', '));
            })
        });
        </script>
    </body>
</html>
