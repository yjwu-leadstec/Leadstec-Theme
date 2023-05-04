<section id="our-cultures-section" class="w-full flex flex-col items-center justify-center overflow-hidden pt-[44px] md:pt-20 pb-40 lg:pb-28 bg-zinc-900 @container">
    <div class="container mb-10">
        <div class="w-full">
            <h2 class="px-3 capitalize text-[30px] md:text-[60px] text-white font-semibold"><?php echo get_field('our_cultures')['heading']; ?></h2>
        </div>
    </div>
    <div class="w-full">
        <?php
            $cultures = get_field('our_cultures')['cultures'];
            if( $cultures ) {
                foreach( $cultures as $culture ) {
        ?>
            <div class="relative w-full flex justify-center group transition duration-300 hover:bg-white overflow-hidden">
                <div class="relative container flex lg:group-odd:flex-row lg:group-even:flex-row-reverse group-odd:justify-start group-even:justify-end items-center z-10">
                    <div class="w-full md:group-even:w-7/12 lg:w-5/12 md:group-odd:pr-12 md:group-even:pl-12 lg:group-even:pl-20 min-h-[181px] lg:group-odd:min-h-[385px] flex flex-col justify-center group-odd:items-start group-even:items-end">
                        <h3 class="px-3 w-full text-white text-[20px] md:text-[40px] font-semibold mb-3 group-even:text-right transition duration-300 group-hover:text-zinc-900"><?php echo $culture['heading'] ?></h3>
                        <p class="px-3 w-full text-white lg:max-w-lg text-[15px] md:text-[20px] group-even:text-right transition duration-300 group-hover:text-zinc-900"><?php echo $culture['description'] ?></p>
                    </div>
                    <div class="hidden lg:block w-7/12 min-h-[181px] lg:min-h-[385px]"></div>
                </div>
                <div class="absolute w-full md:w-7/12 h-full scale-105 group-odd:right-0 group-even:left-0 top-0 bg-no-repeat bg-cover bg-center opacity-60 transition duration-300 group-hover:opacity-100" style="background-image: url(<?php echo esc_url( $culture['image'] ); ?>)"></div>
            </div>
        <?php
                }
            }
        ?>
    </div>
</section>

