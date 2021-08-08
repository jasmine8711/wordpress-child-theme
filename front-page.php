
   <?php
	get_header();
   ?>
<!-- about -->
  <div class="container-fluid d-flex justify-content-center position-relative" id="about"> 
	  <video autoplay muted id="myVideo" class=""=>
      <source
        src="https://s3.eu-central-1.wasabisys.com/jasmine-static/img/logo/main.mp4"
        type="video/mp4"
      />
    </video>
	<div class="w-50 d-flex justify-content-center align-items-center">
		<img class="color-name" data-speed="-5" src="https://portfolio.jasminemao.be/wp-content/uploads/2021/08/jasmine-color-name.png" alt="">
		 
		<a href="#intro" class="myname text-center j-red">
		Let's meet!
		<br>
		<i class="fas fa-sort-down j-red"></i>
		</a>

	</div>
		
  </div>
<!--   intro -->
<div id="intro" class="container-fluid position-relative">
<div class="layer-box">
			<img class="layer" src="https://portfolio.jasminemao.be/wp-content/uploads/2021/08/about-bg-02.png" alt="" data-speed="1">
			<img class="layer" src="https://portfolio.jasminemao.be/wp-content/uploads/2021/08/about-bg-03.png" alt="" data-speed="3">
			<img class="layer" src="https://portfolio.jasminemao.be/wp-content/uploads/2021/08/about-bg-04.png" alt="" data-speed="5">
			<img class="layer" src="https://portfolio.jasminemao.be/wp-content/uploads/2021/08/about-bg-06.png" alt="" data-speed="9">
			<img class="layer" src="https://portfolio.jasminemao.be/wp-content/uploads/2021/08/about-bg-10.png" alt="" data-speed="-3">
			<img class="layer" src="https://portfolio.jasminemao.be/wp-content/uploads/2021/08/about-bg-11.png" alt="" data-speed="-6">
			<img class="layer" src="https://portfolio.jasminemao.be/wp-content/uploads/2021/08/about-bg-12.png" alt="" data-speed="2">
			<img class="layer" src="https://portfolio.jasminemao.be/wp-content/uploads/2021/08/about-bg-13.png" alt="" data-speed="4">
			<img class="layer" src="https://portfolio.jasminemao.be/wp-content/uploads/2021/08/about-bg-14.png" alt="" data-speed="6">
			<img class="layer" src="https://portfolio.jasminemao.be/wp-content/uploads/2021/08/about-bg-15.png" alt="" data-speed="-8">
			</div>
<!-- 	<img class="intro-image-bg" src="https://portfolio.jasminemao.be/wp-content/uploads/2021/08/intro-overlay.png" alt=""> -->
	<img class="intro-j-bg image-slide-up animate__animated" src="https://portfolio.jasminemao.be/wp-content/uploads/2021/08/j.png" alt="">
	<div class="container intro">
		<div class="row ">
			<div class="col-12 col-lg-7 col-md-8 fade-in animate__animated intro-content">
				<div class="blur p-5 w-100">
					<img class="intro-logo mb-3" src="https://portfolio.jasminemao.be/wp-content/uploads/2021/08/logo100@2x.png" alt="">
						<h2 class="j-red intro-title">	I am a Belgium based <br>
						<span class="animated-text">graphic designer.</span>
							<br>
							<br>
						<span class="j-red "> I am also a<br>
						<span class="animated-text">frontend developer</span>  who likes water color drawing.</span>
							</h2>
						<p class="text-light about-text">In 2014, I moved to Belgium to begin a career as an illustration artist. Before turning my attention to the challenges of the code world, I specialised in digital graphic design. In 2019, I went to <strong>BECODE</strong>  to study web development. From design to coding, I found frontend development is the perfect transition.</p>
						<a href="https://portfolio.jasminemao.be/wp-content/uploads/2021/08/JasmineMao-online-CV.pdf" class="btn-grad" style="font-size:16px; position:absolute;bottom:2rem"> Download my CV<i class="fas fa-long-arrow-alt-right"></i></a>
				</div>
			</div>
			<div class="col">
			
			</div>
		</div>

	</div>


</div>
<!-- 3 main section cards -->
<div class="container-fluid bg-light p-0 m-0 overflow-hidden d-flex justify-content-center align-items-center" >
	<div class="row py-5" id="more">
		<?php
			$loop = new WP_Query( array( 'post_type' => 'post','order'=> 'ASC', ) );
			if ( $loop->have_posts() ) :
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="col mt-5 mb-5 block p-3">
					<?php if ( has_post_thumbnail() ) { ?>
							<div class="post-image">
								<?php the_post_thumbnail(); ?>
							</div>
					<?php } ?>
					<h3 class="py-3 j-red weight-600"><?php the_title(); ?></h3>
                    <span class="text-dark mt-1 mt-lg-3 card-content-container"><?php the_content();?></span>
					<?php the_excerpt() ?>

					</div>
				<?php endwhile;
			endif;
			wp_reset_postdata();
		?>
	</div>
</div>

