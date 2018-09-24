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
// Administrator Routes

Route::match(['get','post'],'/admin/manage-students', 'StudentController@addStudent');

Route::get('/admin/dashboard', function (){
 return view('Admin.User_Management.Admin.admin_view');
});

Route::resource('students','StudentController');

//Library Manager Routes

use Illuminate\Support\Facades\Input;
use App\books;
use App\Member;

//Route::get('/library/dashboard', function (){
//    return view('Admin.Library_Management.dashboard') ;
//});

Route::get('/Library/viewAllMembers', function (){
    return view('Admin.Library_Management.viewAllMembers') ;
});

Route::get('/LibraryAdmin/addBookForm', function (){
    return view('Admin.Library_Management.addBookForm') ;
});



Route::get('/Library/addNewMember', function (){
    return view('Admin.Library_Management.addNewMemberForm') ;
});
Route::resource('books','bookController');


Route::resource('members', 'MemberController');
Route::get('memberslist', 'MemberController@getMembers');

Route::get('/Library/returnBook', function (){
    return view('Admin.Library_Management.returnBook');
});

Route::resource('issue_books','issueBookController');

//Route::get('return/{id}', 'IssueBookController@return');
Route::post('return', 'IssueBookController@return');

Route::get('/Library/viewReturn', function () {
    return view('Admin.Library_Management.viewAllReturnBooks');
});

Route::post('confirmReturn', 'IssueBookController@addReturnTable');

Route::post('downloadPDF/{id}', 'bookController@downloadPDF');
Route::post('downloadmemberPDF/{id}', 'MemberController@downloadPDF');

Route::get('/library/downloadOverallReport', 'libraryDashboardController@downloadOverallReport');

Route::post('/searchBooks', function (){
   $q = Input::get('q');
   if($q != '') {
       //dd($q);
       $searchBookResult = books::where('bookname', 'LIKE', $q . '%')->orWhere('authorname', 'LIKE', $q . '%')->get();

       // dd($searchBookResult);
       if (count($searchBookResult) > 0)
           return view('Admin.Library_Management.searchBookResults')->withDetails($searchBookResult)->withQuery($q);
       //return view('Admin.Library_Management.searchBookResults')->with('details',$searchBookResult);
       else return view('Admin.Library_Management.searchBookResults')->withMessage("No details Found");
   }
  // return('dsds');
    else return view('Admin.Library_Management.searchBookResults')->withMessage("No details Found");
});

Route::post('/searchMembers', function (){
    $q = Input::get('q');
    //dd($q);
    if($q != '') {
        $searchMemberResult = Member::where('firstname', 'LIKE', $q . '%')->orWhere('lastname', 'LIKE', $q . '%')->orWhere('memberid', 'LIKE', $q . '%')->get();

        // dd($searchBookResult);
        if (count($searchMemberResult) > 0)
            return view('Admin.Library_Management.searchMemberResults')->withDetails($searchMemberResult)->withQuery($q);
        //return view('Admin.Library_Management.searchBookResults')->with('details',$searchMemberResult);
        else return view('Admin.Library_Management.searchMemberResults')->withMessage("No details Found");
    }
    else return view('Admin.Library_Management.searchMemberResults')->withMessage("No details Found");
});
Route::resource('return_books','returnController');

//Route::get('/Library/librarySettings', function (){
//    return view('Admin.Library_Management.settingsLibrary') ;
//});
Route::resource('library_settings','librarySettingsController');

Route::get('/totalbooks','libraryDashboardController@countofbooks');
Route::get('/totalmembers','libraryDashboardController@countofmembers');
//Route::get('librarydash')

//Route::get('/Library/count', function () {
//    return view('Admin.Library_Management.viewAllReturnBooks');
//});
Route::get('/library/dashboard','libraryDashboardController@create');
Route::get('/dashboard','libraryDashboardController@create');