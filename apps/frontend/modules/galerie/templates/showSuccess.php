<?php use_helper('Thumb') ?>
<?php use_helper('Events') ?>
<?php use_javascript('galery_photo_list.js'); ?>
<?php use_javascript('blueimp/jquery.blueimp-gallery.min.js'); ?>
<?php use_javascript('blueimp/blueimp-gallery-fullscreen.js'); ?>
<?php use_stylesheet('blueimp/blueimp-gallery.min.css');?>
<?php use_stylesheet('galerie_photo_list.css');?>

<!-- For the facebook like button on the sidebar-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=238586716159701";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<?php include_partial('galerie/header', array('galerie_photo' => $galerie_photo, 'fulldesc'=>True)) ?>

<?php if($isPhotographer): ?>
  <a class="btn btn-primary" href="<?php
    echo url_for('galerie/edit?id='.$galerie_photo->getId())
    ?>">Editer la galerie</a>
  &nbsp;
  <a class="btn btn-primary" href="<?php
    echo url_for('photo/new?id='.$galerie_photo->getId())
    ?>">Ajouter des photos</a>
<?php endif ?>
<hr />
<div class="row-fluid galery-photo-list">
  <ul class="thumbnails thumbfix">
    <?php foreach ($photos as $index=>$photo): ?>
        <li class="span3 thumb-container">
          <a
          class="thumbnail"
          data-photo-number="<?php echo $index ?>"
          title="<?php echo $photo->getTitle() ?>"
          data-photo-id="<?php echo $photo->getId() ?>"
          data-pass="<?php echo $photo->getPass() ?>"
          <?php if($isPhotographer) 
             echo 'data-edit-link="'.url_for('photo/edit?id='.$photo->getId()).'"' ?>
          data-permalink="<?php
          echo url_for('galerie/show?id='.$photo->getGaleriePhoto()->getId().
              '&photo='.$photo->getId().
              '&pass='.$photo->getPass()
              ,true); ?>"
          data-author="<?php echo $photo->getUser() ?>"
          href="<?php
                echo doThumb($photo->getImage(), 'galeries', array(
                'width' => 1600,
                'height' => 900
              ), 'scale'); 
          ?>">
            <?php include_partial('photo/photoThumbnail', array('photo' => $photo)); ?>
          </a>
        </li>   
    <?php endforeach;?>
  </ul>
</div>

<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls blueimp-gallery-fullscreen">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <div class="social-sidebar"></div>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>


<?php if($hotLinkedPhoto):?>
  <!-- Jump to pict if necessary (behavior when linking to a pict in gallery)-->
  <script>
  $(function(){
    setTimeout(
      function(){
        $('a[data-photo-id="<?php echo $hotLinkedPhoto ;?>"]').click();
      }
      ,1000)
  });
  </script>
<?php endif; ?>

<div class="fb-comments" data-width="500px" data-href="<?php
echo "http://google.com";
// echo url_for('galerie_photo_show', $galerie_photo);
 ?>" data-numposts="5" data-colorscheme="light"></div>