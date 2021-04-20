<?php
function namedFile($fileType){
  $mime_types = array(
            'png' => 'image/png',
            'jpg' => 'image/jpeg',
            'gif' => 'image/gif',
            'bmp' => 'image/bmp',
            'ico' => 'image/vnd.microsoft.icon',
            'tiff' => 'image/tiff',
            'tif' => 'image/tiff',
            'svg' => 'image/svg+xml',
            'svgz' => 'image/svg+xml',
  );

  $ext = ".".array_search($fileType, $mime_types);

  $name = uniqid().$ext;

  return $name;
}
