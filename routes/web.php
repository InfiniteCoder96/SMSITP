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

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
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

Route::resource('recruits','recruitController');

Route::resource('nonacademic','nonacademicController');

Route::get('/search','recruitController@search');

Route::get('/searchNon','nonacademicController@search');



Route::resource('salary','salaryController');

// Route::get('/', function () {
//     return view('form');
// });

Route::post('salary','salaryController@store');

Route::get('/downloadPDF/{sid}','salaryController@downloadPDF');





//Route::get('/abc','recruitController@idGenarator');



//Exam Centre Manager Routes

Route::get('/ECadmin/dashboard', function (){
    return view('Admin.Exam_Centre_Management.dashboard') ;
});

Route::get('/ECadmin/viewResults', function (){
    return view('Admin.Exam_Centre_Management.viewResults') ;
});

Route::get('/ECadmin/publishResults', function (){
    return view('Admin.Exam_Centre_Management.publishResults') ;
});

Route::get('/ECadmin/questionBank', function (){
    return view('Admin.Exam_Centre_Management.questionBank') ;
});


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

Route::get('/NAadmin/manage-achievements', function (){
    return view('Admin.Exam_Centre_Management.publishResults') ;
});

Route::get('/NAadmin/manage-coaches', function (){
    return view('Admin.Exam_Centre_Management.questionBank') ;
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

// Authentication Routes
Route::get('/login_user','customAuthController@showLoginForm')->name('showLoginForm');
Route::post('/login_user','customAuthController@login')->name('login');

Route::get('/register_admin','customAuthController@showRegisterForm')->name('showRegisterForm');
Route::post('/register_admin','customAuthController@register')->name('register');

Route::post('/logout_user','customAuthController@logout')->name('logout');


Route::get('/access_denied',function (){
    return view('auth.access_denied');
});

// Administrator Routes
Route::match(['get','post'],'/admin/manage-students', 'StudentController@addStudent');

Route::get('/admin/dashboard', 'AdminController@showAdminDashboard');

Route::get('search_student', 'StudentController@search')->name('search');
Route::get('search','StudentController@showSearchView')->name('showSearchView');
Route::get('new-admissions','TemporaryStudentsController@showNewAdmissions')->name('showNewAdmissions');

// Teacher Routes
Route::resource('teachers','TeacherController');

Route::get('/add', 'TeacherController@add');

// students routes
Route::get('/student/dashboard', 'StudentController@showStudentDashboard');

Route::get('/id', 'StudentController@student_id_generator');

Route::resource('students','StudentController');

Route::resource('temporary_students','TemporaryStudentsController');

// parent routes
Route::resource('parent_guardians','parentController');

Route::get('/parent/dashboard', 'parentController@showParentDashboard');

Route::get('/pr', 'parentController@index');

// front end Routes
Route::get('/events',function(){
    return view('Frontend.events');
});

Route::get('/join-us',function(){
    return view('Frontend.joinUs');
});

Route::get('/join-us/student',function(){
    return view('Frontend.JoinUsStudents');
});

Route::get('/home',function(){
    return view('Frontend.index');
});

Route::get('/download',function(){
    return view('Frontend.ApplicationFormDownload');
});

Route::get('/download-application','pdfController@stdApplication');

Route::get('/addDemoData','TemporaryStudentsController@Demo_store');

Route::get('/printID/{id}','pdfController@stdIDCard');

// Email routes

Route::get('/sendmail',function (){
   $data = [
       'title'=> 'hi guys',
       'content'=> 'Hello 1 Email'
   ];

   Mail::send('Frontend.email',$data,function ($message){
       $message -> to('pasinduvimansa96@gmail.com','Pasindu')->subject('Hello 1st Email');
   });
});

// Firebase Routes
Route::get('/firebase-apk', 'testFirebase@index');


//Library Manager Routes

Route::get('/library/dashboard', 'LibraryMgrController@showAdminDashboard');

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


Route::get('/test-firebase', function (){
    return view('Admin.User_Management.Admin.test') ;
});
