<?php include('config.php'); ?>

  <div class="container" style="margin-top:20px">
    <center><h1 style="color:black">EDIT ITEM</h1></center>

    <hr>

    <?php
    //jika sudah mendapatkan parameter GET id di URL
    if(isset($_GET['Item_Code'])){
      //membuat variabel $id untuk menyimpan id dari GET id di URL
      $Item_Code = $_GET['Item_Code'];

      //query ke database SELECT tabel items berdasarkan id = $id
      $select = mysqli_query($koneksi, "SELECT * FROM items WHERE Item_Code='$Item_Code'")
      or die(mysqli_error($koneksi));

      //jika hasil query = 0 maka muncul pesan error
      if(mysqli_num_rows($select) == 0){
        echo'<div class="alert alert-warning">Item_Code does not exist in the database.</div>';
        exit();

      //jika hasil query > 0
    }else{
      //membuat variabel $data dan menyimpan data row dari query
      $data = mysqli_fetch_assoc($select);
    }
  }
  ?>

  <?php
  //jika tombol simpan ditekan/klik
  if(isset($_POST['submit'])){
    $Item_Code = $_POST['Item_Code'];
    $Item_Name	= $_POST['Item_Name'];
    $Price		= $_POST['Price'];
    $Release_Date	= $_POST['Release_Date'];
    $Category	= $_POST['Category'];
    $Item_Type	= $_POST['Item_Type'];

    $sql = mysqli_query($koneksi, "UPDATE items SET Item_Code='$Item_Code',Item_Name='$Item_Name',
    Price='$Price',Release_Date='$Release_Date',Category='$Category',Item_Type='$Item_Type'") or die(mysqli_error($koneksi));

    if($sql){
      echo '<script>alert("Data saved successfully.");
      document.location="indexlinverse.php?page=itemslist";
      </script>';
    }else{
      echo '<div class="alert alert-warning">Edit data failed.</div>';
    }
  }
  ?>

  <form action="indexlinverse.php?page=edit_item&Item_Code=<?php echo $Item_Code; ?>" method="post">
    <div class="item form-group">
      <label class="col-form-label col-md-3 col-sm-3 label-align">Item_Code</label>
      <div class="col-md-6 col-sm-6">
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
          <label class="btn btn-primary " data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
            <input type="radio" class="join-btn" name="Category" value="Outwear" required>Outwear
          </label>
          <label class="btn btn-primary " data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
            <input type="radio" class="join-btn" name="Category" value="Dress" required>Dress
          </label>
          <label class="btn btn-primary " data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
            <input type="radio" class="join-btn" name="Category" value="Skirt" required>Skirt
          </label>
          <label class="btn btn-primary " data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
            <input type="radio" class="join-btn" name="Category" value="Pants" required>Pants
          </label>
          <label class="btn btn-primary " data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
            <input type="radio" class="join-btn" name="Category" value="Accessory" required>Accessory
          </label>
          <label class="btn btn-primary " data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
            <input type="radio" class="join-btn" name="Category" value="Footwear" required>Footwear
          </label>
        </div>
      </div>
    </div>
    <div class="item form-group">
      <label class="col-form-label col-md-3 col-sm-3 label-align">Type</label>
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
        <input type="submit" name="submit" class="btn btn-primary" value="Save">
        <input type="reset" name="reset" class="btn btn-primary" value="Reset">
    </div>
  </form>
</div>
