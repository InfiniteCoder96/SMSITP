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

//Route::get('/Aadmin/dashboard', function (){
//    return view('Admin.Academic_Management.dashboard') ;
//});



Route::get('/Aadmin/subjects', function (){
    return view('Admin.Academic_Management.manage_subject') ;
});

Route::get('/Aadmin/classes', function (){
    return view('Admin.Academic_Management.manage_class') ;
});

Route::get('/Aadmin/sections', function (){
    return view('Admin.Academic_Management.manage_section') ;
});


Route::get('/Aadmin/searchV', function (){
    $Results=null;
    return view('Admin.Academic_Management.search',compact('Results')) ;
});

Route::get('Aadmin/search', 'SearchController@search');

Route::get('/Aadmin/searchAllV', function (){
    $ClassResults=null;
    $ClassTResults=null;
    $SubjectResults=null;
    $SubjectTResults=null;
    $SectionResults=null;
    $SectionHResults=null;
    return view('Admin.Academic_Management.searchAll',compact('ClassResults','ClassTResults','SubjectResults','SubjectTResults','SectionResults','SectionHResults')) ;
});

Route::get('Aadmin/searchAll', 'SearchController@searchAll');

Route::get('/Aadmin/searchTeacherS', function (){
    $Results=null;
    return view('Admin.Academic_Management.searchTeachers',compact('Results')) ;
});

Route::get('Aadmin/searchTeacherS', 'SearchController@searchTeacherS');


Route::get('/Aadmin/invoice', function (){
    return view('Admin.Academic_Management.invoice') ;
});

Route::get('/Aadmin/invoiceD', function (){
    return view('Admin.Academic_Management.invoice') ;
});

Route::get('/ID', 'SubjectSController@SubjectIDGenerator');

Route::get('/Aadmin/pdf','ReportController@pdfS');

Route::get('/Aadmin/pdf/index','ReportController@index');

Route::get('/Aadmin/pdf/download','ReportController@download');

//Route::get('/id','SubjectSController@SubjectIDGenerator');
Route::resource('Aadmin/ClassS','ClassController');

Route::resource('Aadmin/ClassTeacherS','ClassTeacherSController');

Route::resource('Aadmin/SubjectS','SubjectSController');

Route::resource('Aadmin/SubjectTeacherS','SubjectTeacherSController');

Route::resource('Aadmin/SectionS','SectionSController');

Route::resource('Aadmin/SectionalHeadS','SectionalHeadSController');

Route::resource('Aadmin/Dashboard','DashboardController');



//Route::get('Aadmin/dashboard/search',SearchController@search);

Route::get('Aadmin/dashboard/events', 'EventController@calendar');


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
// Administrator Routes

Route::match(['get','post'],'/admin/manage-students', 'StudentController@addStudent');

Route::get('/admin/dashboard', function (){
    return view('Admin.User_Management.Admin.admin_view');
});