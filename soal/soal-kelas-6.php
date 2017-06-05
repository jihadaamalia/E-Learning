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
	<p class="soal">Berikut ini kegiatan yang dapat merusak lingkungan adalah ? <br></p>
	<p class="pg">
		<input type="radio" name="satu" value="A"> Menanam beberapa jenis tumbuhan di hutan <br>
		<input type="radio" name="satu" value="B"> Melakukan penghijauan<br>
		<input type="radio" name="satu" value="C"> Penebangan dan pembakaran hutan <br><br></p>
	</div>

	<div id="fragment-2" class="ui-tabs-panel ui-tabs-hide">
		<p class="soal">Berikut ini kelompok hewan yang dilindungi Undang-undang di Indonesia ? <br></p>
		<p class="pg">
			<input type="radio" name="dua" value="A"> Sapi, badak, kera <br>
			<input type="radio" name="dua" value="B"> Komodo, harimau, badak<br>
			<input type="radio" name="dua" value="C"> Unta, kera, gajah<br><br></p>
		</div>

		<div id="fragment-3" class="ui-tabs-panel ui-tabs-hide">
			<p class="soal">Kegiatan penebangan pohon di hutan secara besar-besaran dapat mengakibatkan ? <br></p>
			<p class="pg">
				<input type="radio" name="tiga" value="A"> Hewan mudah diburu <br>
				<input type="radio" name="tiga" value="B"> Peningkatan jumlah hewan di hutan<br>
				<input type="radio" name="tiga" value="C"> Banjir di daerah hilir saat musim hujan <br><br></p>
		</div>

		<div id="fragment-4" class="ui-tabs-panel ui-tabs-hide">
			<p class="soal">Gajah banyak diburu oleh manusia untuk diambil ? <br></p>
			<p class="pg">
				<input type="radio" name="empat" value="A"> Belalainya<br>
				<input type="radio" name="empat" value="B"> Gadingnya<br>
				<input type="radio" name="empat" value="C"> Kulitnya<br><br></p>
			</div>

			<div id="fragment-5" class="ui-tabs-panel ui-tabs-hide">
				<p class="soal">Berikut ini yang termasuk bahan sintetik yaitu ?<br></p>
				<p class="pg">
					<input type="radio" name="lima" value="A"> Plastik <br>
					<input type="radio" name="lima" value="B"> Wol<br>
					<input type="radio" name="lima" value="C"> Kapas <br><br></p>
				</div>

				<div id="fragment-6" class="ui-tabs-panel ui-tabs-hide">
					<p class="soal">Berikut ini barang yang dibuat dari batang kayu jati yaitu ? <br></p>
					<p class="pg">
						<input type="radio" name="enam" value="A"> Kursi <br>
						<input type="radio" name="enam" value="B"> Sepatu<br>
						<input type="radio" name="enam" value="C"> Tas<br><br></p>
					</div>

					<div id="fragment-7" class="ui-tabs-panel ui-tabs-hide">
						<p class="soal">Berikut ini yang merupakan salah satu penyebab banjir adalah  <br></p>
						<p class="pg">
							<input type="radio" name="tujuh" value="A"> Penebangan hutan secara besar-besaran <br>
							<input type="radio" name="tujuh" value="B"> Penghijauan<br>
							<input type="radio" name="tujuh" value="C"> Pembuangan sampah pada tempatnya <br><br></p>
					</div>

					<div id="fragment-8" class="ui-tabs-panel ui-tabs-hide">
						<p class="soal">Pohon gaharu bermanfaat bagi manusia sebagai bahan pembuatan ?<br></p>
						<p class="pg">
							<input type="radio" name="delapan" value="A"> Minyak atsiri <br>
							<input type="radio" name="delapan" value="B"> Minyak kayu putih<br>
							<input type="radio" name="delapan" value="C"> Cat<br><br></p>
						</div>

						<div id="fragment-9" class="ui-tabs-panel ui-tabs-hide">
							<p class="soal">Hubungan antara makhluk hidup dengan lingkungannya disebut ? <br></p>
							<p class="pg">
								<input type="radio" name="sembilan" value="A"> Populasi <br>
								<input type="radio" name="sembilan" value="B"> Habitat<br>
								<input type="radio" name="sembilan" value="C"> Ekosistem <br><br></p>
							</div>

							<div id="fragment-10" class="ui-tabs-panel ui-tabs-hide">
								<p class="soal">Komponen penyusun ekosistem yaitu ?<br></p>
								<p class="pg">
									<input type="radio" name="sepuluh" value="A"> Produsen, konsumen, dan pengurai<br>
									<input type="radio" name="sepuluh" value="B"> Lingkungan biotik dan abiotik<br>
									<input type="radio" name="sepuluh" vvalue="C"> Biota dan bioma <br><br></p>

									<input type="submit" class="tombol" name="finish" value="Cek Score" style="font-size:20pt;
		font-family: 'Patrick Hand'; text-decoration: bold;"><br> 		<input type="submit" class="tombol1" name="cekpemb" value="Cek Pembahasan">

	</div>
</form>


<?php
if (isset($_POST['cekpemb'])){
	echo("<script>location.href='../pembahasan/kls6ekosistem.php';</script>");
}

date_default_timezone_set('Asia/Jakarta');

if (isset($_POST['finish']))
{
$uname = $_SESSION['uname'];
$nilai=0;
$tanggal=date("d-m-Y");

if ($_POST['satu'] == 'C'){
$nilai = 10;
}
if ($_POST['dua'] == 'B'){
$nilai = $nilai + 10;
}
if ($_POST['tiga'] == 'C'){
$nilai = $nilai + 10;
}
if ($_POST['empat'] == 'B'){
$nilai = $nilai + 10;
}
if ($_POST['lima'] == 'B'){
$nilai = $nilai + 10;
}
if ($_POST['enam'] == 'A'){
$nilai = $nilai + 10;
}
if ($_POST['tujuh'] == 'A'){
$nilai = $nilai + 10;
}
if ($_POST['delapan'] == 'A'){
$nilai = $nilai + 10;
}
if ($_POST['sembilan'] == 'C'){
$nilai = $nilai + 10;
}
if ($_POST['sepuluh'] == 'B'){
$nilai = $nilai + 10;
}

$query = mysql_query("INSERT into nilai (tgl, nilai) values ('$tanggal','$nilai')");
include ('proses-soal.php');
	}
?>
