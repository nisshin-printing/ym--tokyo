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
						<img class="thumbnail" src="//www.law-yamashita.com/wp-content/themes/ym-home/assets/img/lp/kure/6.jpg" alt="山下江法律事務所東京虎ノ門オフィスはクラウドを活用することで豊富な経験・多数の解決事例を共有し、どこの事務所でも同一のサ―ビスを提供できます。">
					</div>
					<div class="column small-12 medium-6">
						<p>広島最大級の弁護士事務所である山下江法律事務所では、その叡智・豊富な経験・多数の解決事例を共有し、常に適切な解決を迅速に行うことが可能です。</p>
						<p>さらに、世界でも最高レベルのセキュリティで、プライバシー保護が徹底されています。</p>
					</div>
				</div>
				<div class="row align-middle">
					<h3 class="column small-12">プライバシー保護環境</h3>
					<div class="column small-12 medium-6">
						<img class="thumbnail" src="<?php echo get_template_directory_uri(), '/assets/img/tk--002.jpg'; ?>" alt="山下江法律事務所東京虎ノ門オフィスもプライバシーポリシーや行動指針に基づいた「気軽に相談できる場」を創造しました。">
					</div>
					<div class="column small-12 medium-6">
						<p>新しくオープンした東京虎ノ門オフィスでも、山下江法律事務所の行動指針やプライバシーポリシーに基づいた「気軽に相談できる場」を創造しました。</p>
					</div>
				</div>
				<div class="row align-middle">
					<h3 class="column small-12">安心して相談できる空間</h3>
					<div class="column small-12 medium-6">
						<img class="thumbnail" src="<?php echo get_template_directory_uri(), '/assets/img/tk-004.jpg'; ?>" alt="山下江法律事務所東京虎ノ門オフィスでは居心地の良い空間を演出しています。">
					</div>
					<div class="column small-12 medium-6">
						<p>一時間程度の法律相談でも、知らないことや難しい用語がたくさん出てきて疲れてしまいます。気軽に、安心できる法律相談のために、安心感を与える照明やインテリア家具により、居心地の良い空間を演出しております。</p>
					</div>
				</div>
			</section>


			<section class="contents--section contents--section__images">
				<h2 id="access">東京虎ノ門オフィスへのアクセス</h2>
				<div class="row">
					<div class="column">
						<p class="text-center"><img src="//www.law-yamashita.com/wp-content/themes/ym-home/assets/img/access/map--toranomon.png" alt="山下江法律事務所東京虎ノ門オフィスまでのアクセス方法"></p>
						<p class="text-center"><a class="button link-external" href="https://goo.gl/maps/91boNSyxVZm" title="Googleマップで見る" target="_blank" rel="nofollow">Googleマップで見る</a>　<a href="https://www.law-yamashita.com/wp-content/themes/ym-home/assets/img/access/map--toranomon.pdf" class="button">印刷用PDF</a></p>
						<p>〒105-0001　東京都港区虎ノ門一丁目5-8 オフィス虎ノ門１ビル803号<br>TEL： 03-6632-5355　FAX： 03-6632-5356<br>営業時間：　平日9：00～18：00</p>
					</div>
				</div>
			</section>


			<section class="contents--section contents--section__sozoku">
				<div class="contents--section contents--section__pickup">
					<p><img class="lazyload" data-src="<?php echo get_template_directory_uri(), '/assets/img/top--reason__title.png'; ?>" alt="山下江法律事務所が相続・遺言で選ばれる５つの理由"></p>
					<h3>相続法の大改正に対応した<br>広島初の一般向け『相続本』<br>改訂版『相続・遺言のポイント５５』発刊</h3>
					<div class="row align-middle">
						<div class="column small-3"><img class="lazyload" alt="山下江法律事務所の弁護士と相続アドバイザーが執筆。相続・遺言のポイント50" data-src="<?php echo get_template_directory_uri(), '/assets/img/sozoku-book--55.png'; ?>"></div>
						<div class="column small-9">
							<p>弁護士と相続アドバイザーが執筆した、一般向けの相続解説本を2016年に出版しました。</p>
							<p>無用なトラブルを避けるためにも「<strong class="underline">一家に一冊相続本を</strong>」との思いで、山下江法律事務所の弁護士17名と相続アドバイザー2名が執筆しました。法律問題・税務問題を豊富なイラストを多用して、わかりやすく解説！</p>
							<p><img alt="相続本はこんな疑問にお答えします。" class="lazyload" data-src="//tokyo.law-yamashita.com/wp-content/themes/ym--tokyo/assets/img/sozoku-book--55__answer.png"></p>
							<ul>
								<li>「改正で遺言が書きやすくなったとは？」</li>
								<li>「改正により配偶者の保護が強化されたとは？」</li>
								<li>「相続手続きには期限があるってホント！？」</li>
								<li>「遺言書が２通あった！どうすればいい？」</li>
								<li>「相続税、うちに関係あるの？」</li>
							</ul>
						</div>
					</div>
					<h3>広島最大級の解決実績</h3>
					<div class="row align-middle">
						<div class="column small-4"><img alt="広島最大級の解決事例を誇る山下江法律事務所の相談件数" class="lazyload" data-src="<?php echo get_template_directory_uri(), '/assets/img/sodan--2018.png'; ?>"></div>
						<div class="column small-4"><img alt="広島最大級の解決事例を誇る山下江法律事務所の受任件数" class="lazyload" data-src="<?php echo get_template_directory_uri(), '/assets/img/jyunin--2018.png'; ?>"></div>
						<div class="column small-4"><img alt="広島最大級の解決事例を誇る山下江法律事務所の満足度" class="lazyload" data-src="<?php echo get_template_directory_uri(), '/assets/img/manzokudo.png'; ?>"></div>
					</div>
					<p>地元広島における弁護士事務所で、これだけ多数の相談件数・受任件数・お客様アンケート満足度を有しているのは当事務所のみと思われます。</p>
					<h3>東京虎ノ門オフィスには、<strong class="underline">相続・遺言問題に精通した弁護士と上級相続アドバイザーが常駐</strong></h3>
					<p>東京虎ノ門オフィスには、『相続・遺言のポイント５０』執筆者の一人である岡篤志弁護士が支部長として、そして上級相続アドバイザーである黒田文が常駐しているので、すぐにでも相続・遺言問題のご相談が可能です。</p>
					<div class="row align-middle">
						<div class="column small-2 large-3"><img class="lazyload" data-src="https://i2.wp.com/www.law-yamashita.com/wp-content/uploads/2016/12/oka-atsushi.jpg?w=300&ssl=1" alt="東京虎ノ門オフィスの支部長 - 岡篤志"></div>
						<div class="column small-10 large-9">
							<h4><a class="js--modal-button" data-ajax-modal="https://www.law-yamashita.com/wp-json/wp/v2/members/4090" data-toggle="js--ajax-modal">岡篤志<span class="title--small title--block">東京支部長 / 弁護士</span></a></h4>
						</div>
						<div class="column small-2 large-3"><img class="lazyload" data-src="//i2.wp.com/www.law-yamashita.com/wp-content/uploads/2017/11/4b2ed4f50847d0b4fd3ce94c9122894b.jpg?w=300&ssl=1" alt="東京虎ノ門オフィス常勤の相続アドバイザー黒田文"></div>
						<div class="column small-10 large-9">
							<h4><a class="js--modal-button" data-ajax-modal="https://www.law-yamashita.com/wp-json/wp/v2/members/5383" data-toggle="js--ajax-modal">黒田文<span class="title--small title--block">上級相続アドバイザー</span></a></h4>
						</div>
					</div>
					<h3>広島近郊の相続・遺言問題を<br>東京にいながら相談可能！</h3>
					<ul>
						<li>広島の実家で父親と同居していた兄弟が、遺産分割に応じようとしない。</li>
						<li>広島にいる親の相続対策を考えておきたい。</li>
						<li>遺産分割しないまま長年経過してしまった広島にある不動産をどうにかしたい。</li>
					</ul>
					<p>広島の法律事務所として東京に支部を持つ事務所は<u>山下江法律事務所が初めて</u>です。<strong class="underline">東京在住の方の相続相談で、対象物件が広島にあるので広島の弁護士に依頼したい</strong>という期待に応えるような法律事務所が広島には今までありませんでした。</p>
				</div>
				<div class="contents--section contents--section__pickup">
					<div class="row text-center">
						<div class="pickup--background column small-12 medium-6">
							<h3><img src="//hiroshima-sozoku.com/wp-content/themes/ym--sozoku/assets/img/TtlSDTop2_1.jpg" alt="相続の基礎知識"></h3>
							<ul class="pickup--list text-left">
								<li><a href="<?php echo get_page_link( '6309' ); ?>"><?php echo get_the_title( '6309' ); ?></a></li>
								<li><a href="<?php echo get_page_link( '6311' ); ?>"><?php echo get_the_title( '6311' ); ?></a></li>
								<li><a href="<?php echo get_page_link( '6313' ); ?>"><?php echo get_the_title( '6313' ); ?></a></li>
								<li><a href="<?php echo get_page_link( '6315' ); ?>"><?php echo get_the_title( '6315' ); ?></a></li>
								<li><a href="<?php echo get_page_link( '6317' ); ?>"><?php echo get_the_title( '6317' ); ?></a></li>
							</ul>
						</div>
						<div class="pickup--background column small-12 medium-6">
							<h3><img src="//hiroshima-sozoku.com/wp-content/themes/ym--sozoku/assets/img/TtlSDTop2_2.jpg" alt="遺産分割協議"></h3>
							<ul class="pickup--list text-left">
								<li><a href="<?php echo get_page_link( '6362' ); ?>"><?php echo get_the_title( '6362' ); ?></a></li>
								<li><a href="<?php echo get_page_link( '6368' ); ?>"><?php echo get_the_title( '6368' ); ?></a></li>
								<li><a href="<?php echo get_page_link( '6317' ); ?>"><?php echo get_the_title( '6317' ); ?></a></li>
								<li><a href="<?php echo get_page_link( '6315' ); ?>"><?php echo get_the_title( '6315' ); ?></a></li>
							</ul>
						</div>
						<div class="pickup--background column small-12 medium-6">
							<h3><img src="//hiroshima-sozoku.com/wp-content/themes/ym--sozoku/assets/img/TtlSDTop2_3.jpg" alt="遺留分・寄与分"></h3>
							<ul class="pickup--list text-left">
								<li><a href="<?php echo get_page_link( '6372' ); ?>"><?php echo get_the_title( '6372' ); ?></a></li>
								<li><a href="<?php echo get_page_link( '6376' ); ?>"><?php echo get_the_title( '6376' ); ?></a></li>
								<li><a href="<?php echo get_page_link( '6374' ); ?>"><?php echo get_the_title( '6374' ); ?></a></li>
								<li><a href="<?php echo get_page_link( '6378' ); ?>"><?php echo get_the_title( '6378' ); ?></a></li>
								<li><a href="<?php echo get_page_link( '6331' ); ?>"><?php echo get_the_title( '6331' ); ?></a></li>
							</ul>
						</div>
						<div class="pickup--background column small-12 medium-6">
							<h3><img src="//hiroshima-sozoku.com/wp-content/themes/ym--sozoku/assets/img/TtlSDTop2_4.jpg" alt="遺言書"></h3>
							<ul class="pickup--list text-left">
								<li><a href="<?php echo get_page_link( '6380' ); ?>"><?php echo get_the_title( '6380' ); ?></a></li>
								<li><a href="<?php echo get_page_link( '6387' ); ?>"><?php echo get_the_title( '6387' ); ?></a></li>
								<li><a href="<?php echo get_page_link( '6385' ); ?>"><?php echo get_the_title( '6385' ); ?></a></li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="column small-4 text-center"><a href="<?php echo get_page_link( '6070' ); ?>"><img src="//hiroshima-sozoku.com/wp-content/themes/ym--sozoku/assets/img/ImgTop2.jpg';?>" alt="<?php echo get_the_title( '6070' ); ?>"></a></div>
						<div class="column small-4 text-center"><a href="<?php echo get_page_link( '6256' ); ?>"><img src="//hiroshima-sozoku.com/wp-content/themes/ym--sozoku/assets/img/ImgTop3.jpg';?>" alt="<?php echo get_the_title( '6256' ); ?>"></a></div>
						<div class="column small-4 text-center"><a href="<?php echo get_page_link( '5492' ); ?>"><img src="//hiroshima-sozoku.com/wp-content/themes/ym--sozoku/assets/img/ImgTop4.jpg';?>" alt="<?php echo get_the_title( '5492' ); ?>"></a></div>
					</div>
				</div>

				<p class="text-center contents--section_button" style="margin-top: 2rem"><a href="<?php echo get_page_link( '6295' ); ?>" class="button large"><?php NID_SVG::icon( 'list', array() ); ?>相続の基礎知識の一覧ページ</a></p>


				<div class="contents--section contents--section__point">
					<h2>山下江法律事務所の相続の３つのポイント</h2>
					<h3>メリット1 相続手続の専門家が直接お話をお伺いします。</h3>
					<p>当事務所では、相続手続きのご相談において、専門的な知識を備えたNPO法人相続アドバイザー協議会認定の相続アドバイザー・上級アドバイザーが承ります。</p>
					<h3>メリット2  相続手続から、相続争いまで、すべてに対応できます。</h3>
					<p>「争いはないけど、複雑な相続手続をどう進めて良いか分からない」「自分がしなければならない手続きがどれか分からない」という相談から、「親族ともめてし まったので解決したい」という相談まで、相続に関することなら何でも対応することができます。所内には弁護士の他、相続アドバイザー・上級アドバイザーが 在籍しており、税理士、司法書士、行政書士などとも連携をしていますので、速やかに相続手続きも行うことができます。</p>
					<h3>メリット3 広島最大級の法律事務所</h3>
					<p>当事務所は士業事務所に良く見られる個人事務所ではなく、所員総勢38名の広島最大級の法律事務所です。総合力と機動力は地域ナンバーワンと自負しております。実績多数の当法律事務所に、是非ご相談ください。</p>
					<h3>相続アドバイザー・上級アドバイザーによる相談も、無料で承っています</h3>
					<p>・弁護士に相談するのは敷居が高い<br>・ちょっとだけ教えてもらいたいことがある<br>と思われる方は、相続アドバイザーにお気軽にお電話ください。</p>

					<p class="text-center"><a href="https://www.law-yamashita.com/reserve" target="_blank"><img src="//tokyo.law-yamashita.com/wp-content/themes/ym--tokyo/assets/img/banner-01--tokyo.png" alt="東京の相続・遺言相談は虎ノ門駅すぐの山下江法律事務所へ"></a></p>
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
					<dt><span class="label secondary"><?php echo get_the_date( 'Y-m-d' ); ?></span>　<?php the_category( '　' ); ?></dt>
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
	<?php get_template_part( './elements/fp--access' ); ?>
</main>

<?php get_footer(); ?>
