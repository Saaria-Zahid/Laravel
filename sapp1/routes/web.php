<?php

use App\Http\Controllers\saariaContoller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



// Route::get('profile/{name}/{id?}', function ( $name="user not found",  $id="id not found" ) {
    
//     return view('index',['name'=>$name],['id'=>$id]);
// });


Route::get('result/eng/{english}/ur/{urdu}/sci/{science}/isl/{islamiat}', function ( $english="N/A",$urdu="N/A",$science="N/A",$islamiat="N/A") {
    
$obtmarks= $english+$urdu+$science+$islamiat;
$percentage= $obtmarks/400*100;



    $percentage= $obtmarks/400*100;
    if ($percentage >= 90) {
        echo "Grade A";
    } else if ($percentage >= 80){
        echo "Grade B";
    }else if ($percentage >= 70){
        echo "Grade C";
    }else{
        echo"failed";
    }
    


    return view('index',['obtmarks'=>$obtmarks],['percentage'=>$percentage]);
});


Route::get("blader/{num?}",[saariaContoller::class, "checkin"]  );
