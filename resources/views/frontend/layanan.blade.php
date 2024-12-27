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

    #modalImage {
        max-height: 80vh;
        /* Membatasi tinggi gambar agar sesuai layar */
        object-fit: contain;
    }

    #modalCaption {
        font-size: 1.1rem;
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
                                    <div><img src="{{ asset('storage/' . $data->banner->produk_image) }}" alt=""
                                            style="width: 100%; height: 60vh;  position: relative; backgound: center;">
                                    </div>
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
                                @foreach ($data->vermak as $vermak)
                                    <li class="item-thumbs span3 design" data-id="id-1" data-type="web">
                                        <div class="item">
                                            <figure>
                                                <div><img src="{{ asset('storage/' . $vermak->produk_image) }}"
                                                        alt=""></div>
                                                <figcaption>
                                                    <h3>{{ $vermak->produk_title }}</h3>
                                                    <p
                                                        style="color: rgb(255, 255, 255); margin-left: 20px; margin-right: 20px;">
                                                        {{ $vermak->produk_description }}
                                                    </p>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                @endforeach
                                <!-- End Item Project -->

                                <!-- Item Project and Filter Name -->
                                @foreach ($data->jahit as $jahit)
                                    <li class="item-thumbs span3 design" data-id="id-1" data-type="icon">
                                        <div class="item">
                                            <figure>
                                                <div><img src="{{ asset('storage/' . $jahit->produk_image) }}"
                                                        alt=""></div>
                                                <figcaption>
                                                    <h3>{{ $jahit->produk_title }}</h3>
                                                    <p
                                                        style="color: rgb(255, 255, 255); margin-left: 20px; margin-right: 20px;">
                                                        {{ $jahit->produk_description }}
                                                    </p>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                @endforeach
                                <!-- End Item Project -->

                            </ul>
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    {{-- <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Detail Gambar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="modalImage" src="" alt="" class="img-fluid">
                    <p id="modalCaption" class="mt-3"></p>
                </div>
            </div>
        </div>
    </div> --}}

    @include('frontend_layouts.footer')
</div>

<script>
    function openModal(imageUrl, caption) {
        document.getElementById('modalImage').src = imageUrl;
        document.getElementById('modalCaption').innerText = caption;
    }
</script>
