<?php
	/**
	 * Template Name: フロントページ
	 */

	get_header();
?>
<main>
	<?php
		get_template_part( './elements/fp-shibheader' );
		get_template_part( './elements/fp-welcome-mess' );
		// get_template_part( 'elements/cta--jiko-lp' );
	?>


	<div class="row">
		<div class="column large-3 sidebar--wrap"><?php get_sidebar(); ?></div>
		<div class="sidenav--overlay js--sidenav--button"></div>
		<div class="column small-12 large-8 contents --mt0 --pt0">


			<section class="contents--section contents--section__images">
				<div class="row align-middle">
					<h3 class="column small-12">信頼できるクラウドの活用</h3>
					<div class="column small-12 medium-6">
						<img class="thumbnail" src="//www.law-yamashita.com/wp-content/themes/ym-home/assets/img/lp/kure/6.jpg" alt="山下江法律事務所呉支部はクラウドを活用することで豊富な経験・多数の解決事例を共有し、どこの事務所でも同一のサ―ビスを提供できます。">
					</div>
					<div class="column small-12 medium-6">
						<p>広島最大級の弁護士事務所である山下江法律事務所では、その叡智・豊富な経験・多数の解決事例を共有し、常に適切な解決を迅速に行うことが可能です。</p>
						<p>さらに、世界でも最高レベルのセキュリティで、プライバシー保護が徹底されています。</p>
					</div>
				</div>
				<div class="row align-middle">
					<h3 class="column small-12">プライバシー保護環境</h3>
					<div class="column small-12 medium-6">
						<img class="thumbnail" src="//www.law-yamashita.com/wp-content/themes/ym-home/assets/img/lp/kure/2.jpg" alt="山下江法律事務所呉支部もプライバシーポリシーや行動指針に基づいた「気軽に相談できる場」を創造しました。">
					</div>
					<div class="column small-12 medium-6">
						<p>新しくオープンした呉支部でも、山下江法律事務所の<a href="<?php echo get_the_permalink('360'); ?>" class="link-external" title="<?php echo get_the_title('360'); ?>">行動指針</a>や<a href="<?php echo get_the_permalink('493'); ?>" class="link-external" title="<?php echo get_the_title('493'); ?>">プライバシーポリシー</a>に基づいた「気軽に相談できる場」を創造しました。</p>
					</div>
				</div>
				<div class="row align-middle">
					<h3 class="column small-12">安心して相談できる空間</h3>
					<div class="column small-12 medium-6">
						<img class="thumbnail" src="//www.law-yamashita.com/wp-content/themes/ym-home/assets/img/lp/kure/3.jpg" alt="山下江法律事務所呉支部では居心地の良い空間を演出しています。">
					</div>
					<div class="column small-12 medium-6">
						<p>一時間程度の法律相談でも、知らないことや難しい用語がたくさん出てきて疲れてしまいます。気軽に、安心できる法律相談のために、安心感を与える照明やインテリア家具により、居心地の良い空間を演出しております。</p>
					</div>
				</div>
			</section>


			<section class="contents--section contents--section__images">
				<h2 id="access">呉支部へのアクセス</h2>
				<div class="row">
					<div class="column">
						<p class="text-center"><img src="//www.law-yamashita.com/wp-content/themes/ym-home/assets/img/access/map--kure.png" alt="山下江法律事務所呉支部までのアクセス方法"></p>
						<p class="text-center"><a class="button link-external" href="https://goo.gl/maps/tH6MMvP8YtQ2" title="Googleマップで見る" target="_blank" rel="nofollow">Googleマップで見る</a>　<a href="https://www.law-yamashita.com/downloads/access/print--kure.pdf" class="button">印刷用PDF</a></p>
						<p>〒737-0051　広島県呉市中央２丁目５－２ NSビル７０３<br>TEL： 0823-25-0077　FAX： 0823-25-0081<br>営業時間：　9：00～18：00</p>
					</div>
				</div>
			</section>


			<section class="contents--section contents--section__service">
				<h2 id="front--service">取扱範囲ピックアップ</h2>
				<div class="row small-up-1 medium-up-2">
					
					<?php
						include( get_template_directory() . '/config/service.php' );
						for ( $i = 0; $i < 4; $i++ ) :
					?>
					<article class="article--category column">
						<header class="article--category_header">
							<h3 class="article--category_title"><a href="<?php echo get_page_link( $service[$i]['id'] ); ?>"><span class="article--category_icon"><?php NID_SVG::icon( $service[$i]['icon'], array(), get_the_title( $service[$i]['id'] ) . 'のアイコン' ) ?></span><?php echo get_the_title( $service[$i]['id'] ); ?></a></h3>
							<p class="article--category_desc"><?php echo $service[$i]['desc']; ?></p>
						</header>
						<div class="article--category_content">
							<ol>
							<?php
								foreach ( $service[$i]['children'] as $child ) {
									if ( ! is_array( $child ) ) {
										echo '<li><a href="', get_page_link( $child ), '">', get_the_title( $child ), '</a></li>';
									} else {
										echo '<ul>';
										foreach ( $child as $grandson ) {
											if ( ! is_array( $grandson ) ) {
												echo '<li><a href="', get_page_link( $grandson ), '">', get_the_title( $grandson ), '</a></li>';
											} else {
												echo '<ul>';
												foreach ( $grandson as $great ) {
													if ( ! is_array( $great ) ) {
														echo '<li><a href="', get_page_link( $great ), '">', get_the_title( $great ), '</a></li>';
													} else {
														echo '<ul>';
														foreach ( $grandson as $great ) {
																echo '<li><a href="', get_page_link( $great ), '">', get_the_title( $great ), '</a></li>';
														}
														echo '</ul>';
													}
												}
												echo '</ul>';
											}
										}
										echo '</ul>';
									}
								}
							?>
							</ol>
							<p class="text-center contents--section_button"><a href="<?php echo get_page_link( $service[$i]['id'] ); ?>" class="button secondary"><?php NID_SVG::icon( 'list', array() ); ?>詳しく見る</a></p>
						</div>
					</article>
					<?php
						endfor;
					?>

				</div>
				<p class="text-center contents--section_button" style="margin-top: 2rem"><a href="<?php echo get_page_link( '6226' ); ?>" class="button large"><?php NID_SVG::icon( 'list', array() ); ?>取扱業務の一覧を見る</a></p>
			</section>


			<?php
				$args = array(
					'order' => 'DESC',
					'orderby' => 'modified',
					'posts_per_page' => 4,
					'post_status'    => 'publish'
				);
				$news = new WP_Query( $args );
				if ( $news->have_posts() ) :
			?>
			<div class="contents--section">
				<h2><a href="<?php echo get_page_link( '5749' ); ?>">最新情報<span class="badge">　></span></a></h2>
				<?php
					while ( $news->have_posts() ) : $news->the_post();
				?>
				<dl>
					<dt><span class="label secondary"><?php the_modified_date( 'Y-m-d' ); ?></span>　<?php the_category( '　' ); ?></dt>
					<dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
				</dl>
				<?php
					endwhile;
				?>
				<p class="text-center contents--section_button" style="margin-top: 2rem"><a href="<?php echo get_page_link( '5749' ); ?>" class="button large"><?php NID_SVG::icon( 'list', array() ); ?>お知らせ一覧</a></p>
			</div>
				<?php endif; ?>


			<div class="contents--section">
				<h2 id="front--news"><a href="https://www.law-yamashita.com/topics" target="_blank">事務所の最新情報<span class="badge">　></span></a></h2>
				<?php
					$url = 'https://www.law-yamashita.com/feed';
					$url = sprintf( esc_html( "%s" ), $url );
					add_filter( 'wp_feed_cache_transient_lifetime', function() { return 1800; } );
					include_once( ABSPATH . WPINC . '/feed.php' );
					$feed = fetch_feed( $url );
					remove_filter( 'wp_feed_cache_transient_lifetime', function() { return 1800; } );
					$maxitems = 3;
					if ( ! is_wp_error( $feed ) ) {
						$maxitems = $feed->get_item_quantity( $maxitems );
						$rss_items = $feed->get_items( 0, $maxitems );
					}
					$site_title = $feed->get_title();
					$site_url = $feed->get_permalink();

					$output = '';
					date_default_timezone_set( 'Asia/Tokyo' );
					foreach ( $rss_items as $item ) {
						$f_link = esc_url( $item->get_permalink() );
						$f_date = $item->get_date( 'Y-m-d' );
						$f_title = esc_html( $item->get_title() );
						$f_category = '';
						foreach ( $item->get_categories() as $category ) {
							$f_category .= $category->get_label();
						}
						$output .= <<< EOM
<dl>
	<dt><span class="label secondary">{$f_date}</span>　<span class="label">{$f_category}</span></dt>
	<dd><a href="{$f_link}" target="_blank">{$f_title}</a></dd>
</dl>
EOM;
					}
					echo $output;
				?>
				<p class="text-center contents--section_button" style="margin-top: 2rem"><a href="https://www.law-yamashita.com/topics" class="button large" target="_blank"><?php NID_SVG::icon( 'list', array() ); ?>メインサイトのお知らせ一覧<br><br><span style="font-size:0.8em">※メインサイトへ移行します。</span></a></p>
			</div>
			
		</div>
	</div>
	<?php get_template_part( './elements/fp-special-sites' ); ?>
</main>

<?php get_footer(); ?>
