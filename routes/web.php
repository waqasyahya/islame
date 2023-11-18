<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ComponentPermissionsController;
use App\Http\Controllers\PracticController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReadController;
use App\Http\Controllers\DetaillessonController;
use App\Http\Controllers\BlogpageController;
use App\Http\Controllers\BlogpostController;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\PrivecyController;
use App\Http\Controllers\GuaidenessController;
use App\Http\Controllers\ConditionController;
use App\Http\Controllers\AboutController;
use App\Models\Guaideness;

#########################  All controller with reference ##########################

Route::prefix("dashboard")->group(function () {
    Route::get("/", [DashboardController::class, "index"])->name("dashboard");
});
Route::prefix("home")->group(function () {
    Route::get("/", [HomeController::class, "index"])->name("home");
    Route::get("/detail/{id}", [HomeController::class, "detail"])->name("detail");
    Route::post("/Admin_panel", [HomeController::class, "login"])->name("login_user");
});

###########################islame home main page######################
Route::get('/', [GuaidenessController::class, 'islame'])->name('islame');
Route::get('/About', [AboutController::class, 'AboutPage'])->name('about');

Route::get('/Quran', [GuaidenessController::class, 'Quran'])->name('Quran');
Route::get('/term-and-condition', [ConditionController::class, 'conditionpage'])->name('conditionpage');

Route::get('/Blog', [BlogpageController::class, 'blog'])->name('Blog');
Route::get('/Blogpost/{id}', [BlogpageController::class, 'showBlogpost'])->name('showBlogpost');
Route::get("/privecy-policy", [PrivecyController::class, "privecypage"])->name("privecypage");

Route::get('/Blogpost/{id}/{tittle}', [BlogpostController::class, 'blogpost'])->name('blogpost');
Route::get("/practic1/{id}", [PracticController::class, "practic1"]);
Route::get('/Detaillesson/{id}', [DetaillessonController::class, 'detail']);
Route::get("/lesson", [ReadController::class, "Lesson1"]);

Route::get('/Furtherdetail/{id}/{read_id}', [GuaidenessController::class, 'Guaideness'])->name('Guaideness');
Route::get("/Test/{id}", [TestingController::class, "Testing"]);


Route::post('/quiz/submit/', [AnswerController::class, 'submitAnswer']);
Route::get('/MoreFeature', [GuaidenessController::class, 'MoreFeature'])->name('MoreFeature');


###########################islame home page end ###########################















Route::get('/Dashboard', function () {
    return view('auth.login');
});

