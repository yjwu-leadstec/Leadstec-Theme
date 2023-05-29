<section id="our-services-section" class="w-full flex justify-center mt-10 md:mt-20 overflow-hidden pb-20">
    <div class="w-[91%] max-w-none lg:max-w-[1112px] mx-auto">
        <div class="w-full px-2">
            <h2 class="capitalize text-[30px] md:text-[60px] text-[#1b1c1d] font-bold"><?php echo get_sub_field('heading'); ?></h2>
        </div>
        <div class="w-full py-5 md:py-10 flex justify-start items-stretch flex-wrap">
            <?php
                $clients = get_sub_field('clients');
                if( $clients ) {
                    foreach( $clients as $client ) {
            ?>
            <div class="w-4/12 md:w-3/12 lg:w-[20%] flex justify-center items-center p-9 lg:p-12">
                <a href="<?php echo $client['url']; ?>" class="w-full h-full">
                    <img class="w-full h-full max-w-full max-h-full object-contain" src="<?php echo esc_url($client['image']['url']); ?>" alt="<?php echo $client['image_alt_text']; ?>">
                </a>
            </div>
            <?php
                    }
                }
            ?>
        </div>
    </div>
</section>

