<?php get_header() ; ?>

<div class="wrap" id="gap">
	<div class="left-frame">
		<div>
			<div class="panel-3">03<span class="hop">-111968</span></div>
				<div class="sidebar-buttons">
				<a href="url">Home</a>
				<a href="url">Charter</a>
				<a href="url">Info</a>
				<a href="url">Contact</a>
			  	</div>
			<div class="panel-4">04<span class="hop">-041969</span></div>
			<div class="panel-5">05<span class="hop">-1701D</span></div>
			<div class="panel-6">06<span class="hop">-071984</span></div>
			<div class="panel-7">07<span class="hop">-081940</span></div>
			<div class="panel-8">08<span class="hop">-47148</span></div>
			<div class="panel-9">09<span class="hop">-081966</span></div>
		</div>
		<div>
			<div class="panel-10">10<span class="hop">-31</span></div>
		</div>
	</div>
	<div class="right-frame">
		<div class="bar-panel">
		<div class="bar-6"></div>
		<div class="bar-7"></div>
		<div class="bar-8"></div>
		<div class="bar-9"></div>
		<div class="bar-10"></div>
		</div>
		<div class="corner-bg">
			<div class="corner"></div>
		</div>
		<div class="content">
		<h2>Welcome to the IDIC &#149; A Star Trek Online Fleet</h2>
			<!-- Start your content here. -->
		<section class = "aboutWelcome">
				<p>You've found the homepage for the IDIC Armada and its fleets on Star Trek online PC!</p>
				<p>We are a new collection of old friends with decades of game experience between us looking to create a safe, supportive, and respectful environment where even the mightiest veteran of ST:O can continue to build themselves and develop.
				Browse our information and reach out to us if we sound like a community that's right for you.  Odds are, if you'd like any part of us, we'd love to know you too!</p>
			</section>
			<section class="aboutImgBox">
				<section class = "imgDes">
					<figure>
						<img src = "respect.jpg">
					</figure>
					<span>Respect</span>
					<section class = "imgP">		
						<p>Base respect is always offered, but keeping it is earned.</p>
						<p>All beings of all kinds everywhere deserve to be treated decently and fairly and this commitment is central to the armada.  A direct promise from its leading authorities straight to even its newest member.</p>
					</section>
				</section>

				<section class = "imgDes">
					<figure>
						<img src = "integrity.png">
					</figure>
					<span>Integrity</span>
					<section class ="imgP">
						<p>The armada operates on our strict adherence to openness and directness between members, between fleets, between leaders.</p>
						<p>Everyone's perspective is valid and everyone has the right to be informed.  We post and broadcast information regularly so that everyone is aware of all events and can be truly a part of the community.</p>
					</section>
				</section>
				<section class = "imgDes">
					<figure>
						<img src = "sovreignty.png">
					</figure>
					<span>Sovereignty</span>
					<section class = "imgP">
						<p>Despite all of this integrated cooperation, it is another central tenet that each fleet is its own community.  The armada and its leaders reserve only the most basic rights and powers (which are clarified in our Charter, displayed openly on the site) but otherwise, all rights and powers belong to the fleets themselves.</p>
						<p>If you're in a solo fleet looking for a larger community to help build you up, reading our Charter might give you a great idea of what you're looking for.</p>
					</section>
				</section>
			</section>
			<section id = "pageBreak"></section>
			<section>
				<h2>
					Fleet Updates
				</h2>
			</section>
			<section id="contentBody">
				<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="post-header">
							<div class="date"><?php the_time( 'M j y' ); ?></div>
							<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
							<div class="author"><?php the_author(); ?></div>
						</div><!--end post header-->
						<div class="entryClear">
							<?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
							<?php the_content(); ?>
							<?php edit_post_link(); ?>
							<?php wp_link_pages(); ?> </div>
						<!--end entry-->
						<div class="post-footer">
							<div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
						</div><!--end post footer-->
						</div><!--end post-->
				<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
						<div class="navigation index">
							<div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
							<div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
						</div><!--end navigation-->
				<?php else : ?>
				<?php endif; ?>   
			</section>	
			 <!-- End content area. -->
<?php get_footer() ; ?>