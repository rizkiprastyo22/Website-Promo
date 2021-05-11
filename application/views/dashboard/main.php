    <!-- Top box -->
		<!-- Logo & Site Name -->
		<!-- <div class="placeholder">
			<div class="parallax-window" data-parallax="scroll" style="background-image: url('<?php echo base_url('img/bg1.png'); ?>');">
				<div class="tm-header">
					<div class="row tm-header-inner">
						<div class="col-md-6 col-12">
							<img src="<?php echo base_url('img/logoku.png'); ?>" alt="Logo" class="tm-site-logo" width="200" 
							height="50" /> <br>
							<div class="tm-site-text-box">
								<h6 class="tm-site-description" style="color: black; padding-left: 5px;">Segala Promo, Ada di Hemat Warrior!</h6>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->

        <div>
            <h2 class="col-12 text-center tm-section-title">Temukan promo untukmu disini!</h2>
			<p class="col-12 text-center" style="font-size:16px;">Hidup lebih hemat dengan menggunakan <b style="color:red;">863.891</b> promo <br> yang tersedia dari <b style="color:red;">39.456</b> mitra kami</p><br>
        </div>

        <!-- <div class="tm-paging-links">
				<nav>
					<ul>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link active">Promo</a></li>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link">Rekomendasi</a></li>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link">Bukber</a></li>
					</ul>
				</nav>
			</div> -->

        <!-- Gallery -->
			<div class="row tm-gallery" style="background-image: url('<?php echo base_url('img/bg1.png'); ?>');"><br>
				<!-- gallery page 1 -->
				<div id="tm-gallery-page-promo" class="tm-gallery-page container">
				<?php $no = 0; foreach($promo as $row): 
					$harga_awal = number_format($row->harga_awal);
					$harga_promo = number_format($row->harga_promo);
					?>
                    <article class="col s12 offset-s2 m4 l3 tm-gallery-item">
						<!-- <a href=""> -->
							<figure class="card light-blue lighten-4" style="min-height: 600px; max-height: 600px;">
								<div class="card-image">
									<img src="<?php echo base_url('assets/images/') . $row->foto; ; ?>" alt="Image" class="img-fluid tm-gallery-img" />
									<figcaption class="container">
										<h3 class="tm-gallery-title"><?php echo $row->promo; ?></h3>
										<h4 class="tm-gallery-resto"><?php echo $row->mitra; ?></h4>
										<p class="tm-gallery-description"><?php echo $row->deskripsi; ?></p>
										<p class="tm-gallery-price"><del>Rp. <?php echo $harga_awal; ?></del><br>Rp. <?php echo $harga_promo; ?></p><br>
									</figcaption>
								</div>
							</figure>
						<!-- </a> -->
					</article>
                <?php endforeach; ?>
				</div> <!-- gallery page 1 -->
				<div class="tm-section tm-container-inner">
					<div class="row">
						<div class="col s11 right-align">
							<div class="tm-description-box"> 
								<!-- <h4 class="tm-gallery-title">Maecenas nulla neque</h4>
								<p class="tm-mb-45">Redistributing this template as a downloadable ZIP file on any template collection site is strictly prohibited. You will need to <a rel="nofollow" href="https://templatemo.com/contact">talk to us</a> for additional permissions about our templates. Thank you.</p> -->
								<a href="#" class="btn waves-effect waves-light btn-primary btn-pill red lighten-2">See more</a>
							</div>
						</div>
					</div>
				</div>
            </div>