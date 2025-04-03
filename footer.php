</main>
<?php get_sidebar(); ?>
</div>
<footer id="footer" role="contentinfo">
    <div id="copyright">
        &copy; <?php echo esc_html( date_i18n( __( 'Y', 'pcmnnurture' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
<!-- import Boostrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</body>
</html>