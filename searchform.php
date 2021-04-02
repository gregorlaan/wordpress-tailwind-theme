<form id="searchform" class="flex flex-wrap" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="text" class="search-field p-3 border-2 border-gray-100 w-2/3" name="s" placeholder="Search" value="<?php echo get_search_query(); ?>">
    <input type="submit" class="bg-gray-100 p-3 text-gray-400 w-1/3" value="Search">
</form>