<?php
    $id = 'latest-posts-' . $block['id'];
    $count = get_field('number_of_post');
?>

<section id="<?php echo esc_attr($id); ?>" class="px-2 xl:px-0 pb-16">
    <div class="md:max-w-6xl md:mx-auto"> <!-- container -->
        <div class="lg:flex">
            <div class="lg:w-3/3 border bg-white rounded shadow border-grey-100 p-4 md:mr-6 lg:mr-4 xl:mr-8">
                <h2 class="font-bold font-Roboto text-3xl border-b-2 border-green mb-8 pb-2"><?php the_field('section_title_lp'); ?></h2>

                    <?php
                        $args = array(
                            'post_type'         =>  'post',
                            'posts_per_page'    =>  12,
                            'category__not_in'  =>  10,
                            'post_status'       =>  'publish'
                        );

                        $the_query = new WP_Query( $args );
                        $i = 1;
                        if ( $the_query->have_posts() ):
                            while ( $the_query->have_posts() ) : $the_query->the_post();
                            $ex_id = get_the_ID();
                    ?>

                    <div class="f-hidden md:flex md:items-center mb-8"> <!-- col-1 -->
                        <div class="md:w-3/6 md:mr-8"> 
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('lp-img', ['class' => 'w-full']); ?>
                            </a>
                        </div>

                        <div class="md:w-3/6">
                            <div class="text-xs mt-2 md:mt-0 mb-1 font-Jost">

                                <span class="text-green"><i class="far fa-calendar-alt"></i></span> <span><?php echo get_the_date('F j, Y'); ?> 
                                <span class="text-green"><i class="far fa-user"></i></span> </span> <span><?php echo get_the_author(); ?></span>
                                
                            </div>
                            <a href="<?php the_permalink(); ?>">
                                <h3 class="text-xl font-Jost font-semibold leading-6"><?php the_title(); ?></h3>
                            </a>
                            <div class="text-sm font-Jost leading-21 my-2"><?php the_excerpt(); ?></div>
                            <a class="transition ease-in-out duration-500 inline-block bg-green text-white text-xs leading-21 py-7 px-15 hover:bg-dark-green rounded-sm" href="<?php the_permalink(); ?>">Read More</a>
                        </div>
                    </div> <!-- End col-1 -->
                    <?php
                        $i++;
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>

                <a id="loadMore" class="transition ease-in-out duration-500 text-center font-bold text-xl leading-0 border border-green block py-2 px-6 hover:bg-green hover:text-white" href="<?php the_permalink(); ?>">Load More</a>
            </div>
            


            <div class="lg:w-1/03"> <!-- col-2 -->

                 <div class="border rounded bg-white shadow border-grey-100 my-4 md:my-0 p-4">
                     <h2 class="font-semibold font-Jost border-b-2 border-green pb-2">Follow Us</h2>
                     <div class="grid grid-flow-col grid-cols-2 grid-rows-2 gap-2.5 my-4">
                         <a href="#">
                            <div class="flex bg-blue-500 text-white py-2 px-3.5 rounded-sm">
                                <span><i class="fab fa-facebook"></i></span>
                                <div class="ml-4">
                                    <p class="text-13 font-Jost font-semibold">14,000</p>
                                    <p class="text-11 font-Jost">Fans</p>
                                </div>
                            </div>
                         </a>
                         
                         <a href="#">
                            <div class="flex bg-light-blue text-white py-2 px-3.5 rounded-sm">
                                <span><i class="fab fa-twitter"></i></i></span>
                                <div class="ml-4">
                                    <p class="text-13 font-Jost font-semibold">840</p>
                                    <p class="text-11 font-Jost">Fans</p>
                                </div>
                            </div>
                         </a>
                        <a href="#">
                            <div class="flex bg-dark-blue text-white py-2 px-3.5 rounded-sm">
                                <span><i class="fab fa-linkedin-in"></i></span>
                                <div class="ml-4">
                                    <p class="text-13 font-Jost font-semibold">776</p>
                                    <p class="text-11 font-Jost">Fans</p>
                                </div>
                            </div>
                        </a>
                         <a href="#">
                            <div class="flex bg-red-violet text-white py-2 px-3.5 rounded-sm">
                                <span><i class="fab fa-instagram"></i></span>
                                <div class="ml-4">
                                    <p class="text-13 font-Jost font-semibold">3456</p>
                                    <p class="text-11 font-Jost">Fans</p>
                                </div>
                            </div>
                         </a>
                     </div>
                 </div> 

                 <!-- End Follow us -->

                 <!-- Add -->

                 <!-- <div class="py-20 px-8 my-4 border border-green">
                     -Advertisement-
                 </div> -->


                 <div class="border border-grey-100 shadow rounded bg-white p-4 mt-8">
                     <h2 class="font-semibold border-b-2 border-green pb-2 mb-4">Most Viewed</h2>
                    <div>
						<?php get_sidebar(); ?>
                    </div>
                 </div>


                 <!-- Add -->

                 <!-- <div class="py-20 px-8 my-4 border border-green">
                     -Advertisement-
                 </div> -->
                 
            </div> <!-- End col-2 -->
            
        </div>
    </div>
</section>