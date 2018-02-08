<?php
/**
 * Footer file common to all
 * templates
 *
 */
?>


<?php // common footer content goes here ?>
<footer class="footer" role="contentinfo">
<div class="footer--social">
		<a href="<?php echo home_url(); ?>" class="bg-teal button--circle"><?php NID_SVG::icon( 'home', array( 'class' => 'footer--social__icon' ), 'トップページへ' ); ?></a>
		<a href="https://www.facebook.com/lawyerhirotamayumi/" class="button--circle bg-facebook" target="_blank"><?php NID_SVG::icon( 'facebook', array( 'class' => 'footer--social__icon' ), 'Facebook' ); ?></a>
		<a href="https://plus.google.com/118124010942091667362?hl=ja" class="button--circle bg-google-plus" target="_blank"><?php NID_SVG::icon( 'google-plus', array( 'class' => 'footer--social__icon' ), 'Google+' ); ?></a>
		<a href="https://www.youtube.com/channel/UCQepvNppunUj6BSQgAtbx1g" class="button--circle bg-youtube" target="_blank"><?php NID_SVG::icon( 'youtube', array( 'class' => 'footer--social__icon' ), 'Youtube' ); ?></a>
		<a href="tel:0120783409" title="電話する" class="button--circle bg-facebook show-for-medium"><?php NID_SVG::icon( 'phone', array( 'class' => 'footer--social__icon' ), '電話する' ); ?></a>
		<a href="https://www.law-yamashita.com/contact" target="_blank" title="お問い合わせ" class="button--circle bg-pink show-for-medium"><?php NID_SVG::icon( 'mail', array( 'class' => 'footer--social__icon' ), 'お問い合わせ' ); ?></a>
		<a href="#top" class="button--circle bg-lime hide-for-medium"><?php NID_SVG::icon( 'arrow-up', array( 'class' => 'footer--social__icon' ), 'ページ上部へ' ); ?></a>
	</div>
	<div class="row">
		<div class="column small-12 large-8">
			<p class="footer--title"><?php NID_SVG::icon( 'site-map', array( 'class' => 'footer--title-icon' ) ); ?>サイトマップ</p>
			<div class="row">
				<?php
					NID_Menu::nav_menu( 'footer', array(
						'menu_class' => 'menu vertical footer--nav show-for-large',
						'show_level_class' => true
					) );
				?>
			</div>
		</div>
		<div class="column large-4 medium-12">
			<p class="footer--title"><?php NID_SVG::icon( 'office', array( 'class' => 'footer--title-icon' ) ); ?>岩国支部の情報</p>
			<p class="footer--title -no-border"><?php NID_SVG::icon( 'map-pin', array( 'class' => 'footer--title-icon' ) ); ?>住所</p>
			<p><a href="https://goo.gl/maps/13mUEYXfTQ22" title="Googleマップを見る" target="_blank">山口県岩国市山手町一丁目16-10<br>山手町ビル402</a></p>
			<p class="footer--title -no-border"><?php NID_SVG::icon( 'phone', array( 'class' => 'footer--title-icon' ) ); ?>電話番号</p>
			<p><a href="tel:0827333005" title="電話する">0827-33-3005</a></p>
			<p class="footer--title -no-border"><?php NID_SVG::icon( 'fax', array( 'class' => 'footer--title-icon' ) ); ?>FAX番号</p>
			<p>0827-33-3006</p>
			<p class="footer--title -no-border"><?php NID_SVG::icon( 'mail', array( 'class' => 'footer--title-icon' ) ); ?>メール</p>
			<p><a href="https://www.law-yamashita.com/contact">info@law-yamashita.com</a></p>
		</div>
	</div>
	<p class="footer--copy">© <span itemprop="copyrightYear"><?php echo date( 'Y' ); ?></span> <?php bloginfo( 'name' ); ?></p>
	<div id="js--button-fixed" class="button--fixed"><a href="#top" title="<?php bloginfo( 'name' ); ?>" class="button--circle bg-lime"><?php NID_SVG::icon( 'arrow-up', array( 'class' => 'footer--social__icon' ), 'ページ上部へ' ); ?></a></div>
</footer>
<?php get_template_part( './elements/footer-menu' ); ?>
<?php get_template_part( './elements/ajax-modal' ); ?>
<script src="//www.law-yamashita.com/wp-content/themes/ym-home/assets/js/svgxuse.js" defer></script>
<?php wp_footer(); ?>
</body>
</html>
