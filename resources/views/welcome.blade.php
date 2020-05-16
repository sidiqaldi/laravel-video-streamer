<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Video Test</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.plyr.io/3.6.2/plyr.css" />

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <video id="player" playsinline controls data-poster="{{ asset('videos/preview.png') }}">
                    <!-- Dilarang Mengunduh / Menyebarkan Video -->
                    <source src="{{ route('stream', $streamToken) }}" type="video/mp4" />
                    <!-- Perbuatan mengunduh (download) film dari internet dapat dikategorikan 
                    sebagai penggandaan suatu ciptaan secara tidak sah yang dapat dikenakan pidana berdasarkan 
                    Pasal 113 ayat (3) Undang-Undang Nomor 28 Tahun 2014 tentang Hak Cipta yaitu dengan 
                    pidana penjara paling lama 4 (empat) tahun dan/atau pidana denda paling banyak Rp1miliar. -->
                </video>
            </div>
        </div>
        <script src="https://cdn.plyr.io/3.6.2/plyr.js"></script>
        <script>
            const player = new Plyr('#player');
            // window.addEventListener('contextmenu', function (e) { 
            // e.preventDefault(); 
            // }, false);
        </script>
    </body>
</html>
