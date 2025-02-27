<?php
function mergeFiles($files,$outputFile){
    $uniquesLines=[];
    foreach($files as $file){
      //check if exists or not
      if(file_exists($file)){
        $lines=file($file,FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);
        $uniquesLines=array_merge($uniquesLines,$lines);
      }
    }
    //get the unique remove any duplicate lines of text into the uniquelines array
    $uniquesLines=array_unique($uniquesLines);
    //check if the file is empty add text into it
    if(empty($uniquesLines)){
        $defaultText='Welcome to File handling';
     file_put_contents($outputFile,$defaultText);
    }
    else{
        file_put_contents($outputFile,implode("\n",$uniquesLines));
    }
}
echo mergeFiles(["file1.txt","file2.txt"],"merged.txt");

?>