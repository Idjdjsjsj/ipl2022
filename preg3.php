<?php
$ch=curl_init();
if(isset($_GET['c'])){
	$c=$_GET['c'];
curl_setopt($ch,CURLOPT_URL,'https://snehtv-april2.in1.bitmana.io/jiotvplus/'.$c);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result=curl_exec($ch);
curl_close($ch);

$preg=preg_match_all('!'.$c.'(.*)!',$result,$data);
		//     echo $preg;

$finalArr=array_unique($data[0]);
foreach($finalArr as $list){
	
			$replace=str_replace('">','',$list);
			
			
			$jio='https://snehtv-april2.in1.bitmana.io/jiotvplus/'.$replace;
			
			?><video width="320" height="240" controls>
  <source src="<?php  echo $jio; ?>" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
Your browser does not support the video tag.
</video>


<?php
			
			
			
			
			
			?>	
			
					


<?php
			
			
			
			
			
}
}
		
		?>