<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mystery Themes
 * @subpackage News Portal
 * @since 1.0.0
 */

?>

		</div><!-- .mt-container -->
	</div><!-- #content -->

	<?php
		/**
	     * news_portal_footer hook
	     * @hooked - news_portal_footer_start - 5
	     * @hooked - news_portal_footer_widget_section - 10
	     * @hooked - news_portal_bottom_footer_start - 15
	     * @hooked - news_portal_footer_site_info_section - 20
	     * @hooked - news_portal_footer_menu_section - 25
	     * @hooked - news_portal_bottom_footer_end - 30
	     * @hooked - news_portal_footer_end - 35
	     *
	     * @since 1.0.0
	     */
	    do_action( 'news_portal_footer' );
	?>
</div><!-- #page -->

<?php
	/**
     * news_portal_after_page hook
     *
     * @since 1.0.0
     */
    do_action( 'news_portal_after_page' );
?>

<?php wp_footer(); ?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(51271093, "init", {
        id:51271093,
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/51271093" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>