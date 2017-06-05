<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
			<script type="text/javascript" src="js/jquery-ui-1.7.custom.min.js"></script>
			<script type="text/javascript">
				$(function() {

					var $tabs = $('#tabs').tabs();

					$(".ui-tabs-panel").each(function(i){

						var totalSize = $(".ui-tabs-panel").size() - 1;

						if (i != totalSize) {
							next = i + 2;
							$(this).append("<a href='#' class='next-tab mover' rel='" + next + "'>Next Page &#187;</a>");
						}

						if (i != 0) {
							prev = i;
							$(this).append("<a href='#' class='prev-tab mover' rel='" + prev + "'>&#171; Prev Page</a>");
						}

					});

					$('.next-tab, .prev-tab').click(function() { 
						$tabs.tabs('select', $(this).attr("rel"));
						return false;
					});


				});
			</script>

		

					<ul><h6 class="no-pad">
						<li><a href="#fragment-1">1</a></li>
						<li><a href="#fragment-2">2</a></li>
						<li><a href="#fragment-3">3</a></li>
						<li><a href="#fragment-4">4</a></li>
						<li><a href="#fragment-5">5</a></li>
						<li><a href="#fragment-6">6</a></li>
						<li><a href="#fragment-7">7</a></li>
						<li><a href="#fragment-8">8</a></li>
						<li><a href="#fragment-9">9</a></li>
						<li><a href="#fragment-10">10</a></li>
					</ul>

					<div id="fragment-1" class="ui-tabs-panel">
						<p class="soal">Berikut ini bagian gigi yang berfungsi untuk menghaluskan makanan adalah ....<br></p>
						<p class="pg">
								<input type="radio" name="satu" value="A"> Gigi taring<br>
								<input type="radio" name="satu" value="B"> Gigi geraham<br>
								<input type="radio" name="satu" value="C"> Gigi seri<br><br></p>  
							</div>

							<div id="fragment-2" class="ui-tabs-panel ui-tabs-hide">
								<p class="soal">Pencernaan makanan dengan bantuan gigi disebut ....<br></p>
								<p class="pg">
									<input type="radio" name="dua" value="A"> Pencernaan kimiawi<br>
									<input type="radio" name="dua" value="B"> Pencernaan mekanis<br>
									<input type="radio" name="dua" value="C"> Pencernaan biologis<br><br></p>
							</div>

								<div id="fragment-3" class="ui-tabs-panel ui-tabs-hide">
									<p class="soal">Gerak bergelombang pada tenggorokan yang mendorong makanan menuju ke lambung disebut ....<br></p>
									<p class="pg">
										<input type="radio" name="tiga" value="A"> Gerak nasti<br>
										<input type="radio" name="tiga" value="B"> Gerak kontraksi<br>
										<input type="radio" name="tiga" value="C"> Gerak peristaltik<br><br></p>
								</div>

								<div id="fragment-4" class="ui-tabs-panel ui-tabs-hide">
									<p class="soal">Berikut ini enzim yang berfungsi membunuh kuman yang masuk ke lambung bersama makanan adalah ….<br></p>
									<p class="pg">
										<input type="radio" name="empat" value="A"> Asam klorida<br>
										<input type="radio" name="empat" value="B"> Lipase<br>
										<input type="radio" name="empat" value="C"> Pepsin<br><br></p>
									</div>

									<div id="fragment-5" class="ui-tabs-panel ui-tabs-hide">
										<p class="soal">Enzim ptialin berfungsi untuk mencerna karbohidrat menjadi zat-zat yang lebih sederhana. Enzim ptialin ini terdapat di dalam . . . ..<br></p>
										<p class="pg">
											<input type="radio" name="lima" value="A"> Usus halus<br>
											<input type="radio" name="lima" value="B"> Rongga mulut<br>
											<input type="radio" name="lima" value="C"> Lambung <br><br></p>
										</div>

										<div id="fragment-6" class="ui-tabs-panel ui-tabs-hide">
											<p class="soal">Makanan setelah dicerna akan diserap dan disalurkan ke seluruh bagian tubuh. Penyerapan sari-sari makanan terjadi pada . . . .<br></p>
											<p class="pg">
												<input type="radio" name="enam" value="A"> Lambung<br>
												<input type="radio" name="enam" value="B"> Usus besar<br>
												<input type="radio" name="enam" value="C"> Usus halus<br><br></p>
											</div>

											<div id="fragment-7" class="ui-tabs-panel ui-tabs-hide">
												<p class="soal">Berikut ini merupakan cara hidup sehat adalah ….<br></p>
												<p class="pg">
													<input type="radio" name="tujuh" value="A"> Banyak minum vitamin<br>
													<input type="radio" name="tujuh" value="B"> Tidur yang lama<br>
													<input type="radio" name="tujuh" value="C"> Olahraga secara teratur<br><br></p>
												</div>

												<div id="fragment-8" class="ui-tabs-panel ui-tabs-hide">
													<p class="soal">Berikut ini salah satu penyakit yang disebabkan karena memakan bahan makanan yang masih mentah adalah ....<br></p>
													<p class="pg">
														<input type="radio" name="delapan" value="A"> Diare<br>
														<input type="radio" name="delapan" value="B"> Batuk<br>
														<input type="radio" name="delapan" value="C"> Demam<br><br></li></p>
													</div>

													<div id="fragment-9" class="ui-tabs-panel ui-tabs-hide">
														<p class="soal">Makanan yang sudah tidak digunakan akan dibuang ke luar tubuh. Tempat keluarnya sisa-sisa makanan pada manusia adalah ......<br></p>
														<p class="pg">
															<input type="radio" name="sembilan" value="A"> Hati<br>
															<input type="radio" name="sembilan" value="B"> Anus<br>
															<input type="radio" name="sembilan" value="C"> Usus halus<br><br></p>
														</div>

														<div id="fragment-10" class="ui-tabs-panel ui-tabs-hide">
															<p class="soal">Penyakit peradangan pada usus disebut ….<br></p>
															<p class="pg">
																<input type="radio" name="sepuluh" value="A"> Maag<br>
																<input type="radio" name="sepuluh" value="B"> Usus buntu<br>
																<input type="radio" name="sepuluh" value="C"> Tifus<br><br></p>
															</p>
															<input type="submit" class="tombol" name="finish" value="Cek Score" style="font-size:20pt;
		font-family: 'Patrick Hand'; text-decoration: bold;"> <br> 		<input type="submit" class="tombol1" name="cekpemb" value="Cek Pembahasan">

	</div>
