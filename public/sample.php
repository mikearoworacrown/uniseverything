//Slider business
<?php
    $i = 0;
    foreach($results as $result){
        $active = '';
        if($i == 0){
            $active = 'active';
        }
?>
<li data-target="#featured" data-slide-to="<?= $i; ?>" class="<?= $active; ?>"></li>
<?php $i++;
    }
?>

//INSERT INTO `Sliders` (`id`, `image_path`) VALUES (1, 'bags_slide.png'),
//(2, 'sneakers_slide.png'), (3, 'shirt_slide.png'), (4, 'watch_slide.png'), (5, '2piece_slide.png');

<div class="carousel-inner">
    <?php
        $i = 0;
        foreach($results as $result){
            $active = '';
            if($i == 0){
                $active = 'active';
            }
    ?>
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo 'images/slides/'.$result['image_path']; ?>" alt="">
            </div>

            <?php $i++; 
        } ?>
</div>


.grid_sorting_button{
      font-size: 13px;
      padding-left: 20px;
      padding-right: 20px;
      max-width: 80px;
  }