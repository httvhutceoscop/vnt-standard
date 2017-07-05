
    </div> <!-- End #inner-wrapper -->
</div> <!-- End #wrapper -->

<div class="footer">
    <div class="footer-inside">
        <div class="footer-row01">
            <div class="footer-logo"></div>

            <div class="footer-socialbox">
              <div>
                <div class="socialicon-twitter"><a target="_blank" href="https://twitter.com/"></a></div>
                <div class="socialicon-facebook"><a target="_blank" href="https://www.facebook.com/"></a></div>
                <div class="socialicon-instagram"><a target="_blank" href="http://instagram.com/"></a></div>
                <div class="socialicon-youtube"><a target="_blank" href="https://www.youtube.com/"></a></div>
                <div class="socialicon-google"><a target="_blank" href="https://plus.google.com/"></a></div>
              </div>
            </div>

            <div class="footer-newsletter-box">
              <div class="footer-newsletter">
                <form class="newsletter-send">
                  <input type="text" class="input newsletter-input-id" placeholder="Subscribe to newsletter">
                  <input class="form-submit" type="submit" value="send">
                </form>
              </div>
              <div class="footer-newsletter-checkbox">
                  <div class="newsletter-checkbox">
                    <input type="checkbox" value="None" id="newsletter_checkbox" name="check">
                    <label for="newsletter_checkbox"></label>
                  </div>
                <p>I agree to the<b><a href="#"> Privacy Policy</a></b></p>
              </div>
            </div>
        </div>
        <div class="footer-row02">
            <div class="footer-pagelink">
              <div class="footer-pagelink-inside">
                <div class="footer-copyright"><p><?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'blankslate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); ?></p></div>
                <div class="footer-credits"><p>Credits</p></div>
              </div>
            </div>
            <div class="footer-loghibox">
              <div class="footer-loghibox-inside hide">
                <div class="footer-sugar"><a target="_blank" href=""></a></div>
                <div class="footer-almud"><a target="_blank" href=""></a></div>
                <div class="footer-abf"><a target="_blank" href=""></a></div>
                <div class="footer-bocelli-de"><a target="_blank" href=""></a></div>
                <div class="scozzese-design">
                  <p><a target="_blank" href=""><strong>SCOZZESE</strong>DESIGN<sup>TM</sup></a></p>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>