<?php
	// Front Page Slider
	$slides_args = array(
		'post_type' => 'dtdsh-slides',
		'posts_per_page' => -1,
		'post_status' => 'publish'
	);
	$slider = new WP_Query( $slides_args );
?>
	<section class="fp--topheader">
		<div class="row align-middle">
			<div class="column small-12 medium-6 slider--wrapper">
				<div id="js--top-slider" class="slick-slider">
					<?php
				if ( $slider->have_posts() ) :
					while ( $slider->have_posts() ) :
						$slider->the_post();
							$img_id = get_post_thumbnail_id();
							$thumb = wp_get_attachment_image_src( $img_id, 'full' );
							$img = $thumb[0];
							$width = $thumb[1];
							$height = $thumb[2];
							$link_src = get_post_meta( $id, 'slider_link', true );
							$link_title = ( get_post_meta( $id, 'slider_link_title', true ) ) ? get_post_meta( $id, 'slider_link_title', true ) : get_the_title();
				?>
						<article class="slick-slide slide--item card">
							<div class="card--img">
								<img src="<?php echo $img; ?>" alt="<?php the_title(); ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>">
							</div>
							<div class="card--content">
								<p class="card--title">
									<?php the_title(); ?>
								</p>
								<p>
									<?php
							if ( '' !== $post->post_content ) {
								the_content();
							} else {
								echo "<a href=\"$link_src\" title=\"$link_title\" class=\"button\">$link_title</a>";
							}
						?>
								</p>
							</div>
						</article>
						<?php
						endwhile;
					endif;
				?>
						<div id="slide--button"></div>
				</div>
			</div>
			<div class="column small-12 medium-6 copy--top text-center">
				<h1 class="copy--title">山下江法律事務所
					<br>東京虎ノ門オフィス</h1>
					<div class="copy--desc">
					<p>相談件数20,000件以上。
						<small>※</small>
						<br>選ぶなら広島最大級。
						<br>交通事故、相続・遺言、借金・過払いは<br>
						<strong style="background:yellow;color:red">初回相談無料</strong>
					</p>
					<small>※　2018年12月末時点（事務所総数）</small>
				</div>
				<p class="topheader--button">
					<a href="tel:0120783409" title="電話する" class="button hollow expanded">
						<img src="//www.law-yamashita.com/wp-content/themes/ym-home/assets/img/header-tel.png" alt="">
					</a>
				</p>
				<p class="topheader--button">
					<a href="https://www.law-yamashita.com/reserve" class="button hollow expanded" title="Web予約" target="_blank">
						<?php NID_SVG::icon( 'pc', array( 'class' => 'button--icon' ), 'Web予約' ); ?>Web予約</a>
				</p>
				<p class="topheader--button button-group expanded stacked-for-small">
					<a href="<?php echo get_page_link( '6226' ); ?>" class="button hollow expanded" title="取扱範囲">取扱範囲</a>
					<a href="#front--news" class="button hollow expanded" title="お知らせ">お知らせ</a>
				</p>
				<p class="topheader--button">
					<a href="https://www.law-yamashita.com" target="_blank" class="button hollow expanded" title="メインサイトを見る">
						<?php NID_SVG::icon( 'home', array( 'class' => 'button--icon' ), 'メインサイトを見る' ); ?>メインサイトを見る</a>
				</p>
			</div>
		</div>
	</section>
