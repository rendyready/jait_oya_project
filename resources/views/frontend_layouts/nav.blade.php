<style>
    /* Gaya utama untuk header */
    .header-title {
        text-align: center;
        /* Tengahkan teks */
        margin: 20px 0;
        /* Jarak vertikal */
    }

    /* Gaya untuk link dalam header */
    .header-title a {
        text-decoration: none;
        /* Hilangkan garis bawah */
        font-size: 2rem;
        /* Ukuran besar untuk teks */
        font-weight: bold;
        /* Buat teks lebih tebal */
        color: #FF5733;
        /* Warna utama untuk teks */
        letter-spacing: 3px;
        /* Jarak antar huruf */
        font-family: 'Poppins', sans-serif;
        /* Ganti dengan font menarik */
        display: inline-flex;
        /* Gabungkan ikon dan teks dalam satu baris */
        align-items: center;
        /* Rata tengah secara vertikal */
    }

    /* Hover efek pada link */
    .header-title a:hover {
        color: #4CAF50;
        /* Ubah warna saat dihover */
        transform: scale(1.1);
        /* Zoom-in saat dihover */
        transition: all 0.3s ease;
        /* Animasi halus */
    }

    /* Gaya untuk ikon */
    .logo_sewing {
        width: 40px !important;
        /* Paksa lebar */
        height: 40px !important;
        /* Paksa tinggi */
        object-fit: contain;
        /* Pastikan proporsi gambar tetap */
        margin-right: 15px;
    }

    /* Gaya khusus untuk teks "Oya" */
    .header-title .brand-name strong {
        color: #FFC107;
        /* Warna berbeda untuk kata "Oya" */
    }

    /* Responsif: Ukuran lebih kecil pada layar sempit */
    @media (max-width: 768px) {
        .header-title a {
            font-size: 2rem;
            /* Ukuran lebih kecil untuk teks */
        }

        .header-title .logo_sewing {
            font-size: 3rem;
            /* Ukuran lebih kecil untuk ikon */
        }


    }
</style>
<div id="wrapper">
    <header>
        <div class="top">
            {{-- <div class="container">
                <div class="row">
                    <div class="span6">
                        <ul class="topmenu">
                            @foreach ($menus as $key => $menu)
                                <li>
                                    <a href="{{ $menu['url'] }}">{{ $menu['title'] }}</a>
                                    @if (!$loop->last)
                                        &#47;
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="container">
            <div class="row nomargin">
                <div class="span4">
                    <div class="logo">
                        <h1 class="header-title">
                            <a href="/">
                                <img src="assets/logo_sewing.png" alt="Logo" class="logo_sewing">
                                <span class="brand-name"> Jait <strong>Oya</strong></span>
                            </a>
                        </h1>
                    </div>
                </div>
                <div class="span8">
                    <div class="navbar navbar-static-top">
                        <div class="navigation">
                            <nav>
                                <ul class="nav topnav">
                                    <li class="{{ Request::routeIs('frontend.index') ? 'active' : '' }}">
                                        <a href="{{ route('frontend.index') }}">Home</a>
                                    </li>
                                    <li class="{{ Request::routeIs('frontend.produk') ? 'active' : '' }}">
                                        <a href="{{ route('frontend.produk') }}">Produk</a>
                                    </li>
                                    <li class="{{ Request::routeIs('frontend.about') ? 'active' : '' }}">
                                        <a href="{{ route('frontend.about') }}">Tentang</a>
                                    </li>
                                    <li class="{{ Request::routeIs('frontend.contact') ? 'active' : '' }}">
                                        <a href="{{ route('frontend.contact') }}">Kontak</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- end navigation -->
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
