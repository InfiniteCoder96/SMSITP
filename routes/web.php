<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//Authentication Routes
Auth::routes();


//HR Manager Routes

Route::get('/HRadmin/dashboard', function (){
    return view('Admin.HR_Management.dashboard') ;
});

Route::get('/HRadmin/academicStaff', function (){
    return view('Admin.HR_Management.academic_staff') ;
});

Route::get('/HRadmin/nonAcademicStaff', function (){
    return view('Admin.HR_Management.non_academic_staff') ;
});

Route::get('/HRadmin/payroll', function (){
    return view('Admin.HR_Management.payroll') ;
});


//Exam Centre Manager Routes

Route::get('/ECadmin/dashboard', function (){
    return view('Admin.Exam_Centre_Management.dashboard') ;
});

Route::get('/ECadmin/publishResults', function (){
    return view('Admin.Exam_Centre_Management.publishResults') ;
});

Route::get('/ECadmin/questionBank', function (){
    return view('Admin.Exam_Centre_Management.questionBank') ;
});

//new routes

Route::resource('results','ResultController');

Route::get('/ECadmin/viewResults','ResultController@index') ;

//Route::get('/ECadmin/publishResults','ResultController@index1') ;

Route::resource('qBanks','QBankController');

Route::get('/ECadmin/searchResults','ResultController@create1');

Route::get('/search','ResultController@search');

Route::get('/QBank','QBankController@searchQBank');

Route::get('/ECadmin/resultsHome', function (){
    return view('Admin.Exam_Centre_Management.results') ;
});

Route::get('/ECadmin/studentsResults', function (){
    return view('Admin.Exam_Centre_Management.studentsResults') ;
});

Route::get('/searchBySId','ResultController@searchBySId');

Route::get('/pdf','ResultController@downloadPdf');

Route::get('/ECadmin/dashboard','QBankController@dashboardController');

//Route::get('/chartView','ResultController@chartIndex');
//
//Route::get('/chart','ResultController@chart');




//Academic Manager Routes

Route::get('/Aadmin/dashboard', function (){
    return view('Admin.Academic_Management.dashboard') ;
});

Route::get('/Aadmin/subjects', function (){
    return view('Admin.Academic_Management.manage_subject') ;
});

Route::get('/Aadmin/classes', function (){
    return view('Admin.Academic_Management.manage_class') ;
});

Route::get('/Aadmin/sections', function (){
    return view('Admin.Academic_Management.manage_section') ;
});


//Non Academic Manager Routes

Route::get('/NAadmin/dashboard', function (){
    return view('Admin.Non_Academic_Management.dashboard') ;
});

Route::get('/NAadmin/manage-sports', function (){
    return view('Admin.Non_Academic_Management.manage_sports') ;
});

Route::get('/NAadmin/manage-sport-students', function (){
    return view('Admin.Non_Academic_Management.manage_sport_students') ;
});

Route::get('/NAadmin/manage-coaches', function (){
    return view('Admin.Non_Academic_Management.manage_coaches') ;
});

Route::get('/NAadmin/manage-teacher-in-charge', function (){
    return view('Admin.Non_Academic_Management.manage_sports') ;
});

//Transport Manager Routes

Route::get('/Tadmin/dashboard', function (){
    return view('Admin.Transport_Management.dashboard') ;
});

Route::get('/Tadmin/manage-vehicles', function (){
    return view('Admin.Transport_Management.manage_vehicle') ;
});

Route::get('/Tadmin/manage-routes', function (){
    return view('Admin.Transport_Management.manage_routes') ;
});

Route::get('/Tadmin/student-report', function (){
    return view('Admin.Transport_Management.student_report') ;
});

Route::get('/Tadmin/staff-report', function (){
    return view('Admin.Transport_Management.staff_report') ;
});
// Administrator Routes

Route::match(['get','post'],'/admin/manage-students', 'StudentController@addStudent');

Route::get('/admin/dashboard', function (){
 return view('Admin.User_Management.Admin.admin_view');
});

Route::resource('students','StudentController');

//Library Manager Routes

Route::get('/library/dashboard', function (){
    return view('Admin.Library_Management.dashboard') ;
});

Route::get('/Library/viewAllMembers', function (){
    return view('Admin.Library_Management.viewAllMembers') ;
});

Route::get('/LibraryAdmin/addBookForm', function (){
    return view('Admin.Library_Management.addBookForm') ;
});



Route::get('/LibraryAdmin/nonAcademicStaff', function (){
    return view('Admin.HR_Management.non_academic_staff') ;
});
Route::resource('books','bookController');
