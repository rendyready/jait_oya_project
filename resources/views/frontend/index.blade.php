@include('frontend_layouts.header')

<div id="wrapper">
    <!-- start header -->
    @include('frontend_layouts.nav')
    <!-- end header -->
    <section id="intro" style="background: url('{{ asset('storage/' . $data->background->slider_image) }}')center;">
        <div class="intro-content">
            <h2>{{ $data->background->slider_title }}</h2>
            <h3>{{ $data->background->slider_description }}</h3>
            <div>
                <a href="#content" class="btn-get-started scrollto">Let's Go</a>
            </div>
        </div>
    </section>
    <!-- /section intro -->

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="row">
                        <div class="span4">
                            <div class="box aligncenter">
                                <div class="icon">
                                    <span class="badge badge-info badge-circled">1</span>
                                    <i class="ico icon-dropbox icon-3x"></i>
                                </div>
                                <div class="text">
                                    <h4><strong>Tersolusikan</strong></h4>
                                    <p>
                                        Pakaian kebesaran, resleting rusak, pengen bikin baju? Semeua bisa kami layani
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="span4">
                            <div class="box aligncenter">
                                <div class="icon">
                                    <span class="badge badge-success badge-circled">2</span>
                                    <i class="ico icon-bitbucket icon-3x"></i>
                                </div>
                                <div class="text">
                                    <h4><strong>Terpercaya</strong></h4>
                                    <p>
                                        Karena proses menentukan hasil maka hasil jaitan kami selalu kami prioritaskan.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="span4">
                            <div class="box aligncenter">
                                <div class="icon">
                                    <span class="badge badge-warning badge-circled">3</span>
                                    <i class="ico icon-rocket icon-3x"></i>
                                </div>
                                <div class="text">
                                    <h4><strong>Terjamin</strong></h4>
                                    <p>
                                        Semua kami jamin, mulai dari harga murah sampai kualitas produk kami garansi
                                        100%
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="offer">
        <div class="container">
            <div class="row">
                <div class="span12 text-center">
                    <div class="row">
                        <div class="span6 offset3">
                            <div class="aligncenter">
                                <h3>Produk dan Layanan</h3>
                                <blockquote style="color:rgb(29, 28, 28)">
                                    Jelajahi berbagai kategori produk kami dan temukan layanan yang sesuai dengan
                                    kebutuhan Anda. Pilih, bandingkan, dan dapatkan solusi terbaik dengan mudah di
                                    bawah
                                    satu atap.
                                </blockquote>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="span6">
                            <div class="pricing-box-plain">
                                <h4>Vermak Baju</h4>
                                <span><strong><i>Bawa bajumu, kita perbaiki !</i></strong></span><br><br>
                                <div class="desc">
                                    <ul>
                                        <li>Mengecilkan Kemeja</li>
                                        <li>Mengecilkan Celana</li>
                                        <li>Ganti Resleting</li>
                                        <li>Potong Celana/Baju</li>
                                        <li>Dan masih banyak lagi ...</li>
                                    </ul>
                                </div>
                                <div class="action">
                                    <a href="#" class="btn btn-primary">Cek Disini</a>
                                </div>
                            </div>
                        </div>

                        <div class="span6">
                            <div class="pricing-box-plain">
                                <h4>Jahit Baju</h4>
                                <span><strong><i>Bawa kainmu, <br>kita buatkan baju
                                            terbaikmu</i></strong></span><br><br>
                                <div class="desc">
                                    <ul>
                                        <li>Buat Gamis</li>
                                        <li>Buat Seragam</li>
                                        <li>Buat Celana</li>
                                        <li>dan lain - lain ...</li>
                                    </ul>
                                </div>
                                <div class="action">
                                    <a href="#" class="btn btn-primary">Cek Disini</a>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="span4">
                            <div class="pricing-box-plain">
                                <div class="heading">
                                    <h4>Peralatan Jahit</h4>
                                    <span>$59 / Month</span>
                                </div>
                                <div class="desc">
                                    <ul>
                                        <li>For unlimited appliacations</li>
                                        <li>Free life time support</li>
                                        <li>Unlimited disk spaces</li>
                                    </ul>
                                </div>
                                <div class="action">
                                    <a href="#" class="btn btn-primary">Cek Disini</a>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section id="works">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <h3>Hasil Jahitan Kami</h3>
                    <div class="row">

                        <div class="grid cs-style-3">
                            <div class="span3">
                                <div class="item">
                                    <figure>
                                        <div><img src="img/dummies/works/1.jpg" alt=""></div>
                                        <figcaption>
                                            <h3>Portfolio name</h3>
                                            <p>
                                                <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]"
                                                    title="Portfolio caption here"><i
                                                        class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                                                <a href="#"><i
                                                        class="icon-file icon-circled icon-bglight icon-2x active"></i></a>
                                            </p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="span3">
                                <div class="item">
                                    <figure>
                                        <div><img src="img/dummies/works/2.jpg" alt=""></div>
                                        <figcaption>
                                            <h3>Portfolio name</h3>
                                            <p>
                                                <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]"
                                                    title="Portfolio caption here"><i
                                                        class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                                                <a href="#"><i
                                                        class="icon-file icon-circled icon-bglight icon-2x active"></i></a>
                                            </p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="span3">
                                <div class="item">
                                    <figure>
                                        <div><img src="img/dummies/works/3.jpg" alt=""></div>
                                        <figcaption>
                                            <h3>Portfolio name</h3>
                                            <p>
                                                <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]"
                                                    title="Portfolio caption here"><i
                                                        class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                                                <a href="#"><i
                                                        class="icon-file icon-circled icon-bglight icon-2x active"></i></a>
                                            </p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="span3">
                                <div class="item">
                                    <figure>
                                        <div><img src="img/dummies/works/4.jpg" alt=""></div>
                                        <figcaption>
                                            <h3>Portfolio name</h3>
                                            <p>
                                                <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]"
                                                    title="Portfolio caption here"><i
                                                        class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                                                <a href="#"><i
                                                        class="icon-file icon-circled icon-bglight icon-2x active"></i></a>
                                            </p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend_layouts.footer')
</div>
