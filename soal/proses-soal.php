<?php
mysql_connect("localhost","root","");
mysql_select_db("elearning");
?>
<html>
<div class="score">
<p>  YEAY! SCORE KAMU = <?php echo $nilai ?></p> <!--menampilkan variable nilai dari page yang memanggil-->
</div>
</html>
