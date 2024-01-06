<?php
$title_intro = get_sub_field('title_and_intro');
$button_text = get_sub_field('button_text');
$button_link = get_sub_field('button_link');
$image = get_sub_field('image');

?><div class="why-section">
    <div class="container-custom flex">
        <div class="column">
        <?php echo $title_intro;?>
        <?
    if(have_rows('list_items')) {
        ?><div class="list-items-container"><?php
        while(have_rows('list_items')) {
            the_row();
            $icon = get_sub_field('icon');
            $text = get_sub_field('text');
            ?>
                <div class="list-item">
                    <img src="<?php echo $icon['url'];?>" alt="">
                    <div class="text">
                        <?php echo $text;?>
                    </div>
                </div>
            <?
        }
        ?></div><?php
    }
?>
        </div>
<div class="rotate-shape">
    <img class="shape" src="<?php echo $image['url'];?>" alt = <?php echo $image['alt'];?>/>
    <img class="pink-rotate" src="/wp-content/uploads/2023/11/pink_circle-1.png" alt=""/>
</div>

<div class="column">
</div>

</div>
</div>