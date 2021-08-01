function SeculoAno($ano){
  if ($ano % 100 == 0){
    $seculo = %ano / 100;
  } else {
    $seculo = floor(%ano / 100) + 1;
  }
  return $seculo;
}