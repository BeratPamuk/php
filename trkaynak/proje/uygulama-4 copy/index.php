<?php

    //kurs 1
    const tittle = "Popüler olan kurslar";

    $kategoriler = array("Proglamlama","Web Geliştirme","Veri Annalizi");

    $kurslar = array(
        "1" => array(
            "baslik" => "Php Kursu",
            "altBaslik" => "Sıfırdan ileri seviye Php ile web geliştirme",
            "resim" => "php.jpg",
            "yayinTarih" => "01.01.2023",
            "yorumSay" => "100",
            "begeniSay" => "300"
        ),

        "2" => array(
            "baslik" => "Python Kursu",
            "altBaslik" => "Sıfırdan ileri seviye Python ile web geliştirme",
            "resim" => "python.jpg",
            "yayinTarih" => "01.01.2023",
            "yorumSay" => "100",
            "begeniSay" => "300"
        ),

        "3" => array(
            "baslik" => "Node.js Kursu",
            "altBaslik" => "Sıfırdan ileri seviye Node.js ile web geliştirme",
            "resim" => "node.jpg",
            "yayinTarih" => "01.01.2023",
            "yorumSay" => "100",
            "begeniSay" => "300"
        ),
    );

    $yeni_film = array(
        "baslik" => "Django Kursu",
        "altBaslik" => "Sıfırdan ileri seviye Django ile web geliştirme",
        "resim" => "node.jpg",
        "yayinTarih" => "01.01.2023",
        "yorumSay" => "100",
        "begeniSay" => "300"
    );

    $kurslar["4"] = $yeni_film;
    
    $kurs1_altBaslik = ucfirst(strtolower($kurslar["1"]["baslik"]));
    $kurs2_altBaslik = ucfirst(strtolower($kurslar["2"]["baslik"]));
    $kurs3_altBaslik = ucfirst(strtolower($kurslar["3"]["baslik"]));

    $kurs1_altBaslik = substr($kurs1_altBaslik,0,35)."...";
    $kurs2_altBaslik = substr($kurs2_altBaslik,0,35)."...";
    $kurs3_altBaslik = substr($kurs3_altBaslik,0,35)."...";

    $kurs1_url = str_replace([" "],["-"],strtolower($kurslar["1"]["baslik"]));
    $kurs2_url = str_replace([" "],["-"],strtolower($kurslar["2"]["baslik"]));
    $kurs3_url = str_replace([" "],["-"],strtolower($kurslar["3"]["baslik"]));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstarp link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"/>

    <title>Kurs</title>
