<!DOCTYPE html>
<html>
<head>
	<title>Barang Masuk Print</title>
</head>
<body>
<h1 style="width:100%; text-align:center">Barcode Barang Masuk</h1>
<?php foreach ($result as $key => $row): ?>	
	<div style="border:dotted;padding:10px;overflow:hidden;width:auto;display:block;float:left;text-align:center;">
		<p><?php echo $row->nama_barang ?></p>
		<img src="<?php echo base_url('barcode/html/image.php?filetype=PNG&dpi=72&scale=2&rotation=0&font_family=Arial.ttf&font_size=8&text='.$row->kode_barang.'.'.$row->barang_trans_id.'&thickness=30&start=NULL&code=BCGcode128') ?>" alt="Barcode_barng">		
	</div>
<?php endforeach ?>

</body>
</html>