Route::group(['middleware' => ['auth']], function () {






    ########################################Component Permissions###############################################

    Route::prefix("component_permissions")->group(function () {
        Route::get("/", [ComponentPermissionsController::class, "index"])->name("component_permissions");
        Route::get("/read", [ComponentPermissionsController::class, "read"])->name("component_permissions/read");
        Route::get("/store", [ComponentPermissionsController::class, "store"])->name("component_permissions/store");
        Route::get("/readbyid/{id?}", [ComponentPermissionsController::class, "readById"])->name("component_permissions/readbyid");
        Route::get("/readbycondition", [ComponentPermissionsController::class, "ReadByCondition"])->name("component_permissions/readbycondition");
    });
    ########################################Roles###############################################



    ########################################Users###############################################

    Route::prefix("user")->group(function () {
        Route::get("/", [UserController::class, "index"])->name("user.index");
        Route::get("/read", [UserController::class, "getAll"])->name("user.read");
        Route::post("/store", [UserController::class, "store"])->name("user.store");
        Route::get("/update", [UserController::class, "update"])->name("user.update");
        Route::get("/readById/{id?}", [UserController::class, "readById"])->name("user.readbyid");
        Route::post('/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
    });


    Route::get('/perfil', [UserController::class, 'profile'])->name('user.profile');
    Route::post('/profile', [UserController::class, 'postProfile'])->name('user.postProfile');
    Route::get('/password/cambiar-contrasen', [UserController::class, 'getPassword'])->name('userGetPassword');
    Route::post('/password/change', [UserController::class, 'postPassword'])->name('userPostPassword');
});






Route::prefix("read")->group(function () {
    Route::get("/", [ReadController::class, "index"])->name("lesson");
    Route::get("/read", [ReadController::class, "read"])->name("lesson.read");
    Route::get("/store", [ReadController::class, "store"])->name("lesson.store");
    Route::get("/readbyid/{id?}", [ReadController::class, "readById"])->name("lesson.readbyid");
    Route::get("/delete/{id?}", [ReadController::class, "destroy"])->name("lesson.delete");
});

Route::prefix("detaillesson")->group(function () {
    Route::get("/", [DetaillessonController::class, "index"])->name("detail");
    Route::get("/read", [DetaillessonController::class, "read"])->name("detail.read");
    Route::get("/store", [DetaillessonController::class, "store"])->name("detail.store");
    Route::get("/readbyid/{id?}", [DetaillessonController::class, "readById"])->name("detail.readbyid");
    Route::get("/delete/{id?}", [DetaillessonController::class, "destroy"])->name("detail.delete");
});
##############  Blogpage   ##########################
Route::prefix("blogpage")->group(function () {
    Route::get("/", [BlogpageController::class, "index"])->name("blogpage");
    Route::get("/read", [BlogpageController::class, "read"])->name("blogpage.read");
    Route::post("/store", [BlogpageController::class, "store"])->name("blogpage.store");
    Route::get("/readbyid/{id?}", [BlogpageController::class, "readById"])->name("blogpage.readbyid");
    Route::get("/deletebyid/{id?}", [BlogpageController::class, "destroy"])->name("blogpage.deletebyid");
});
##############  Blogpage  ##########################


##############  Blogpost   ##########################

Route::prefix("blogpost")->group(function () {
    Route::get("/", [BlogpostController::class, "index"])->name("blogpost");
    Route::get("/read", [BlogpostController::class, "read"])->name("blogpost.read");
    Route::post("/store", [BlogpostController::class, "store"])->name("blogpost.store");
    Route::get("/readbyid/{id?}", [BlogpostController::class, "readById"])->name("blogpost.readbyid");
    Route::get("/deletebyid/{id?}", [BlogpostController::class, "destroy"])->name("blogpost.deletebyid");
});
##############  Blogpost  ##########################


##############  practic  ##########################
Route::prefix("practic")->group(function () {
    Route::get("/", [PracticController::class, "index"])->name("practic");
    Route::get("/read", [PracticController::class, "read"])->name("practic.read");
    Route::post("/store", [PracticController::class, "store"])->name("practic.store");
    Route::get("/readbyid/{id?}", [PracticController::class, "readById"])->name("practic.readbyid");
    Route::get("/deletebyid/{id?}", [PracticController::class, "destroy"])->name("practic.deletebyid");
});


##############################  practic #####################################



#################################  Testing   ##################
Route::prefix("Testing")->group(function () {
    Route::get("/", [TestingController::class, "index"])->name("Testing");
    Route::get("/read", [TestingController::class, "read"])->name("Testing.read");
    Route::post("/store", [TestingController::class, "store"])->name("Testing.store");
    Route::get("/readbyid/{id?}", [TestingController::class, "readById"])->name("Testing.readbyid");
    Route::get("/deletebyid/{id?}", [TestingController::class, "destroy"])->name("Testing.deletebyid");
});
############################ ending ####################################



########################### Answer   ##############################
Route::prefix("Answer")->group(function () {
    Route::get("/", [AnswerController::class, "index"])->name("Answer");
    Route::get("/read", [AnswerController::class, "read"])->name("Answer.read");
    Route::get("/store", [AnswerController::class, "store"])->name("Answer.store");
    Route::get("/readbyid/{id?}", [AnswerController::class, "readById"])->name("Answer.readbyid");
    Route::get("/delete/{id?}", [AnswerController::class, "destroy"])->name("Answer.delete");
});
##################### Answer ##############################


##################### privecy page ###################
Route::prefix("privecy")->group(function () {
    Route::get("/", [PrivecyController::class, "index"])->name("privecy");
    Route::get("/read", [PrivecyController::class, "read"])->name("privecy.read");
    Route::get("/store", [PrivecyController::class, "store"])->name("privecy.store");
    Route::get("/readbyid/{id?}", [PrivecyController::class, "readById"])->name("privecy.readbyid");
    Route::get("/delete/{id?}", [PrivecyController::class, "destroy"])->name("privecy.delete");
});

############# privecy policy #################################

##################### term_and condition page ###################
Route::prefix("condition")->group(function () {
    Route::get("/", [ConditionController::class, "index"])->name("condition");
    Route::get("/read", [ConditionController::class, "read"])->name("condition.read");
    Route::get("/store", [ConditionController::class, "store"])->name("condition.store");
    Route::get("/readbyid/{id?}", [ConditionController::class, "readById"])->name("condition.readbyid");
    Route::get("/delete/{id?}", [ConditionController::class, "destroy"])->name("condition.delete");
});

############# term and condition policy #################################

#####################Guaideness############
Route::prefix("Guaideness")->group(function () {
    Route::get("/", [GuaidenessController::class, "index"])->name("Guaideness");
    Route::get("/read", [GuaidenessController::class, "read"])->name("Guaideness.read");
    Route::get("/store", [GuaidenessController::class, "store"])->name("Guaideness.store");
    Route::get("/readbyid/{id?}", [GuaidenessController::class, "readById"])->name("Guaideness.readbyid");
    Route::get("/delete/{id?}", [GuaidenessController::class, "destroy"])->name("Guaideness.delete");
});
#####################Guaideness############

Route::prefix("about")->group(function () {
    Route::get("/", [AboutController::class, "index"])->name("about");
    Route::get("/read", [AboutController::class, "read"])->name("about.read");
    Route::post("/store", [AboutController::class, "store"])->name("about.store");
    Route::get("/readbyid/{id?}", [AboutController::class, "readById"])->name("about.readbyid");
    Route::get("/deletebyid/{id?}", [AboutController::class, "destroy"])->name("about.deletebyid");
});






























require __DIR__ . '/auth.php';
