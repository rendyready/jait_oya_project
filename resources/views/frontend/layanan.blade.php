@include('frontend_layouts.header')
<style>
    /* Layout utama */
    .portfolio-container {
        display: flex;
        gap: 20px;
        align-items: flex-start;
    }

    /* Bagian portfolio */
    #thumbs {
        flex: 1;
        list-style: none;
        padding: 0;
    }

    /* Bagian deskripsi */
    .description {
        flex: 1;
        background-color: #f8f8f8;
        /* Warna latar belakang untuk kontras */
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .description h3 {
        margin-bottom: 10px;
        font-size: 1.5rem;
        color: #333;
    }

    .description ul {
        padding-left: 20px;
    }

    .description li {
        margin-bottom: 5px;
        font-size: 1rem;
        color: #555;
    }
</style>

<div id="wrapper">
    <!-- start header -->
    @include('frontend_layouts.nav')
    <!-- end header -->

    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <div class="inner-heading">
                        <h2>Produk Jait Oya</h2>
                    </div>
                </div>
                {{-- <div class="span8">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a> <i class="icon-angle-right"></i></li>
                        <li><a href="#">Portfolio</a> <i class="icon-angle-right"></i></li>
                        <li class="active">Portfolio 4 columns</li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </section>

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="row">
                        <div class="portfolio-container">
                            <!-- Bagian Portfolio (kiri) -->
                            <ul class="grid cs-style-3">
                                <li class="span7">
                                    <figure>
                                        {{-- style="background: url('{{ asset('storage/' . $data->background->slider_image) }}')center;" --}}
                                        <div><img src="{{ asset('storage/' . $data->banner->produk_image) }}"
                                                alt=""
                                                style="width: 100%; height: 60vh;  position: relative; backgound: center;">
                                        </div>
                                        <figcaption>
                                            <h3>Layanan Jait Oya</h3>
                                            {{-- <ul class="layanan-list">
                                                <li>Permak</li>
                                                <li>Jahit</li>
                                            </ul> --}}
                                        </figcaption>
                                    </figure>
                                </li>
                            </ul>

                            <!-- Bagian Keterangan (kanan) -->
                            <div class="description">
                                <h3>{{ ucwords($data->banner->produk_title) }}</h3>
                                <p>
                                    {{ $data->banner->produk_description }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <ul class="portfolio-categ filter">
                        <li class="all active"><a href="#">All</a></li>
                        <li class="web"><a href="#" title="">Vermak Pakaian</a></li>
                        <li class="icon"><a href="#" title="">Jait Pakaian</a></li>
                    </ul>

                    <div class="clearfix"></div>

                    <div class="row">
                        <section id="projects">
                            <ul id="thumbs" class="grid cs-style-3 portfolio">

                                <!-- Item Project and Filter Name -->
                                <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                                    <div class="item">
                                        <figure>
                                            <div><img src="img/dummies/works/1.jpg" alt=""></div>
                                            <figcaption>
                                                <h3>Portfolio name</h3>
                                                <p>
                                                    <a href="img/dummies/works/big.png"
                                                        data-pretty="prettyPhoto[gallery1]"
                                                        title="Portfolio caption here"><i
                                                            class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                                                    <a href="#"><i
                                                            class="icon-file icon-circled icon-bglight icon-2x active"></i></a>
                                                </p>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </li>
                                <!-- End Item Project -->

                                <!-- Item Project and Filter Name -->
                                <li class="item-thumbs span3 design" data-id="id-1" data-type="icon">
                                    <div class="item">
                                        <figure>
                                            <div><img src="img/dummies/works/2.jpg" alt=""></div>
                                            <figcaption>
                                                <h3>Portfolio name</h3>
                                                <p>
                                                    <a href="img/dummies/works/big.png"
                                                        data-pretty="prettyPhoto[gallery1]"
                                                        title="Portfolio caption here"><i
                                                            class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                                                    <a href="#"><i
                                                            class="icon-file icon-circled icon-bglight icon-2x active"></i></a>
                                                </p>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </li>
                                <!-- End Item Project -->

                                <!-- Item Project and Filter Name -->
                                <li class="item-thumbs span3 photography" data-id="id-2" data-type="graphic">
                                    <div class="item">
                                        <figure>
                                            <div><img src="img/dummies/works/3.jpg" alt=""></div>
                                            <figcaption>
                                                <h3>Portfolio name</h3>
                                                <p>
                                                    <a href="img/dummies/works/big.png"
                                                        data-pretty="prettyPhoto[gallery1]"
                                                        title="Portfolio caption here"><i
                                                            class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                                                    <a href="#"><i
                                                            class="icon-file icon-circled icon-bglight icon-2x active"></i></a>
                                                </p>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </li>
                                <!-- End Item Project -->

                                <!-- Item Project and Filter Name -->
                                <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                                    <div class="item">
                                        <figure>
                                            <div><img src="img/dummies/works/4.jpg" alt=""></div>
                                            <figcaption>
                                                <h3>Portfolio name</h3>
                                                <p>
                                                    <a href="img/dummies/works/big.png"
                                                        data-pretty="prettyPhoto[gallery1]"
                                                        title="Portfolio caption here"><i
                                                            class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                                                    <a href="#"><i
                                                            class="icon-file icon-circled icon-bglight icon-2x active"></i></a>
                                                </p>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </li>
                                <!-- End Item Project -->

                                <!-- Item Project and Filter Name -->
                                <li class="item-thumbs span3 photography" data-id="id-4" data-type="web">
                                    <div class="item">
                                        <figure>
                                            <div><img src="img/dummies/works/5.jpg" alt=""></div>
                                            <figcaption>
                                                <h3>Portfolio name</h3>
                                                <p>
                                                    <a href="img/dummies/works/big.png"
                                                        data-pretty="prettyPhoto[gallery1]"
                                                        title="Portfolio caption here"><i
                                                            class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                                                    <a href="#"><i
                                                            class="icon-file icon-circled icon-bglight icon-2x active"></i></a>
                                                </p>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </li>
                                <!-- End Item Project -->

                                <!-- Item Project and Filter Name -->
                                <li class="item-thumbs span3 photography" data-id="id-5" data-type="icon">
                                    <div class="item">
                                        <figure>
                                            <div><img src="img/dummies/works/6.jpg" alt=""></div>
                                            <figcaption>
                                                <h3>Portfolio name</h3>
                                                <p>
                                                    <a href="img/dummies/works/big.png"
                                                        data-pretty="prettyPhoto[gallery1]"
                                                        title="Portfolio caption here"><i
                                                            class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                                                    <a href="#"><i
                                                            class="icon-file icon-circled icon-bglight icon-2x active"></i></a>
                                                </p>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </li>
                                <!-- End Item Project -->

                                <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                                    <div class="item">
                                        <figure>
                                            <div><img src="img/dummies/works/7.jpg" alt=""></div>
                                            <figcaption>
                                                <h3>Portfolio name</h3>
                                                <p>
                                                    <a href="img/dummies/works/big.png"
                                                        data-pretty="prettyPhoto[gallery1]"
                                                        title="Portfolio caption here"><i
                                                            class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                                                    <a href="#"><i
                                                            class="icon-file icon-circled icon-bglight icon-2x active"></i></a>
                                                </p>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </li>
                                <!-- End Item Project -->

                                <!-- Item Project and Filter Name -->
                                <li class="item-thumbs span3 design" data-id="id-0" data-type="graphic">
                                    <div class="item">
                                        <figure>
                                            <div><img src="img/dummies/works/8.jpg" alt=""></div>
                                            <figcaption>
                                                <h3>Portfolio name</h3>
                                                <p>
                                                    <a href="img/dummies/works/big.png"
                                                        data-pretty="prettyPhoto[gallery1]"
                                                        title="Portfolio caption here"><i
                                                            class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                                                    <a href="#"><i
                                                            class="icon-file icon-circled icon-bglight icon-2x active"></i></a>
                                                </p>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </li>
                                <!-- End Item Project -->

                            </ul>
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend_layouts.footer')
</div>
