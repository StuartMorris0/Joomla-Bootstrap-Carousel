<?php

#@license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL

defined('_JEXEC') or die;

?>

<?php if($params->get('carousel_container') == 1) : ?>
    <div class="container">
<?php endif;?>

<div <?php if ($params->get('carousel_id') != ''): ?>id="<?php echo $params->get('carousel_id')?>"<?php endif;?> class="carousel slide" data-ride="carousel">
  
  <!-- Indicators -->
  <?php if ($params->get('controlNav') == 1): ?>
    <ol class="carousel-indicators">
      <?php
        $count = 0;
        foreach($listofimages as $item){
          $lidetails = '<li data-target= "';
          $lidetails .= '#'.$params->get('carousel_id').'" data-slide-to="'.$count.'"';
          if ($count == 0) {
            $lidetails .= ' class="active">';
          } else {
            $lidetails .= '>';
          }
          $lidetails .= '</li>';
          echo $lidetails;
          $count ++;
        }
      ?>
    </ol>
  <?php endif;?>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php
      foreach($listofimages as $item){
        echo $item;       
      }
    ?> 
  </div>

  <!-- Controls -->
<?php if ($params->get('directionNav') == 1): ?>
  <a class="left carousel-control" <?php if ($params->get('carousel_id') != ''): ?>href="#<?php echo $params->get('carousel_id')?>"<?php endif;?> role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" <?php if ($params->get('carousel_id') != ''): ?>href="#<?php echo $params->get('carousel_id')?>"<?php endif;?> role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
<?php endif;?>
</div>

<?php if($params->get('carousel_container') == 1) : ?>
    </div>
<?php endif;?>

<script type="text/javascript" charset="utf-8">
    jQuery('.carousel').carousel({
      <?php if($params->get('slidespeed')){ echo "interval: ".$params->get('slidespeed'). "" ;} else { ?> interval: 5000, <?php } ?>
    });
</script>