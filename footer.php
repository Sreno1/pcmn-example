</main>
</div>
<footer id="footer" role="contentinfo">
    <div id="footer-content"
         class="row row-cols-1 row-cols-sm-2 row-cols-md-5 pt-5 pb-3 mt-5 justify-content-center text-center text-md-start">
        <div class="col mb-3">
			<?php if ( is_active_sidebar( 'footer-widget-area-1' ) ) : ?>
                <div class="widget-area">
					<?php dynamic_sidebar( 'footer-widget-area-1' ); ?>
                </div>
			<?php endif; ?>
        </div>
        <div class="col mb-3">
			<?php if ( is_active_sidebar( 'footer-widget-area-2' ) ) : ?>
                <div class="widget-area">
					<?php dynamic_sidebar( 'footer-widget-area-2' ); ?>
                </div>
			<?php endif; ?>
        </div>
        <div class="col mb-3">
			<?php if ( is_active_sidebar( 'footer-widget-area-3' ) ) : ?>
                <div class="widget-area">
					<?php dynamic_sidebar( 'footer-widget-area-3' ); ?>
                </div>
			<?php endif; ?>
        </div>
        <div class="col mb-3">
			<?php if ( is_active_sidebar( 'footer-widget-area-4' ) ) : ?>
                <div class="widget-area">
					<?php dynamic_sidebar( 'footer-widget-area-4' ); ?>
                </div>
			<?php endif; ?>
        </div>
    </div>
    <div id="copyright"
         class="d-flex flex-column flex-sm-row justify-content-between py-1 my-1 pt-3">
        <p>Copyright &copy; PostcardMania. All Rights Reserved. Privacy Policy | CCPA</p>
        <p>Contact Us | Employment Opportunities</p>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>