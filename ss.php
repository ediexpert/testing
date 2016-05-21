<form  method="GET" action="http://www.sneakersnstuff.com/en/cart/add">
<input  type="text" name="id" value="161476" class="form-control" >
	<input type="hidden" name="partial" value="cart-summary">
 
  <input type="submit" class="btn btn-default" value="Add to Cart">
</form>

</div>

<a href="http://www.sneakersnstuff.com/en/cart/add?id=161475&partial=cart-summary">Add</a>
http://www.sneakersnstuff.com/en/cart/add?id=81438&partial=cart-summary
<div class="col-md-12">
<?php 
if( isset($_GET['product_id']) ){
	echo '<h2><a target="_blank" href="http://www.sneakersnstuff.com/en/cart/add?id='.$_GET['product_id'].'&partial=cart-summary">Click here to Add the product into the cart</a></h2>';
	
}
?>
</div>