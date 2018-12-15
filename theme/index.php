<?php
if ( is_archive() || is_single() || is_home() ) {
	$title = 'お知らせ';
} else {
	$title = get_the_title();
}

	get_header();
?>
<main>
	<header class="pageheader">
		<div class="row">
			<div class="column">
				<h1 class="pageheader--title"><?php echo $title; ?></h1>
			</div>
		</div>
	</header>
	<?php NID_Crumbs::crumbs(); ?>
	<div class="row contents--wrap">
		<div class="column large-3 sidebar--wrap"><?php get_sidebar(); ?></div>
		<div class="sidenav--overlay js--sidenav--button"></div>
		<div class="column contents">
			<?php
				$isSozoku = false;
				if ( have_posts() ) {
					if ( is_page( 'service' ) ) {
						$page_id = '5';
						include locate_template( './templates/page.php' );
					} else if ( is_page( 'jiko' ) && 'service' === is_parent_slug() ) {
						$page_id = '1256';
						include locate_template( './templates/page.php' );
					} else if ( is_page( 'rikon' ) && 'service' === is_parent_slug() ) {
						$page_id = '1265';
						include locate_template( './templates/page.php' );
					} else if ( is_page( 'furin' ) && 'service' === is_parent_slug() ) {
						$page_id = '3359';
						include locate_template( './templates/page.php' );
					} else if ( is_page( 'after-support' ) && 'service' === is_parent_slug() ) {
						$page_id = '4121';
						include locate_template( './templates/page.php' );
					} else if ( is_page( 'sozoku' ) && 'service' === is_parent_slug() ) {
						while ( have_posts() ) : the_post();
							the_content();
						endwhile;
						$page_id = '1269';
						include locate_template( './templates/page.php' );
						while ( have_posts() ) : the_post();
							the_content();
						endwhile;
					} else if ( is_page( 'saimu' ) && 'service' === is_parent_slug() ) {
						$page_id = '1289';
						include locate_template( './templates/page.php' );
					} else if ( is_page( 'fudosan' ) && 'service' === is_parent_slug() ) {
						$page_id = '1274';
						include locate_template( './templates/page.php' );
					} else if ( is_page( 'overtime' ) && 'service' === is_parent_slug() ) {
						$page_id = '1282';
						include locate_template( './templates/page.php' );
					} else if ( is_page( 'rosai' ) && 'service' === is_parent_slug() ) {
						$page_id = '2512';
						include locate_template( './templates/page.php' );
					} else if ( is_page( 'medical' ) && 'service' === is_parent_slug() ) {
						$page_id = '1271';
						include locate_template( './templates/page.php' );
					} else if ( is_page( 'kigyo' ) && 'service' === is_parent_slug() ) {
						$page_id = '1435';
						include locate_template( './templates/page.php' );
					} else if ( is_page( 'hasan' ) && 'service' === is_parent_slug() ) {
						$page_id = '1287';
						include locate_template( './templates/page.php' );
					} else if ( is_page( 'keiji' ) && 'service' === is_parent_slug() ) {
						$page_id = '1279';
						include locate_template( './templates/page.php' );
					} else if ( is_page( 'civil' ) && 'service' === is_parent_slug() ) {
						$page_id = '2521';
						include locate_template( './templates/page.php' );
					} else if ( is_page( 'succession' ) && 'service' === is_parent_slug() ) {
						$page_id = '4618';
						include locate_template( './templates/page.php' );


					/**
					 * 相続の基礎知識
					 */
					} else if ( is_page( '6295' ) ) {
						$isSozoku = true;
						$page_id = '6373';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6297' ) ) {
						$isSozoku = true;
						$page_id = '6560';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6300' ) ) {
						$isSozoku = true;
						$page_id = '6567';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6302' ) ) {
						$isSozoku = true;
						$page_id = '6713';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6305' ) ) {
						$isSozoku = true;
						$page_id = '6562';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6307' ) ) {
						$isSozoku = true;
						$page_id = '6414';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6309' ) ) {
						$isSozoku = true;
						$page_id = '6417';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6311' ) ) {
						$isSozoku = true;
						$page_id = '6419';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6313' ) ) {
						$isSozoku = true;
						$page_id = '6718';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6315' ) ) {
						$isSozoku = true;
						$page_id = '6427';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6317' ) ) {
						$isSozoku = true;
						$page_id = '6422';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6319' ) ) {
						$isSozoku = true;
						$page_id = '6409';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6321' ) ) {
						$isSozoku = true;
						$page_id = '6539';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6323' ) ) {
						$isSozoku = true;
						$page_id = '6541';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6325' ) ) {
						$isSozoku = true;
						$page_id = '6543';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6327' ) ) {
						$isSozoku = true;
						$page_id = '6547';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6329' ) ) {
						$isSozoku = true;
						$page_id = '6545';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6331' ) ) {
						$isSozoku = true;
						$page_id = '6484';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6333' ) ) {
						$isSozoku = true;
						$page_id = '6488';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6335' ) ) {
						$isSozoku = true;
						$page_id = '6486';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6337' ) ) {
						$isSozoku = true;
						$page_id = '6717';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6339' ) ) {
						$isSozoku = true;
						$page_id = '6446';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6341' ) ) {
						$isSozoku = true;
						$page_id = '6438';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6343' ) ) {
						$isSozoku = true;
						$page_id = '6440';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6345' ) ) {
						$isSozoku = true;
						$page_id = '6496';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6348' ) ) {
						$isSozoku = true;
						$page_id = '6500';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6350' ) ) {
						$isSozoku = true;
						$page_id = '6498';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6352' ) ) {
						$isSozoku = true;
						$page_id = '6593';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6354' ) ) {
						$isSozoku = true;
						$page_id = '6507';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6356' ) ) {
						$isSozoku = true;
						$page_id = '6514';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6358' ) ) {
						$isSozoku = true;
						$page_id = '6511';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6360' ) ) {
						$isSozoku = true;
						$page_id = '6509';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6362' ) ) {
						$isSozoku = true;
						$page_id = '6436';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6364' ) ) {
						$isSozoku = true;
						$page_id = '6460';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6366' ) ) {
						$isSozoku = true;
						$page_id = '6454';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6368' ) ) {
						$isSozoku = true;
						$page_id = '6458';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6370' ) ) {
						$isSozoku = true;
						$page_id = '6456';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6372' ) ) {
						$isSozoku = true;
						$page_id = '6467';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6374' ) ) {
						$isSozoku = true;
						$page_id = '6473';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6376' ) ) {
						$isSozoku = true;
						$page_id = '6469';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6378' ) ) {
						$isSozoku = true;
						$page_id = '6475';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6380' ) ) {
						$isSozoku = true;
						$page_id = '6523';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6391' ) ) {
						$isSozoku = true;
						$page_id = '6525';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6382' ) ) {
						$isSozoku = true;
						$page_id = '6527';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6385' ) ) {
						$isSozoku = true;
						$page_id = '6535';
						include locate_template( './templates/page.php' );
					} else if ( is_page( '6387' ) ) {
						$isSozoku = true;
						$page_id = '6533';
						include locate_template( './templates/page.php' );
					


					} else if ( is_page( 'cases' ) || is_page( 'voice' ) ) {
						$is_type = ( is_page( 'cases' ) ) ? 'cases' : 'voice';
						include locate_template( './templates/page--cases-voice.php' );

					} else if ( is_page( 'members' ) ) {
						get_template_part( './templates/page--members' );

					} else if ( is_page( 'access-hiroshima' ) ) {
						$page_id = '281';
						include locate_template( './templates/page.php' );

					} else if ( is_page( 'firm' ) ) {
						$page_id = '151';
						include locate_template( './templates/page.php' );

					} else if ( is_page( 'dedication' ) ) {
						$page_id = '360';
						include locate_template( './templates/page.php' );

					} else if ( is_page( 'seminar' ) ) {
						$page_id = '3599';
						include locate_template( './templates/page.php' );

					} else if ( is_page( 'keizai-report' ) ) {
						$page_id = '5501';
						include locate_template( './templates/page.php' );

					} else if ( is_page( 'kairo' ) ) {
						get_template_part( './templates/page--kairo' );


					} else if ( is_page( 'fee' ) ) {
						$page_id = '459';
						include locate_template( './templates/page.php' );
					} else 	if ( is_page( 'jiko' ) && 'fee' === is_parent_slug() ) {
						$page_id = '3943';
						include locate_template( './templates/page.php' );
					} else if ( is_page( 'rikon' ) && 'fee' === is_parent_slug() ) {
						$page_id = '5068';
						include locate_template( './templates/page.php' );
					} else if ( is_page( 'sozoku' ) && 'fee' === is_parent_slug() ) {
						$page_id = '3507';
						include locate_template( './templates/page.php' );


					} else if ( is_page( 'flow' ) ) {
						$page_id = '423';
						include locate_template( './templates/page.php' );


					} else if ( is_singular( 'dtdsh-lp' ) ) {
						if ( is_single( 'komon' ) ) {
							get_template_part( './templates/lp/komon' );
						}

					} else if ( is_page() ) {
						while ( have_posts() ) : the_post();
							the_content();
						endwhile;


					} else {
						while ( have_posts() ) : the_post();
							get_template_part( './templates/content' );
						endwhile;
					}

				} else {
					echo '<h2 class="text-center">記事がありません。</h2>';
				}
			?>
		</div>
		<div class="column small-12"><?php NID_Pagination::pagination(); ?></div>
	</div>
</main>
<?php
	get_footer();
