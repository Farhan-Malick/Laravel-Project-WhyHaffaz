<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\EngHafizController;
use App\Http\Controllers\user\ArabicHafizController;
use App\Http\Controllers\admin\Admin_auth;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\EngPostController;
use App\Http\Controllers\admin\Post;
use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\whyhaffez\WhyhaffezController;
use App\Http\Controllers\admin\whyhaffez\WhyhaffezSectionTwo;
use App\Http\Controllers\admin\whyhaffez\WhyhaffezSectionThree;
use App\Http\Controllers\admin\whyhaffez\WhyhaffezSectionFour;
use App\Http\Controllers\admin\whyhaffez\WhyhaffezSectionFive;
use App\Http\Controllers\admin\whyhaffez\WhyhaffezSectionSixth;
use App\Http\Controllers\admin\whyhaffez\WhyhaffezSectionSeventh;
use App\Http\Controllers\admin\OurSheikh;
use App\Http\Controllers\admin\OurSheikhSecondSection;
use App\Http\Controllers\admin\Contact;
use App\Http\Controllers\admin\Footer;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\arabicadmin\ArabicPostController;
use App\Http\Controllers\arabicadmin\ArabicAboutController;
use App\Http\Controllers\arabicadmin\whyhaffez\ArabicWhyHaffezController;
use App\Http\Controllers\arabicadmin\whyhaffez\ArabicWhyhaffezSectionTwo;
use App\Http\Controllers\arabicadmin\whyhaffez\ArabicWhyhaffezSectionThree;
use App\Http\Controllers\arabicadmin\whyhaffez\ArabicWhyhaffezSectionFour;
use App\Http\Controllers\arabicadmin\whyhaffez\ArabicWhyhaffezSectionFive;
use App\Http\Controllers\arabicadmin\whyhaffez\ArabicWhyhaffezSectionSixth;
use App\Http\Controllers\arabicadmin\whyhaffez\ArabicWhyhaffezSectionSeventh;
use App\Http\Controllers\arabicadmin\ArabicOurSheikh;
use App\Http\Controllers\arabicadmin\ArabicOurSheikhSecondSection;
use App\Http\Controllers\arabicadmin\ArabicContact;
use App\Http\Controllers\arabicadmin\ArabicFooter;


        Route::get('/admin/login_submit',[Admin_auth::class,'login_submit']);

        Route::view('/admin/login','admin.login');

        Route::get('/admin/logout', function () {
            session()->forget('BLOG_USER_ID');
            return redirect('/admin/login');
        });

        Route::group(['middleware' =>['admin_auth']], function()
        {
            // Admin Routes
            Route::group(['namespace' => 'admin'],function(){
            Route::get('/admin',[Post::class,'listing']);  
            
             });    
        });
       

    Route::group(['middleware' =>['admin_auth']], function()
    {
         //Home Section Routes
         Route::get('/admin/post/list',[Post::class,'listing']);
         Route::view('/admin/post/add','admin.post.add');
         Route::post('/admin/post/submit',[Post::class,'submit']);
         Route::get('/admin/post/delete/{id}',[Post::class,'delete']);
         Route::get('/admin/post/edit/{id}',[Post::class,'edit']);
         Route::post('/admin/post/update/{id}',[Post::class,'update']);
         //About Section Routes
         Route::view('/admin/post/about/about','admin.post.about.about');
         Route::get('/admin/post/about/aboutlist',[AboutController::class,'about_listing']);
         Route::post('/admin/post/about/aboutsubmit',[AboutController::class,'about_submit']);
         Route::get('/admin/post/delete{id}',[AboutController::class,'about_delete']);
         Route::get('/admin/post/about/aboutedit/{id}',[AboutController::class,'about_edit']);
         Route::post('/admin/post/about/update/{id}',[AboutController::class,'about_update']);
        //Whyhaffez Section 1 Routes
        Route::view('/admin/post/whyhaffez/whyhaffezadd','admin.post.whyhaffez.whyhaffezadd');
        Route::get('/admin/post/whyhaffez/whyhaffezlist',[WhyhaffezController::class,'whyhaffez_listing']);
        Route::post('/admin/post/whyhaffez/whyhaffezsubmit',[WhyhaffezController::class,'whyhaffez_submit']);
        Route::get('/admin/post/whyhaffez/delete{id}',[WhyhaffezController::class,'whyhaffez_delete']);
        Route::get('/admin/post/whyhaffez/whyhaffezedit/{id}',[WhyhaffezController::class,'whyhaffez_edit']);
        Route::post('/admin/post/whyhaffez/update/{id}',[WhyhaffezController::class,'whyhaffez_update']);
        //Whyhaffez Section 2 Routes
        Route::view('/admin/post/whyhaffez/second_whyhaffez/whyhaffezadd','admin.post.whyhaffez.second_whyhaffez.whyhaffezadd');
        Route::post('/admin/post/whyhaffez/second_whyhaffez/whyhaffezsubmit2',[WhyhaffezSectionTwo::class,'whyhaffez_submit']);
        Route::get('/admin/second_whyhaffez/delete{id}',[WhyhaffezSectionTwo::class,'whyhaffez_delete']);
        Route::get('/admin/post/whyhaffez/second_whyhaffez/whyhaffezedit/{id}',[WhyhaffezSectionTwo::class,'whyhaffez_edit']);
        Route::post('/admin/post/whyhaffez/second_whyhaffez/update/{id}',[WhyhaffezSectionTwo::class,'whyhaffez_update']);
        //Whyhaffez Section 3 Routes
        Route::view('/admin/post/whyhaffez/third_whyhaffez/whyhaffezadd','admin.post.whyhaffez.third_whyhaffez.whyhaffezadd');
        Route::post('/admin/post/whyhaffez/third_whyhaffez/whyhaffezsubmit3',[WhyhaffezSectionThree::class,'whyhaffez_submit']);
        Route::get('/admin/third_whyhaffez/delete{id}',[WhyhaffezSectionThree::class,'whyhaffez_delete']);
        Route::get('/admin/post/whyhaffez/third_whyhaffez/whyhaffezedit/{id}',[WhyhaffezSectionThree::class,'whyhaffez_edit']);
        Route::post('/admin/post/whyhaffez/third_whyhaffez/update/{id}',[WhyhaffezSectionThree::class,'whyhaffez_update']);
        //Whyhaffez Section 4 Routes
        Route::view('/admin/post/whyhaffez/fourth_whyhaffez/whyhaffezadd','admin.post.whyhaffez.fourth_whyhaffez.whyhaffezadd');
        Route::post('/admin/post/whyhaffez/fourth_whyhaffez/whyhaffezsubmit4',[WhyhaffezSectionFour::class,'whyhaffez_submit']);
        Route::get('/admin/fourth_whyhaffez/delete{id}',[WhyhaffezSectionFour::class,'whyhaffez_delete']);
        Route::get('/admin/post/whyhaffez/fourth_whyhaffez/whyhaffezedit/{id}',[WhyhaffezSectionFour::class,'whyhaffez_edit']);
        Route::post('/admin/post/whyhaffez/fourth_whyhaffez/update/{id}',[WhyhaffezSectionFour::class,'whyhaffez_update']);
        //Whyhaffez Section 5 Routes
        Route::view('/admin/post/whyhaffez/fifth_whyhaffez/whyhaffezadd','admin.post.whyhaffez.fifth_whyhaffez.whyhaffezadd');
        Route::post('/admin/post/whyhaffez/fifth_whyhaffez/whyhaffezsubmit5',[WhyhaffezSectionFive::class,'whyhaffez_submit']);
        Route::get('/admin/fifth_whyhaffez/delete{id}',[WhyhaffezSectionFive::class,'whyhaffez_delete']);
        Route::get('/admin/post/whyhaffez/fifth_whyhaffez/whyhaffezedit/{id}',[WhyhaffezSectionFive::class,'whyhaffez_edit']);
        Route::post('/admin/post/whyhaffez/fifth_whyhaffez/update/{id}',[WhyhaffezSectionFive::class,'whyhaffez_update']);
        //Whyhaffez Section 6 Routes
        Route::view('/admin/post/whyhaffez/sixth_whyhaffez/whyhaffezadd','admin.post.whyhaffez.sixth_whyhaffez.whyhaffezadd');
        Route::post('/admin/post/whyhaffez/sixth_whyhaffez/whyhaffezsubmit6',[WhyhaffezSectionSixth::class,'whyhaffez_submit']);
        Route::get('/admin/sixth_whyhaffez/delete{id}',[WhyhaffezSectionSixth::class,'whyhaffez_delete']);
        Route::get('/admin/post/whyhaffez/sixth_whyhaffez/whyhaffezedit/{id}',[WhyhaffezSectionSixth::class,'whyhaffez_edit']);
        Route::post('/admin/post/whyhaffez/sixth_whyhaffez/update/{id}',[WhyhaffezSectionSixth::class,'whyhaffez_update']);
        //Whyhaffez Section 7 Routes
        Route::view('/admin/post/whyhaffez/seventh_whyhaffez/whyhaffezadd','admin.post.whyhaffez.seventh_whyhaffez.whyhaffezadd');
        Route::post('/admin/post/whyhaffez/seventh_whyhaffez/whyhaffezsubmit7',[WhyhaffezSectionSeventh::class,'whyhaffez_submit']);
        Route::get('/admin/seventh_whyhaffez/delete{id}',[WhyhaffezSectionSeventh::class,'whyhaffez_delete']);
        Route::get('/admin/post/whyhaffez/seventh_whyhaffez/whyhaffezedit/{id}',[WhyhaffezSectionSeventh::class,'whyhaffez_edit']);
        Route::post('/admin/post/whyhaffez/seventh_whyhaffez/update/{id}',[WhyhaffezSectionSeventh::class,'whyhaffez_update']);
    }); 
    Route::group(['middleware' =>['admin_auth']], function()
    {
    //OUR SHEIKH Section Routes
       Route::view('/admin/oursheikh/oursheikhadd','admin.oursheikh.oursheikhadd');
       Route::get('/admin/oursheikh/oursheikhlist',[OurSheikh::class,'oursheikh_listing']);
       Route::post('/admin/oursheikh/oursheikhsubmit',[OurSheikh::class,'oursheikh_submit']);
       Route::get('/admin/oursheikh/delete{id}',[OurSheikh::class,'oursheikh_delete']);
       Route::get('/admin/oursheikh/oursheikhedit/{id}',[OurSheikh::class,'oursheikh_edit']);
       Route::post('/admin/oursheikh/update/{id}',[OurSheikh::class,'oursheikh_update']);
    //OUR SHEIKH Images & NAMES Section Routes 
       Route::view('/admin/oursheikh/oursheikhpart/oursheikhadd','admin.oursheikh.oursheikhpart.oursheikhadd');
       Route::get('/admin/oursheikh/oursheikhpart/oursheikhlist',[OurSheikhSecondSection::class,'oursheikh_listing']);
       Route::post('/admin/oursheikh/oursheikhpart/oursheikhsubmit2',[OurSheikhSecondSection::class,'oursheikh_submit']);
       Route::get('/admin/oursheikh/oursheikhpart/delete{id}',[OurSheikhSecondSection::class,'oursheikh_delete']);
       Route::get('/admin/oursheikh/oursheikhpart/oursheikhedit/{id}',[OurSheikhSecondSection::class,'oursheikh_edit']);
       Route::post('/admin/oursheikh/oursheikhpart/update/{id}',[OurSheikhSecondSection::class,'oursheikh_update']);
    }); 
    Route::group(['middleware' =>['admin_auth']], function()
    {
    // Contact Section Routes
     Route::get('/admin/contact/list',[Contact::class,'listing']);
     Route::get('/admin/contact/contactedit/{id}',[Contact::class,'edit']);
     Route::post('/admin/contact/update/{id}',[Contact::class,'update']);
    }); 
    Route::group(['middleware' =>['admin_auth']], function()
    {
    // Footer Section Routes
     Route::get('/admin/footer/list',[Footer::class,'listing']);
     Route::get('/admin/footer/footeredit/{id}',[Footer::class,'edit']);
     Route::post('/admin/footer/update/{id}',[Footer::class,'update']);
    }); 

    Route::group(['middleware' =>['admin_auth']], function()
    {
    //ARABIC ADMIN ROUTES
        //Home Section Routes
        Route::get('/admin/arabicadmin/post/list',[ArabicPostController::class,'listing']);
        Route::view('/admin/arabicadmin/post/add','admin.arabicadmin.post.add');
        Route::post('/admin/arabicadmin/post/submit',[ArabicPostController::class,'submit']);
        Route::get('/admin/arabicadmin/post/delete/{id}',[ArabicPostController::class,'delete']);
        Route::get('/admin/arabicadmin/post/edit/{id}',[ArabicPostController::class,'edit']);
        Route::post('/admin/arabicadmin/post/update/{id}',[ArabicPostController::class,'update']);
        //About Section Routes
        Route::view('/admin/arabicadmin/post/about/about','admin.arabicadmin.post.about.about');
        Route::get('/admin/arabicadmin/post/about/aboutlist',[ArabicAboutController::class,'about_listing']);
        Route::post('/admin/arabicadmin/post/about/aboutsubmit',[ArabicAboutController::class,'about_submit']);
        Route::get('/admin/arabicadmin/post/delete{id}',[ArabicAboutController::class,'about_delete']);
        Route::get('/admin/arabicadmin/post/about/aboutedit/{id}',[ArabicAboutController::class,'about_edit']);
        Route::post('/admin/arabicadmin/post/about/update/{id}',[ArabicAboutController::class,'about_update']);
        //Whyhaffez Section 1 Routes
        Route::view('/admin/arabicadmin/post/whyhaffez/whyhaffezadd','admin.arabicadmin.post.whyhaffez.whyhaffezadd');
        Route::get('/admin/arabicadmin/post/whyhaffez/whyhaffezlist',[ArabicWhyHaffezController::class,'whyhaffez_listing']);
        Route::post('/admin/arabicadmin/post/whyhaffez/whyhaffezsubmit',[ArabicWhyHaffezController::class,'whyhaffez_submit']);
        Route::get('/admin/arabicadmin/post/whyhaffez/delete{id}',[ArabicWhyHaffezController::class,'whyhaffez_delete']);
        Route::get('/admin/arabicadmin/post/whyhaffez/whyhaffezedit/{id}',[ArabicWhyHaffezController::class,'whyhaffez_edit']);
        Route::post('/admin/arabicadmin/post/whyhaffez/update/{id}',[ArabicWhyHaffezController::class,'whyhaffez_update']);
        //Whyhaffez Section 2 Routes
        Route::view('/admin/arabicadmin/post/whyhaffez/second_whyhaffez/whyhaffezadd','admin.arabicadmin.post.whyhaffez.second_whyhaffez.whyhaffezadd');
        Route::post('/admin/arabicadmin/post/whyhaffez/second_whyhaffez/whyhaffezsubmit2',[ArabicWhyhaffezSectionTwo::class,'whyhaffez_submit']);
        Route::get('/admin/arabicadmin/second_whyhaffez/delete{id}',[ArabicWhyhaffezSectionTwo::class,'whyhaffez_delete']);
        Route::get('/admin/arabicadmin/post/whyhaffez/second_whyhaffez/whyhaffezedit/{id}',[ArabicWhyhaffezSectionTwo::class,'whyhaffez_edit']);
        Route::post('/admin/arabicadmin/post/whyhaffez/second_whyhaffez/update/{id}',[ArabicWhyhaffezSectionTwo::class,'whyhaffez_update']);
        //Whyhaffez Section 3 Routes
        Route::view('/admin/arabicadmin/post/whyhaffez/third_whyhaffez/whyhaffezadd','admin.arabicadmin.post.whyhaffez.third_whyhaffez.whyhaffezadd');
        Route::post('/admin/arabicadmin/post/whyhaffez/third_whyhaffez/whyhaffezsubmit3',[ArabicWhyhaffezSectionThree::class,'whyhaffez_submit']);
        Route::get('/admin/arabicadmin/third_whyhaffez/delete{id}',[ArabicWhyhaffezSectionThree::class,'whyhaffez_delete']);
        Route::get('/admin/arabicadmin/post/whyhaffez/third_whyhaffez/whyhaffezedit/{id}',[ArabicWhyhaffezSectionThree::class,'whyhaffez_edit']);
        Route::post('/admin/arabicadmin/post/whyhaffez/third_whyhaffez/update/{id}',[ArabicWhyhaffezSectionThree::class,'whyhaffez_update']);
        //Whyhaffez Section 4 Routes
        Route::view('/admin/arabicadmin/post/whyhaffez/fourth_whyhaffez/whyhaffezadd','admin.arabicadmin.post.whyhaffez.fourth_whyhaffez.whyhaffezadd');
        Route::post('/admin/arabicadmin/post/whyhaffez/fourth_whyhaffez/whyhaffezsubmit4',[ArabicWhyhaffezSectionFour::class,'whyhaffez_submit']);
        Route::get('/admin/arabicadmin/fourth_whyhaffez/delete{id}',[ArabicWhyhaffezSectionFour::class,'whyhaffez_delete']);
        Route::get('/admin/arabicadmin/post/whyhaffez/fourth_whyhaffez/whyhaffezedit/{id}',[ArabicWhyhaffezSectionFour::class,'whyhaffez_edit']);
        Route::post('/admin/arabicadmin/post/whyhaffez/fourth_whyhaffez/update/{id}',[ArabicWhyhaffezSectionFour::class,'whyhaffez_update']);
        //Whyhaffez Section 5 Routes
        Route::view('/admin/arabicadmin/post/whyhaffez/fifth_whyhaffez/whyhaffezadd','admin.arabicadmin.post.whyhaffez.fifth_whyhaffez.whyhaffezadd');
        Route::post('/admin/arabicadmin/post/whyhaffez/fifth_whyhaffez/whyhaffezsubmit5',[ArabicWhyhaffezSectionFive::class,'whyhaffez_submit']);
        Route::get('/admin/arabicadmin/fifth_whyhaffez/delete{id}',[ArabicWhyhaffezSectionFive::class,'whyhaffez_delete']);
        Route::get('/admin/arabicadmin/post/whyhaffez/fifth_whyhaffez/whyhaffezedit/{id}',[ArabicWhyhaffezSectionFive::class,'whyhaffez_edit']);
        Route::post('/admin/arabicadmin/post/whyhaffez/fifth_whyhaffez/update/{id}',[ArabicWhyhaffezSectionFive::class,'whyhaffez_update']);
        //Whyhaffez Section 6 Routes
        Route::view('/admin/arabicadmin/post/whyhaffez/sixth_whyhaffez/whyhaffezadd','admin.arabicadmin.post.whyhaffez.sixth_whyhaffez.whyhaffezadd');
        Route::post('/admin/arabicadmin/post/whyhaffez/sixth_whyhaffez/whyhaffezsubmit6',[ArabicWhyhaffezSectionSixth::class,'whyhaffez_submit']);
        Route::get('/admin/arabicadmin/sixth_whyhaffez/delete{id}',[ArabicWhyhaffezSectionSixth::class,'whyhaffez_delete']);
        Route::get('/admin/arabicadmin/post/whyhaffez/sixth_whyhaffez/whyhaffezedit/{id}',[ArabicWhyhaffezSectionSixth::class,'whyhaffez_edit']);
        Route::post('/admin/arabicadmin/post/whyhaffez/sixth_whyhaffez/update/{id}',[ArabicWhyhaffezSectionSixth::class,'whyhaffez_update']);
        //Whyhaffez Section 7 Routes
        Route::view('/admin/arabicadmin/post/whyhaffez/seventh_whyhaffez/whyhaffezadd','admin.arabicadmin.post.whyhaffez.seventh_whyhaffez.whyhaffezadd');
        Route::post('/admin/arabicadmin/post/whyhaffez/seventh_whyhaffez/whyhaffezsubmit7',[ArabicWhyhaffezSectionSeventh::class,'whyhaffez_submit']);
        Route::get('/admin/arabicadmin/seventh_whyhaffez/delete{id}',[ArabicWhyhaffezSectionSeventh::class,'whyhaffez_delete']);
        Route::get('/admin/arabicadmin/post/whyhaffez/seventh_whyhaffez/whyhaffezedit/{id}',[ArabicWhyhaffezSectionSeventh::class,'whyhaffez_edit']);
        Route::post('/admin/arabicadmin/post/whyhaffez/seventh_whyhaffez/update/{id}',[ArabicWhyhaffezSectionSeventh::class,'whyhaffez_update']);
        //OUR SHEIKH Section Routes
        Route::view('/admin/arabicadmin/oursheikh/oursheikhadd','admin.arabicadmin.oursheikh.oursheikhadd');
        Route::get('/admin/arabicadmin/oursheikh/oursheikhlist',[ArabicOurSheikh::class,'oursheikh_listing']);
        Route::post('/admin/arabicadmin/oursheikh/oursheikhsubmit',[ArabicOurSheikh::class,'oursheikh_submit']);
        Route::get('/admin/arabicadmin/oursheikh/delete{id}',[ArabicOurSheikh::class,'oursheikh_delete']);
        Route::get('/admin/arabicadmin/oursheikh/oursheikhedit/{id}',[ArabicOurSheikh::class,'oursheikh_edit']);
        Route::post('/admin/arabicadmin/oursheikh/update/{id}',[ArabicOurSheikh::class,'oursheikh_update']);
        //OUR SHEIKH Images & NAMES Section Routes 
        Route::view('/admin/arabicadmin/oursheikh/oursheikhpart/oursheikhadd','admin.arabicadmin.oursheikh.oursheikhpart.oursheikhadd');
        Route::get('/admin/arabicadmin/oursheikh/oursheikhpart/oursheikhlist',[ArabicOurSheikhSecondSection::class,'oursheikh_listing']);
        Route::post('/admin/arabicadmin/oursheikh/oursheikhpart/oursheikhsubmit2',[ArabicOurSheikhSecondSection::class,'oursheikh_submit']);
        Route::get('/admin/arabicadmin/oursheikh/oursheikhpart/delete{id}',[ArabicOurSheikhSecondSection::class,'oursheikh_delete']);
        Route::get('/admin/arabicadmin/oursheikh/oursheikhpart/oursheikhedit/{id}',[ArabicOurSheikhSecondSection::class,'oursheikh_edit']);
        Route::post('/admin/arabicadmin/oursheikh/oursheikhpart/update/{id}',[ArabicOurSheikhSecondSection::class,'oursheikh_update']);
        // Contact Section Routes
        Route::get('/admin/arabicadmin/contact/list',[ArabicContact::class,'listing']);
        Route::get('/admin/arabicadmin/contact/contactedit/{id}',[ArabicContact::class,'edit']);
        Route::post('/admin/arabicadmin/contact/update/{id}',[ArabicContact::class,'update']); 
        // Arabic Footer Section Routes
        Route::get('/admin/arabicadmin/footer/list',[ArabicFooter::class,'listing']);
        Route::get('/admin/arabicadmin/footer/footeredit/{id}',[ArabicFooter::class,'edit']);
        Route::post('/admin/arabicadmin/footer/update/{id}',[ArabicFooter::class,'update']);
            
    });

    // ClENT SITE ENGLISH ROUTES
    Route::group(['namespace' => 'user'],function()
    {
        Route::get('/', [EngHafizController::class,'home']);
        Route::get('/arabic', [EngHafizController::class,'Arabic']);
        Route::get('/login', [EngHafizController::class,'login']);
        Route::get('/registration',  [EngHafizController::class,'registration']);   
    });
    // ARABIC ROUTES
    Route::group(['namespace' => 'user'],function()
    {
        Route::get('/loginforArabic', [ArabicHafizController::class,'loginforArabic']);
        Route::get('/registrationforArabic',  [ArabicHafizController::class,'registrationforArabic']);
    });
