<a href="<?php echo site_url('Keu_out_barang/update_barang');?>">TAMBAH DATA</a>
<?php

	if($this->session->flashdata('message') !=null)
	{
		echo $this->session->flashdata('message');
	}

	echo '
			<table>
					<tr>
						<th>No</th>
						<th>ID BARANG</th>
						<th>TOTAL BIAYA BELI</th>
						<th>KONFIRMASI BAYAR</th>
						<th>TGL KONFIRMASI BAYAR</th>
						<th>KONFIRMASI AKHIR</th>
						<th>TGL KONFIRMASI AKHIR</th>
						<th>STATUS</th>
						<th>KETERANGAN</th>
						<th>CREATED BY</th>
						<th>CREATED DATE</th>
						<th>MODIFIED BY</th>
						<th>MODIFIED DATE</th>
					</tr>

		 ';
	if (!empty ($list))
	{
		foreach ($lis as $key => $row) 
		{
			echo '<tr>';
			echo '<td>'.++$key.'</td>';
			echo '<td>'.$row['id_out_barang'].'</td>';
			echo '<td>'.$row['total_biaya_pembelian'].'</td>';
			echo '<td>'.$row['konfirm_bayar'].'</td>';
			echo '<td>'.$row['tanggal_konfirm_bayar'].'</td>';
			echo '<td>'.$row['konfirm_akhir'].'</td>';
			echo '<td>'.$row['tanggal_konfirm_akhir'].'</td>';
			echo '<td>'.$row['status'].'</td>';
			echo '<td>'.$row['keterangan'].'</td>';
			echo '<td>'.$row['created_by'].'</td>';
			echo '<td>'.$row['created_date'].'</td>';
			echo '<td>'.$row['modified_by'].'</td>';
			echo '<td>'.$row['modified_date'].'</td>';
			echo '<td>'.'<a href = '.site_url('Keu_out_barang/list_out_barang'.$row['id_out_barang'].'').'>Edit</a></td>';
			echo '<td>'.'<a href = '.site_url('Keu_out_barang/hapus'.$row['id_out_barang'].'').'>Edit</a></td>';
			echo '<tr>';
		}
	}
?>