<?php namespace ProcessWire;

?>

<!-- HEADING -->
<h1 id='content-head'><?=icon(
    'image',
    [  'txt' => page()->get('headline|title'),
    'width' => 50,
    'height' => 50,
    'stroke' => 1,
    'color' => '#6a7780'
    ]
)?></h1>

<div id='content-body' pw-prepend>

<div class="my-gallery grid" itemscope itemtype="http://schema.org/ImageGallery">

<?php if (page()->images) :
    foreach (page()->images as $img) :
        $img_size = $img->width('1200');
        $width = $img_size->width;
        $height = $img_size->height;?>

  <figure class='col-4_sm-12' itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">

    <a href="<?=$img->url?>" itemprop="contentUrl" data-size="<?=$width . 'x' . $height?>">

        <img src="<?=$img->url?>" itemprop="thumbnail" alt="<?=$img->description?>" />

    </a>

        <?php if ($img->description) :?>
    <figcaption itemprop="<?=$img->description?>">

        <blockquote>

            <h3><?=$img->description?></h3>

        </blockquote>

    </figcaption>

        <?php endif; ?>

</figure>

    <?php endforeach;
endif;?>   

</div><!-- /.my-gallery -->

<?php wireIncludeFile("inc/photoswipe/_default-interface");?>

</div><!-- /#content-body -->

<aside id="sidebar" pw-append>

<?php // Show Home page Children
    echo pageChildren(
        page()->parent,
        [
        'limit'=> 12,
        'random' => true,
        'txt' => page()->ts['moreGallery']
        ]
    );
    ?>

</aside>

<style id='head-style' pw-append>

.my-gallery {
  width: 100%;
  /* float: left; */
}
.my-gallery img {
  width: 100%;
  height: auto;
}
.my-gallery figure {
  margin: 0;  
  /* display: block;
  float: left; */
  /* margin: 0 5px 5px 0; */
  /* width: 150px; */
}
.my-gallery figcaption {
  display: none;
}

    /* Smaller than mobile screen */
    @media (max-width: 48rem) {
      
    .my-gallery {
        display: block; 
      }

    }

</style>

<pw-region id="bottom-region" pw-append>

<?php wireIncludeFile("inc/photoswipe/_photoswipe-script");?>

</pw-region>