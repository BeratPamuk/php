<?php


//kurs 1
const tittle = "Popüler olan kurslar";

//kategoriler
$kategoriler = array("Proglamlama", "Web Geliştirme", "Veri Annalizi");

//kurs bilgileri
$kurslar = array(
    "1" => array(
        "baslik" => "Php Kursu",
        "altBaslik" => "Sıfırdan ileri seviye Php ile web geliştirme",
        "resim" => "php.jpg",
        "yayinTarih" => "01.01.2023",
        "yorumSay" => "0",
        "begeniSay" => "12",
        "onay" => true
    ),


    "2" => array(
        "baslik" => "Python Kursu",
        "altBaslik" => "Sıfırdan ileri seviye Python ile web geliştirme",
        "resim" => "python.jpg",
        "yayinTarih" => "01.01.2023",
        "yorumSay" => "0",
        "begeniSay" => "0",
        "onay" => true
    ),


    "3" => array(
        "baslik" => "Node.js Kursu",
        "altBaslik" => "Sıfırdan ileri seviye Node.js ile web geliştirme",
        "resim" => "node.jpg",
        "yayinTarih" => "01.01.2023",
        "yorumSay" => "22",
        "begeniSay" => "8",
        "onay" => true
    ),

    "4" => array(
        "baslik" => "Django Kursu",
        "altBaslik" => "Sıfırdan ileri seviye Django ile web geliştirme",
        "resim" => "django.jpg",
        "yayinTarih" => "01.01.2023",
        "yorumSay" => "11",
        "begeniSay" => "15",
        "onay" => false
    )
);

//başlıklar
$kurs1_altBaslik = ucfirst(strtolower($kurslar["1"]["baslik"]));
$kurs2_altBaslik = ucfirst(strtolower($kurslar["2"]["baslik"]));
$kurs3_altBaslik = ucfirst(strtolower($kurslar["3"]["baslik"]));

//sınırlar
$kurs1_altBaslik = substr($kurs1_altBaslik, 0, 35) . "...";
$kurs2_altBaslik = substr($kurs2_altBaslik, 0, 35) . "...";
$kurs3_altBaslik = substr($kurs3_altBaslik, 0, 35) . "...";

//sınırlar
$kurs1_url = str_replace([" "], ["-"], strtolower($kurslar["1"]["baslik"]));
$kurs2_url = str_replace([" "], ["-"], strtolower($kurslar["2"]["baslik"]));
$kurs3_url = str_replace([" "], ["-"], strtolower($kurslar["3"]["baslik"]));


?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstarp link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />


    <title>Kurs</title>
</head>


