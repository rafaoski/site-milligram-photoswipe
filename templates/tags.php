<?php namespace ProcessWire;

$tags = page()->children("limit=42");
// No Found
if (!count($tags)) {
    echo "<h1 id='content-head'>" . page()->ts['noFound'] . "</h1>";
}?>

<div id='content-body' pw-prepend>

<?php // Start Loop
foreach ($tags as $tag) {
// https://processwire.com/blog/posts/processwire-3.0.107-core-updates/
// get all visible pages referencing this page
    $count = count($tag->references());

// If tag has reference to pages
    if ($count != 0) {
        echo "<a class='button button-outline m-2'
           href='$tag->url'>
           $tag->title
           ( $count )
      </a>";
    }
}
 // Basic Pagination + custom CSS class 'grid'
 echo basicPagination($tags, 'container grid');?>

</div><!-- /#content-body -->

<aside id="sidebar" pw-append>

<?php wireIncludeFile("inc/_block-blog");?>

</aside>