</form>


<?php
if (isset($_POST['cekpemb'])){
	echo("<script>location.href='../pembahasan/kls5pencernaan.php';</script>");
}

date_default_timezone_set('Asia/Jakarta');

if (isset($_POST['finish']))
{
	$uname = $_SESSION['uname'];
	$nilai=0;
	$tanggal=date("d-m-Y");

	if ($_POST['satu'] == 'B'){
		$nilai = 10;
	}
	if ($_POST['dua'] == 'B'){
		$nilai = $nilai + 10;
	}
	if ($_POST['tiga'] == 'C'){
		$nilai = $nilai + 10;
	}
	if ($_POST['empat'] == 'A'){
		$nilai = $nilai + 10;
	}
	if ($_POST['lima'] == 'B'){
		$nilai = $nilai + 10;
	}
	if ($_POST['enam'] == 'B'){
		$nilai = $nilai + 10;
	}
	if ($_POST['tujuh'] == 'C'){
		$nilai = $nilai + 10;
	}
	if ($_POST['delapan'] == 'A'){
		$nilai = $nilai + 10;
	}
	if ($_POST['sembilan'] == 'B'){
		$nilai = $nilai + 10;
	}
	if ($_POST['sepuluh'] == 'B'){
		$nilai = $nilai + 10;
	}
		
	$query = mysql_query("INSERT into nilai (tgl, nilai) values ('$tanggal','$nilai')");
	include ('proses-soal.php');
								}
?>
