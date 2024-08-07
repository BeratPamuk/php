<?php

    //kurs 1
    $kurs1_baslik = "Php Kursu";
    $kurs1_altBaslik = "Sıfırdan ileri seviye Php ile web geliştirme";
    $kurs1_resim = "php.jpg";
    $kurs1_yayinTarih = "01.01.2023";
    $kurs1_yorumSay = "100";
    $kurs1_begeniSay = "300";

    //kurs 2
    $kurs2_baslik = "Python Kursu";
    $kurs2_altBaslik = "Sıfırdan ileri seviye Python proglamlama";
    $kurs2_resim = "python.jpg";
    $kurs2_yayinTarih = "03.03.2023";
    $kurs2_yorumSay = "200";
    $kurs2_begeniSay = "400";

    //kurs3
    $kurs3_baslik = "Node.js Kursu";
    $kurs3_altBaslik = "Sıfırdan ileri seviye Node.js ile web proglamlama";
    $kurs3_resim = "node.jpg";
    $kurs3_yayinTarih = "05.05.2023";
    $kurs3_yorumSay = "300";
    $kurs3_begeniSay = "500";

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

    <div class="container my-5">
        <!-- php card -->
        <div class="card mb-5">
            <div class="row">
                <div class="col-3">
                    <img src="img/<?php echo $kurs1_resim; ?>" class="img-fluid rounded-start">
                </div>
                <div class="col-9">
                    <div class="card-body">
                        <h5 class="card-tittle"><?php echo $kurs1_baslik;?></h5>
                        <p class="card-text"><?php echo $kurs1_altBaslik;?></p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                               Beğerni: <?php echo $kurs1_begeniSay;?> 
                            </span>

                            <span class="badge rounded-pill text-bg-danger">
                               Yorum: <?php echo $kurs1_yorumSay;?> 
                            </span>

                            <span class="badge rounded-pill text-bg-secondary">
                               Tarih: <?php echo $kurs3_yayinTarih;?> 
                            </span>

                            <button type="button" class="btn btn-primary position-absolute top-0 end-0 translate-middle-y">
                             Diğer Eğitimler
                            </button>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- python card -->
        <div class="card mb-5">
            <div class="row">
                <div class="col-3">
                    <img src="img/<?php echo $kurs2_resim; ?>" class="img-fluid rounded-start">
                </div>
                <div class="col-9">
                    <div class="card-body">
                        <h5 class="card-tittle"><?php echo $kurs2_baslik;?></h5>
                        <p class="card-text"><?php echo $kurs2_altBaslik;?></p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                               Beğerni: <?php echo $kurs2_begeniSay;?> 
                            </span>

                            <span class="badge rounded-pill text-bg-danger">
                               Yorum: <?php echo $kurs2_yorumSay;?> 
                            </span>

                            <span class="badge rounded-pill text-bg-secondary">
                               Tarih: <?php echo $kurs2_yayinTarih;?> 
                            </span>

                            <button type="button" class="btn btn-primary position-absolute top-0 end-0 translate-middle-y">
                             Diğer Eğitimler
                            </button>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- node card -->
        <div class="card mb-5">
            <div class="row">
                <div class="col-3">
                    <img src="img/<?php echo $kurs3_resim; ?>" class="img-fluid rounded-start">
                </div>
                <div class="col-9">
                    <div class="card-body">
                        <h5 class="card-tittle"><?php echo $kurs3_baslik;?></h5>
                        <p class="card-text"><?php echo $kurs3_altBaslik;?></p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                               Beğerni: <?php echo $kurs3_begeniSay;?> 
                            </span>

                            <span class="badge rounded-pill text-bg-danger">
                               Yorum: <?php echo $kurs3_yorumSay;?> 
                            </span>

                            <span class="badge rounded-pill text-bg-secondary">
                               Tarih: <?php echo $kurs3_yayinTarih;?> 
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

</body>
</html>