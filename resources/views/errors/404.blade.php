<!DOCTYPE html>
<html>
    <head>
        
    <title>Page Not Found</title>
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/icon.png')}}" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #ACB9C0;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
                margin-bottom: 40px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Oops.. Halaman tidak ditemukan.</div>
                <h4><a class="btn btn-default" onclick="window.history.back();">Kembali</a></h4>
            </div>
        </div>
    </body>
</html>
