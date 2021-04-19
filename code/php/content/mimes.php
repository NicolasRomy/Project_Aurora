<?php
function isImg($file){
  $errors = array();
  $mime_types = array(
            'png' => 'image/png',
            'jpe' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'jpg' => 'image/jpeg',
            'gif' => 'image/gif',
            'bmp' => 'image/bmp',
            'ico' => 'image/vnd.microsoft.icon',
            'tiff' => 'image/tiff',
            'tif' => 'image/tiff',
            'svg' => 'image/svg+xml',
            'svgz' => 'image/svg+xml',
  );
  if(is_array($file)){
    foreach ($file as $key => $value) {
      if($key == "type"){
        if(is_array($value)){
          echo $value[0];
          foreach ($value as $k => $v) {
            if (!in_array($value, $mime_types)) {
              array_push($errors,$file['name'][$k]);
            }
          }
        }else{
          if (!in_array($value, $mime_types)) {
            array_push($errors,$file['name']);
          }
        }
      }
    }
  }
  return $errors;

}
