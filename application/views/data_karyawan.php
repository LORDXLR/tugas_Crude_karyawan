<table class="table table-striped table-bordered table-hover" id="dataTables-example">
	<thead>
		<tr>
			<th>No</th>
			<th>kode Karyawan</th>
			<th>Nama Karyawan</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>E-mail</th>
			<th>Foto</th>
			<th>Aksi</th>

		</tr>
	</thead>
	<tbody>
	<?php $nomor = 1;?>
	<?php foreach($db->result() as $row):?>
		<tr>
			<td><?php echo $nomor++;?></td>
			<td><?php echo $row->id_karyawan?></td>
			<td><?php echo $row->nama?></td>
			<td><?php echo $row->alamat?></td>
			<td><?php echo $row->jenis_kelamin?></td>
			<td><?php echo $row->email?></td>
			<td><?php echo $row->foto?></td>
			<td>
				<a href="<?php echo base_url();?>index.php/karyawan/edit/<?php echo $row->id_karyawan?>">edit</a>
				<a href="<?php echo base_url();?>index.php/karyawan/hapus/<?php echo $row->id_karyawan?>" onclick = "return confirm('apakah data ini mau dihapus?')">hapus</a>
			</td>
		</tr>
	<?php endforeach;?>
	</tbody>
</table>