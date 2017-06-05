<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.7.custom.min.js"></script>
<script type="text/javascript"> <!--script untuk tabs-->
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
	<p class="soal">Benda gas mempunyai ? <br></p>
	<p class="pg">
		<input type="radio" name="satu" value="A"> Bentuk dan ukuran tidak tetap <br>
		<input type="radio" name="satu" value="B"> Bentuk dan ukuran tetap<br>
		<input type="radio" name="satu" value="C"> Bentuk tidak tetap, ukurannya tetap <br><br></p>
	</div>

	<div id="fragment-2" class="ui-tabs-panel ui-tabs-hide">
		<p class="soal"> Perubahan wujud air menjadi es disebut ? <br></p>
		<p class="pg">
			<input type="radio" name="dua" value="A"> Membeku<br>
			<input type="radio" name="dua" value="B"> Mencair<br>
			<input type="radio" name="dua" value="C"> Menguap<br><br>
		</p>
	</div>

	<div id="fragment-3" class="ui-tabs-panel ui-tabs-hide">
		<p class="soal">Bahan untuk membuat pakaian adalah ? <br></p>
		<p class="pg">
			<input type="radio" name="tiga" value="A"> Kertas <br>
			<input type="radio" name="tiga" value="B"> Kain <br>
			<input type="radio" name="tiga" value="C"> Plastik <br><br>
		</p>
	</div>

	<div id="fragment-4" class="ui-tabs-panel ui-tabs-hide">
		<p class="soal">Perubahan wujud benda gas menjadi benda cair disebut ? <br></p>
		<p class="pg">
			<input type="radio" name="empat" value="A"> Membeku <br>
			<input type="radio" name="empat" value="B"> Mengapur<br>
			<input type="radio" name="empat" value="C"> Menyublim <br><br>
		</p>
	</div>

	<div id="fragment-5" class="ui-tabs-panel ui-tabs-hide">
		<p class="soal">Salah satu olah raga yang memanfaatkan tenaga angin adalah ? <br></p>
		<p class="pg">
			<input type="radio" name="lima" value="A"> Terjun payung <br>
			<input type="radio" name="lima" value="B"> Mendayung<br>
			<input type="radio" name="lima" value="C"> Ski <br><br>
		</p>
	</div>

	<div id="fragment-6" class="ui-tabs-panel ui-tabs-hide">
		<p class="soal">Benda cair yang tenang permukaannya selalu  ? <br></p>
		<p class="pg">
			<input type="radio" name="enam" value="A"> Tegak    <br>
			<input type="radio" name="enam" value="B"> Miring<br>
			<input type="radio" name="enam" value="C"> Datar <br><br>
		</p>
	</div>

	<div id="fragment-7" class="ui-tabs-panel ui-tabs-hide">
		<p class="soal">Benda cair bentuknya berubah ubah sesuai dengan  ? <br></p>
		<p class="pg">
			<input type="radio" name="tujuh" value="A"> Isinya  <br>
			<input type="radio" name="tujuh" value="B"> Wadahnya <br>
			<input type="radio" name="tujuh" value="C"> Tekanannya <br><br>
		</p>
	</div>

	<div id="fragment-8" class="ui-tabs-panel ui-tabs-hide">
		<p class="soal">Asap kendaraan termasuk benda? <br></p>
		<p class="pg">
			<input type="radio" name="delapan" value="A"> Gas <br>
			<input type="radio" name="delapan" value="B"> Cair<br>
			<input type="radio" name="delapan" value="C"> Padat <br><br>
		</p>
	</div>

	<div id="fragment-9" class="ui-tabs-panel ui-tabs-hide">
		<p class="soal">Benda yang sifatnya selalu mengisi ruangan adalah ? <br></p>
		<p class="pg">
			<input type="radio" name="sembilan" value="A"> Uap air<br>
			<input type="radio" name="sembilan" value="B"> Air es<br>
			<input type="radio" name="sembilan" value="C"> Es batu <br><br>
		</p>
	</div>

	<div id="fragment-10" class="ui-tabs-panel ui-tabs-hide">
		<p class="soal">Benda yang bentuknya berubah mengikuti bentuk wadahnya adalah ? <br></p>
		<p class="pg">
			<input type="radio" name="sepuluh" value="A"> Kertas <br>
			<input type="radio" name="sepuluh" value="B"> Minyak goreng<br>
			<input type="radio" name="sepuluh" value="C"> Asap<br><br>
		</p>
		
		<input type="submit" class="tombol" name="finish" value="Cek Score" ><br>
		<input type="submit" class="tombol1" name="cekpemb" value="Cek Pembahasan">

	</div>
</form>


<?php
if (isset($_POST['cekpemb'])){
	echo("<script>location.href='../pembahasan/kls4bentukbenda.php';</script>");
}


date_default_timezone_set('Asia/Jakarta');

if (isset($_POST['finish']))
{
	$uname = $_SESSION['uname'];
	$nilai=0;
	$tanggal=date("d-m-Y");

	/*memberikan nilai untuk setiap nomor*/

	if ($_POST['satu'] == 'C'){
		$nilai = 10;
	}
	if ($_POST['dua'] == 'B'){
		$nilai = $nilai + 10;
	}
	if ($_POST['tiga'] == 'B'){
		$nilai = $nilai + 10;
	}
	if ($_POST['empat'] == 'C'){
		$nilai = $nilai + 10;
	}
	if ($_POST['lima'] == 'A'){
		$nilai = $nilai + 10;
	}
	if ($_POST['enam'] == 'C'){
		$nilai = $nilai + 10;
	}
	if ($_POST['tujuh'] == 'B'){
		$nilai = $nilai + 10;
	}
	if ($_POST['delapan'] == 'A'){
		$nilai = $nilai + 10;
	}
	if ($_POST['sembilan'] == 'A'){
		$nilai = $nilai + 10;
	}
	if ($_POST['sepuluh'] == 'B'){
		$nilai = $nilai + 10;
	}

	/*insert data ke dalam database*/
	$query = mysql_query("INSERT into nilai (usernameS, tgl, nilai) values ('$uname','$tanggal','$nilai')");
	include ('proses-soal.php'); /*memanggil page lain*/

}
?>