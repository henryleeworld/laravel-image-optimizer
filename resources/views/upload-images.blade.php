<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.8/css/bootstrap.min.css" integrity="sha512-2bBQCjcnw658Lho4nlXJcc6WkV/UxpE/sAokbXPxQNGqmNdQrWqtw26Ns9kFF/yG792pKR1Sx8/Y1Lf1XN4GKA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style type="text/css">
        .custom-file-input:lang(zh-Hant) ~ .custom-file-label::after {
            content: {{ __('Browse') }};
        }
        </style>
    </head>
    <body>
        <div class="container">
            @if (count($errors) > 0)
            <div class="alert alert-danger mt-3">
                <strong>{{ __('Sorry! ') }}</strong>{{ __('There is also the following problem with the input of your HTML page.') }}<br><br>
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
                            <label for="formFileMultiple" class="form-label">{{ __('Select files') }}</label>
                            <input class="form-control custom-file-input" type="file" id="customFileLang" lang="zh-Hant" name="photo[]" multiple>
                        </div>
                        <button type="submit" class="btn btn-primary">{{ __('Upload') }}</button>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.8/js/bootstrap.bundle.min.js" integrity="sha512-HvOjJrdwNpDbkGJIG2ZNqDlVqMo77qbs4Me4cah0HoDrfhrbA+8SBlZn1KrvAQw7cILLPFJvdwIgphzQmMm+Pw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
