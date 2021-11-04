<?php /* Template Name: Home */ ?>
<?php get_header();

$banner = get_field('banner');
$second_section = get_field('second_section');
$txt_with_img = get_field('text_with_img');
$text_with_img = get_field('txt_with_img');
$review_results = get_field('review_&_results');
$listing = get_field('process');
$platform_overview = get_field('platform_overview');
$reviews = get_posts(['post_type' => 'reviews']);


?>
	<section class="section-banner"  style="background-image: url(<?php echo $banner['background']?>)">
		<div class="wrapper">
			<div class="flex justify row-reverse center-v img-pos-right">
				<div class="img-part half">
					<figure class="pos-right shadow"><img src="<?php echo $banner['img']?>" alt=""></figure>
				</div>
				<div class="txt-part half">
                    <div class="col-white"><?php echo $banner['text']?></div>
					<a href="#" class="btn bg-col-white col-red">About Us</a>
				</div>
			</div>
			<div class="flex brand-icons">
                <?php foreach ($banner['brand_icons'] as $key=>$image){
                    echo '<img src="'.$image.'" alt="image_'.$key.'">';
                }
                ?>
			</div>
		</div>
	</section>
	<section class="section-second">
		<div class="wrapper flex justify img-pos-right only-desk">
			<div class="txt-part half">
				<h3 class="<?php echo $second_section['heading_lines']?>"><?php echo $second_section['title']?>The best business solution for you</h3>
				<div class="mg-t-b-40"><?php echo $second_section['text']?></div>
				<a href="#" class="txt col-red semi-bold">Learn About Our Success <i class="fas fa-long-arrow-alt-right"></i></a>
			</div>
			<div class="flex justify wrap half">
                <?php foreach($second_section['lists'] as $list){
                    echo '<div class="half-1">'.
                        '<figure class="shadow"><img src="'.$list['icon'].'" alt=""></figure>'.
                        '<div class="txt medium heading-color liner-after-heading">'.$list['title'].'</div>'.
                        '<div>'.$list['text'].'</div>'.
                        '</div>';
                }?>
			</div>
		</div>
	</section>
	<section class="section-forth sec-txt-img img-pos-left">
		<div class="wrapper">
			<div class="flex justify center-v only-desk">
				<div class="img-part half">
					<figure class="shadow"><img src="<?php echo $txt_with_img['img']?>" alt=""></figure>
				</div>
				<div class="txt-part half pad-l-100">
					<h3 class="<?php echo $txt_with_img['heading_lines']?>"><?php echo $txt_with_img['title']?></h3>
					<div class="mg-t-b-40"><?php echo $txt_with_img['text']?></div>
					<a href="#" class="txt col-red semi-bold">Learn About Our Success <i class="fas fa-long-arrow-alt-right"></i></a>
				</div>
			</div>
		</div>
	</section>
	<section class="section-fifth">
		<div class="wrapper cnt">
			<h4 class="col-gray semi-bold"><?php echo $platform_overview['title']?></h4>
            <div class="mini"><?php echo $platform_overview['text']?></div>
			<div class="owl-carousel">
                <?php foreach ($platform_overview['slider_images'] as $image){
                    echo '<figure class="shadow"><img src="'.$image.'" alt=""></figure>';
                }?>
			</div>
		</div>
	</section>
	<section class="sec-txt-img img-pos-right">
		<div class="wrapper">
			<div class="flex justify row-reverse center-v only-desk">
				<div class="img-part half">
					<figure class="shadow"><img src="<?php echo $text_with_img['img']?>" alt="image"></figure>
				</div>
				<div class="txt-part half">
					<h3 class="liner-before-heading"><?php echo $text_with_img['title']?></h3>
					<div class="mg-t-b-40"><?php echo $text_with_img['text']?></div>
					<a href="#" class="txt col-red semi-bold">Learn About Our Success <i class="fas fa-long-arrow-alt-right"></i></a>
				</div>
			</div>
		</div>
	</section>
	<section class="section-sixth">
		<div class="wrapper flex center-v justify img-pos-right only-desk">
			<div class="txt-part half pad-r-100">
				<div><?php echo $listing['description']?></div>
				<a href="#" class="btn bg-gradient col-white">About Us</a>
			</div>
			<div class="half listing"><?php echo $listing['listing']?></div>
		</div>
	</section>
	<section class="sec-results-reviews">
		<div class="wrapper">
			<h3 class="cnt"><?php echo $review_results['title']?></h3>
			<div class="flex justify-1 center-v results-part cnt">
                <?php foreach ($review_results['results'] as $results){
                    echo '<div>'.
                            '<div class="col-red bold result-count">'.$results['number'].'</div>'.
                            '<p class="bold heading-color result-category">'.$results['category'].'</p>'.
                            '</div>';
                }?>
			</div>
			<div class="flex center-v justify only-desk">
				<div class="half">
					<div class="owl-carousel ">
                        <?php foreach($reviews as $review){
                            $stars_count = get_field('stars_count', $review->ID);
                            ?>
                        <div class="flex justify review-part only-desk">
                            <figure class="fifth-2 user-avatar"><img src="<?php echo get_the_post_thumbnail_url($review->ID)?>" alt=""></figure>
                            <div class="half-2">
                                <h5><?php echo $review->post_title?></h5>
                                <div class="txt semi-bold user-position"><?php echo $review->post_excerpt?></div>
                                <div><?php echo $review->post_content?></div>
                                <div class="flex stars">
                                    <?php for($i=1; $i<= $stars_count; $i++){
                                        echo '<img src="'.get_template_directory_uri().'/assets/img/star.svg" alt="star">';
                                    }?>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
				</div>
				<div class="txt-part half-1">
					<div><?php echo $review_results['description']?></div>
					<a href="#" class="btn bg-gradient col-white">About Us</a>
				</div>
			</div>
		</div>
	</section>
<?php get_footer()?>