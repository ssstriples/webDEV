<?php
function get_members(){
  return ['egoing','k8805','sorialgi'];
}

$members = get_members();

for($i = 0; $i < count($members); $i++){  //count() 갯수 반환
  echo ucfirst($members[$i]).'<br/>';     //ucfirst 첫글자가 대문자
}
 ?>
