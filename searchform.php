<form action="<?php echo home_url('/'); ?>" method="GET" id="searchform">
    <input type="text" name="s" id="s"
           value="<?php echo get_search_query(); ?>" />
    <input type="submit" title="<?php _e('Search', 'ceks'); ?>"
            value="<?php _e('GO', 'ceks'); ?>" />
</form>
