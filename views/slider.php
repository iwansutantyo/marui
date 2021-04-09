	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">

							<?php
								$dataSliderTerbaru = TampilkanSliderTerbaru();
								while($row=mysqli_fetch_assoc($dataSliderTerbaru)){
							?>
							<div class="item active">
								<div class="col-sm-6">
									<h1><span></span><?=$row['judul'];?></h1>
									<h2><?=$row['subjudul'];?></h2>
									<p><?=$row['text'];?></p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="<?=$row['gambar'];?>" class="girl img-responsive" alt="" />
									<img src="<?=$row['diskon'];?>"  class="pricing" alt="" />
								</div>
							</div>
							<?php } ?>

							<?php
								$dataSlider23 = TampilkanSlider23();
								while($row=mysqli_fetch_assoc($dataSlider23)){
							?>
							<div class="item">
								<div class="col-sm-6">
									<h1><span></span><?=$row['judul'];?></h1>
									<h2><?=$row['subjudul'];?></h2>
									<p><?=$row['text'];?></p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="<?=$row['gambar'];?>" class="girl img-responsive" alt="" />
									<img src="<?=$row['diskon'];?>"  class="pricing" alt="" />
								</div>
							</div>
							<?php } ?>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->