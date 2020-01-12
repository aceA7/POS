<!DOCTYPE html>
<html lang="en">

<head>
 <?php $this->load->view("front/layout/head");?>
</head>

<body>
  <div id="wrapper">
    <!-- start header -->
    <header>
      <?php $this->load->view("front/layout/header");?>
    </header>
    <!-- end header -->
    <section id="featured">
      <!-- start slider -->
      <!-- Slider -->
      <div id="nivo-slider">
        <div class="nivo-slider">
          <!-- Slide #1 image -->
          <img src="<?=base_url()?>/assets/template/front/img/slides/nivo/bg-1.jpg" alt="" title="#caption-1" />
          <!-- Slide #2 image -->
          <img src="<?=base_url()?>/assets/template/front/img/slides/nivo/bg-2.jpg" alt="" title="#caption-2" />
          <!-- Slide #3 image -->
          <img src="<?=base_url()?>/assets/template/front/img/slides/nivo/bg-3.jpg" alt="" title="#caption-3" />
        </div>
        <div class="container">
          <div class="row">
            <div class="span12">
              <!-- Slide #1 caption -->
              <div class="nivo-caption" id="caption-1">
                <div>
                  <h2>Serahkan pada Kami <strong>Terima Beres</strong></h2>
                  <p>
                    Berikan materinya pada kami. Bisa berupa brosur atau materi lain, kami akan ubah menjadi website agar bisnis Anda meroket!
                  </p>
                  <a href="#" class="btn btn-theme">Read More</a>
                </div>
              </div>
              <!-- Slide #2 caption -->
              <div class="nivo-caption" id="caption-2">
                <div>
                  <h2>Kami Bantu Kelola <strong>Website Anda</strong></h2>
                  <p>
                    Silakan fokus pada bisnis, kami bantu mengelola dan melakukan maintenance website Anda. Tambah halaman, update, dll.
                  </p>
                  <a href="#" class="btn btn-theme">Read More</a>
                </div>
              </div>
              <!-- Slide #3 caption -->
              <div class="nivo-caption" id="caption-3">
                <div>
                  <h2>Website Anda 2 Hari <strong>Selesai</strong></h2>
                  <p>
                    Bisnis Anda bisa segera mendunia dalam 2 hari kerja. Kami mengerti bahwa bisnis Anda tak bisa menunggu lama untuk go online.
                  </p>
                  <a href="#" class="btn btn-theme">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end slider -->
    </section>
    <section class="callaction">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="big-cta">
              <div class="cta-text">
                <h3>Kita telah membuat lebih dari <span class="highlight"><strong>1000 websites</strong></span> tahun ini!</h3>
              </div>
              <div class="cta floatright">
                <a class="btn btn-large btn-theme btn-rounded" href="#">Pesan Sekarang!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="row">
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-briefcase icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>Corporate business</h6>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                    <a href="#">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-desktop icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>Responsive theme</h6>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                    <a href="#">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-beaker icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>Coded carefully</h6>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                    <a href="#">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-coffee icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>Sit and enjoy</h6>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                    <a href="#">Learn more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
        <!-- Portfolio Projects -->
        <div class="row">
          <div class="span12">
            <h4 class="heading">Some of recent <strong>works</strong></h4>
            <div class="row">
              <section id="projects">
                <ul id="thumbs" class="portfolio">
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The City" href="img/works/full/image-01-full.jpg">
            <span class="overlay-img"></span>
            <span class="overlay-img-thumb font-icon-plus"></span>
            </a>
                    <!-- Thumb Image and Description -->
                    <img src="<?=base_url()?>/assets/template/front/img/works/thumbs/image-01.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                  <!-- End Item Project -->
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 design" data-id="id-1" data-type="icon">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Office" href="img/works/full/image-02-full.jpg">
            <span class="overlay-img"></span>
            <span class="overlay-img-thumb font-icon-plus"></span>
            </a>
                    <!-- Thumb Image and Description -->
                    <img src="<?=base_url()?>/assets/template/front/img/works/thumbs/image-02.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                  <!-- End Item Project -->
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 photography" data-id="id-2" data-type="illustrator">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Mountains" href="img/works/full/image-03-full.jpg">
            <span class="overlay-img"></span>
            <span class="overlay-img-thumb font-icon-plus"></span>
            </a>
                    <!-- Thumb Image and Description -->
                    <img src="<?=base_url()?>/assets/template/front/img/works/thumbs/image-03.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                  <!-- End Item Project -->
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 photography" data-id="id-2" data-type="illustrator">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Mountains" href="img/works/full/image-04-full.jpg">
            <span class="overlay-img"></span>
            <span class="overlay-img-thumb font-icon-plus"></span>
            </a>
                    <!-- Thumb Image and Description -->
                    <img src="<?=base_url()?>/assets/template/front/img/works/thumbs/image-04.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                  <!-- End Item Project -->
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 photography" data-id="id-4" data-type="web">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Sea" href="img/works/full/image-05-full.jpg">
            <span class="overlay-img"></span>
            <span class="overlay-img-thumb font-icon-plus"></span>
            </a>
                    <!-- Thumb Image and Description -->
                    <img src="<?=base_url()?>/assets/template/front/img/works/thumbs/image-05.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                  <!-- End Item Project -->
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 photography" data-id="id-5" data-type="icon">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Clouds" href="img/works/full/image-06-full.jpg">
            <span class="overlay-img"></span>
            <span class="overlay-img-thumb font-icon-plus"></span>
            </a>
                    <!-- Thumb Image and Description -->
                    <img src="<?=base_url()?>/assets/template/front/img/works/thumbs/image-06.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                  <!-- End Item Project -->
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 photography" data-id="id-2" data-type="illustrator">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Mountains" href="img/works/full/image-07-full.jpg">
            <span class="overlay-img"></span>
            <span class="overlay-img-thumb font-icon-plus"></span>
            </a>
                    <!-- Thumb Image and Description -->
                    <img src="<?=base_url()?>/assets/template/front/img/works/thumbs/image-07.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                  <!-- End Item Project -->
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Dark" href="img/works/full/image-08-full.jpg">
            <span class="overlay-img"></span>
            <span class="overlay-img-thumb font-icon-plus"></span>
            </a>
                    <!-- Thumb Image and Description -->
                    <img src="<?=base_url()?>/assets/template/front/img/works/thumbs/image-08.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                  <!-- End Item Project -->
                </ul>
              </section>
            </div>
          </div>
        </div>
        <!-- End Portfolio Projects -->
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
        <div class="row">
          <div class="span12">
            <h4>Very satisfied <strong>clients</strong></h4>
            <ul id="mycarousel" class="jcarousel-skin-tango recent-jcarousel clients">
              <li>
                <a href="#">
          <img src="<?=base_url()?>/assets/template/front/img/dummies/clients/client1.png" class="client-logo" alt="" />
          </a>
              </li>
              <li>
                <a href="#">
          <img src="<?=base_url()?>/assets/template/front/img/dummies/clients/client2.png" class="client-logo" alt="" />
          </a>
              </li>
              <li>
                <a href="#">
          <img src="<?=base_url()?>/assets/template/front/img/dummies/clients/client3.png" class="client-logo" alt="" />
          </a>
              </li>
              <li>
                <a href="#">
          <img src="<?=base_url()?>/assets/template/front/img/dummies/clients/client4.png" class="client-logo" alt="" />
          </a>
              </li>
              <li>
                <a href="#">
          <img src="<?=base_url()?>/assets/template/front/img/dummies/clients/client5.png" class="client-logo" alt="" />
          </a>
              </li>
              <li>
                <a href="#">
          <img src="<?=base_url()?>/assets/template/front/img/dummies/clients/client6.png" class="client-logo" alt="" />
          </a>
              </li>
              <li>
                <a href="#">
          <img src="<?=base_url()?>/assets/template/front/img/dummies/clients/client1.png" class="client-logo" alt="" />
          </a>
              </li>
              <li>
                <a href="#">
          <img src="<?=base_url()?>/assets/template/front/img/dummies/clients/client2.png" class="client-logo" alt="" />
          </a>
              </li>
              <li>
                <a href="#">
          <img src="<?=base_url()?>/assets/template/front/img/dummies/clients/client3.png" class="client-logo" alt="" />
          </a>
              </li>
              <li>
                <a href="#">
          <img src="<?=base_url()?>/assets/template/front/img/dummies/clients/client4.png" class="client-logo" alt="" />
          </a>
              </li>
              <li>
                <a href="#">
          <img src="<?=base_url()?>/assets/template/front/img/dummies/clients/client5.png" class="client-logo" alt="" />
          </a>
              </li>
              <li>
                <a href="#">
          <img src="<?=base_url()?>/assets/template/front/img/dummies/clients/client6.png" class="client-logo" alt="" />
          </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="bottom">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="aligncenter">
              <div id="twitter-wrapper">
                <div id="twitter">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
     <?php $this->load->view("front/layout/footer");?>
    </footer>
  </div>
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="<?=base_url()?>/assets/template/front/js/jquery.js"></script>
  <script src="<?=base_url()?>/assets/template/front/js/jquery.easing.1.3.js"></script>
  <script src="<?=base_url()?>/assets/template/front/js/bootstrap.js"></script>
  <script src="<?=base_url()?>/assets/template/front/js/jcarousel/jquery.jcarousel.min.js"></script>
  <script src="<?=base_url()?>/assets/template/front/js/jquery.fancybox.pack.js"></script>
  <script src="<?=base_url()?>/assets/template/front/js/jquery.fancybox-media.js"></script>
  <script src="<?=base_url()?>/assets/template/front/js/google-code-prettify/prettify.js"></script>
  <script src="<?=base_url()?>/assets/template/front/js/portfolio/jquery.quicksand.js"></script>
  <script src="<?=base_url()?>/assets/template/front/js/portfolio/setting.js"></script>
  <script src="<?=base_url()?>/assets/template/front/js/jquery.flexslider.js"></script>
  <script src="<?=base_url()?>/assets/template/front/js/jquery.nivo.slider.js"></script>
  <script src="<?=base_url()?>/assets/template/front/js/modernizr.custom.js"></script>
  <script src="<?=base_url()?>/assets/template/front/js/jquery.ba-cond.min.js"></script>
  <script src="<?=base_url()?>/assets/template/front/js/jquery.slitslider.js"></script>
  <script src="<?=base_url()?>/assets/template/front/js/animate.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="<?=base_url()?>/assets/template/front/js/custom.js"></script>

</body>
</html>
