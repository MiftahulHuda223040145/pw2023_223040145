<?php
require('views/header_view.php');

$dblatest = query("SELECT * FROM newslatest");
$dbtrending = query("SELECT * FROM newstrending NATURAL JOIN category");
$dbrecomend = query("SELECT * FROM newsrecomendation NATURAL JOIN category");
$dbnewsvideo = query("SELECT * FROM newsvideo NATURAL JOIN category");

if (isset($_POST['search'])) {
    $dblatest = pencarian($_POST['keyword']);
}

?>

<link rel="stylesheet" href="../css/indeks-berita.css">

<body>
    <main class="main-content">
        <section class="main-content-left">
            <h2>Hasil Pencarian</h2>
            <div class="content-left">
                <?php if ($dbrecomend): ?>
                    <?php foreach ($dbrecomend as $rec): ?>
                        <a href="news_page/news.php">
                            <article>
                                <img src="../assets/img/banner.png">
                                <p>
                                    <?= $rec['jenis']; ?>
                                </p>
                                <div>
                                    <h3>
                                        <?= $rec['judul']; ?>
                                    </h3>
                                    <p>
                                        <?= $rec['deskripsi']; ?>
                                    </p>
                                </div>
                            </article>
                        </a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </section>

        <section class="main-content-right">
            <h2>Terbaru</h2>
            <div class="content-right">
                <?php if ($dblatest): ?>
                    <?php foreach ($dblatest as $latest): ?>
                        <a href="news_page/news.php">
                            <article>
                                <img src="../assets/img/banner2.png">
                                <div>
                                    <h3>
                                        <?= $latest['judul']; ?>
                                    </h3>
                                    <p>(
                                        <?= $latest['waktu']; ?>)
                                    </p>
                                </div>
                            </article>
                        </a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </section>
    </main>
    <!--========== End Main Content ==========-->
</body>

<?php require('views/footer_view.php'); ?>