<body>
    <div class="container my-3">


        <div class="row">
            <!--Liste-->
            <div class="col-3">
                <div class="list-group"></div>
                <a href="#" class="list-group-item list-group-item-action active"><?php echo $kategoriler[0] ?></a>
                <a href="#" class="list-group-item list-group-item-action"><?php echo $kategoriler[1] ?></a>
                <a href="#" class="list-group-item list-group-item-action"><?php echo $kategoriler[2] ?></a>
            </div>

        <!--Ana Sayfa-->

            <!--Başlık-->
            <div class="col-9">
                <h1 class="mb-3"><?php echo tittle; ?></h1>
                <p class="lead">
                    <?php echo count($kategoriler) ?> kategoride <?php echo count($kurslar) ?> kurs listelenmiştir
                </p>

            <!--Kurslar-->
                <!--Php-->
                <?php if($kurslar["1"]["onay"]): ?>
                    <div class="card mb-5">
                        <div class="row">
                            <div class="col-4">
                                <img src="img/<?php echo $kurslar["1"]["resim"] ?>" class="img-fluid rounded-start">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h5 class="card-tittle">
                                        <a href="<?php echo $kurs1_url; ?>">
                                            <?php echo $kurslar["1"]["baslik"]; ?>
                                        </a>
                                    </h5>
                                    <p class="card-text"><?php echo $kurslar["1"]["altBaslik"]; ?></p>
                                    <p>
                                        <?php if($kurslar["1"]["begeniSay"] > 0): ?>
                                            <span class="badge rounded-pill text-bg-primary">
                                                <?php echo $kurslar["1"]["begeniSay"]; ?> Beğeni 
                                            </span>
                                        <?php endif ?>

                                        <?php if($kurslar["1"]["yorumSay"] > 0): ?>
                                            <span class="badge rounded-pill text-bg-danger">
                                                Yorum: <?php echo $kurslar["1"]["yorumSay"]; ?>
                                            </span>

                                        <?php else: ?>
                                            <span class="badge rounded-pill text-bg-warning">
                                                İlk Yorumu sen yap
                                            </span>
                                        <?php endif ?>


                                        <span class="badge rounded-pill text-bg-secondary">
                                            Tarih: <?php echo $kurslar["1"]["yayinTarih"]; ?>
                                        </span>


                                        <button type="button" class="btn btn-primary position-absolute top-0 end-0 translate-middle-y">
                                            Diğer Eğitimler
                                        </button>
                                    </p>
                                </div>
                            </div>


                        </div>
                    </div>
                <?php endif ?>

                <!--Python-->
                <?php if($kurslar["2"]["onay"]): ?>
                    <div class="card mb-5">
                        <div class="row">
                            <div class="col-4">
                                <img src="img/<?php echo $kurslar["2"]["resim"] ?>" class="img-fluid rounded-start">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h5 class="card-tittle">
                                        <a href="<?php echo $kurs2_url; ?>">
                                            <?php echo $kurslar["2"]["baslik"]; ?>
                                        </a>
                                    </h5>
                                    <p class="card-text"><?php echo $kurslar["2"]["altBaslik"]; ?></p>
                                    <p>
                                        <?php if($kurslar["2"]["begeniSay"] > 0): ?>
                                            <span class="badge rounded-pill text-bg-primary">
                                                <?php echo $kurslar["2"]["begeniSay"]; ?> Beğeni 
                                            </span>
                                        <?php endif ?>

                                        <?php if($kurslar["2"]["yorumSay"] > 0): ?>
                                            <span class="badge rounded-pill text-bg-danger">
                                                Yorum: <?php echo $kurslar["2"]["yorumSay"]; ?>
                                            </span>

                                        <?php else: ?>
                                            <span class="badge rounded-pill text-bg-warning">
                                                İlk Yorumu sen yap
                                            </span>
                                        <?php endif ?>


                                        <span class="badge rounded-pill text-bg-secondary">
                                            Tarih: <?php echo $kurslar["2"]["yayinTarih"]; ?>
                                        </span>


                                        <button type="button" class="btn btn-primary position-absolute top-0 end-0 translate-middle-y">
                                            Diğer Eğitimler
                                        </button>
                                    </p>
                                </div>
                            </div>


                        </div>
                    </div>
                <?php endif ?>

                <!--Node-->
                <?php if($kurslar["3"]["onay"]): ?>
                    <div class="card mb-5">
                        <div class="row">
                            <div class="col-4">
                                <img src="img/<?php echo $kurslar["3"]["resim"] ?>" class="img-fluid rounded-start">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h5 class="card-tittle">
                                        <a href="<?php echo $kurs3_url; ?>">
                                            <?php echo $kurslar["3"]["baslik"]; ?>
                                        </a>
                                    </h5>
                                    <p class="card-text"><?php echo $kurslar["3"]["altBaslik"]; ?></p>
                                    <p>
                                        <?php if($kurslar["3"]["begeniSay"] > 0): ?>
                                            <span class="badge rounded-pill text-bg-primary">
                                                <?php echo $kurslar["3"]["begeniSay"]; ?> Beğeni 
                                            </span>
                                        <?php endif ?>

                                        <?php if($kurslar["3"]["yorumSay"] > 0): ?>
                                            <span class="badge rounded-pill text-bg-danger">
                                                Yorum: <?php echo $kurslar["3"]["yorumSay"]; ?>
                                            </span>

                                        <?php else: ?>
                                            <span class="badge rounded-pill text-bg-warning">
                                                İlk Yorumu sen yap
                                            </span>
                                        <?php endif ?>


                                        <span class="badge rounded-pill text-bg-secondary">
                                            Tarih: <?php echo $kurslar["3"]["yayinTarih"]; ?>
                                        </span>


                                        <button type="button" class="btn btn-primary position-absolute top-0 end-0 translate-middle-y">
                                            Diğer Eğitimler
                                        </button>
                                    </p>
                                </div>
                            </div>


                        </div>
                    </div>
                <?php endif ?>

                <!--DJango-->
                <?php if($kurslar["4"]["onay"]): ?>
                    <div class="card mb-5">
                        <div class="row">
                            <div class="col-4">
                                <img src="img/<?php echo $kurslar["4"]["resim"] ?>" class="img-fluid rounded-start">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h5 class="card-tittle">
                                        <a href="<?php echo $kurs1_url; ?>">
                                            <?php echo $kurslar["4"]["baslik"]; ?>
                                        </a>
                                    </h5>
                                    <p class="card-text"><?php echo $kurslar["4"]["altBaslik"]; ?></p>
                                    <p>
                                        <?php if($kurslar["4"]["begeniSay"] > 0): ?>
                                            <span class="badge rounded-pill text-bg-primary">
                                                <?php echo $kurslar["4"]["begeniSay"]; ?> Beğeni 
                                            </span>
                                        <?php endif ?>

                                        <?php if($kurslar["4"]["yorumSay"] > 0): ?>
                                            <span class="badge rounded-pill text-bg-danger">
                                                Yorum: <?php echo $kurslar["4"]["yorumSay"]; ?>
                                            </span>

                                        <?php else: ?>
                                            <span class="badge rounded-pill text-bg-warning">
                                                İlk Yorumu sen yap
                                            </span>
                                        <?php endif ?>

                                        <span class="badge rounded-pill text-bg-secondary">
                                            Tarih: <?php echo $kurslar["4"]["yayinTarih"]; ?>
                                        </span>


                                        <button type="button" class="btn btn-primary position-absolute top-0 end-0 translate-middle-y">
                                            Diğer Eğitimler
                                        </button>
                                    </p>
                                </div>
                            </div>


                        </div>
                    </div>
                <?php endif ?>
            </div>
    </body>
</html>