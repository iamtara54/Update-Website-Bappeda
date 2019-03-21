<!-- Blog -->
<div id="blog" class="section sm-padding">

	<!-- Container -->
	<div class="container">

		<!-- Row -->
		<div class="row">

			<div class="col-md-12 article">
				<h2>Formulir Permohonan Informasi</h2>
				<hr>   
				<p>
				Dalam memberikan pelayanan Informasi Publik sebagaimana diamanatkan dalam Undang-Undang Nomor 14 Tahun 2008 Tentang Keterbukaan Informasi Publik, Bappeda sebagai Badan Perencanaan Pembangunan Daerah ingin ikut serta di dalam memberikan informasi secara publik, informasi-informasi tersebut dapat didownload dan dipergunakan sesuai dengan kebutuhan publik.
				</p>
				<br>
				<form id="myform" class="form-horizontal" action="/permohonan_informasi" method="post" enctype="multipart/form-data">
<input type="hidden" name="frontend-csrf" value="RU5udXNuUVENCBgwABoEKxQnX0NFOiYIPxRbBgQtJA4meD4MGRcraA==">						
					<div class="form-group field-requestppid-nama required">
<div class="col-sm-10">
<input type="text" id="requestppid-nama" class="form-control" name="RequestPpid[nama]" maxlength="50" placeholder="Nama"><em>* Harus Diisi</em>

<div class="help-block help-block-error "></div>
</div>
</div>
					<div class="form-group field-requestppid-alamat required">
<div class="col-sm-10">
<textarea id="requestppid-alamat" class="form-control" name="RequestPpid[alamat]" maxlength="150" placeholder="Alamat"></textarea><em>* Harus Diisi</em>

<div class="help-block help-block-error "></div>
</div>
</div>					
					<div class="form-group field-requestppid-pekerjaan required">
<div class="col-sm-10">
<input type="text" id="requestppid-pekerjaan" class="form-control" name="RequestPpid[pekerjaan]" maxlength="100" placeholder="Pekerjaan"><em>* Harus Diisi</em>

<div class="help-block help-block-error "></div>
</div>
</div>					
					<div class="form-group field-requestppid-no_telp required">
<div class="col-sm-10">
<input type="text" id="requestppid-no_telp" class="form-control" name="RequestPpid[no_telp]" maxlength="40" placeholder="No Telepon"><em>* Harus Diisi</em>

<div class="help-block help-block-error "></div>
</div>
</div>					
					<div class="form-group field-requestppid-email required">
<div class="col-sm-10">
<input type="text" id="requestppid-email" class="form-control" name="RequestPpid[email]" maxlength="100" placeholder="Email"><em>* Harus Diisi</em>

<div class="help-block help-block-error "></div>
</div>
</div>					
					<div class="form-group field-requestppid-no_identitas required">
<div class="col-sm-10">
<input type="text" id="requestppid-no_identitas" class="form-control" name="RequestPpid[no_identitas]" maxlength="25" placeholder="No Identitas KTP/SIM"><em>* Harus Diisi</em>

<div class="help-block help-block-error "></div>
</div>
</div>					
					<div class="form-group">
						<label class="col-sm-10">Upload KTP/SIM</label>
						<div class="col-sm-4 field-requestppid-image required">
</label>
<div class="file btn btn-lg btn-primary"> <span class="fa fa-folder-open"></span>
							Browse
							<input type="file" name="file" class="btn-upload" />
						</div>
<div class="help-block col-sm-12">File type : JPG, JPEG</div><div class="help-block help-block-error "></div>
</div>
					</div>

					
					<div class="form-group field-requestppid-tujuan_penggunaan required">
<div class="col-sm-10">
<input type="text" id="requestppid-tujuan_penggunaan" class="form-control" name="RequestPpid[tujuan_penggunaan]" maxlength="150" placeholder="Tujuan Penggunaan"><em>* Harus Diisi</em>

<div class="help-block help-block-error "></div>
</div>
</div>								
					<div class="form-group field-requestppid-verifycode required">
<div class="col-sm-10">
<div class="row">
										<div class="col-sm-6"><input type="text" id="requestppid-verifycode" class="form-control" name="RequestPpid[verifyCode]" placeholder="Masukkan kode captcha"><em>* Harus Diisi</em></div>
										<div class="col-lg-2"><img id="requestppid-verifycode-image" src="/site/captcha?v=5c906efa69074" alt=""></div>
										<div class="col-lg-2">
											<a href="#" id="fox" class="btn btn-primary">
												<span class="fa fa-refresh"></span> Recaptcha
											</a>
										</div>
									   </div>

<div class="help-block help-block-error "></div>
</div>
</div>					
					<div class="form-group field-requestppid-rincian_dokumen required">
<div class="col-sm-10">
<textarea id="requestppid-rincian_dokumen" class="form-control" name="RequestPpid[rincian_dokumen]" placeholder="Permohonan Informasi"></textarea><em>* Harus Diisi</em>

<div class="help-block help-block-error "></div>
</div>
</div>					
					<div class="form-group" style="padding-left:15px;">
						<button type="submit" class="btn btn-primary"> KIRIM PERMOHONAN </button>
					</div>
				</form>			</div>

		</div>
		<!-- /Row -->

	</div>
	<!-- /Container -->

</div>
<!-- /Blog -->
<style type="text/css">
	#nav {
		background-color:#C0392B !important;
	}
	.article h2 {
		font-size: 30px;
	}
	.article p {
    	color: #555;
	}
  	/*hr {
    	border: none;
    	border-top: rgba(0, 0, 0, 0.18) 1px solid;
    	margin: 2em 0 !important;
	}*/
	.form-control {
		opacity: 1!important;
    	line-height: 34px!important;
	    display: block;
	    height: 34px!important;
	    padding: 6px 12px!important;
	    font-size: 14px;
	    color: #555!important;
	    background-color: #fff!important;
	    background-image: none!important;
	    border: 1px solid #ccc!important;
	    border-radius: 4px;
	    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
	    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
	    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
	    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
	    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
	}
	</style>
	<script type="text/javascript">
		$(function() {
    		$('#nav').addClass('fixed-nav');
		});
	</script>