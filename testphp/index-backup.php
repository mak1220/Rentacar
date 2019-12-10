<!Doctype html>
<head>

   <title>
     Test PHP Code
   </title>
</head>

<body>

   <?php

       $arr = array(
			   "Mustansar" => "Value1",
			   "Nauman" => "Value2",
			   "Umar Abdullah" => "Value10"
			);

       $productRowData = [
			    'product_id' => 1234,
			    'brand_id' => 321,
			    'product_name' => 'Our awesome product',
			    'prodcut_description' => 'This is our most awesome product.',
			    'product_sku' => 'ABC1234-XYZ',
			    'product_price' => 59.95,
			];

		echo json_encode($productRowData);


        foreach($productRowData as $val)
        {
               echo "$val". "<br>";   // Value1, Value2, Value10
        }

        $keys = array_keys($arr);

			for($i=0; $i < count($keys) - 1; ++$i) {
			    echo $keys[$i] . ' ' . $arr[$keys[$i]] . '<br>';
			}
        
        foreach($arr as $v)
        {
               echo "$v ". "<br>";   // Value1, Value2, Value10
        }
        

        $a=array("red","green");
        array_push($a,"blue","yellow","black");
       // array_pop($a);
        print_r($a);

        echo '<br>';


        // array merge

        $arr1 = array('foo' => 'bar');
		$arr2 = array('baz' => 'bof');

		//array_push($arr1,"67");
        $arr2["subject"] = "Physics";
		$arr3 = $arr1 + $arr2;

		print_r($arr3);



   ?>


</body>

</html>

