    <!-- contact us -->

    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-sm-12 black-text">
                    <div class="center pt-2 pb-1">
                        <a href="https://api.whatsapp.com/send?phone=+6285943555441&text=Halo Chaizir Mitsubishi. Minta Info Mobil Mitsubishi ..."><button class="text-white center btn red accent-4">
                                Hubungi Kami!
                            </button></a>
                    </div>
                    <img src="<?= base_url() ?>assets/img/portfolio/mitsubishi/IDcard.png" class="responsive-img materialboxed" style="height: 470px;width: 100%; text-align:center;" alt="">

                    <div class="card-pannel red accent-4 pt-1 pb-2">
                        <div class="center white-text">
                            <h4>Kontak Kami</h4>
                            <h5><i class="fa fa-whatsapp"></i> : 0859 - 4355 - 5441</h5>
                            <h5><i class="fa fa-instagram"></i> : <a href="https://www.instagram.com/mau.mitsubishi/?hl=id" target="_blank">@mau.mitsubishi</a>
                            </h5>
                            <h5><i class="fa fa-envelope"></i> : info@mitsubishicimahi.com</h5>
                        </div>
                    </div>
                </div>
                <div class="col m5 s12">
                    <form action="">
                        <div class="card-panel">
                            <h5>Please fill out this form</h5>
                            <div class="input-field">
                                <input type="text" name="name" id="name">
                                <label for="name">Name</label>
                            </div>
                            <div class="input-field">
                                <input type="text" name="name" id="name">
                                <label for="name">Email</label>
                            </div>
                            <div class="input-field">
                                <input type="text" name="name" id="name">
                                <label for="name">Phone Number</label>
                            </div>
                            <div class="input-field">
                                <textarea name="message" id="message" class="materialize-textarea"></textarea>
                                <label for="message">Message</label>
                            </div>
                            <button type="submit" class="btn blue darken-2">Send</button>
                        </div>
                    </form>
                    <ul class="collection with-header black-text">
                        <li class="collection-header">
                            <h4 class="center">Our Office</h4>
                        </li>
                        <li class="collection-item center">MITSUBISHI CIMAHI</li>
                        <li class="collection-item center">PT. Mahligai Puteri Berlian</li>
                        <li class="collection-item center">Jl. Jend H. Amir Mahmud No. 327, <br>Cigugur Tengah, Kota Cimahi</li>
                        <li class="collection-item center">West Java, Indonesia</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div style="position:fixed;right:50px;bottom:20px;">
        <a href="https://api.whatsapp.com/send?phone=+6285943555441&text=Halo Chaizir Mitsubishi. Minta Info Mobil Mitsubishi ..." target="_blank">
            <button class="wa" style="background:#32C03C;">
                <span class="fa fa-whatsapp"></span></button></a>
    </div>
    <div style="position:fixed;left:50px;bottom:20px;">
        <a href="https://www.instagram.com/mau.mitsubishi/?hl=id" target="_blank">
            <button class="instagram">
                <img src="<?= base_url() ?>assets/img/portfolio/mitsubishi/glyph-logo_May2016.png" style="height:32px;width:32px"></button></a>
    </div>


    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="<?= base_url() ?>assets/js/materialize.min.js"></script>
    <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);

        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
            indicators: false,
            height: 500,
            transition: 600,
            interval: 3000
        });

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        const materialboxed = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialboxed);
    </script>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>

    </html>