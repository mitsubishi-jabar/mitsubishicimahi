    <!-- Navbar -->

    <div class="navbar-fixed">
        <nav class="brown lighten-5">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="<?= base_url('Home') ?>" class="brand-logo"><img src="<?= base_url() ?>assets/img/portfolio/mitsubishi/logo2.png"></a>
                    <a href="<?= base_url('Home') ?>" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li class="nav-item"><a class="red-text" href="<?= base_url('Home') ?>">Home</a></li>
                        <li class="list-unstyled component">
                            <a class="dropdown-toggle red-text" href="#pagesubmenu1" id="navbarDropdown1" role="button" data-toggle="collapse" aria-haspopup="true">
                                Daftar Harga
                            </a>
                            <div class="collapse list-unstyled brown lighten-5" aria-labelledby="navbarDropdown1" id="pagesubmenu1">
                                <a class="dropdown-item red-text" href="<?= base_url('harga/xpander') ?>" target="-blank">Harga Mitsubishi Xpander</a>
                                <a class="dropdown-item red-text" href="<?= base_url('harga/xpandercross') ?>" target="-blank">Harga Mitsubishi Xpander Cross</a>
                                <a class="dropdown-item red-text" href="<?= base_url('harga/eclipse') ?>" target="-blank">Harga Mitsubishi Eclipse Cross</a>
                                <a class="dropdown-item red-text" href="<?= base_url('Harga/pajero') ?>" target="-blank">Harga Mitsubishi Pajero</a>
                                <a class="dropdown-item red-text" href="<?= base_url('Harga/triton') ?>" target="-blank">Harga Mitsubishi All New Triton</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item red-text" href="<?= base_url('Harga/l300') ?>" target="-blank">Harga Mitsubishi L300</a>
                                <a class="dropdown-item red-text" href="<?= base_url('Harga/fe') ?>" target="-blank">Harga Mitsubishi FE</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item red-text" href="<?= base_url('Harga') ?>" target="-blank">Semua Daftar Harga</a>
                            </div>
                        </li>
                        <li><a class="nav-item red-text" href="<?= base_url('promo') ?>" target="-blank">Promo</a></li>
                        <li><a class="nav-item red-text" href="<?= base_url('gallery') ?>" target="-blank">Gallery</a></li>
                        <li><a class="nav-item red-text" href="<?= base_url('dealer') ?>" target="-blank">Dealer</a></li>
                        <li class="list-unstyled component">
                            <a class="dropdown-toggle red-text" href="#pagesubmenu" id="navbarDropdown" role="button" data-toggle="collapse" aria-haspopup="true">
                                Layanan
                            </a>
                            <div class="collapse list-unstyled brown lighten-5" aria-labelledby="navbarDropdown" id="pagesubmenu">
                                <a class="dropdown-item red-text" href="<?= base_url('Simulasi') ?>">Simulasi Kredit</a>
                                <a class="dropdown-item red-text" href="<?= base_url('testdrive') ?>">Test Drive</a>
                                <a class="dropdown-item red-text" href="<?= base_url('pengajuankredit') ?>">Pengajuan Kredit</a>
                                <a class="dropdown-item red-text" href="<?= base_url('Harga/pajero') ?>">Download Brosure</a>
                                <a class="dropdown-item red-text" href="<?= base_url('persyaratankredit') ?>">Persyaratan Kredit</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- side nav -->
    <div>
        <ul class="sidenav" id="mobile-nav">
            <li class="nav-item"><a class="red-text" href="<?= base_url('Home') ?>">Home</a></li>
            <li class="list-unstyled component">
                <a class="dropdown-toggle red-text" href="#pagesubmenu1" id="navbarDropdown1" role="button" data-toggle="collapse" aria-haspopup="true">
                    Daftar Harga
                </a>
                <div class="collapse list-unstyled brown lighten-5" aria-labelledby="navbarDropdown1" id="pagesubmenu1">
                    <a class="dropdown-item red-text" href="<?= base_url('harga/xpander') ?>" target="-blank">Harga Mitsubishi Xpander</a>
                    <a class="dropdown-item red-text" href="<?= base_url('harga/xpandercross') ?>" target="-blank">Harga Mitsubishi Xpander Cross</a>
                    <a class="dropdown-item red-text" href="<?= base_url('harga/eclipse') ?>" target="-blank">Harga Mitsubishi Eclipse Cross</a>
                    <a class="dropdown-item red-text" href="<?= base_url('Harga/pajero') ?>" target="-blank">Harga Mitsubishi Pajero</a>
                    <a class="dropdown-item red-text" href="<?= base_url('Harga/triton') ?>" target="-blank">Harga Mitsubishi All New Triton</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item red-text" href="<?= base_url('Harga/l300') ?>" target="-blank">Harga Mitsubishi L300</a>
                    <a class="dropdown-item red-text" href="<?= base_url('Harga/fe') ?>" target="-blank">Harga Mitsubishi FE</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item red-text" href="<?= base_url('Harga') ?>" target="-blank">Semua Daftar Harga</a>
                </div>
            </li>
            <li><a class="nav-item red-text" href="<?= base_url('promo') ?>" target="-blank">Promo</a></li>
            <li><a class="nav-item red-text" href="<?= base_url('gallery') ?>" target="-blank">Gallery</a></li>
            <li><a class="nav-item red-text" href="<?= base_url('dealer') ?>" target="-blank">Dealer</a></li>
            <li class="list-unstyled component">
                <a class="dropdown-toggle red-text" href="#pagesubmenu" id="navbarDropdown" role="button" data-toggle="collapse" aria-haspopup="true">
                    Layanan
                </a>
                <div class="collapse list-unstyled brown lighten-5" aria-labelledby="navbarDropdown" id="pagesubmenu">
                    <a class="dropdown-item red-text" href="<?= base_url('Simulasi') ?>">Simulasi Kredit</a>
                    <a class="dropdown-item red-text" href="<?= base_url('testdrive') ?>">Test Drive</a>
                    <a class="dropdown-item red-text" href="<?= base_url('pengajuankredit') ?>">Pengajuan Kredit</a>
                    <a class="dropdown-item red-text" href="<?= base_url('Harga/pajero') ?>">Download Brosure</a>
                    <a class="dropdown-item red-text" href="<?= base_url('persyaratankredit') ?>">Persyaratan Kredit</a>
                </div>
            </li>
        </ul>
    </div>