<?php include 'demo.php' ?>
<body>
	<div style="width:60%;margin:auto;margin-top: 10vh;border: 1px solid black;padding: 50px">
		
	<center><h1>Product Discount Calculator</h1></center>
	<form action="response.php" method="post">
		<div class="row" style="margin-bottom: 10px;">
			<label class="col-sm-3"  for="description">Product Description</label>
			<input class="col-sm-7"  type="text" name="description" id="description">
		</div>
		<div class="row" style="margin-bottom: 10px;">
			<label class="col-sm-3" for="price">List Price</label>
			<input class="col-sm-7"  type="text" name="price" id="price">
		</div>
		<div class="row" style="margin-bottom: 10px;">
			<label class="col-sm-3"  for="percent">Discount Percent</label>
			<input class="col-sm-7"  type="text" name="percent" id="percent">%
		</div>
		<center><button class="btn btn-success">Calculate Discount</button></center>
	</form>
	</div>
</body>
</html>