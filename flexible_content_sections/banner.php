<?php
$image = get_sub_field('image')["url"];
$image_alt = get_sub_field('image')["alt"];
$test = get_sub_field('image_test')["url"];
$subtitle = get_sub_field('subtitle');
$banner_text = get_sub_field('banner_text');
$button_text = get_sub_field('button_text');
$button_link = get_sub_field('button_link');
?><div class="banner-section section">
    <div class="container-custom">
        <div class="d-flex text-image-layout">
    <div class="col text-col d-flex align-items-center">
        <div class="text-container d-flex flex-column">
            <?if(!empty($subtitle)) {
                ?>
                <span class="subtitle"><?php echo $subtitle;?></span>
                <?
            }?>
            <?if(!empty($banner_text)) {
                echo $banner_text;
                if(!empty($button_text) && !empty($button_link)) {
                    ?>
                        <div class="button-container">
                            <a href="<?php echo $button_link;?>" class="button"><?php echo $button_text;?></a>
                        </div>
                    <?
                }

            }?>
    </div>
    </div>
    <div class="image-container col">
        <?if(!empty($image)) {
            ?>
            <img class="portrait" src="<?php echo $image;?>" alt = "<?php echo $image_alt;?>"/>
            <?
        }?>
    </div>
    
    </div>
    </div>
</div>