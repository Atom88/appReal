<?php
/*
Template Name: Main Page
*/

get_header();
?>

<?php get_template_part( 'nav', 'main' ); ?>


<?php query_posts('post_type=slider-view&post_status=publish&showposts=-1&order=ASC'); 
if ( have_posts() ) : ?>
<div class="mainSlider hidden-xs">
        <ul class="bxslider">
            
            <?php while(have_posts()): the_post(); 
            $imgUrl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            ?>
                <li>
                    <div class="sliderImg" style="background-image: url(<?php echo $imgUrl; ?>);"></div>
                    <div class="mainSliderText">
                        <?php echo $post->post_content; ?>  
                    </div>
                    <div class="mainSliderShadow"></div>
                </li>

            <?php  endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?> 
             
        </ul>
<div class="goTo" ></div>
</div>

<div class="ourServices">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>OUR SERVICES</h3>
                <p class="mainText">AppReal specializes in most innovative technologies, putting them to real work, because we know how.<br> Our company’s key people have years of experience in effective development methodology and adjunctive services.</p>
            </div>
            
            <div class="col-lg-6 col-mg-6 col-xs-12">
                <div class="servBlock">
                    <h4>DEVELOPMENT</h4>
                    <div class="row">
                        <div class="col-md-7 servHeightText">
                             We propose services in various fields: mobile applications, gaming, financial processing, virtual and augmented reality. Your demand will be satisfied, whether you are looking for a product on demand or an outsourcing development team. 
                        </div>
                        <div class="col-md-5 servBlImgContainer">
                            <img src="<?php bloginfo('template_directory'); ?>/images/servimg1.png" class="servBlockImg" />
                        </div>
                        <div class="col-md-5 col-md-offset-6">
                            <a href="#" class="learnMoreBtn">LEARN MORE</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-mg-6 col-xs-12">
                <div class="servBlock">
                    <h4>ADDITIONAL SERVICES</h4>
                    <div class="row">
                        <div class="col-md-7 servHeightText">
                            We are the one stand to comfort all your needs in IT sector. Our team can handle different supportive activities of business consulting and marketing performance for your product.
                        </div>
                        <div class="col-md-5 servBlImgContainer">
                            <img src="<?php bloginfo('template_directory'); ?>/images/servimg2.png" class="servBlockImg" />
                        </div>
                        
                        <div class="col-md-5 col-md-offset-6">
                           <a href="#" class="learnMoreBtn">LEARN MORE</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="ourTeam">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>MEET THE TEAM</h3>
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="teamItemDesc" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/Aviram.png);">
                    <div class="smallDesk">Aviram Eisenberg<br><span>CTO & COO</span></div>
                    <div class="hoverOverlay">
                            <p class="teamItemName">Aviram Eisenberg</p>
                            <div class="teamBigDesc">20 years of experience in software industry, serving as a Chief Architect in a global Telecom software provider and running own development company for over 10 years. Aviram has unique expertise in creating technological and business solution, mentoring as </div>
                            <a href="#" class="teamReadMore">Read More</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="teamItemDesc" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/Yariv.png);">
                    <div class="smallDesk">Yariv Levitski<br><span>CEO</span></div>
                    <div class="hoverOverlay">
                        <p class="teamItemName">Yariv Levitski</p>
                        <div class="teamBigDesc">18 years of business and operational experience in 4 major industries – Telecom, Finance, Television and Digital Health, where Yariv served in different Executive roles as well as C-Level positions. A Board member at two very successful mobile Israeli startups - TVTak (Shazam for TV - acquired), Tekoia (Internet of Things) as well as board member at Appforma (Automated marketing).</div>
                        <a href="#" class="teamReadMore">Read More</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="teamItemDesc" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/Dror.png);">
                    <div class="smallDesk">Dror Cohen<br><span>Art direction</span></div>
                    <div class="hoverOverlay">
                            <p class="teamItemName">Dror Cohen</p>
                            <div class="teamBigDesc">Text Text Text Text Text Text Text Text Text Text Text Text Text </div>
                            <a href="#" class="teamReadMore">Read More</a>
                    </div>
				</div>
            </div>
        </div>
    </div>
</div>










<?php 
/*    global $more;
    while( have_posts() ) : the_post();
            $more = 1;
            the_content();
    endwhile;
 * */
?>



<?php get_footer(); ?>