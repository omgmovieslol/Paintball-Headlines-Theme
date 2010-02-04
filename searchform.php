<?php
	$page = $_SERVER['REQUEST_URI'];
	$page = explode("?", $page);
	$page = $page[0];
	$page = str_replace("/","",$page);
	$page = str_replace(".php","",$page);
	$page = $page ? $page : 'default'
?>

<?php if(!($page == "web-search")): ?>

<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
	<input type="submit" id="searchsubmit" value="Search" class="button" />
</form>

<?php else: ?>


<form action="http://paintballheadlines.com/web-search" id="cse-search-box">
  <div>
    <input type="hidden" name="cx" value="partner-pub-1633320757911200:wghn77-4td3" />
    <input type="hidden" name="cof" value="FORID:10" />
    <input type="hidden" name="ie" value="ISO-8859-1" />
    <input type="text" name="q" size="20" />
    <input type="submit" name="sa" value="Search" />
  </div>
</form>
<script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=cse-search-box&amp;lang=en"></script>

<?php endif; ?>