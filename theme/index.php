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
					} else if ( is_page( 'sozoku' ) && 'service' === is_parent_slug() ) {
						$page_id = '1269';
						include locate_template( './templates/page.php' );
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
					


					} else if ( is_page( 'cases' ) || is_page( 'voice' ) ) {
						$is_type = ( is_page( 'cases' ) ) ? 'cases' : 'voice';
						include locate_template( './templates/page--cases-voice.php' );

					} else if ( is_page( 'members' ) ) {
						get_template_part( './templates/page--members' );

					} else if ( is_page( 'access' ) ) {
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
