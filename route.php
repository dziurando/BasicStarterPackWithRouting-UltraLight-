<?php
Route::get('/',function($req){
    View::addView("test.php")->show();
});
Route::get('/user/',function(){
    echo 'Adi to przystojniacha i geniusz';
});
Route::get('/menu.html',function(){
    echo '<nav></nav>';
});
Route::post('/',function(){
    d($_SERVER);
    echo 'Adi to przystojniacha i geniusz';
});
Route::form('/',function($req){
    echo"<br>";
    var_dump($req->Post->get());echo"<br>";
    var_dump($req->Get->get());
});
Route::ajax('/',function(){
   Response::ajax(array("Jest"=>"ok"));
});
Route::get('/szymon/',function(){
    echo 'Adi to przystojniacha i geniusz';
});
Route::get("/user/adi.html",function($req){
   echo"<br>";
    var_dump($req->post->get());echo"<br>";
    var_dump($req->get->get()); 
});
Route::get('/login.html',"App\Controllers\UserController::showLoginPage");
Route::get('/user/login.html',"App\Controllers\UserController::showLoginPage");