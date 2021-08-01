function PrimoInferior($num) {
  if($num < 0){
    return 0;
  }
  for($i = $num; $i > 1; $i--){
    $resultado = 0;
    for($x = 2; $x <= $num; $x++){
      if($i % $x == 0){
        $resultado++;
      }
    }
    if($resultado == 1){
      return "O maior número primo inferior é " . $i;
    }
  }
}