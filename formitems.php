<?php include('config.php'); ?>

		<center>
		<h1 style="color:black">ADD ITEM</h1>
		</center>
		<hr>
		<?php
		if(isset($_POST['submit'])){
      $Item_Code = $_POST['Item_Code'];
			$Item_Name	= $_POST['Item_Name'];
			$Price		= $_POST['Price'];
      $Release_Date	= $_POST['Release_Date'];
      $Category	= $_POST['Category'];
			$Item_Type	= $_POST['Item_Type'];

			$cek = mysqli_query($koneksi, "SELECT * FROM items WHERE Item_Code='$Item_Code'") or die(mysqli_error($koneksi));

			if(mysqli_num_rows($cek) == 0){
				$sql = mysqli_query($koneksi, "INSERT INTO items (Item_Code, Item_Name, Price, Release_Date, Category, Item_Type) VALUES
				('$Item_Code', '$Item_Name', '$Price', '$Release_Date', '$Category', '$Item_Type')") or die(mysqli_error($koneksi));

				if($sql){
					echo '<script>alert("Item added successfully!."); document.location="indexlinverse.php?page=itemslist";</script>';
				}else{
					echo '<div class="alert alert-warning">Error adding item.</div>';
				}
			}else{
				echo '<div class="alert alert-warning">Error, the code is already used.</div>';
			}
		}
		?>

		<form action="indexlinverse.php?page=additem" method="post">
			<div class="item form-group">
				<label for="img" class="col-form-label col-md-3 col-sm-3 label-align">Insert Image </label>
				<input type="file" id="img" name="img" accept="image/*">
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Item_Code</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="Item_Code" class="form-control" size="4" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Item_Name</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Item_Name" class="form-control" required>
				</div>
			</div>
      <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Price</label>
        <div class="col-md-6 col-sm-6">
          <input type="text" name="Price" class="form-control" required>
        </div>
      </div>
      <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Release_Date</label>
        <div class="col-md-6 col-sm-6">
          <input type="text" name="Release_Date" class="form-control" required>
        </div>
      </div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Category</label>
				<div class="col-md-6 col-sm-6 ">
					<div class="btn-group" data-toggle="buttons">
						<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="Category" value="Top" required>Top
						</label>
            <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
              <input type="radio" class="join-btn" name="Category" value="Outwear" required>Outwear
            </label>
						<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="Category" value="Dress" required>Dress
						</label>
            <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
              <input type="radio" class="join-btn" name="Category" value="Skirt" required>Skirt
            </label>
            <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
              <input type="radio" class="join-btn" name="Category" value="Pants" required>Pants
            </label>
            <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
              <input type="radio" class="join-btn" name="Category" value="Accessory" required>Accessory
            </label>
            <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
              <input type="radio" class="join-btn" name="Category" value="Footwear" required>Footwear
            </label>
					</div>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Item_Type</label>
				<div class="col-md-6 col-sm-6">
					<select name="Item_Type" class="form-control" required>
						<option value="">Choose Type</option>
						<option value="Crop Top LS">Crop Top LS</option>
            <option value="Crop Top SS">Crop Top SS</option>
            <option value="Crop Top SL">Crop Top SL</option>
            <option value="TShirts">TShirts</option>
            <option value="Shirts">Shirts</option>
            <option value="Crop TShirts">Crop TShirts</option>
            <option value="Tank Top">Tank Top</option>
						<option value="Layered Hoodie">Layered Hoodie</option>
            <option value="Hoodie">Hoodie</option>
						<option value="Crop Hoodie">Crop Hoodie</option>
						<option value="Mini Dress">Mini Dress</option>
						<option value="Long Chinese">Long Chinese</option>
            <option value="Mini Chinese">Mini Chinese</option>
						<option value="Worksuit">Worksuit</option>
            <option value="Casual Dress">Casual Dress</option>
            <option value="Swimsuit Bikini">Swimsuit Bikini</option>
            <option value="Short Skirt">Short Skirt</option>
            <option value="Long Chain">Long Chain</option>
            <option value="Short Denim">Short Denim</option>
            <option value="Medium Coat">Medium Coat</option>
            <option value="Medium">Medium</option>
            <option value="Long Cardigan">Long Cardigan</option>
            <option value="Boots">Boots</option>
					</select>
				</div>
			</div>
			<div class="item form-group">
				<div  class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-dark" value="Save"><a href></a>
					<input type="reset" name="reset" class="btn btn-dark" value="Reset">
			</div>
		</form>
	</div>
