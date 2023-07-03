<!DOCTYPE html>
<html lang="en">

<head>

     <meta charset="UTF-8">

     <title>Artist - Minimal HTML Portfolio</title>

     <!--

Template 2100 Artist

http://www.tooplate.com/view/2100-artist

-->

     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="/assets/template/css/bootstrap.min.css">
     <link rel="stylesheet" href="/assets/template/css/animate.css">
     <link rel="stylesheet" href="/assets/template/css/magnific-popup.css">
     <link rel="stylesheet" href="/assets/template/css/font-awesome.min.css">

     <!-- Main css -->
     <link rel="stylesheet" href="/assets/template/css/tooplate-style.css">

</head>

<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <div class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </div>


     <!-- HOME SECTION -->
     <div class="container">
          <div class="row">
               <section id="home" class="parallax-section">

                    <div class="col-md-offset-1 col-md-10 col-sm-12">
                         <div class="home-wrapper">
                              <h3 class="wow fadeInUp" data-wow-delay="0.4s"><?= $home['title'] ?? '' ?></h3>
                              <h1 class="wow fadeInUp" data-wow-delay="0.6s"><?= $home['summary'] ?? '' ?></h1>
                              <a href="<?= $home['button-link'] ?? '#' ?>" class="wow fadeInUp smoothScroll arrow-btn" data-wow-delay="1s"><i class="<?= $home['button-icon'] ?? '' ?>"></i></a>
                         </div>
                    </div>

               </section>
          </div>
     </div>


     <!-- ABOUT SECTION -->
     <section id="about" class="parallax-section">
          <div class="container">
               <div class="row">
                    <?php if (isset($about) && is_array($about)) : ?>
                         <?php foreach ($about as $key => $value) : ?>
                              <div class="<?= $value['class'] ?? '' ?>">
                                   <?php if ($value['position'] == 'left') : ?>
                                        <img src="<?= $asset_path . ($value['image'] ?? '') ?>" class="wow fadeInUp img-responsive" data-wow-delay="0.2s" alt="about image">
                                        <div class="wow fadeInUp" data-wow-delay="0.4s">
                                             <h4><?= $value['title'] ?? '' ?></h4>
                                             <p><?= $value['summary'] ?? '' ?></p>
                                             <?= $value['link'] ?? '' ?>
                                        </div>
                                   <?php else : ?>
                                        <div class="about-thumb">
                                             <div class="wow fadeInUp section-title" data-wow-delay="0.6s">
                                                  <h3><?= $value['subtitle'] ?? '' ?></h3>
                                                  <h2><?= $value['title'] ?? '' ?></h2>
                                             </div>
                                             <div class="wow fadeInUp" data-wow-delay="0.8s">
                                                  <p><?= $value['summary'] ?? '' ?></p>
                                             </div>
                                        </div>
                                   <?php endif; ?>
                              </div>
                         <?php endforeach; ?>
                    <?php endif; ?>


               </div>
          </div>
     </section>


     <!-- WORK SECTION -->
     <section id="work" class="parallax-section">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <!-- SECTION TITLE -->
                         <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
                              <h2><?= $work['title'] ?? '' ?></h2>
                              <p><?= $work['summary'] ?? '' ?></p>
                         </div>
                    </div>

                    <?php if ($work['images'] && is_array($work['images'])) : ?>
                         <?php foreach ($work['images'] as $image) : ?>
                              <div class="wow fadeInUp col-md-3 col-sm-6" data-wow-delay="0.4s">
                                   <!-- WORK THUMB -->
                                   <div class="work-thumb">
                                        <a href="<?= $imgPath = ($asset_path . ($image['link'] ?? '#')) ?>" class="image-popup">
                                             <img src="<?= $imgPath ?>" class="img-responsive" alt="<?= $imgName = $image['name'] ?? '' ?>">
                                        </a>
                                   </div>
                                   <h4><?= ucwords($imgName) ?></h4>
                              </div>
                         <?php endforeach; ?>
                    <?php endif; ?>
               </div>
          </div>
     </section>


     <!-- CONTACT SECTION -->
     <section id="contact" class="parallax-section">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <!-- SECTION TITLE -->
                         <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
                              <h2><?= $contact['title'] ?? '' ?></h2>
                              <p><?= $contact['summary'] ?? '' ?></p>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12">
                         <!-- CONTACT FORM HERE -->
                         <div class="wow fadeInUp" data-wow-delay="0.6s">
                              <form action="#" method="post" id="contact-form">
                                   <div class="col-md-6 col-sm-6">
                                        <input type="text" class="form-control" name="name" placeholder="Name">
                                   </div>
                                   <div class="col-md-6 col-sm-6">
                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                   </div>
                                   <div class="col-md-12 col-sm-12">
                                        <textarea class="form-control" rows="5" name="message" placeholder="Message"></textarea>
                                   </div>
                                   <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
                                        <button id="submit" type="submit" class="form-control" value="send-mail" name="submit">Send Message</button>
                                   </div>
                              </form>
                         </div>
                    </div>

               </div>
          </div>
     </section>

     <!-- FOOTER SECTION -->
     <footer id="footer" class="parallax-section">
          <div class="container">
               <div class="row">

                    <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.2s">
                         <h4><?= $footer['title'] ?? '' ?></h4>
                         <p><?= $footer['summary'] ?? '' ?></p>
                    </div>

                    <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.4s">
                         <?php if (isset($footer['support']) && is_array($footer['support'])) : ?>
                              <?php foreach ($footer['support'] as $support) : ?>
                                   <div class="support-cus">
                                        <?= implode('', $support['string'] ?? []) ?>
                                   </div>
                              <?php endforeach; ?>
                         <?php endif; ?>
                    </div>

                    <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.6s">
                         <h4>Newsletter</h4>
                         <form class="newsletter" action="#" method="get">
                              <input name="email" type="email" class="form-control" id="email" placeholder="Your Email Address">
                              <button name="submit" value="sign-up" class='form-control'>Sign Up</button>
                         </form>
                    </div>

                    <div class="col-md-12 col-sm-12 clearfix">
                         <div class="dash-line"></div>
                    </div>

                    <div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="0.8s">
                         <p class="copyright-text"><?= $footer['copyright-text'] ?? '' ?>

                              . Design: <a rel="nofollow" href="https://www.tooplate.com" title="HTML Templates">Tooplate</a></p>
                    </div>

                    <?php if (isset($footer['socials']) && is_array($footer['socials'])) : ?>
                         <div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="1s">
                              <ul class="social-icon">
                                   <?php
                                   foreach ($footer['socials'] as $social) {
                                        echo '<li>' . anchor($social['link'], ' ', ['class' => $social['icon'] ?? '']) . '</li>';
                                   }
                                   ?>
                              </ul>
                         </div>
                    <?php endif; ?>

               </div>
          </div>
     </footer>

     <!-- SCRIPTS -->
     <script src="/assets/template/js/jquery.js"></script>
     <script src="/assets/template/js/bootstrap.min.js"></script>
     <script src="/assets/template/js/jquery.parallax.js"></script>
     <script src="/assets/template/js/jquery.magnific-popup.min.js"></script>
     <script src="/assets/template/js/magnific-popup-options.js"></script>
     <script src="/assets/template/js/smoothscroll.js"></script>
     <script src="/assets/template/js/wow.min.js"></script>
     <script src="/assets/template/js/custom.js"></script>

</body>

</html>