<!-- wordpress website -->
	<div class="container-fluid section-part m-0" id="website"> 
		<div class="container d-flex justify-content-start">
			
		<div class="blur p-5 d-flex flex-column justify-content-center position-relative fade-in animate__animated">
				<?php
					$args = array(
						'post_type'=>'post',
						'p' => 1,
					);
					$query = new WP_Query($args);

					while($query->have_posts()) : $query->the_post();
				?>
				<h2 class="text-light w-100 website-title py-3 mb-5 ml-5"> <?php the_title(); ?></h2>
		<span class="ml-5"><?php the_content(); ?></span>	
		<a href="#wordpress" class="mt-5 btn-grad w-50 ml-5 mb-5">
			<p>	Read more <i class="fas fa-long-arrow-alt-right"></i></p>
		</a>	<div class="section-image image-slideIn d-none">	<?php the_post_thumbnail(); ?></div>
				<?php endwhile;wp_reset_postdata(); ?>
			</div>
		</div>
	</div>


<!-- list of website projects -->
<div class="container pt-3" id="wordpress">
	<div class="row mt-5">
	<h2 class="j-red text-center w-100 website-title py-3">Website projects</h2>
	<?php 
		    $homepageWebsites= new WP_Query(array(
				'posts_per_page'=> -1,
				'post_type'=>'website',
				'order'=> 'ASC',
		
			));
			while($homepageWebsites->have_posts()){
				$homepageWebsites->the_post();?>
				<div class="col-lg-6 col-md-6 col-12">
				<div class="oranges-flip-box mb-5" data-min-height="500" data-flip-direction="horizontal-to-left" data-h_text_align="left" data-v_text_align="center">
					<div class="flip-box-front" data-bg-overlay="true" data-text-color="light" 
                    	    style="background: url(<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); echo $url ?>) rgba(60,60,60,0.4); background-blend-mode: multiply; min-height: 500px; height: auto; background-size:cover;background-position:center;">
							<div class="inner text-uppercase">
										<h2 class="front-title"><?php the_title(); ?> </h2>
										<p class="text-light"><?php the_field('company'); ?></p>
						    </div>
			           <!-- back--> </div>
					   <div class="flip-box-back" data-text-color="dark" style="background:rgba(255,255,255,0.8);height:500px;border:solid 1px white;box-shadow: 0 4px 16px 0 rgba(107, 106, 109, 0.4)">
					    <div class="inner p-5">
							<div class="w-100 mb-3 d-flex justify-content-end"><img class="img-item" src="<?php the_field('logo'); ?>" /></div>
							<h3 class="j-purple text-uppercase weight-600"><?php the_title(); ?> </h3>
							<p class="text-secondary mb-5"><?php the_field('company'); ?></p>
							<p class="text-secondary"><span class="weight-600">YEAR:</span><br>
                            	<?php the_field('year'); ?>
                            </p>
							<p class="text-secondary"><span class="weight-600">DELIVERABLES:</span><br><?php the_content(); ?></p>
							<br>
							<a class="j-purple view-project-btn" href="<?php the_field('link'); ?>">View project <i class="fas fa-long-arrow-alt-right"></i></a>	
						</div>	
		 <!-- back --></div>
					   <!-- oranger-flip-box --> </div>
				   <!-- col-6 -->   </div>
           <?php } ?> 
	</div>
</div>


<!-- graphic design-->
<div class="section-part m-0 container-fluid" id="graphic"> 
		<div class="container d-flex justify-content-start">
		<div class="blur d-flex flex-column justify-content-center p-5 fade-in animate__animated">
				<?php
					$args = array(
						'post_type'=>'post',
						'p' => 144,
					);
					$query = new WP_Query($args);

					while($query->have_posts()) : $query->the_post();
				?>
				<h2 class="text-light hand-write w-100 website-title py-3 mb-5"> <?php the_title(); ?></h2>
			<?php the_content(); ?>
		<a href="#graphic-gallery" class="mt-5 btn-grad w-50">
			<p>Read more <i class="fas fa-long-arrow-alt-right"></i></p>	
		</a>	
		<div class="section-image image-slideIn d-none">	<?php the_post_thumbnail(); ?></div>
				<?php endwhile;wp_reset_postdata(); ?>
			</div>
		</div>
	</div>

<!-- 	graphic design gallery -->
<div class="container-fluid bg-light mt-0 mb-0 pt-5 pb-5" id="graphic-gallery">
	<div class="container">
		<?php
					$args = array(
						'post_type'=>'design',
						'p' => 190,
					);
					$query = new WP_Query($args);

					while($query->have_posts()) : $query->the_post();
				?>
				<h2 class="j-red text-center w-100 website-title py-3"> <?php the_title(); ?></h2>
			<?php the_content(); ?>	
			<?php endwhile;wp_reset_postdata(); ?>
	</div>
</div>


