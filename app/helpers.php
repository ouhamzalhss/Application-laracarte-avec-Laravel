<?php 

if(! function_exists('page_title')){
     function page_title($title){
         if($title==''){
             return 'Laracarte Liste of Artisan.';
         }
         
    return $title.' | Laracarte Liste of Artisan.';
}
}

if(! function_exists('set_active_route')){
     function set_active_route($route){
         
    return Route::is($route) ? 'active' :'';
}
}
