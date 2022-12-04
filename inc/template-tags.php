<?php

/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package clashvibes
 */

if (!function_exists('clashvibes_posted_on')) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function clashvibes_posted_on()
	{
		$clashvibes_time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

		$clashvibes_update_time_string = '<time class="updated" datetime="%3$s">Not updated</time>';

		if (get_the_time('U') !== get_the_modified_time('U')) {
			$clashvibes_time_string        = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
			$clashvibes_update_time_string = '<time class="updated" datetime="%3$s">%4$s</time>';
		}

		$clashvibes_time_string = sprintf(
			$clashvibes_time_string,
			esc_attr(get_the_date(DATE_W3C)),
			esc_html(get_the_date()),
			esc_attr(get_the_modified_date(DATE_W3C)),
			esc_html(get_the_modified_date())
		);

		$clashvibes_update_time_string = sprintf(
			$clashvibes_update_time_string,
			esc_attr(get_the_date(DATE_W3C)),
			esc_html(get_the_date()),
			esc_attr(get_the_modified_date(DATE_W3C)),
			esc_html(get_the_modified_date())
		);

		$clashvibes_posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x('Posted on:  %s', 'post date', 'clashvibes'),
			'<a href="' . esc_url(get_permalink()) . '" rel="bookmark">' . $clashvibes_time_string . '</a>'
		);

		$clashvibes_updated_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x('Updated:  %s', 'post date', 'clashvibes'),
			'<a href="' . esc_url(get_permalink()) . '" rel="bookmark">' . $clashvibes_update_time_string . '</a>'
		);

		$clashvibes_byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x('by:  %s', 'post author', 'clashvibes'),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a></span>'
		);

		$clashvibes_author_id = get_the_author_meta('ID');

		if (clashvibes_validate_gravatar($clashvibes_author_id)) {
			echo '<div class="meta-content has-avatar">';
			echo '<div class="author-avatar">' . get_avatar($clashvibes_author_id) . '</div>';
		} else {
			echo '<div class="meta-content">';
			// echo '<div class="no-author-avatar"> <img src="'. esc_url (get_template_directory_uri() . '/images/raythompsonwebdev.jpg') .'" /></div>';
		}
		echo '<span class="posted-on">' . $clashvibes_posted_on . '</span><span class="byline"> ' . $clashvibes_byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

		if (!post_password_required() && (comments_open() || get_comments_number())) {
			echo '<span class="comments-link">';
			comments_popup_link(esc_html__('Leave a comment', 'clashvibes'), esc_html__('1 Comment', 'clashvibes'), esc_html__('% Comments', 'clashvibes'));
			echo '</span>';
		}
		echo '<span class="updated-on">' . $clashvibes_updated_on . '</span>';
		echo '</div><!-- .meta-content -->';
	}
endif;

if (!function_exists('clashvibes_index_posted_on')) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function clashvibes_index_posted_on()
	{

		$clashvibes_index_time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if (get_the_time('U') !== get_the_modified_time('U')) {
			$clashvibes_index_time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>Updated: <time class="updated" datetime="%3$s">%4$s</time>';
		}
		$clashvibes_index_time_string = sprintf(
			$clashvibes_index_time_string,
			esc_attr(get_the_date(DATE_W3C)),
			esc_html(get_the_date()),
			esc_attr(get_the_modified_date(DATE_W3C)),
			esc_html(get_the_modified_date())
		);

		$clashvibes_index_posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x('Published %s', 'post date', 'clashvibes'),
			'<a href="' . esc_url(get_permalink()) . '" rel="bookmark">' . $clashvibes_index_time_string . '</a>'
		);

		$clashvibes_index_byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x('by %s', 'post author', 'clashvibes'),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a></span>'
		);

		echo '<div class="meta-content">';

		echo '<span class="byline">' . $clashvibes_index_byline . ' </span><span class="posted-on"> ' . $clashvibes_index_posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		if (!post_password_required() && (comments_open() || get_comments_number())) {
			echo '<span class="comments-link">';
			comments_popup_link(esc_html__('Leave a comment', 'clashvibes'), esc_html__('1 Comment', 'clashvibes'), esc_html__('% Comments', 'clashvibes'));
			echo '</span>';
		}
		echo '</div><!-- .meta-content -->';
	}

endif;

