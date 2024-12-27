@include('frontend_layouts.header')

<div id="wrapper">
    <!-- start header -->
    @include('frontend_layouts.nav')
    <!-- end header -->

    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <div class="inner-heading">
                        <h2>Hubungi Kami</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="content">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.883371175415!2d110.1220921!3d-7.8955627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7ae3a91f5817ef%3A0x620777095a2434e2!2sPermak%20%26%20Jahit%20Pakaian%20-%20Jait%20Oya!5e0!3m2!1sen!2sid!4v1696808806294!5m2!1sen!2sid"
            width="100%" height="380" class="mb-5" frameborder="0" style="border:0; margin-bottom: 3rem;"
            allowfullscreen>
        </iframe>
        <div class="container">
            <div class="row mt-4">
                <div class="span8">
                    <h4>Hubungi Kami Sekarang</h4>



                    <form id="contactform" action="" method="post" role="form" class="contactForm">

                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>

                        <div class="row">
                            <div class="span4 field form-group">
                                <input type="text" name="name" placeholder="* Masukkan Namamu"
                                    data-rule="minlen:4" data-msg="Masukan paling sedikit 4 huruf" required />
                                <div class="validation"></div>
                            </div>
                            <div class="span4 field form-group">
                                <input type="text" name="email" placeholder="* Masukkan emailmu" data-rule="email"
                                    data-msg="Masukan format email yang valid" />
                                <div class="validation"></div>
                            </div>
                            <div class="span8 margintop10 field form-group">
                                <input type="text" name="subject" placeholder="Ada masalah apa?" data-rule="minlen:4"
                                    data-msg="Masukan paling sedikit 4 huruf" />
                                <div class="validation"></div>
                            </div>
                            <div class="span8 margintop10 field form-group">
                                <textarea rows="12" name="message" class="input-block-level" placeholder="* Input pesan anda disini..."
                                    data-rule="required" data-msg="Tulis sesuatu"></textarea>
                                <div class="validation"></div>

                                <p>
                                    <button class="btn btn-color margintop10 pull-left" type="submit">Kirim
                                        Pesan</button>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="span4">
                    <div class="clearfix"></div>
                    <aside class="right-sidebar">

                        <div class="widget">
                            <h5 class="widgetheading">Informasi Kontak<span></span></h5>

                            <ul class="contact-info">
                                <li><label>Alamat :</label> Kulwaru Kulon, Kulwaru, Wates
                                    Kulon Progo, Yogyakarta, Indonesia</li>
                                <li><label>Whatsapp :</label> 0822-2932-7162 (nova)</li>
                                <li><label>Email : </label> jaitoyabyjoinova@gmail.com
                                </li>
                            </ul>

                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    @include('frontend_layouts.footer')
</div>
