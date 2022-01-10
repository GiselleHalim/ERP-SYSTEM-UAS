<?php
//memasukkan file config.php
include('config.php');
?>

	<div class="container" style="margin-top:20px">
		<center><h1 style="color:black">ITEMS</h1></center>
		<hr>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 7px;
  font-size: 14px;
  border: 1px solid grey;
  float: left;
  width: 60%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 10%;
  padding: 7px;
  background: black;
  color: white;
  font-size: 14px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #333333;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>

<form class="example" action="/action_page.php">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
</body>
</html>

		<a href="indexlinverse.php?page=additems"><button class="btn btn-dark right">Add Items</button></a>
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
				<tr>
					<th>No.</th>
					<th>Item Code</th>
					<th>Item Name</th>
					<th>Price</th>
					<th>Release Date</th>
					<th>Category</th>
          <th>Item Type<th>
				</tr>
			</thead>
			<tbody>
				<?php
				//query ke database SELECT tabel item urut berdasarkan code yang paling besar
				$sql = mysqli_query($koneksi, "SELECT * FROM items ORDER BY Item_Code DESC") or die(mysqli_error($koneksi));
				//jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
				if(mysqli_num_rows($sql) > 0){
					//membuat variabel $no untuk menyimpan nomor urut
					$no = 1;
					//melakukan perulangan while dengan dari dari query $sql
					while($data = mysqli_fetch_assoc($sql)){
						//menampilkan data perulangan
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$data['Item_Code'].'</td>
							<td>'.$data['Item_Name'].'</td>
							<td>'.$data['Price'].'</td>
							<td>'.$data['Release_Date'].'</td>
              <td>'.$data['Category'].'</td>
              <td>'.$data['Item_Type'].'</td>
							<td>
								<a href="indexlinverse.php?page=edititems&Item_Code='.$data['Item_Code'].'" class="btn btn-secondary btn-sm">Edit</a>
								<a href="delete.php?Item_Code='.$data['Item_Code'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Delete the data?\')">Delete</a>
							</td>
						</tr>
						';
						$no++;
					}
				//jika query menghasilkan nilai 0
				}else{
					echo '
					<tr>
						<td colspan="6">No data.</td>
					</tr>
					';
				}
				?>
			<tbody>
		</table>
	</div>
	</div>
