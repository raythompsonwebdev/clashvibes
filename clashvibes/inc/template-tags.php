<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package clashvibes
 */

<<<<<<< HEAD
if (! function_exists('clashvibes_posted_on')) :
    /**
     * Prints HTML with meta information for the current post-date/time.
     */
    function clashvibes_posted_on()
    {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        if (get_the_time('U') !== get_the_modified_time('U')) {
            $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time> - Updated:<time class="updated" datetime="%3$s">%4$s</time>';
        }

        $time_string = sprintf(
            $time_string,
            esc_attr(get_the_date('c')),
            esc_html(get_the_date()),
            esc_attr(get_the_modified_date('c')),
            esc_html(get_the_modified_date())
        );

        $posted_on = sprintf(
            /* translators: %s: post date. */
            esc_html_x('Posted on : %s', 'post date', 'clashvibes'),
            '<a href="' . esc_url(get_permalink()) . '" rel="bookmark">' . $time_string . '</a>'
        );

        echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.
    }
endif;

if (! function_exists('clashvibes_posted_by')) :
    /**
     * Prints HTML with meta information for the current author.
     */
    function clashvibes_posted_by()
    {
        $byline = sprintf(
            /* translators: %s: post author. */
            esc_html_x('by : %s', 'post author', 'clashvibes'),
            '<span class="author vcard"><a class="url fn n" href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a></span>'
        );

        echo '<span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.
    }
endif;

if (! function_exists('clashvibes_entry_footer')) :
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
                printf('<span class="cat-links">' . esc_html__('Posted in %1$s', 'clashvibes') . '</span>', $categories_list); // WPCS: XSS OK.
            }

            /* translators: used between list items, there is a space after the comma */
            $tags_list = get_the_tag_list('', esc_html_x(', ', 'list item separator', 'clashvibes'));
            if ($tags_list) {
                /* translators: 1: list of tags. */
                printf('<span class="tags-links">' . esc_html__('Tagged %1$s', 'clashvibes') . '</span>', $tags_list); // WPCS: XSS OK.
            }
        }

        if (! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() )) {
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
                    get_the_title()
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
                get_the_title()
            ),
            '<span class="edit-link">',
            '</span>'
        );
    }
endif;

if (! function_exists('clashvibes_post_thumbnail')) :
    /**
     * Displays an optional post thumbnail.
     *
     * Wraps the post thumbnail in an anchor element on index views, or a div
     * element when on single views.
     */
    function clashvibes_post_thumbnail()
    {
        if (post_password_required() || is_attachment() || ! has_post_thumbnail()) {
            return;
        }

        if (is_singular()) :
        ?>

            <figure class="thumb">
            <?php the_post_thumbnail('featured-image'); ?>
        </figure><!-- .post-thumbnail -->

        <?php else : ?>
        <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
            <?php
                the_post_thumbnail('post-thumbnail', array(
                    'alt' => the_title_attribute(array(
                        'echo' => false,
                    )),
                ));
            ?>
        </a>

        <?php endif; // End is_singular().
    }
