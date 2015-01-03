<?php

return function($site, $pages, $page) {

  $code = $site->language()->code();
  $images = $page->images()->filterBy('filename', '*=', $code . '_');
  $count = 1; //helper variable
  $instructions = yaml($page->instructions());
 
  return compact('code', 'images', 'count', 'instructions');

};