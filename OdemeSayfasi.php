<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                background: #EEEEEE url(//2.bp.blogspot.com/-A41EaFabiAw/VBTl3dXKTzI/AAAAAAAAAe4/Ku8cZ33_z3s/s0/bg1.png) repeat scroll top left;
            }
            /* Örnek CSS düzenlemeleri */
            .form-control {
                font-size: 16px; /* Giriş alanları için font boyutu */
            }
            .btn-primary {
                font-size: 18px; /* Düğme için font boyutu */
            }
            /* Daha fazla boşluk ekleme */
            .mb-3 {
                margin-bottom: 20px;
            }
        </style>
        <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
    <div class="container mt-5">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Satın Al</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Kişisel Bilgiler</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">IBAN Listesi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab4-tab" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false">Sonuç</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                <h3>Satın Alınacak Ürün Listesi</h3>
                <select class="form-control" id="urun" name="urun" required="">
                    <option value="7">pro paket 12 - Ürün Fiyatı: 1250.00 TL</option>
                    <option value="8">full - Ürün Fiyatı: 2500.00 TL</option>
                    <option value="9">Pro paket1 - Ürün Fiyatı: 750.00 TL</option>
                </select>
                <button class="btn btn-primary mt-3" id="tab1-next">İleri</button>
            </div>
            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                <h3>Kişisel Bilgiler</h3>
                <div class="form-group">
                    <label for="ad">Adınız</label>
                    <input type="text" class="form-control" id="ad">
                </div>
                <div class="form-group">
                    <label for="soyad">Soyadınız</label>
                    <input type="text" class="form-control" id="soyad">
                </div>
                <div class="form-group">
                    <label for="eposta">Eposta Adresi</label>
                    <input type="email" class="form-control" id="eposta">
                </div>
                <div class="form-group">
                    <label for="telefon">Telefon Numarası</label>
                    <input type="tel" class="form-control" id="telefon">
                </div>
                <button class="btn btn-primary mt-3" id="tab2-next">İleri</button>
            </div>
            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                <h3>IBAN Listesi</h3>
                <!-- IBAN listesi buraya gelecek -->
                <button class="btn btn-primary mt-3" id="tab3-next">İleri</button>
            </div>
            <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                <h3>İşleminiz Alınmıştır</h3>
            </div>
        </div>
    </div>

    <!-- Bootstrap ve jQuery JS dosyalarını ekleyin -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {
            $("#tab1-next").click(function () {
                $("#myTab a[href='#tab2']").tab('show');
            });
            $("#tab2-next").click(function () {
                $("#myTab a[href='#tab3']").tab('show');
            });
            $("#tab3-next").click(function () {
                $("#myTab a[href='#tab4']").tab('show');
            });
        });
    </script>
</body>
</html>
