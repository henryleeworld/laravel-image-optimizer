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
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="/photos" enctype="multipart/form-data" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">照片</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFileLang" lang="zh-Hant" name="photo" >
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
        $('.custom-file-input').on('change',function(){
            var fileName = document.getElementById("customFileLang").files[0].name;
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        })
        </script>
    </body>
</html>
