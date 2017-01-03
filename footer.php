<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<footer id="footer" class="clearfix" role="contentinfo">
    &copy; 2016-<?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>
    - <a href="http://www.typecho.org" target="_blank">Typecho</a> - SimpleLog
</footer><!-- end #footer -->

<?php $this->footer(); ?>
</div>
</body>
</html>
