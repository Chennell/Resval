<form role="search" method="get" action="<?php echo home_url('/');?>">
    <input type="search" class="form-control" placeholder="Sök" value="<?php echo get_search_query()?>" name="s" title="Search">
    <input type="submit" class="search-submit" value="Sök">
</form>