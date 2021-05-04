<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to KopiKare</title>
    <link rel="stylesheet" type="text/css" href="CSS/about.css">
    <link href="<link rel=" preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container">
            <h1><a href="dashboard.php">KopiKare</a></h1>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="produk.php">Macam Produk</a></li>
                <li><a href="kontak.php">Contact us</a></li>
                <li><a href="login.php">login</a></li>
            </ul>
        </div>
    </header>
    <div class="banner"></div>
    <div id="layout">
        <div id="runningtext">
            <marquee behavior="scroll" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();" direction="left">
                Selamat Datang di Website Kopikare Madiun
            </marquee>
        </div>
        <div id="sidebar">
            <div class="widged">
                <img src="sidebarbaru.jpg" class="gambarkopi">
            </div>
            <div class="widged">
                <h1 class="judulwidged">Posting Teratas</h1>
                <ul>
                    <li> <a href="artikel1.php">10 Manfaat Utama Dari Kopi</a> </li>
                    <li> <a href="artikel2.php">Kenapa Memilih Kopikare</a> </li>
                </ul>
            </div>
        </div>
        <div id="isi">
            <div class="isipostingall">
                <h2>Produk Yang Kami Tawarkan</h2><br>
                <img src="produk.jpg" class="gambarposting1">
                <ul>
                    <h3>Our Authentic Coffee</h3>
                </ul>
                <p>&nbsp;&nbsp;&nbsp;&nbsp; Kami punya tiga jenis kopi yang bisa Anda cicipi dan mungkin ingin Anda bawa pulang. Ada Arabika, Robusta, dan tentunya produk spesial kami Lanang Robusta.</p>

                <p>&nbsp;&nbsp;&nbsp;&nbsp;"Lanang" adalah bahasa Jawa, artinya laki-laki dalam bahasa Indonesia. Kami menyebutnya "Lanang Robusta" karena hanya berisi biji tunggal. Biasanya buah ("ceri") dari tanaman kopi mengandung dua biji ("biji") yang berkembang dengan sisi yang menghadap rata, tetapi kadang-kadang hanya satu dari dua biji yang dibuahi, dan biji tunggal berkembang tanpa ada yang bisa meratakannya. Kacang lonjong ini dikenal dengan nama peaberry. Biasanya sekitar 5% dari semua biji kopi yang dipanen pernah mengalami keanehan ini.</p>

                <h4>Jadi, mana yang menjadi favoritmu?</h4>

            </div>
        </div>
        <div id="footer"> &copy 2021, KopiKare </div>
    </div>
</body>

</html>