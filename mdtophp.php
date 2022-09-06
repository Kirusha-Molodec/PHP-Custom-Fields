<?php 
    require_once 'libs/parsedown.php';
    function getMdField($key) {
      global $file;
      //$file = file_get_contents('md/content-' . $lang . '.md');
      $frontFaceOld = mb_substr($file, 3);
      $frontFaceNew = stristr($frontFaceOld, '---', true);
      $row = explode("\n", $frontFaceNew); 
  
      for ($i = 0; $i< count($row); $i++) {
      $str = $row[$i];
      if (strstr($str, $key)) {
        $a = stristr($str, ':');
        echo substr($a, 3, strlen($a)-5);
        break;
      };
      }
  }
   function getContent(){
    global $file;
    //$contentFile = file_get_contents('md/content-' .$lang . '.md');
    $contentFile = $file;
    $content = substr($contentFile, strrpos($contentFile, '---') + 3);
    $parsedown = new Parsedown();
    echo $parsedown->text($content); 
  } 
    //  print_r(gettype($row[0]));
?>
