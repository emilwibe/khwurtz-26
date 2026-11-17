<footer class="footer-global">

  <section class="l-wrapper xxl footer-global-inner">

    <div class="mc-signup">

      <h2 class="kh-reveal">Let’s clay in touch</h2>


      <div id="mc_embed_shell">

        <div id="mc_embed_signup">
          <form action="https://khwurtz.us16.list-manage.com/subscribe/post?u=d17f451a6b88a183ddfb0568d&amp;id=bf5a3f489e&amp;f_id=000e17e0f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
            <div id="mc_embed_signup_scroll">
              <!--<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>-->
              <div class="mc-field-group kh-reveal-2"><!--<label for="mce-EMAIL">Email Address <span class="asterisk">*</span></label>--><input type="email" name="EMAIL" class="required email mc-signup-kh-input" id="mce-EMAIL" required="" value="" placeholder="Please enter your e-mail"></div>
              <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display: none;"></div>
                <div class="response" id="mce-success-response" style="display: none;"></div>
              </div>
              <div aria-hidden="true" style="position: absolute; left: -5000px;"><input type="text" name="b_d17f451a6b88a183ddfb0568d_bf5a3f489e" tabindex="-1" value=""></div>

              <div class="btn-container kh-reveal-3">
                <div class="btn-outer icon-after">
                  <input type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn border rounded" value="Subscribe">
                </div><!--/.btn-outer-->
              </div><!--/.btn-container-->
            </div>
          </form>
        </div>
      </div>

    </div><!--/.mc-signup-->
    <script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script>

    <div class="footer-global-end-container">

      <div class="footer-note-container">
        <div class="footer-note-inner kh-reveal">

          <p class="note">Note:</p><!--/.note-->

          <h4 class="note-content">Here, the longing for shaping now is even lengthier.</h4>

        </div><!--/.footer-note-inner-->
      </div><!--/.footer-note-container-->

      <div class="footer-info-container kh-reveal-2">
        <div class="footer-info-contact-container">
          <div class="footer-adress-container">
            <span class="footer-adress">Kirkebakken 41, 8700<br>Horsens, Denmark</span>
          </div><!--/.footer-adress-container-->

          <div class="footer-contact-container" id="footer-contact">
            <a href="mailto:hello@khwurtz.dk" class="contact-mail">hello@khwurtz.dk</a>
            
            <a href="tel:+4553641617" class="contact-tel">+45 53641617</a>
          </div><!--/.footer-contact-container-->

        </div><!--/.footer-info-contact-container-->

        <div class="footer-nav-container">

          <?php get_template_part('tp/nav-primary-footer'); ?>

        </div><!--/.footer-nav-container-->

      </div><!--/.footer-info-container-->

      <div class="footer-end-divider"></div>

    </div><!--/.footer-global-end-container-->

  </section>

</footer>
<div id="vw-debug"></div>

<style>
  #vw-debug {
    position: fixed;
    right: 10px;
    top: 10px;
    z-index: 999999;
    padding: 8px 12px;
    background: #222;
    color: #fff;
    font: 14px monospace;
    border-radius: 4px;
    pointer-events: none;

    display: none !important;
  }
</style>

<script>
  const vwDebug = document.getElementById('vw-debug');

  function updateVW() {
    vwDebug.textContent =
      `Viewport: ${window.innerWidth}px | 1vw: ${(window.innerWidth / 100).toFixed(2)}px`;
  }

  window.addEventListener('resize', updateVW);
  updateVW();
</script>
<?php wp_footer(); ?>

</body>

</html>