<!-- art-->
<div class="section-part container-fluid m-0" id="art"> 
		<div class="container d-flex justify-content-start">
		<div class="blur d-flex flex-column justify-content-center p-5 fade-in animate__animated ">
				<?php
					$args = array(
						'post_type'=>'post',
						'p' => 146,
					);
					$query = new WP_Query($args);

					while($query->have_posts()) : $query->the_post();
				?>
				<h2 class="text-light hand-write w-100 website-title py-3 mb-5"> <?php the_title(); ?></h2>
			<?php the_content(); ?>
		<a href="#art-gallery" class="mt-5 btn-grad w-50">
			<p>Read more <i class="fas fa-long-arrow-alt-right"></i></p>	
		</a>	
		<div class="section-image image-slideIn d-none">	<?php the_post_thumbnail(); ?></div>
				<?php endwhile;wp_reset_postdata(); ?>
			</div>
		</div>
	</div>

<!-- 	art gallery -->
<div class="container-fluid bg-light mt-0 mb-0 pt-5 pb-5" id="art-gallery">
	<div class="container">
		<?php
					$args = array(
						'post_type'=>'art',
						'p' => 141,
					);
					$query = new WP_Query($args);

					while($query->have_posts()) : $query->the_post();
				?>
				<h2 class="j-red text-center hand-write w-100 website-title py-3"> <?php the_title(); ?></h2>
			<?php the_content(); ?>	
			<?php endwhile;wp_reset_postdata(); ?>
	</div>
</div>


<!-- skill section -->

<div id="skill" class="pt-5 pb-5 m-0">
	<div class="container mt-3 mb-3 ">
		<div class="row">
			<div class="col-12 col-lg-6">	
					<img class="fade-in animate__animated brain-icon " src="https://portfolio.jasminemao.be/wp-content/uploads/2021/07/brain-icon.png" alt="">
			</div>
			<div class="col-12 col-lg-6">
				<h2 class="hand-write j-red">What do I do?</h2>
				<div class="blur-skill skill-border-blue animate__animated image-slideIn">
					<h3 class="text-secondary weight-600">Development</h3>
					<div class="d-flex m-0  ">
						<img class="skill-icon" src="https://portfolio.jasminemao.be/wp-content/uploads/2021/07/html.png" alt="">
						<img class="skill-icon" src="https://portfolio.jasminemao.be/wp-content/uploads/2021/07/css.png" alt="">
						<img class="skill-icon" src="https://portfolio.jasminemao.be/wp-content/uploads/2021/07/js.png" alt="">
						<img class="skill-icon" src="https://portfolio.jasminemao.be/wp-content/uploads/2021/07/vue.png" alt="">
						<img class="skill-icon" src="https://portfolio.jasminemao.be/wp-content/uploads/2021/07/node.png" alt="">
					    <img class="skill-icon" src="https://portfolio.jasminemao.be/wp-content/uploads/2021/07/wordpress.png" alt="">
					<img class="skill-icon" src="https://portfolio.jasminemao.be/wp-content/uploads/2021/07/elementor.png" alt="">
					<img class="skill-icon" src="https://portfolio.jasminemao.be/wp-content/uploads/2021/07/woo.png" alt="">
					<img class="skill-icon" src="https://portfolio.jasminemao.be/wp-content/uploads/2021/07/php.png" alt="">
					</div>
				</div>
			
			<br>
			<div class="blur-skill skill-border-purple animate__animated  image-slideIn">
				<h3 class="text-secondary weight-600">Design</h3>
		        <div class="d-flex m-0">
					<img class="skill-icon" src="https://portfolio.jasminemao.be/wp-content/uploads/2021/07/xd.png" alt="">
					<img class="skill-icon" src="https://portfolio.jasminemao.be/wp-content/uploads/2021/07/ps.png" alt="">
					<img class="skill-icon" src="https://portfolio.jasminemao.be/wp-content/uploads/2021/07/ai.png" alt="">
					<img class="skill-icon" src="https://portfolio.jasminemao.be/wp-content/uploads/2021/07/id.png" alt="">
					<img class="skill-icon" src="https://portfolio.jasminemao.be/wp-content/uploads/2021/07/aftereffects.png" alt="">
					<img class="skill-icon" src="https://portfolio.jasminemao.be/wp-content/uploads/2021/07/pr.png" alt="">
				</div>
			</div>                  
			<br>
			<div class="blur-skill skill-border-pink  animate__animated  image-slideIn">
				<h3 class="text-secondary weight-600">Language</h3>
				<p class="j-red">Chinese: <?php for ($x = 0; $x < 5; $x+=1) { ?>
					<i class="fas fa-star"></i>
                <?php } ?></p> 
				<p class="j-red">English:  <?php for ($x = 0; $x < 4; $x+=1) { ?>
					<i class="fas fa-star"></i>
                <?php } ?></p>
				<p class="j-red">Dutch:  <?php for ($x = 0; $x < 3; $x+=1) { ?>
					 <i class="fas fa-star"></i>
                <?php } ?></p>
			</div>
			</div>
<!-- 	end row	 --></div>
<!-- end container	 --></div>
<!-- end container-fluid --></div>

<div class="container-fliud mt-0 mb-0 p-3 " id="contact">
<h2 class="text-center text-light contact-title mt-5">Contact me</h2>
	<div class="container blur p-3 w-75 mt-5 mb-5 contact-form-container">
	<?php the_content(); ?>	
	</div>  
</div>
    
<?php
	get_footer();
?>
