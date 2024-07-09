<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ondaforexus
 */

?>

<footer class="footer" id="footer">
        <div class="top-part">
          <div class="container">
            <div class="row">
              <div
                class="col-md-3 d-flex justify-content-center justify-content-md-start"
              >
                <div class="ft-wrapper">
                  <a href="https://oandaforexus.com/" class="ft-logo">
                    <img
                    style="max-height:60px"
                  src="images/yXmpbj5PdX0qQkFfmYLo.png"
                      alt="logo"
                      class="ft-logo__img"
                    />
                  </a>
                  <ul class="ft-social" style="padding-top: 10px;">
                    <li class="ft-social__item">
                      <!--noindex-->
                      <a href="#" class="ft-social__link" rel="nofollow">
                        <img
                          src="https://www.capitalfx.pro/assets/frontend_new/assets/img/icons/icons.svg#facebook"
                          class="svg-facebook-dims ft-social__img"
                          alt="facebook"
                        />
                      </a>
                      <!--/noindex-->
                    </li>
                    <li class="ft-social__item">
                      <!--noindex-->
                      <a href="#" class="ft-social__link" rel="nofollow">
                        <img
                          src="https://www.capitalfx.pro/assets/frontend_new/assets/img/icons/icons.svg#linkedin"
                          class="svg-linkedin-dims ft-social__img"
                          alt="linkedin"
                        />
                      </a>
                      <!--/noindex-->
                    </li>
                    <li class="ft-social__item">
                      <!--noindex-->
                      <a href="#" class="ft-social__link" rel="nofollow">
                        <img
                          src="https://www.capitalfx.pro/assets/frontend_new/assets/img/icons/icons.svg#twitter"
                          class="svg-twitter-dims ft-social__img"
                          alt="twitter"
                        />
                      </a>
                      <!--/noindex-->
                    </li>
                    <li class="ft-social__item">
                      <!--noindex-->
                      <a href="#" class="ft-social__link" rel="nofollow">
                        <img
                          src="https://www.capitalfx.pro/assets/frontend_new/assets/img/icons/icons.svg#instagram"
                          class="svg-instagram-dims ft-social__img"
                          alt="instagram"
                        />
                      </a>
                      <!--/noindex-->
                    </li>
                  </ul>
                </div>
              </div>
              <div
                class="col-md-6 d-flex justify-content-center justify-content-md-end justify-content-lg-center pt-5 pt-md-0"
              >
                <nav class="ft-menu">
                  <ul class="ft-menu__list">
                    <li class="ft-menu__item">
                      <a href="#intro" class="ft-menu__link"> Home </a>
                    </li>
                    <li class="ft-menu__item">
                      <a href="#about" class="ft-menu__link"> About </a>
                    </li>
                    <li class="ft-menu__item">
                      <a href="#features" class="ft-menu__link"> Features </a>
                    </li>
                    <li class="ft-menu__item">
                      <a href="#blog" class="ft-menu__link"> Blog </a>
                    </li>
                    <li class="ft-menu__item">
                      <a href="#team" class="ft-menu__link"> Team </a>
                    </li>
                    <li class="ft-menu__item">
                      <a href="#app" class="ft-menu__link"> Mobile App </a>
                    </li>
                    <li class="ft-menu__item">
                      <a href="#questions" class="ft-menu__link"> FAQ </a>
                    </li>
                
                    <li class="ft-menu__item">
                      <a href="#tokens" class="ft-menu__link"> Tokens </a>
                    </li>
                    <li class="ft-menu__item">
                      <a style="padding:10px; background:#419FBB" download href="https://www.capitalfx.pro/assets/CapitalFX.apk" class="ft-menu__link"> 
                      Download App
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
              <div
                class="col-md-3 d-flex justify-content-center justify-content-md-end pt-5 pt-md-0"
              >
                <div class="ft-subscribe">
                  <p class="ft-subscribe__title">Get the latest news</p>
                  <button class="ft-subscribe__btn _btn">Subscribe</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bottom-part">
          <div class="first-line">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="copyright">
                    <div class="copyright__text">
                      &#169; 2024 OANDAFOREX US. All rights reserved.
                    </div>
                    <div class="copyright__company">
                      Designed By
                      <a href="#" class="copyright__link">OANDAFOREX US</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="second-line">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="policy">
                    <a href="#" class="policy__link">Privacy Policy</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>

	   <!-- SCROLL TO TOP -->
	   <!-- <div class="scroll-up" style="display: block">
        <a href="#intro" class="scroll-up__link">
          <img
            src="https://www.capitalfx.pro/assets/frontend_new/assets/img/icons/icons.svg#arrow_down"
            class="svg-arrow_down-dims"
            alt="arrow_down"
          />
        </a>
      </div> -->
</div><!-- #page -->




<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri()?>/assets/js/jquery.min.js"></script>
    <!-- VALIDATE MIN JS -->
    <script src="<?php echo get_template_directory_uri()?>/assets/js/jquery.validate.min.js"></script>
    <!-- PARTICLES MIN JS -->
    <script src="<?php echo get_template_directory_uri()?>/assets/js/particles.min.js"></script>
    <!-- PARALLAX MIN JS -->
    <script src="<?php echo get_template_directory_uri()?>/assets/js/parallax.min.js"></script>
    <!-- LISTTOPIE MIN JS -->
    <script src="<?php echo get_template_directory_uri()?>/assets/js/snap.svg-min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/js/jquery.listtopie.min.js"></script>
    <!-- WOW MIN JS -->
    <script src="<?php echo get_template_directory_uri()?>/assets/js/wow.min.js"></script>
    <!-- SLICK MIN JS -->
    <script src="<?php echo get_template_directory_uri()?>/assets/js/slick.min.js"></script>
    <!-- MAIN MIN JS -->
    <script src="<?php echo get_template_directory_uri()?>/assets/js/main.min.js"></script>

</body>
</html>
