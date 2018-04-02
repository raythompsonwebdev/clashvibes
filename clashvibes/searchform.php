<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <div>
            <label>
                    <span class="screen-reader-text">
        <?php echo _x('Search', 'label', 'raythompsonwebdev-com'); ?>
                        </span>

            
            <input type="search" class="search-field"  value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x('Search', 'label', 'raythompsonwebdev-com'); ?>" /></label>
            <input type="submit" class="search-submit" value="Find" />
    </div>
</form>