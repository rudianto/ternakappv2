<?php
	$query=$this->db->query("select sum(jumlah_telur) as jml from t_produksi")->row_array();

?>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>Total Jumlah Telur : <button class="btn btn-primary"><h3><?=$query['jml'];?> butir</h3></button></th>
		</tr>
	</thead>
</table>
<?=$output;?>