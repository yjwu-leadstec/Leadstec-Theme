<section class="relative w-full">
    <div class="hidden md:flex w-full justify-center">
        <div class="w-full flex flex-col items-center py-16 lg:py-32 px-16" style="background-color: <?php echo get_field('two_cards')['card_one_color'] ?>;">
            <h3 class="max-w-sm text-gray-900 text-3xl capitalize text-center font-semibold mb-12 leading-snug"><?php echo get_field('two_cards')['card_one_heading'] ?></h3>
            <a href="<?php echo get_field('two_cards')['card_one_image'] ?>" data-lightbox="image-1" class="w-60 h-60 bg-white rounded-full bg-cover bg-no-repeat bg-center overflow-hidden group" style="background-image: url(<?php echo esc_url(get_field('two_cards')['card_one_image']) ?>)">
                <div class="w-full h-full flex justify-center items-center bg-zinc-900 text-white opacity-0 transition group-hover:opacity-100"><?php echo get_field('two_cards')['card_one_hover_text'] ?></div>
            </a>
        </div>
        <?php
        if(get_field('two_cards')['card_two_heading']){
        ?>
        <div class="w-full flex flex-col items-center py-16 lg:py-32 px-16" style="background-color: <?php echo get_field('two_cards')['card_two_color'] ?>;">
            <h3 class="max-w-sm text-gray-900 text-3xl capitalize text-center font-semibold mb-12 leading-snug"><?php echo get_field('two_cards')['card_two_heading'] ?></h3>
            <a href="<?php echo get_field('two_cards')['card_two_image'] ?>" data-lightbox="image-1" class="w-60 h-60 bg-white rounded-full bg-cover bg-no-repeat bg-center overflow-hidden group" style="background-image: url(<?php echo esc_url(get_field('two_cards')['card_two_image']) ?>)">
                <div class="w-full h-full flex justify-center items-center bg-zinc-900 text-white opacity-0 transition group-hover:opacity-100"><?php echo get_field('two_cards')['card_two_hover_text'] ?></div>
            </a>
        </div>
        <?php
        }
        ?>
    </div>
    <div class="block md:hidden w-full">
        <div id="slider-aem-cta" class="w-full my-slider">
            <div class="w-full flex flex-col items-center py-16 lg:py-32 px-16" style="background-color: <?php echo get_field('two_cards')['card_one_color'] ?>;">
                <h3 class="max-w-sm text-gray-900 text-3xl capitalize text-center font-semibold mb-12 leading-snug mx-auto"><?php echo get_field('two_cards')['card_one_heading'] ?></h3>
                <a href="<?php echo get_field('two_cards')['card_one_image'] ?>" data-lightbox="image-3" class="w-60 h-60 bg-white rounded-full mx-auto bg-cover bg-no-repeat bg-center" style="background-image: url(<?php echo esc_url(get_field('two_cards')['card_one_image']) ?>)"></a>
            </div>
            <div class="w-full flex flex-col items-center py-16 lg:py-32 px-16" style="background-color: <?php echo get_field('two_cards')['card_two_color'] ?>;">
                <h3 class="max-w-sm text-gray-900 text-3xl capitalize text-center font-semibold mb-12 leading-snug mx-auto"><?php echo get_field('two_cards')['card_two_heading'] ?></h3>
                <a href="<?php echo get_field('two_cards')['card_two_image'] ?>" data-lightbox="image-4" class="w-60 h-60 bg-white rounded-full mx-auto bg-cover bg-no-repeat bg-center" style="background-image: url(<?php echo esc_url(get_field('two_cards')['card_two_image']) ?>)"></a>
            </div>
        </div>
    </div>
</section>