			<?php $i=0; while($i <= 2){ ?>	

				<article class="col-sm-12 paca-standard-grid list">

					<div class="row">
						<div class="col-sm-4">
							<div class="figure-wrapper overlay-animation">
								<figure>
									<div class="overlay-date">
										<span class="month">JAN</span>
										<span class="day">10</span>
									</div>								
									<img src="<?php echo get_template_directory_uri() ?>/assets/img/small-<?php echo rand(1,5) ?>.jpg" title="title here" alt="alt-here" class="img-responsive featured-image" />
									<a href="#" class="post-link" title="title here" alt="alt-here"></a>
									<figcaption>
										<div class="post-info post-info-centre">
											<i class="icon fa fa-arrow-right fa-2x" aria-hidden="true"></i>
										</div>
									</figcaption>
								</figure>
							</div>
						</div>






						<div class="col-sm-8">
							
							<h4 class="item-title"><a href="#" title="title here" alt="alt here">Title goes here</a></h4>
							<div class="post-meta">
								<span class="author">By <a href="#">Jason Van Hil</a></span> /
								<span class="posted">
									<span class="date">1 min ago</span>
									<time datetime="2016-06-06" itemprop="datePublished" class="hidden">06 June 2016</time>
								</span> /
								<span class="comments">20 comments</span>
							</div>

							<content class="item-contents">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus posuere mattis ligula id consectetur. Nullam pellentesque blandit dolor...</p>
							</content>
							
						</div>
					</div>



				</article>


			<?php $i++; } ?>