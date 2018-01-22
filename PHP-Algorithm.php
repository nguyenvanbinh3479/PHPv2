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