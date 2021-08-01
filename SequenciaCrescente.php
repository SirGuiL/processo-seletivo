function SequenciaCrescente($array){
  sort($array);
  if($array[0] == end($array)){
    return true;
  }
  for($i = count($array) - 1; $i > 0; $i--){
    if($array[$i] - $array[$i-1] != 1){
      return false;
    }
  }
  return true;
}