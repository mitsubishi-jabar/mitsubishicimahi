<section class="section mg-b-30-sm mg-t-0-sm">
    <div class="container mg-t-0-sm mg-b-50-sm">
        <img src="<?= base_url() ?>assets/img/portfolio/mitsubishi/promo-pajero-april-2020.jpg" alt="">
    </div>
    <div class="container mg-t-0-sm mg-b-50-sm">
        <div class="row">
            <div class="ev-sm-12 ev-xmd-8 ev-fc">
                <p dir="ltr">Pajero Sport terdiri dari 6 varian, Dakar 4X4 AT, Dakar Ultimate 4X2 AT, Dakar 4X2 AT, Exceed 4X2 AT, Exceed 4X2 MT, dan GLX 4X4 MT. Tersedia 5 warna yang dapat dipilih konsumen sesuai selera.</p>
                <p dir="ltr">Bagi Mitsubishi Family yang berencana memiliki Pajero Sport di awal tahun 2020 ini, PT Mitsubishi Motors Krama Yudha Sales Indonesia (MMKSI) memiliki paket penjualan menarik bersama dengan partner pembiayaan Dipo Star Finance.&nbsp;Berikut adalah rincian dari program tersebut:</p>
                <ol>
                    <li dir="ltr">
                        <p dir="ltr">Program cicilan ringan atau bunga 0% (pembiayaan tertentu, S&amp;K berlaku)</p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">Program DP ringan dan gratis asuransi 1 tahun (dengan pembiayaan tertentu serta S&amp;K berlaku)</p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">Gratis kaca film V-Kool</p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">Gratis biaya jasa (sesuai dengan Service Manual Book) hingga 50.000 km atau 4 tahun untuk seluruh varian.</p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">Gratis Paket SMART SILVER untuk Perawatan/Servis Berkala hingga 50.000 km atau 4 tahun:</p>
                        <ul>
                            <li dir="ltr">
                                <p dir="ltr">Suku cadang (sesuai dengan Service Manual Book)</p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr">Oli MMGO&nbsp;(sesuai dengan Service Manual Book)</p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr">Chemical item: diesel fuel system flush, engine flush</p>
                            </li>
                        </ul>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <!-- Trigger the Modal -->
        <img id="myImg" src="<?= base_url() ?>assets/img/portfolio/mitsubishi/promo3.jpg" alt="Promo 2020" style="width:100%;max-width:700px">

        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- The Close Button -->
            <span class="close">&times;</span>

            <!-- Modal Content (The Image) -->
            <img class="modal-content" id="img01">

            <!-- Modal Caption (Image Text) -->
            <div id="caption"></div>
        </div>
    </div>
</section>

<div class="container">
    <div class="ev-sm-12 text-center"><a href="https://www.mitsubishi-motors.co.id/brosur"><button class="btn bg-danger">Download Brosur</button></a>
    </div>
</div>

<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById("myImg");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function() {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
</script>