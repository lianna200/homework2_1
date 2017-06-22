
<?php
//get product description, list price and discount array

       $product_description = filter_input(INPUT_POST, 'product_description');
       $list_price = filter_input(INPUT_POST,'list_price');
       $discount_percent = filter_input(INPUT_POST, 'discount_percent');
 // calculate the discount
     $discount = $list_price * $discount_percent * .01;
         $discount_price = $list_price - $discount;

// apply currency formatting to the dollar and percent amounts
    $list_price_formatted = "$".number_format($list_price, 2);
        $discount_percent_formatted = $discount_percent."%";
	$discount_formatted = "$".number_format($discount, 2);
$discount_price_formatted = "$".number_format($discount_price,2); 
   // escape the unformatted input
       $product_description_escaped = htmlspecialchars($product_description);

?>

<!DOCTYPE thml>

<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>Product Discount Calculator</h1>

<label>Product Description:</label>
        <span><b><?php echo $product_description_escaped; ?></b></span><br>

        <label>List Price:</label>
        <span><?php echo $list_price_formatted; ?></span><br>

        <label>Discount Percent:</label>
        <span><?php echo $discount_percent_formatted; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $discount_formatted; ?></span><br>

        <label>Discount Price:</label>
  
 <span><i><?php echo $discount_price_formatted; ?></i></span><br>

</main>
</body>
</html>
