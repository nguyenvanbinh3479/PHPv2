<!-- xap xep nhanh quick sort -->
	<h1>sap xep nhanh quick sort</h1>
	  <?php
			function quick_sort($my_array)
			{
				$loe = $gt = array();
				if(count($my_array) < 2)
				{
					return $my_array;
				}
				$pivot_key = key($my_array);
				$pivot = array_shift($my_array);
				foreach($my_array as $val)
				{
					if($val <= $pivot)
					{
						$loe[] = $val;
					}
					else if($val > $pivot)
					{
						$gt[] = $val;
					}
				}
				return array_merge(quick_sort($loe), array($pivot_key => $pivot), quick_sort($gt));
			}
			$my_array = array(3,0,2,5,-1,4,1);
			echo 'mang ban dau: '.implode(',',$my_array).'<br>';
			$my_array = quick_sort($my_array);
			echo 'mang sau khi duoc sap xep: '.implode(',',$my_array);
		?>
<!-- sap xep chen insertion sort -->
  <h1>sap xep chen insertion sort</h1>
	  <?php
			function insertion_sort($my_array1)
			{
				for ($i = 0; $i < count($my_array1); $i++)
				{
					$val = $my_array1[$i];
					$j = $i - 1;
					while ($j >= 0 && $my_array1[$j] > $val)
					{
						$my_array1[$j + 1] = $my_array1[$j];
						$j--;
					}
					$my_array1[$j + 1] = $val;
				}
				return $my_array1;
			}		
			$test_array = array(3,0,2,5,-1,4,1);
			echo 'mang ban dau: <br>';
			echo implode(',',$test_array);
			echo 'mang sau khi sap xep: <br>';
			print_r(insertion_sort($test_array));
		?>
<!-- sap xep chon selection sort -->
  <h1>sap xep chon selection sort</h1>
	  <?php
			function selection_sort($data)
			{
				for ($i = 0; $i < count($data) -1; $i++)
				{
					$min = $i;
					for ($j = $i +1; $j < count($data); $j++)
					{
						if ($data[$j] < $data[$min])
						{
							$min = $j;
						}
					}
					$data = swap_positions($data, $i, $min);
				}
				return $data;
			}
			function swap_positions($data1, $left, $right)
			{
				$backup_old_data_right_value = $data1[$right];
				$data1[$right] = $data1[$left];
				$data1[$left] = $backup_old_data_right_value;
				return $data1;
			}
			$my_array2 = array(3, 0, 2, 5, -1, 4, 1);  
			echo "Mảng ban đầu: <br>";  
			echo implode(', ',$my_array2 );  
			echo "<br>Mảng đã qua sắp xếp:<br>"; 
			echo implode(',', selection_sort($my_array2)).PHP_EOL;
		?>
<!-- giai thuat shell sort -->
  <h1>giai thuat shell sort</h1>
	  <?php
			function shell_sort($my_array3)
			{
				$x = round(count($my_array3)/2);
				while($x > 0)
				{
					for ($i = $x; $i < count($my_array3); $i++)
					{
						$temp = $my_array3[$i];
						$j = $i;
						while($j >= $x && $my_array3[$j - $x] > $temp)
						{
							$my_array3[$j] = $my_array3[$j - $x];
							$j -= $x;
						}
						$my_array3[$j] = $temp;
					}
					$x = round($x/2.2);
				}
				return $my_array3;
			}
			$test_array = array(3, 0, 2, 5, -1, 4, 1);  
			echo "Mảng ban đầu:<br>";  
			echo implode(', ',$test_array );  
			echo "<br>Mảng đã qua sắp xếp:<br>";  
			echo implode(', ',shell_Sort($test_array)). PHP_EOL;
		?>
<!-- sap xep noi bot bubble sort-->
  <h1>sap xep noi bot bubble sort</h1>
	  <?php
			function bubble_sort($my_array4)
			{
				do
				{
					$swapped =false;
					for ($i = 0, $c = count($my_array4) - 1; $i < $c; $i++)
					{
						if ($my_array4[$i] > $my_array4[$i + 1])
						{
							list ($my_array4[$i + 1], $my_array4[$i]) = array($my_array4[$i], $my_array4[$i + 1]);
							$swapped = true;
						}
					}
				}
				while($swapped);
				return $my_array4;
			}
			$test_array = array(3, 0, 2, 5, -1, 4, 1);  
			echo "Mảng ban đầu:<br>";  
			echo implode(', ',$test_array );  
			echo "<br>Mảng đã qua sắp xếp:<br>";  
			echo implode(', ',bubble_Sort($test_array)). PHP_EOL;
		?>
<!-- sap xep tron merge sort -->
  <h1>sap xep tron merge sort</h1>
	  <?php
			function merge_sort($my_array5)
			{
				if (count($my_array5) == 1) return $my_array5;
				$mid = count($my_array5)/2;
				$left = array_slice($my_array5, 0, $mid);
				$right = array_slice($my_array5, $mid);
				$left = merge_sort($left);
				$right = merge_sort($right);
				return merge($left, $right);
			}
			function merge($left, $right)
			{
				$res = array();
				while(count($left) > 0 && count($right) > 0)
				{
					if($left[0] > $right[0])
					{
						$res[] = $right[0];
						$right = array_slice($right, 1);
					}
					else
					{
						$res[] = $left[0];
						$left = array_slice($left, 1);
					}
				}
				while(count($left) > 0)
				{
					$res[] = $left[0];
					$left = array_slice($left, 1);
				}
				while(count($right) > 0)
				{
					$res[] = $right[0];
					$right = array_slice($right, 1);
				}
				return $res;
			}
			$test_array = array(100, 54, 7, 2, 5, 4, 1);  
			echo "Mảng ban đầu:<br>";  
			echo implode(', ',$test_array );  
			echo "<br>Mảng đã qua sắp xếp:<br>";  
			echo implode(', ',merge_sort($test_array))."<br>";
		?>