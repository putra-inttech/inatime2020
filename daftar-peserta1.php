<style type="text/css">
.style18 {font-size: 12px; color: #FFFFFF; }
.style21 {font-size: 12px}
.style22 {
	color: #FFFFFF;
	font-weight: bold;
}
.style23 {color: #FFFFFF}
</style>
<section class="portfolio-header parallax parallax1" style="background: url('img/tourism/jam.jpg') 50% 0 no-repeat fixed;">
    <div class="dark-overlay p-t-b-80" data-overlay-opacity="0">
        <div class="container">
            <div class="row">
                <p class="col-sm-12 text-light text-center" data-aos="fade-down" data-aos-delay="0"></p>
                <h3 class="text-center emphasis style23" style="font-family: arial" data-in-effect="fadeInUp">Register your account</h3>
                <p class="col-sm-12 text-light text-center" data-aos="fade-up" data-aos-delay="300"></p>
            </div>
        </div>
    </div>
</section>
<section class="parallax parallax4" style="background: url('img/backgrounds/back1.jpg') 50% 0 no-repeat fixed;">
            <div class="dark-overlay p-t-b-80" data-overlay-opacity="0.1">
                
  <div class="container">

                    <div class="row" style="background-color: white;">
					
                           
                            <div class="col-md-10" ><br>
							<div class="alert alert-info">Please complete the personal data</div>
                                
                                
                                <form class="form-group" method="POST" action="daftar_simposium_aksi.php" enctype="multipart/form-data">
										 <div class="form-group">
                                            <div class="col-md-12">
                                                <label for="nama" class="control-label">Full Name</label><br>
                                                
										<input type="text" name="nama_lengkap" placeholder="Full Name" class="form-control" required>
                                            </div>
                                        </div>
										
										<div class="form-group">
                                            <div class="col-md-12">
                                                <label for="nama" class="control-label">Participants</label><br>
                                                
										<select type="text" name="id_simposium" id="id_simposium" class="form-control" onchange="changeValue(this.value)" >
													<option value="">Please Select</option>
														<?php
															include "koneksi.php";
													
															// KONDISI IF UNTUK MENAMPILKAN HARGA SEBELUM DAN HARGA SESUDAH
															
																$result = mysql_query("select * from tb_simposium");
																$jsArray = "var dtpgj = new Array ();\n";
																while($row=mysql_fetch_array($result)){
																	echo'<option value="'. $row['id_simposium'].'">'. $row['profesi'] .'</option>';
																	$jsArray .="dtpgj ['".$row['id_simposium']."']= {hargasesudah :'" . addslashes($row['hargasebelum'])."'};\n";
																}
																// ------------------------------------------------------------------
															

														?>
											  </select>
                                            </div>
                                        </div>
										 <div class="form-group">
                                            <div class="col-md-12">
                                                <label for="nama" class="control-label">City</label><br>
                                                
										<input type="text" name="hargasesudah" id="hargasesudah" placeholder="Harga" class="form-control">
											<input type="text" name="asal_cabang" placeholder="City" class="form-control" required>
                                            </div>
                                        </div>
										 <div class="form-group">
                                            <div class="col-md-12">
                                                <label for="nama" class="control-label">Email</label><br>
                                                
										<input type="email" name="email" placeholder="Email" class="form-control" required>
                                            </div>
                                        </div>
											<div class="form-group">
                                            <div class="col-md-12">
                                                <label for="nama" class="control-label">Password</label><br>
                                                <input type="password" name="password" placeholder="Password" class="form-control" required>
                                            </div>
                                        </div>
											<div class="form-group">
                                            <div class="col-md-12">
                                                <label for="nama" class="control-label">Phone Number</label><br>
                                               
											<input type="text" name="no_telpon" placeholder="Phone Number" class="form-control" required>
                                            </div>
                                        </div>
										
											<label for=""> <span class="style21">Do you attend the Symposium? </span></label> 
											<br>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" name="joint_symposium" id="inlineRadio1" value="Y" checked>
											  <label class="form-check-label" for="inlineRadio1"> <span class="style21">Yes</span></label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" name="joint_symposium" id="inlineRadio2" value="T">
											  <label class="form-check-label" for="inlineRadio2"> <span class="style21">No</span></label>
											</div>
											<td>
												<label for=""> Workshop </label> <br>
												<?php 
													$query = mysql_query("SELECT * FROM tb_workshop") or die(mysql_error());
													while ($data = mysql_fetch_assoc($query)) {
												?>
														<input class="form-check-input" type="checkbox" name="id_workshop[]" value="<?= $data["id_workshop"]; ?>" id="defaultCheck1" >
														<label class="form-check-label" for="defaultCheck1">
															<?= $data["workshop"]; ?>
														</label><br>
												<?php 
													}
												?>
														<!--<div class="form-check">
																<input class="form-check-input" type="radio" name="id_workshop" value="0" id="exampleRadios2">
																<label class="form-check-label" for="exampleRadios2">
																	 <span class="style21">	Not Choose</span>
																</label>
														</div>-->
											</td>
											<!-- <td>
												<label for=""> Penelitian </label> <br>
												<input class="form-check-input" type="checkbox" name="penelitian[]" value="Oral Presentation" id="defaultCheck1">
												<label class="form-check-label" for="defaultCheck1">
													Oral Presentation
												</label> <br>
												<input class="form-check-input" type="checkbox" name="penelitian[]" value="Poster Presentation" id="defaultCheck1">
												<label class="form-check-label" for="defaultCheck1">
													Poster Presentation
												</label> <br>
											</td><br> -->
											<div class="text-left">
												<input type="submit" name="simpan" value="Register" class="btn btn-colored btn-md text-center"><br>
											</div>
										</form>
										 <br>
							   <table width="100%" border="1" class="table table-striped table-bordered table-hover" align="center">
							   <tr><td colspan="4" align="center" bgcolor="#FFCC00"><span class="style22">REGISTRATION FEE OF INA TIME 2020</span></td>
							   </tr>
  <tr>
    <td width="28%" align="center" bgcolor="#006699" align="center"><span class="style18">Participant</span></td>
    <td width="24%" align="center" bgcolor="#00882c" align="center"><span class="style18">Early <br>
      (Till 28th Feb 2020) </span>      </td>
    <td width="24%" align="center" bgcolor="#00882c" align="center"><span class="style18">Late <br> 
      (29th Feb - 30th March) </span></td>
    <td width="24%" align="center" bgcolor="#00882c" align="center"><span class="style18">Onsite</span></td>
  </tr>
  <tr>
    <td bgcolor="#006699"><span class="style18">Specialist</span></td>
    <td><div align="center" class="style21">Rp. 2.250.000,- <br>(US$200)</div></td>
    <td><div align="center" class="style21">Rp. 2.500.000,- <br>(US$225) </div></td>
    <td><div align="center" class="style21">Rp. 3.000.000,- <br>(US$200)</div></td>
  </tr>
  <tr>
    <td bgcolor="#006699"><span class="style18">General Practitioner/ Resident/ Nurse/ Midwifery/ Other Health Worker</span></td>
    <td><div align="center" class="style21">Rp. 1.000.000,- <br>(US$100)</div></td>
    <td><div align="center" class="style21">Rp. 1.250.000,- <br>(US$125)</div></td>
    <td><div align="center" class="style21">Rp. 1.500.000,- <br>(US$150)</div></td>
  </tr>
</table>
							   <table width="100%" border="1" class="table table-striped table-bordered table-hover" align="center" >
							   <tr><td bgcolor="#006699"><div align="center"><span class="style22">Tata cara pembayaran BNI Virtual Account (VA)<br>BNI Virtual Account Billing</span></div></td>
							   </tr>
							   
<tr><td bgcolor="#FFCC00">
  <span class="style22">Pembayaran BNI Virtual Account dengan ATM BNI</span> </td>
</tr>
<tr><td>
1. Masukkan Kartu Anda.<br />
2. Pilih Bahasa.<br />
3. Masukkan PIN ATM Anda.<br />
4. Pilih &quot;Menu Lainnya&quot;.<br />
5. Pilih &quot;Transfer&quot;.<br />
6. Pilih Jenis rekening yang akan Anda gunakan (Contoh; &quot;Dari Rekening Tabungan&quot;).<br />
7. Pilih &ldquo;Virtual Account Billing&rdquo;<br />
8. Masukkan nomor Virtual Account Anda (contoh: 8277087781881441).<br />
9. Tagihan yang harus dibayarkan akan muncul pada layar konfirmasi<br />
10. Konfirmasi, apabila telah sesuai, lanjutkan transaksi.<br />
11. Transaksi Anda telah selesai.</td>
							   </tr>
							   <tr><td bgcolor="#FFCC00"><span class="style22">Pembayaran BNI Virtual Account dengan mobile banking BNI</span></td>
							   </tr><tr><td>
							     1. Akses BNI Mobile Banking dari handphone kemudian masukkan user ID dan password.<br />
							     2. Pilih menu &ldquo;Transfer&rdquo;.<br />
							     3. Pilih menu &ldquo;Virtual Account Billing&rdquo; kemudian pilih rekening debet.<br />
							     4. Masukkan nomor Virtual Account Anda (contoh: 8277087781881441) pada menu &ldquo;input baru&rdquo;.<br />
							     5. Tagihan yang harus dibayarkan akan muncul pada layar konfirmasi<br />
							     6. Konfirmasi transaksi dan masukkan Password Transaksi.<br />
							     7. Pembayaran Anda Telah Berhasil.<br />
								 </td></tr>
								 <tr><td bgcolor="#FFCC00">
							       <span class="style22"> Pembayaran BNI Virtual Account dengan iBank Personal BNI</span></td>
								 </tr>
								<tr><td>
							     1. Ketik alamat https://ibank.bni.co.id kemudian klik &ldquo;Enter&rdquo;.<br />
							     2. Masukkan User ID dan Password.<br />
							     3. Pilih menu &ldquo;Transfer&rdquo;<br />
							     4. Pilih &ldquo;Virtual Account Billing&rdquo;.<br />
							     5. Kemudian masukan nomor Virtual Account Anda (contoh: 8277087781881441) yang hendak<br />
							     dibayarkan. Lalu pilih rekening debet yang akan digunakan. Kemudian tekan &lsquo;&rsquo;lanjut&rsquo;&rsquo;<br />
							     6. Kemudin tagihan yang harus dibayarkan akan muncul pada layar konfirmasi<br />
							     7. Masukkan Kode Otentikasi Token.<br />
							     8. Pembayaran Anda telah berhasil</td>
							   </tr>
							   
							   <tr><td bgcolor="#FFCC00"><span class="style22">Pembayaran BNI Virtual Account dengan BNI sms banking</span></td>
							   </tr>
							   <tr><td>
							     1. Buka aplikasi SMS Banking BNI<br />
							     2. Pilih menu Transfer<br />
							     3. Pilih menu Trf rekening BNI<br />
							     4. Masukkan nomor rekening tujuan dengan 16 digit Nomor Virtual Account (contoh:<br />
							     8277087781881441).<br />
							     5. Masukkan nominal transfer sesuai tagihan atau kewajiban Anda. Nominal yang berbeda tidak<br />
							     dapat diproses.<br />
							     6. Pilih &ldquo;Proses&rdquo; kemudian &ldquo;Setuju&rdquo;<br />
							     7. Reply sms dengan ketik pin sesuai perintah<br />
							     8. Transaksi Berhasil<br />
							     Atau Dapat juga langsung mengetik sms dengan format:<br />
							     TRF[SPASI]NomorVA[SPASI]NOMINAL<br />
							     dan kemudian kirim ke 3346<br />
							     Contoh : TRF 8277087781881441 44000<br />
								 </td></tr>
								 <tr><td bgcolor="#FFCC00">
							       <span class="style22">Pembayaran BNI Virtual Account dari Cabang atau Outlet BNI (Teller)</span></td>
								 </tr>
								 <tr><td>
							     1. Kunjungi Kantor Cabang/outlet BNI terdekat<br />
							     2. Informasikan kepada Teller, bahwa ingin melakukan pembayaran &ldquo;Virtual Account Billing&rdquo;<br />
							     3. Serahkan nomor Virtual Account Anda kepada Teller<br />
							     4. Teller melakukan konfirmasi kepada Anda.<br />
							     5. Teller memproses Transaksi<br />
							     6. Apabila transaksi Sukses anda akan menerima bukti pembayaran dari Teller tersebut.<br />
								 </td></tr>
								 <tr><td bgcolor="#FFCC00">
							       <span class="style22">Pembayaran BNI Virtual Account dari Agen46</span></td>
								 </tr>
								   <tr><td>
							     1. Kunjungi Agen46 terdekat (warung/took/kios dengan tulisan Agen46)<br />
							     2. Informasikan kepada Agen46, bahwa ingin melakukan pembayaran &ldquo;Virtual Account<br />
							     Billing&rdquo;<br />
							     3. Serahkan nomor Virtual Account Anda kepada Agen46<br />
							     4. Agen46 melakukan konfirmasi kepada Anda.<br />
							     5. Agen46 Proses Transaksi<br />
							     6. Apabila transaksi Sukses anda akan menerima bukti pembayaran dari Agen46<br />
							     tersebut.
								 </td></tr>
								 <tr><td bgcolor="#FFCC00">
							       <span class="style22">Pembayaran BNI Virtual Account dengan ATM Bersama</span></td>
								 </tr>
								   <tr><td>
							         1. Masukkan kartu ke mesin ATM Bersama.<br />
							         2. Pilih &quot;Transaksi Lainnya&quot;.<br />
							         3. Pilih menu &quot;Transfer&quot;.<br />
							         4. Pilih &quot;Transfer ke Bank Lain&quot;.<br />
							         5. Masukkan kode bank BNI (009) dan 16 Digit Nomor Virtual Account (contoh:<br />
							         8277087781881441).<br />
							         6. Masukkan nominal transfer sesuai tagihan atau kewajiban Anda. Nominal yang berbeda tidak<br />
							         dapat diproses.<br />
							         7. Konfirmasi rincian Anda akan tampil di layar, cek dan tekan 'Ya' untuk melanjutkan.<br />
						           8. Transaksi Berhasil.</p>
									 </td></tr>
									 <tr><td bgcolor="#FFCC00">
							           <span class="style22">Pembayaran BNI Virtual Account dari Bank Lain</span></td>
									 </tr>
									 <tr><td>
							         1. Pilih menu &quot;Transfer antar bank&quot; atau &ldquo;Transfer online antarbank&rdquo;.<br />
							         2. Masukkan kode bank BNI (009) atau pilih bank yang dituju yaitu BNI.<br />
							         3. Masukan 16 Digit Nomor Virtual Account pada kolom rekening tujuan, (contoh:<br />
							         8277087781881441).<br />
							         4. Masukkan nominal transfer sesuai tagihan atau kewajiban Anda. Nominal yang berbeda<br />
							         tidak dapat diproses.<br />
							         5. Masukkan jumlah pembayaran : 44000.<br />
							         6. Konfirmasi rincian Anda akan tampil di layar, cek dan apabila sudah sesuai silahkan<br />
							         lanjutkan transaksi sampai dengan selesai.<br />
							         7. Transaksi Berhasil.<br />
									 </td></tr>
									 <tr><td bgcolor="#FFCC00">
							           <span class="style22">Pembayaran BNI Virtual Account dari OVO</span></td>
									 </tr>
									 <tr><td>
							         1. Buka aplikasi OVO<br />
							         2. Pilih menu Transfer<br />
							         3. Pilih &ldquo;Rekening Bank&rdquo;<br />
							         4. Masukkan kode bank BNI (009) atau pilih bank yang dituju yaitu BNI.<br />
							         5. Masukan 16 Digit Nomor Virtual Account pada kolom rekening tujuan, (contoh:<br />
							         8277087781881441).<br />
							         6. Masukkan nominal transfer sesuai tagihan atau kewajiban Anda<br />
							         7. Pilih &ldquo;Transfer&rdquo;<br />
							         8. Konfirmasi rincian Anda akan tampil di layar, cek dan apabila sudah sesuai silahkan pilih<br />
							         &ldquo;Konfirmasi&rdquo; untuk lanjutkan transaksi sampai dengan selesai<br />
						           9. Transaksi Berhasil</p></td>
							   </tr>
							   </table>
                            </div>
                        </div>
						</div>
            </div>
        </section>
<script type ="text/javascript">
		<?php echo $jsArray; ?>
		function changeValue (id_simposium){
			document.getElementById('hargasesudah').value = dtpgj[id_simposium].hargasesudah;
		};
	</script>