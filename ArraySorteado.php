for($i = 0; $i < 20; $i++){
  array_push($nums, rand(1, 10));
  for($x = 1; $x <= 10){
    if($nums[$i] == $x){
      $counter[$x]++;
      break;
    }
  }
}

echo "O número que mais aparece é o " . array_keys($counter, max($counter));
echo "E ele apareceu " . max($counter);