if (!function_exists('clashvibes_entry_footer')) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function clashvibes_entry_footer()
	{
		// Hide category and tag text for pages.
		if ('post' === get_post_type()) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list(esc_html__(', ', 'clashvibes'));
			if ($categories_list) {
				/* translators: 1: list of categories. */
				printf('<span class="cat-links">' . esc_html__('Posted in: %1$s', 'clashvibes') . '</span>', $categories_list); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list('', esc_html_x(', ', 'list item separator', 'clashvibes'));
			if ($tags_list) {
				/* translators: 1: list of tags. */
				printf('<span class="tags-links">' . esc_html__('Tagged: %1$s', 'clashvibes') . '</span>', $tags_list); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
		}

		if (!is_single() && !post_password_required() && (comments_open() || get_comments_number())) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__('Leave a Comment<span class="screen-reader-text"> on %s</span>', 'clashvibes'),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post(get_the_title())
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__('Edit <span class="screen-reader-text">%s</span>', 'clashvibes'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post(get_the_title())
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

if (!function_exists('clashvibes_post_thumbnail')) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function clashvibes_post_thumbnail()
	{
		if (post_password_required() || is_attachment() || !has_post_thumbnail()) {
			return;
		}

		if (is_singular()) :
?>

			<figure class="featured-image">
				<?php the_post_thumbnail('featured-image'); ?>
			</figure><!-- .post-thumbnail -->

		<?php else : ?>

			<a class="post-thumbnail" href="<?php echo esc_url(get_permalink()); ?>" aria-hidden="true" tabindex="-1">
				<?php
				the_post_thumbnail(
					'post-thumbnail',
					array(
						'alt' => the_title_attribute(
							array(
								'echo' => false,
							)
						),
					)
				);
				?>
			</a>

<?php
		endif; // End is_singular().
	}
endif;

if (!function_exists('clashvibes_validate_gravatar')) :
	/**
	 * Utility function to check if a gravatar exists for a given email or id
	 *
	 * @param  int|string|object $id_or_email A user ID,  email address, or comment object.
	 * @return bool if the gravatar exists or not.
	 * Original found at https://gist.github.com/justinph/5197810.
	 */
	function clashvibes_validate_gravatar($id_or_email)
	{

		// id or email code borrowed from wp-includes/pluggable.php.
		$email = 'ray_thomp@hushmail.com';
		if (is_numeric($id_or_email)) {
			$id   = (int) $id_or_email;
			$user = get_userdata($id);
			if ($user) {
				$email = $user->user_email;
			}
		} elseif (is_object($id_or_email)) {
			// No avatar for pingbacks or trackbacks.
			$allowed_comment_types = apply_filters('get_avatar_comment_types', array('comment'));
			if (!empty($id_or_email->comment_type) && !in_array($id_or_email->comment_type, (array) $allowed_comment_types, true)) {
				return false;
			}

			if (!empty($id_or_email->user_id)) {
				$id   = (int) $id_or_email->user_id;
				$user = get_userdata($id);
				if ($user) {
					$email = $user->user_email;
				}
			} elseif (!empty($id_or_email->comment_author_email)) {
				$email = $id_or_email->comment_author_email;
			}
		} else {
			$email = $id_or_email;
		}
		//https://s.gravatar.com/avatar/c17de9c12b09e2234e12651235f17008?s=80
		$hashkey = md5(strtolower(trim($email)));
		$uri     = 'http://www.gravatar.com/avatar/' . $hashkey . '?s=80';

		// $uri     = 'https://s.gravatar.com/avatar/c17de9c12b09e2234e12651235f17008?s=80';

		$data = wp_cache_get($hashkey);
		if (false === $data) {
			$response = wp_remote_head($uri);
			if (is_wp_error($response)) {
				$data = 'not200';
			} else {
				$data = $response['response']['code'];
			}
			wp_cache_set($hashkey, $data, $group = '', $expire = 60 * 5);
		}
		if ($data == '200') {
			return true;
		} else {
			return false;
		}
	}

endif;

if (!function_exists('wp_body_open')) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open()
	{
		do_action('wp_body_open');
	}
endif;

/**
 * Replaces the excerpt "Read More" text by a link.
 *
 * @param mixed $more variable added.
 * @return $more
 */
function clashvibes_new_excerpt_more($more)
{
	return '';
}
add_filter('excerpt_more', 'clashvibes_new_excerpt_more', 21);

/**
 * Replaces the excerpt more "Read More" text by a link.
 *
 * @param mixed $excerpt variable added.
 * @return $excerpt
 */
function clashvibes_the_excerpt_more_link($excerpt)
{
	$post = get_post();

	if (is_tax('video-category')) {

		$excerpt .= '<a class="read-more" href="' . get_permalink($post->ID) . '">Continue Watching: ' . get_the_title($post->ID) . '</a>';
		return $excerpt;
	} elseif (is_tax('audio-category')) {

		$excerpt .= '<a class="read-more" href="' . get_permalink($post->ID) . '">Continue Listening: ' . get_the_title($post->ID) . '</a>';
		return $excerpt;
	} else {
		$excerpt .= '<a class="read-more" href="' . get_permalink($post->ID) . '">continue reading: ' . get_the_title($post->ID) . '</a>';

		return $excerpt;
	}
}
add_filter('the_excerpt', 'clashvibes_the_excerpt_more_link', 21);
