					
				<div id="profil-bar">

					<div id="profil-kiri" class="kiri">
						<div id="profil-photo">
							
						</div>
					</div>
					
					<div id="profil-kanan" class="kanan">

						<div class="kanan">
							<div class="container_1">
								<div class="content">
									<b>Cari di Etalase.com</b>
									<!-- Pencarian -->
									<form>
										Cari
										<input type="text" class="input-form">

										<select class="input-form">
											<?php echo $provinsi_model?>
										</select>

										<select class="input-form">
											<option>
												Pilihan sub kategori
											<option>
										</select>

										<input type="submit" class="input-button" value="Cari"/>
									</form>
								</div>
							</div>	
						</div>

					</div>
					
					

					<div class="clear"></div>
				</div>

				<div id="kategori">
					<div class="kiri">
						<div class="container_3 border-g">
							<div class="content">
								<br/>
								Edit profil
							</div> <!-- Content -->
						</div> <!-- container_2 -->
					</div>

					<div class="kanan">
						<div class="container_2p3 border-g">
							<div class="content">
								<br/>

								<!-- Form profil -->

								<form>
									Foto<br/>

									<img src="<?php echo base_url()?>img/foto.png" height="80px" width="80px"/>
									<input type="file">
									<br/>
									<br/>
									<input type="button" class="input-button" value="upload foto"/>
								</form>
								<hr/>
								<form action="<?php echo base_url()?>index.php/user/edit_profil" method="POST">
									
									Nama<br/>
									<input type="text" class="input-form" name="nama"/><br/>
									<br/>

									Bio<br/>
									<textarea class="input-form" name="bio" style="height:80px"></textarea><br/>
									
									<br/>

									Username<br/>
									<input type="text" name="username" class="input-form"/><br/>
									<br/>

									Alamat<br/>
									<textarea  name="alamat" class="input-form" style="height:80px"></textarea><br/>

									<br/>

									Provinsi<br/>
									<select class="input-form">
										<option>
											Pilihan sub kategori
										<option>
									</select>
									<br/>
									Kabupaten/Kota<br/>
									<select class="input-form">
										<option>
											Pilihan sub kategori
										<option>
									</select>
									<br/>

									<br/>
									No. Telepon<br/>
									<input type="text" name="no.tlp" class="input-form"/><br/>
									<br/>

									Pin BB<br/>
									<input type="text" name="pin_bb" class="input-form"/><br/>

									Yahoo Messenger<br/>
									<input type="text" name="ym" class="input-form"/><br/>

									Facebook<br/>
									<input type="text" name="fb" class="input-form"/><br/>

									Twitter<br/>
									<input type="text" name="twt" class="input-form"/><br/>
									<br/>

									<input type="checkbox"/> Tampilkan nomor telepon saya di iklan


									<br/><br/>

									<input type="submit" class="input-button" value="Update"/>
									


								</form>
							</div><!-- content -->

						</div>
					</div>

					<div class="clear"></div>
					</div>