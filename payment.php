<?php
include("header.php");
  
?>

<br><br><br>

<section>
<div class="container col-lg-6"><br><br>

	<h2 class="text-center">PAYMENT GATEWAY</h2>
	<br>

<form>
<div class="form-group">
<label>Name:</label>
<input type="text" name="" id="" class="form-control" placeholder="  Name">
</div>


<div class="form-group">
<label>Email:</label>
<input type="mail" name="" id="" class="form-control" placeholder="  Email">
</div>

<div class="form-group">
<label>Project Description:</label>
<input type="text" name="" id="" class="form-control" placeholder="  Project Description">
</div>

<div class="form-group">
<label>Amount:</label>
<input type="text" name="" id="" class="form-control" placeholder="  Amount">
</div>


<div class="form-group">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
<select class="form-control">
<option>USA</option>
<option>UK</option>
<option>CANADA</option>
<option>AUSTRALIA</option>
<option>IRELAND</option>
<option>NEW ZELAND</option>


</select>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
<select class="form-control">
<option>USD</option>
<option>EUR</option>
<option>CAD</option>
<option>AUD</option>
<option>GBP</option>
<option>NZD</option>




</select>
<br>
</div>


</div>

</div>


<a type ="submit" class="btn btn-primary form-control text-white" name="">Submit</a><br><br>

<a type="reset" class="btn btn-primary form-control text-white" name="">Reset All</a><br><br>


</form>

</div>


</section>

<br><br><br>


<?php
include("footer.php");
  
?>