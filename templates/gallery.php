<?php namespace ProcessWire;
// Get Page children
$items = page()->children('limit=12');?>

<!-- HEADING -->
<h1 id='content-head'><?=icon('activity',
[  'txt' => page()->get('headline|title'),
   'width' => 50,
   'height' => 50,
   'stroke' => 1,
   'color' => '#6a7780'
]
)?></h1>

<div id='content-body' class="news grid" pw-append>

<?php foreach ($items as $item): ?>

<article class='blog-item col-6_sm-12'>

<?=icon('image',
[
    'txt' => $item->title,
    'url' => $item->url,
    'html_el' => 'h3',
    'width' => 40,
    'height' => 40,
    'stroke' => 1,
    'color' => '#6a7780'
]
)?>

<a href="<?=$item->url?>">

<?=getImage($item,'small');?>

</a>

<p><?=$item->render('body','txt-small')?></p>

</article>

<?php endforeach;
// https://processwire.com/api/modules/markup-pager-nav/
echo basicPagination($items, 'container grid');?>

</div><!-- /#content-body -->