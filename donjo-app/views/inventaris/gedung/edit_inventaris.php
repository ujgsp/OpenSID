<div class="content-wrapper">
	<section class="content-header">
		<h1>Ubah Data Inventaris Gedung Dan Bangunan</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('hom_desa')?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?= site_url() ?>inventaris_gedung"><i class="fa fa-dashboard"></i>Daftar Inventaris Gedung Dan Bangunan</a></li>
			<li class="active">Ubah Data</li>
		</ol>
	</section>
	<section class="content" id="maincontent">
		<form class="form-horizontal" id="validasi" name="form_gedung" method="post" action="<?= site_url("api_inventaris_gedung/update"); ?>">
			<div class="row">
				<div class="col-md-3">
          <?php	$this->load->view('inventaris/gedung/menu_kiri.php')?>
				</div>
				<div class="col-md-9">
					<div class="box box-info">
            <div class="box-header with-border">
						<a href="<?= site_url() ?>inventaris_gedung" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-arrow-circle-left"></i> Kembali Ke Daftar Inventaris bGedung Dan Bangunan</a>
						</div>
						<div class="box-body">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="nama_barang">Nama Barang / Jenis Barang</label>
										<div class="col-sm-8">
											<input maxlength="50" value="<?= $main->id; ?>" class="form-control input-sm required" name="id" id="id" type="hidden"/>
											<input maxlength="50" value="<?= $main->nama_barang; ?>" class="form-control input-sm required" name="nama_barang" id="nama_barang" type="text" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="kode_barang">Kode Barang</label>
										<div class="col-sm-8">
											<input maxlength="50" value="<?= $main->kode_barang; ?>" class="form-control input-sm required" name="kode_barang" id="kode_barang" type="text" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="register">Nomor Register</label>
										<div class="col-sm-8">
											<input maxlength="50" value="<?= $main->register; ?>" class="form-control input-sm required" name="register" id="register" type="text" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="kondisi">Kondisi Bangunan</label>
										<div class="col-sm-4">
											<select name="kondisi" id="kondisi" class="form-control input-sm required" >
												<option value="<?= $main->kondisi_bangunan; ?>"><?= $main->kondisi_bangunan; ?></option>
												<option value="Baik">Baik</option>
												<option value="Rusak Ringan">Rusak Ringan</option>
												<option value="Rusak Sedang">Rusak Sedang</option>
												<option value="Rusak Berat">Rusak Berat</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="tingkat">Bangunan Bertingkat</label>
										<div class="col-sm-4">
											<div class="input-group">
												<input type="number" value="<?= $main->kontruksi_bertingkat; ?>" class="form-control input-sm required" id="tingkat" name="tingkat" type="number" />
												<span class="input-group-addon input-sm" id="koefisien_dasar_bangunan-addon">Lantai</span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="kontruksi">Kontruksi Beton</label>
										<div class="col-sm-4">
											<select name="kontruksi" id="kontruksi" class="form-control input-sm required">
												<option value="0" <?= ($main->kontruksi_beton==0?'selected':''); ?>>Tidak</option>
												<option value="1" <?= ($main->kontruksi_beton==1?'selected':''); ?>>Ya</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="luas_bangunan">Luas Bangunan</label>
										<div class="col-sm-4">
											<div class="input-group">
												<input value="<?= $main->luas_bangunan; ?>" class="form-control input-sm number required" id="luas_bangunan" name="luas_bangunan" type="text" />
												<span class="input-group-addon input-sm" id="koefisien_dasar_bangunan-addon">M<sup>2</sup></span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="alamat">Letak / Lokasi </label>
										<div class="col-sm-8">
											<textarea class="form-control input-sm required" name="alamat" id="alamat" ><?= $main->letak; ?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="no_bangunan">Nomor Bangunan</label>
										<div class="col-sm-8">
											<input maxlength="50" class="form-control input-sm required" name="no_bangunan" id="no_bangunan" type="text"  value="<?= (!empty($main->no_dokument) ? $main->no_dokument : '-'); ?>"/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="tanggal_bangunan">Tanggal Dokumen Bangunan</label>
										<div class="col-sm-4">
											<input maxlength="50" class="form-control input-sm required" name="tanggal_bangunan" id="tanggal_bangunan" type="date" value="<?= $main->tanggal_dokument; ?>"/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="status_gedung">Status Tanah</label>
										<div class="col-sm-4">
											<select name="status_tanah" id="status_tanah" class="form-control input-sm required" >
												<option value="<?= $main->status_tanah; ?>"><?= $main->status_tanah; ?></option>
												<option value="Tanah milik Pemda">Tanah milik Pemda</option>
												<option value="Tanah Negara">Tanah Negara (Tanah yang dikuasai langsung oleh Negara)</option>
												<option value="Tanah Hak Ulayat">Tanah Hak Ulayat (Tanah masyarakat Hukum Adat)</option>
												<option value="Tanah Hak">Tanah Hak (Tanah kepunyaan perorangan atau Badan Hukum)</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="luas_tanah">Luas Tanah </label>
										<div class="col-sm-4">
											<div class="input-group">
												<input class="form-control input-sm number required" id="luas_tanah" name="luas_tanah" type="text" value="<?= $main->luas; ?>" />
												<span class="input-group-addon input-sm" id="koefisien_dasar_bangunan-addon">M<sup>2</sup></span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="kode_tanah">Nomor Kode Tanah</label>
										<div class="col-sm-8">
											<input maxlength="50" class="form-control input-sm required" name="kode_tanah" id="kode_tanah" type="text" value="<?= (!empty($main->kode_tanah) ? $main->kode_tanah : '-'); ?>" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="asal">Asal Usul </label>
										<div class="col-sm-4">
											<select name="asal" id="asal" class="form-control input-sm required" >
												<option value="<?= $main->asal; ?>"><?= $main->asal; ?></option>
												<option value="Bantuan Kabupaten">Bantuan Kabupaten</option>
												<option value="Bantuan Pemerintah">Bantuan Pemerintah</option>
												<option value="Bantuan Provinsi">Bantuan Provinsi</option>
												<option value="Pembelian Sendiri">Pembelian Sendiri</option>
												<option value="Sumbangan">Sumbangan</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="harga">Harga</label>
										<div class="col-sm-4">
											<div class="input-group">
												<span class="input-group-addon input-sm" id="koefisien_dasar_bangunan-addon">Rp</span>
												<input class="form-control input-sm number required" id="harga" name="harga" value="<?= $main->harga; ?>" />
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="keterangan">Keterangan</label>
										<div class="col-sm-8">
											<textarea rows="5" class="form-control input-sm required" name="keterangan" id="keterangan" ><?= $main->keterangan; ?></textarea>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="box-footer">
							<div class="col-xs-12">
								<button type="reset" class="btn btn-social btn-flat btn-danger btn-sm"><i class="fa fa-times"></i> Batal</button>
								<button type="submit" class="btn btn-social btn-flat btn-info btn-sm pull-right"><i class="fa fa-check"></i> Simpan</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</section>
</div>

