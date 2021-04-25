<!DOCTYPE html>
<html>
<head>
	<title>Grafik Data Kategori Permainan</title>
	<script type="text/javascript" src="chartjs/Chart.js"></script>
</head>
<body>
	<style type="text/css">
	body{
		font-family: roboto;
	}

	table{
		margin: 0px auto;
	}
	</style>


	<center>
		<h2>Grafik Data Kategori Permainan</h2>
	</center>


	<?php 
	include 'koneksi.php';
	?>

	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart"></canvas>
	</div>

	<br/>
	<br/>

	<table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama </th>
				<th>No_member</th>
				<th>Kategori</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			$data = mysqli_query($koneksi,"select * from player");
			while($d=mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['nama']; ?></td>
					<td><?php echo $d['no_member']; ?></td>
					<td><?php echo $d['kategori']; ?></td>
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>


	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Arkade", "Balapan", "Strategi", "Tekateki"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_Arkade = mysqli_query($koneksi,"select * from player where kategori='Arkade'");
					echo mysqli_num_rows($jumlah_Arkade);
					?>, 
					<?php 
					$jumlah_Strategi = mysqli_query($koneksi,"select * from player where kategori='Strategi'");
					echo mysqli_num_rows($jumlah_Strategi);
					?>, 
					<?php 
					$jumlah_Balapan = mysqli_query($koneksi,"select * from player where kategori='Balapan'");
					echo mysqli_num_rows($jumlah_Balapan);
					?>, 
					<?php 
					$jumlah_Tekateki = mysqli_query($koneksi,"select * from player where kategori='Tekateki'");
					echo mysqli_num_rows($jumlah_Tekateki);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
</body>
</html>