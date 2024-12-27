  @include('frontend_layouts.header')

  <div id="wrapper">
      <!-- start header -->
      @include('frontend_layouts.nav')
      <!-- end header -->

      <section id="inner-headline" style="background-color: rgba(160, 173, 201, 0.671)">
          <div class="container">
              <div class="row">
                  <div class="span12">
                      <div class="inner-heading">
                          <h2 class="text-center" style="color: rgb(202, 29, 29)">Tentang</h2>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <section id="content">
          <div class="container">
              <div class="row">

                  <div class="span6">
                      <h4>
                          Tentang
                          <span style="color: firebrick;">Jahit Oya</span>
                      </h4>
                      <p>
                          <strong>Jahit Oya</strong> adalah usaha yang berdiri sejak tahun 2022, berfokus pada layanan
                          jahit dan permak pakaian dengan kualitas tinggi dan pelayanan yang ramah. Kami melayani
                          berbagai kebutuhan jahit dan permak untuk segala jenis pakaian, termasuk:
                      </p>
                      <p>
                      <ul>
                          <li><strong>Pakaian Formal:</strong> Jas, blazer, celana bahan, dan rok formal.</li>
                          <li><strong>Pakaian Kasual:</strong> Kaos, celana jeans, kemeja, dan blus.</li>
                          <li><strong>Pakaian Anak-Anak:</strong> Seragam sekolah, baju pesta, hingga pakaian
                              sehari-hari.</li>
                          <li><strong>Pakaian Tradisional:</strong> Kebaya, baju adat, dan batik.</li>
                          <li><strong>Pakaian Khusus:</strong> Gaun pesta, pakaian olahraga, hingga pakaian seragam
                              kerja.</li>
                      </ul>
                      </p>
                      <p>
                          Dengan pengalaman dan dedikasi kami, Jahit Oya hadir untuk memberikan solusi terbaik bagi
                          kebutuhan jahit dan permak Anda, mulai dari memperbaiki pakaian agar lebih pas hingga menjahit
                          pakaian baru sesuai desain pilihan Anda. Kami siap menjadi mitra terpercaya dalam memenuhi
                          kebutuhan pakaian Anda.
                      </p>
                  </div>


                  <div class="span6">
                      <div>
                          <img src="{{ asset('storage/images/about_us.jpg') }}" alt="">
                      </div>
                  </div>
              </div>

              <!-- divider -->
              <div class="row">
                  <div class="span12">
                      <div class="solidline"></div>
                  </div>
              </div>
              <!-- end divider -->

              {{-- <div class="row team">
                  <div class="span12">
                      <h4>Nice persons behind Remember</h4>
                  </div>

                  <div class="span3">
                      <div class="team-box">
                          <a href="#" class="thumbnail"><img src="img/dummies/team1.jpg" alt="" /></a>
                          <div class="roles aligncenter">
                              <p class="lead"><strong>Vincent Austin Jr</strong></p>
                              <p>
                                  CEO - Founder
                              </p>
                              <p>
                                  <a href="#"><i class="icon-facebook icon-circled icon-bglight active"></i></a>
                                  <a href="#"><i class="icon-twitter icon-circled icon-bglight active"></i></a>
                                  <a href="#"><i class="icon-linkedin icon-circled icon-bglight active"></i></a>
                              </p>

                          </div>
                      </div>
                  </div>
                  <div class="span3">
                      <div class="team-box">
                          <a href="#" class="thumbnail"><img src="img/dummies/team2.jpg" alt="" /></a>
                          <div class="roles aligncenter">
                              <p class="lead"><strong>Tommy Laugher</strong></p>
                              <p>
                                  Lead designer
                              </p>
                              <p>
                                  <a href="#"><i class="icon-facebook icon-circled icon-bglight active"></i></a>
                                  <a href="#"><i class="icon-twitter icon-circled icon-bglight active"></i></a>
                                  <a href="#"><i class="icon-linkedin icon-circled icon-bglight active"></i></a>
                              </p>
                          </div>
                      </div>
                  </div>
                  <div class="span3">
                      <div class="team-box">
                          <a href="#" class="thumbnail"><img src="img/dummies/team3.jpg" alt="" /></a>
                          <div class="roles aligncenter">
                              <p class="lead"><strong>Gabirelle Borowski</strong></p>
                              <p>
                                  Customer support
                              </p>
                              <p>
                                  <a href="#"><i class="icon-facebook icon-circled icon-bglight active"></i></a>
                                  <a href="#"><i class="icon-twitter icon-circled icon-bglight active"></i></a>
                                  <a href="#"><i class="icon-linkedin icon-circled icon-bglight active"></i></a>
                              </p>
                          </div>
                      </div>
                  </div>
                  <div class="span3">
                      <div class="team-box">
                          <a href="#" class="thumbnail"><img src="img/dummies/team4.jpg" alt="" /></a>
                          <div class="roles aligncenter">
                              <p class="lead"><strong>Benny Strongton</strong></p>
                              <p>
                                  Coffee maker
                              </p>
                              <p>
                                  <a href="#"><i class="icon-facebook icon-circled icon-bglight active"></i></a>
                                  <a href="#"><i class="icon-twitter icon-circled icon-bglight active"></i></a>
                                  <a href="#"><i class="icon-linkedin icon-circled icon-bglight active"></i></a>
                              </p>
                          </div>
                      </div>
                  </div>
              </div> --}}

          </div>
      </section>

      @include('frontend_layouts.footer')
  </div>