</head>
<body>
<!-- -------------------------------------------------------------------------------------- -->
    <div class="container my-3">

        <div class="row">
            <div class="col-3">
                <div class="list-group"></div>
                <a href="#" class="list-group-item list-group-item-action active"><?php echo $kategoriler[0] ?></a>
                <a href="#" class="list-group-item list-group-item-action"><?php echo $kategoriler[1] ?></a>
                <a href="#" class="list-group-item list-group-item-action"><?php echo $kategoriler[2] ?></a>
            </div>
            <!-- php -->
            <div class="col-9">
                <h1 class="mb-3"><?php echo tittle; ?></h1>
                <p class="lead">
                    <?php echo count($kategoriler)?> kategoride <?php echo count($kurslar)?> kurs listelenmiştir
                </p>
                <div class="card mb-5">
                    <div class="row">
                        <div class="col-4">
                            <img src="img/<?php echo $kurslar["1"]["resim"] ?>" class="img-fluid rounded-start">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-tittle">
                                <a href="<?php echo $kurs1_url; ?>">
                                <?php echo $kurslar["1"]["baslik"];?>
                                </a>
                            </h5>
                                <p class="card-text"><?php echo $kurslar["1"]["altBaslik"];?></p>
                                <p>
                                    <span class="badge rounded-pill text-bg-primary">
                                    Beğerni: <?php echo $kurslar["1"]["begeniSay"];?> 
                                    </span>

                                    <span class="badge rounded-pill text-bg-danger">
                                    Yorum: <?php echo $kurslar["1"]["yorumSay"];?> 
                                    </span>

                                    <span class="badge rounded-pill text-bg-secondary">
                                    Tarih: <?php echo $kurslar["1"]["yayinTarih"];?> 
                                    </span>

                                    <button type="button" class="btn btn-primary position-absolute top-0 end-0 translate-middle-y">
                                    Diğer Eğitimler
                                    </button>
                                </p>
                            </div>
                        </div>
                        <!-- php -->
                <div class="card mb-5">
                    <div class="row">
                        <div class="col-4">
                            <img src="img/<?php echo $kurslar["2"]["resim"] ?>" class="img-fluid rounded-start">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-tittle">
                                <a href="<?php echo $kurs2_url; ?>">
                                <?php echo $kurslar["2"]["baslik"];?>
                                </a>
                            </h5>
                                <p class="card-text"><?php echo $kurslar["2"]["altBaslik"];?></p>
                                <p>
                                    <span class="badge rounded-pill text-bg-primary">
                                    Beğeni: <?php echo $kurslar["2"]["begeniSay"];?> 
                                    </span>

                                    <span class="badge rounded-pill text-bg-danger">
                                    Yorum: <?php echo $kurslar["2"]["yorumSay"];?> 
                                    </span>

                                    <span class="badge rounded-pill text-bg-secondary">
                                    Tarih: <?php echo $kurslar["2"]["yayinTarih"];?> 
                                    </span>

                                    <button type="button" class="btn btn-primary position-absolute top-0 end-0 translate-middle-y">
                                    Diğer Eğitimler
                                    </button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- php -->
                <div class="card mb-5">
                    <div class="row">
                        <div class="col-4">
                            <img style="height:auto" src="img/<?php echo $kurslar["3"]["resim"] ?>" class="img-fluid rounded-start">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-tittle">
                                <a href="<?php echo $kurs3_url; ?>">
                                <?php echo $kurslar["3"]["baslik"];?>
                                </a>
                            </h5>
                                <p class="card-text"><?php echo $kurslar["3"]["altBaslik"];?></p>
                                <p>
                                    <span class="badge rounded-pill text-bg-primary">
                                    Beğeni: <?php echo $kurslar["3"]["begeniSay"];?> 
                                    </span>

                                    <span class="badge rounded-pill text-bg-danger">
                                    Yorum: <?php echo $kurslar["3"]["yorumSay"];?> 
                                    </span>

                                    <span class="badge rounded-pill text-bg-secondary">
                                    Tarih: <?php echo $kurslar["3"]["yayinTarih"];?> 
                                    </span>

                                    <button type="button" class="btn btn-primary position-absolute top-0 end-0 translate-middle-y">
                                    Diğer Eğitimler
                                    </button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-5">
                    <div class="row">
                        <div class="col-4">
                            <img src="img/<?php echo $kurslar["4"]["resim"] ?>" class="img-fluid rounded-start">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-tittle">
                                <a href="<?php echo $kurs4_url; ?>">
                                <?php echo $kurslar["4"]["baslik"];?>
                                </a>
                            </h5>
                                <p class="card-text"><?php echo $kurslar["4"]["altBaslik"];?></p>
                                <p>
                                    <span class="badge rounded-pill text-bg-primary">
                                    Beğeni: <?php echo $kurslar["4"]["begeniSay"];?> 
                                    </span>

                                    <span class="badge rounded-pill text-bg-danger">
                                    Yorum: <?php echo $kurslar["4"]["yorumSay"];?> 
                                    </span>

                                    <span class="badge rounded-pill text-bg-secondary">
                                    Tarih: <?php echo $kurslar["4"]["yayinTarih"];?> 
                                    </span>

                                    <button type="button" class="btn btn-primary position-absolute top-0 end-0 translate-middle-y">
                                    Diğer Eğitimler
                                    </button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>




</body>
</html>