<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style type="text/css">
        .custom-file-input:lang(zh-Hant) ~ .custom-file-label::after {
            content: "瀏覽";
        }
        </style>
    </head>
    <body>
        <div class="container">
            @if (count($errors) > 0)
            <div class="alert alert-danger mt-3">
                <strong>抱歉！</strong>你的 HTML 網頁的輸入還有以下問題。<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
            @endif
            <div class="panel panel-default mt-3">
                <div class="panel-body">
                    <form action="/upload-images" enctype="multipart/form-data" method="POST">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">選擇文件</label>
                            <input class="form-control custom-file-input" type="file" id="customFileLang" lang="zh-Hant" name="photo[]" multiple>
                        </div>
                        <button type="submit" class="btn btn-primary">上傳</button>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/js/bootstrap.bundle.min.js" integrity="sha512-i9cEfJwUwViEPFKdC1enz4ZRGBj8YQo6QByFTF92YXHi7waCqyexvRD75S5NVTsSiTv7rKWqG9Y5eFxmRsOn0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
