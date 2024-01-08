<section class="follow-us <?php the_sub_field( 'background' ); ?> <?php the_sub_field( 'colour_scheme' ); ?> <?php the_sub_field( 'padding_top' ); ?> <?php the_sub_field( 'padding_bottom' ); ?>">
    <div class="container">
        <div class="textBlock">
            <h2><?php the_sub_field('title'); ?></h2>
            <ul class="footer-social-link">
                <li class="">
                    <a href="<?php the_field( 'facebook_url', 'option' ); ?>" target="_blank" class="c-social-link__link">
                        <span class="icn icn-fb">
                            <svg class="svg-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46 45.7" style="enable-background:new 0 0 46 45.7" xml:space="preserve"><path d="M46 23C46 10.3 35.7 0 23 0S0 10.3 0 23c0 11.5 8.4 21 19.4 22.7V29.6h-5.8V23h5.8v-5.1c0-5.8 3.4-8.9 8.7-8.9 2.5 0 5.1.4 5.1.4v5.7h-2.9c-2.9 0-3.7 1.8-3.7 3.6V23H33l-1 6.6h-5.4v16.1C37.6 44 46 34.5 46 23z"/></svg>
                        </span>
                    </a>
                </li>
                <li class="">
                    <a href="<?php the_field( 'instagram_url', 'option' ); ?>" target="_blank" class="">
                        <span class="icn icn-insta">
                            <svg class="svg-full" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 44.6 44.6" style="enable-background:new 0 0 44.6 44.6" xml:space="preserve">
                                <path d="M-21.4-43.1c-6 0-6.7 0-9 .1s-3.9.5-5.3 1c-1.4.6-2.7 1.3-3.9 2.5s-2 2.4-2.5 3.9c-.5 1.4-.9 3-1 5.3-.1 2.3-.1 3.1-.1 9 0 6 0 6.7.1 9s.5 3.9 1 5.3c.6 1.4 1.3 2.7 2.5 3.9 1.2 1.2 2.4 2 3.9 2.5 1.4.5 3 .9 5.3 1 2.3.1 3.1.1 9 .1 6 0 6.7 0 9-.1s3.9-.5 5.3-1c1.6-.4 2.8-1.1 4-2.3 1.2-1.2 2-2.4 2.5-3.9.5-1.4.9-3 1-5.3.1-2.3.1-3.1.1-9 0-6 0-6.7-.1-9s-.5-3.9-1-5.3c-.6-1.4-1.3-2.7-2.5-3.9-1.2-1.2-2.4-2-3.9-2.5-1.4-.5-3-.9-5.3-1-2.3-.3-3.1-.3-9.1-.3zm0 3.9c5.9 0 6.6 0 8.9.1 2.1.1 3.3.5 4.1.8 1 .4 1.8.9 2.5 1.6.8.8 1.2 1.5 1.6 2.5.3.8.7 1.9.8 4.1.1 2.3.1 3 .1 8.9s0 6.6-.1 8.9c-.1 2.1-.4 3.3-.7 4-.4 1-.9 1.8-1.6 2.5-.9.8-1.6 1.3-2.6 1.7-.8.3-1.9.7-4.1.8-2.3.1-3 .1-8.9.1s-6.6 0-8.9-.1c-2.1-.1-3.3-.5-4.1-.8-1-.4-1.8-.9-2.5-1.6-.8-.8-1.2-1.5-1.6-2.5-.3-.8-.7-1.9-.8-4.1-.1-2.3-.1-3-.1-8.9s0-6.6.1-8.9c.1-2.1.5-3.3.8-4.1.4-1 .9-1.8 1.6-2.5.8-.8 1.5-1.2 2.5-1.6.8-.3 1.9-.7 4.1-.8 2.4-.1 3.1-.1 8.9-.1z" transform="translate(44 43.838) scale(1.01619)"/>
                                <path d="M-21.4-13.9c-4 0-7.3-3.3-7.3-7.3s3.3-7.3 7.3-7.3 7.3 3.3 7.3 7.3c.1 4-3.2 7.3-7.3 7.3zm0-18.6c-6.2 0-11.3 5-11.3 11.3 0 6.2 5 11.3 11.3 11.3 6.2 0 11.3-5 11.3-11.3 0-6.2-5-11.3-11.3-11.3zM-7-32.9c0 1.5-1.2 2.6-2.6 2.6-1.5 0-2.6-1.2-2.6-2.6 0-1.5 1.2-2.6 2.6-2.6 1.4 0 2.6 1.1 2.6 2.6z" transform="translate(44 43.838) scale(1.01619)"/>
                            </svg>
                        </span>
                    </a>
                </li>
                <?php if ( get_field ('youtube_url', 'option') ) { ?>
                    <li class="">
                        <a href="<?php the_field( 'youtube_url', 'option' ); ?>" target="_blank" class="">
                            <span class="icn icn-utube">
                                <svg class="svg-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 65.5 45.9" style="enable-background:new 0 0 65.5 45.9" xml:space="preserve"><path d="M64.1 7.2c-.8-2.8-3-5-5.8-5.8C53.2 0 32.8 0 32.8 0S12.3 0 7.2 1.4c-2.8.8-5 3-5.8 5.8C0 12.3 0 22.9 0 22.9s0 10.7 1.4 15.8c.8 2.8 3 5 5.8 5.8 5.1 1.4 25.6 1.4 25.6 1.4s20.5 0 25.6-1.4c2.8-.8 5-3 5.8-5.8 1.4-5.1 1.4-15.8 1.4-15.8s-.1-10.6-1.5-15.7zM26.2 32.8V13.1l17 9.8-17 9.9z"/></svg>
                            </span>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <div class="feedBlock">
            <script type="text/javascript" src="<?php the_sub_field('feed_code'); ?>" async defer></script>
        </div>
    </div>
</section>