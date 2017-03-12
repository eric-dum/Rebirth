<?php
$args = array(
  'parent'=> 4,
  'hide_empty'=> 0,
  'orderby' => 'name',
  'order' => 'ASC'
  );
$categories = get_categories($args);
foreach($categories as $category) { 
  echo 
  '<li>
    <a href="/sports/'.$category->slug.'">    
      '.$category->name.'
    </a>
  </li>';
}
?>