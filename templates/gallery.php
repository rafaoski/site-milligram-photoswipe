<?php namespace ProcessWire;
// Get Page children
$items = page()->children('limit=12');
// No Found
if(!count($items)) : echo "<h1 id='content-head'>" . page()->ts['noFound'] . "</h1>";
else:?>
<!-- HEADING -->
<h1 id='content-head'><?=icon('activity',
[  'txt' => page()->get('headline|title'),
   'width' => 50,
   'height' => 50,
   'stroke' => 1,
   'color' => '#6a7780'
])?></h1>
<?php endif; ?>

<div id='content-body' class="gallery grid" pw-append>

<?php foreach ($items as $item): ?>

<div class='col-6_sm-12'>

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

</div>

<?php endforeach;
// https://processwire.com/api/modules/markup-pager-nav/
echo basicPagination($items, 'container grid');?>

</div><!-- /#content-body -->

<aside id="sidebar" pw-append>

<?php // Show Home page Children
    echo pageChildren(pages(1),
    [
        'limit'=> 12,
    //  'random' => true
    ]
);
?>

</aside>