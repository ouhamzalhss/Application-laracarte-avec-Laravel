<?php 

if(! function_exists('page_title')){
     function page_title($title){
         if($title==''){
             return 'Laracarte Liste of Artisan.';
         }
         
    return $title.' | Laracarte Liste of Artisan.';
}
}
