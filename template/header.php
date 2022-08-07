<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <script src="../asset/js/chart.js"></script>
    <script src="../asset/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../asset/js/jquery-3.6.0.min.js"></script>
    <script src="../asset/js/moment.min.js"></script>
    <script type="text/javascript" src="../asset/js/daterangepicker.min.js"></script>
    <script type="text/javascript" src="../asset/js/jquery.mask.min.js"></script>
    <link rel="shortcut icon" href="../asset/img/icon/icon.png">
    <link rel="stylesheet" href="../asset/css/bootstrap-icons.css">
    <link href="../asset/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../asset/css/daterangepicker.css" />
    <link rel="shortcut icon" href="../asset/img/icon/icon.png">
    <link href="../asset/css/bwdtheme.css" rel="stylesheet">
    <link href="../asset/css/report_table.css" rel="stylesheet">
</head>

<body>
    <div id=mydiv>
        <div id="isi1" class='isi isi1 active'>
            <nav class="navbar color" style="padding-left:8%;padding-right:8%;z-index:200">
                <e><i class="bi bi-telephone-fill"></i> (0361)-228927 | <i class="bi bi-envelope-fill"></i> dinsosp3a@baliprov.go.id</e>
                <div class='grid' style="text-align:right;letter-spacing: 0.4em;"><i class="bi bi-facebook"></i><i class="bi bi-instagram"></i><i class="bi bi-twitter"></i><i class="bi bi-youtube"></i></div>
            </nav>
            <div id="carouselFrontEnd" class="carousel slide" data-bs-ride="true" style="height: 100%;position:relative;">
                <div class="bg_img" style="background:black;width:100%;height:100%;background-image: url('asset/img/frontend/barong-tile2.jpg');"></div>
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselFrontEnd" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselFrontEnd" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselFrontEnd" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner" style="position:absolute;top:50% ;transform:translate(0 ,-50%)">
                    <div class="carousel-item active">
                        <img src="asset/img/frontend/pict1.png" class="d-block w-100" alt="Pict1">
                    </div>
                    <div class="carousel-item">
                        <img src="asset/img/frontend/pict2.png" class="d-block w-100" alt="Pict2">
                    </div>
                    <div class="carousel-item">
                        <img src="asset/img/frontend/pict3.png" class="d-block w-100" alt="Pict3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselFrontEnd" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselFrontEnd" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                <div calss="bg_img"></div>
            </div>
            <search>
                <p align=center><img src="asset/img/frontend/pemprov.png" width=30%><br><img src="asset/img/frontend/text.png" width=80%></p>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari artikel.." aria-label="Username" aria-describedby="basic-addon1">
                    <span class="input-group-text" id="basic-addon1" style="background: #347ab6ff;color:white"><i class="bi bi-search"></i></span>
                </div>
            </search>
            <menu_bar>
                <div class="menu_nav">
                    <div class="background_menu"></div>
                    <div><i onmouseenter="showname(1)" onmouseleave="hidname(1)" id="f1" class="bi bi-house-fill" style="font-size:2em;transition:font-size 0.3s;"></i><br>
                        <r id="n1" hidden>Home</r>
                    </div>
                    <div><img onmouseenter="showname(2)" onmouseleave="hidname(2)" id="f2" src=" asset/img/frontend/dumoogi.png" style="width:2em;transition:width 0.3s;"></i><br>
                        <r id="n2" hidden>Dumogi</r>
                    </div>
                    <div><i onmouseenter="showname(3)" onmouseleave="hidname(3)" id="f3" class=" bi bi-headset" style="font-size:2em;transition:font-size 0.3s;"></i><br>
                        <r id="n3" hidden>Bantuan</r>
                    </div>
                    <div><i onmouseenter="showname(4)" onmouseleave="hidname(4)" id="f4" class=" bi bi-door-open" style="font-size:2em;transition:font-size 0.3s;"></i><br>
                        <r id="n4" hidden>Masuk</r>
                    </div>
                </div>
                <script>
                    function showname(code) {
                        $('#n' + code).attr('hidden', false);
                        $('#f' + code).css('font-size', '4em');
                        $('#f' + code).css('width', '1em');
                    }

                    function hidname(code) {
                        $('#n' + code).attr('hidden', true);
                        $('#f' + code).css('font-size', '2em');
                    }
                </script>
            </menu_bar>
        </div>