=======
if ( ! function_exists( 'clashvibes_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function clashvibes_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time> - Updated:<time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( 'Posted on %s', 'post date', 'clashvibes' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'clashvibes_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function clashvibes_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'clashvibes' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'clashvibes_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function clashvibes_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'clashvibes' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'clashvibes' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'clashvibes' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'clashvibes' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'clashvibes' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'clashvibes' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

if ( ! function_exists( 'clashvibes_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function clashvibes_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
		?>

			<figure class="thumb">
			<?php the_post_thumbnail('featured-image'); ?>
		</figure><!-- .post-thumbnail -->

		<?php else : ?>

		<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
			<?php
				the_post_thumbnail( 'post-thumbnail', array(
					'alt' => the_title_attribute( array(
						'echo' => false,
					) ),
				) );
			?>
		</a>

		<?php endif; // End is_singular().
	}
>>>>>>> f8ccbb8c921384d962621bc9b756e4c57c234357
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
<<<<<<< HEAD
function raythompsonwebdev_com_categorized_blog()
{
    if (false === ( $all_the_cool_cats = get_transient('raythompsonwebdev_com_categories') )) {
=======
function raythompsonwebdev_com_categorized_blog() 
{
    if (false === ( $all_the_cool_cats = get_transient('raythompsonwebdev_com_categories') ) ) {
>>>>>>> f8ccbb8c921384d962621bc9b756e4c57c234357
        // Create an array of all the categories that are attached to posts.
        $all_the_cool_cats = get_categories(
            array(
            'fields'     => 'ids',
            'hide_empty' => 1,
            // We only need to know if there is more than one category.
            'number'     => 2,
<<<<<<< HEAD
            )
=======
            ) 
>>>>>>> f8ccbb8c921384d962621bc9b756e4c57c234357
        );
        // Count the number of categories that are attached to the posts.
        $all_the_cool_cats = count($all_the_cool_cats);
        set_transient('raythompsonwebdev_com_categories', $all_the_cool_cats);
    }
<<<<<<< HEAD
    if ($all_the_cool_cats > 1) {
=======
    if ($all_the_cool_cats > 1 ) {
>>>>>>> f8ccbb8c921384d962621bc9b756e4c57c234357
        // This blog has more than 1 category so raythompsonwebdev_com_categorized_blog should return true.
        return true;
    } else {
        // This blog has only 1 category so raythompsonwebdev_com_categorized_blog should return false.
        return false;
    }
}
/**
 * Flush out the transients used in raythompsonwebdev_com_categorized_blog.
 */
<<<<<<< HEAD
function raythompsonwebdev_com_category_transient_flusher()
{
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
=======
function raythompsonwebdev_com_category_transient_flusher() 
{
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
>>>>>>> f8ccbb8c921384d962621bc9b756e4c57c234357
        return;
    }
    // Like, beat it. Dig?
    delete_transient('raythompsonwebdev_com_categories');
}
add_action('edit_category', 'raythompsonwebdev_com_category_transient_flusher');
<<<<<<< HEAD
add_action('save_post', 'raythompsonwebdev_com_category_transient_flusher');
=======
add_action('save_post',     'raythompsonwebdev_com_category_transient_flusher');
>>>>>>> f8ccbb8c921384d962621bc9b756e4c57c234357
/**
 * Utility function to check if a gravatar exists for a given email or id
 *
 * @param  int|string|object $id_or_email A user ID,  email address, or comment object
 * @return bool if the gravatar exists or not
 * Original found at https://gist.github.com/justinph/5197810
 */
<<<<<<< HEAD
function raythompsonwebdev_com_validate_gravatar($id_or_email)
{
    //id or email code borrowed from wp-includes/pluggable.php
    $email = '';
    if (is_numeric($id_or_email)) {
        $id = (int) $id_or_email;
        $user = get_userdata($id);
        if ($user) {
            $email = $user->user_email;
        }
    } elseif (is_object($id_or_email)) {
        // No avatar for pingbacks or trackbacks
        $allowed_comment_types = apply_filters('get_avatar_comment_types', array( 'comment' ));
        if (! empty($id_or_email->comment_type) && ! in_array($id_or_email->comment_type, (array) $allowed_comment_types)) {
            return false;
        }
        if (!empty($id_or_email->user_id)) {
=======
function raythompsonwebdev_com_validate_gravatar($id_or_email) 
{
    //id or email code borrowed from wp-includes/pluggable.php
    $email = '';
    if (is_numeric($id_or_email) ) {
        $id = (int) $id_or_email;
        $user = get_userdata($id);
        if ($user ) {
            $email = $user->user_email;
        }
    } elseif (is_object($id_or_email) ) {
        // No avatar for pingbacks or trackbacks
        $allowed_comment_types = apply_filters('get_avatar_comment_types', array( 'comment' ));
        if (! empty($id_or_email->comment_type) && ! in_array($id_or_email->comment_type, (array) $allowed_comment_types) ) {
            return false;
        }
        if (!empty($id_or_email->user_id) ) {
>>>>>>> f8ccbb8c921384d962621bc9b756e4c57c234357
            $id = (int) $id_or_email->user_id;
            $user = get_userdata($id);
            if ($user) {
                $email = $user->user_email;
            }
<<<<<<< HEAD
        } elseif (!empty($id_or_email->comment_author_email)) {
=======
        } elseif (!empty($id_or_email->comment_author_email) ) {
>>>>>>> f8ccbb8c921384d962621bc9b756e4c57c234357
            $email = $id_or_email->comment_author_email;
        }
    } else {
        $email = $id_or_email;
    }
    $hashkey = md5(strtolower(trim($email)));
    $uri = 'http://www.gravatar.com/avatar/' . $hashkey . '?d=404';
    $data = wp_cache_get($hashkey);
    if (false === $data) {
        $response = wp_remote_head($uri);
<<<<<<< HEAD
        if (is_wp_error($response)) {
=======
        if(is_wp_error($response) ) {
>>>>>>> f8ccbb8c921384d962621bc9b756e4c57c234357
            $data = 'not200';
        } else {
            $data = $response['response']['code'];
        }
        wp_cache_set($hashkey, $data, $group = '', $expire = 60*5);
<<<<<<< HEAD
    }
=======
    }        
>>>>>>> f8ccbb8c921384d962621bc9b756e4c57c234357
    if ($data == '200') {
        return true;
    } else {
        return false;
    }
}

