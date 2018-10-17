<?php

namespace App\Http\Controllers;

use App\ClassS;
use App\ClassTeacherS;
use App\SectionalHeadS;
use App\SectionS;
use App\SubjectS;
use App\SubjectTeacherS;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SearchController extends Controller
{
    //

    public function showSearchView()
    {
        $ClassSes = null;
        $ClassTeacherS = null;
        $SubjectS = null;
        $SubjectTeacherS = null;
        $SectionS = null;
        $SectionalHeads = null;

        $IDSuccess = null;
        $IDUnSuccess = null;
        return view('Admin.Academic_Management.dashboard', compact('ClassSes'))
            ->with(compact(ClassTeacherS))->with(compact(SubjectS))->with(compact(SubjectTeacherS))
            ->with(compact(SectionS))->with(compact(SectionalHeads))->with(compact('IDSuccess'))->with(compact(IDUnSuccess));
    }


    public function searchAll(Request $request)
    {


        $ClassResults = null;
        $ClassTResults = null;
        $SubjectResults = null;
        $SubjectTResults = null;
        $SectionResults = null;
        $SectionHResults = null;

        if ($request->has('Category', 'ID')) {

            switch ($request->Category) {

                case 'Classes': {
                    $ClassResults = ClassS::with('ClassTeacherSR')->where('ClassID', $request->ID)->get();
                    return view('Admin.Academic_Management.searchAll', compact('ClassResults', 'ClassTResults', 'SubjectResults', 'SubjectTResults', 'SectionResults', 'SectionHResults'));
                    break;
                }

                case 'ClassTeachers': {
                    $ClassTResults = ClassTeacherS::with('ClassSR')->where('ClassID', $request->ID)->get();
                    return view('Admin.Academic_Management.searchAll', compact('ClassResults', 'ClassTResults', 'SubjectResults', 'SubjectTResults', 'SectionResults', 'SectionHResults'));
                    break;
                }

                case 'Subjects': {
                    $SubjectResults = SubjectS::with('SubjectTeacherSR')->where('SubjectID', $request->ID)->get();
                    return view('Admin.Academic_Management.searchAll', compact('ClassResults', 'ClassTResults', 'SubjectResults', 'SubjectTResults', 'SectionResults', 'SectionHResults'));
                    break;
                }

                case 'SubjectTeachers': {
                    $SubjectTResults = SubjectTeacherS::with('SubjectSR')->where('SubjectID', $request->ID)->get();
                    return view('Admin.Academic_Management.searchAll', compact('ClassResults', 'ClassTResults', 'SubjectResults', 'SubjectTResults', 'SectionResults', 'SectionHResults'));
                    break;
                }

                case 'Sections': {
                    $SectionResults = SectionS::with('SectionalHeadSR')->where('SectionID', $request->ID)->get();
                    return view('Admin.Academic_Management.searchAll', compact('ClassResults', 'ClassTResults', 'SubjectResults', 'SubjectTResults', 'SectionResults', 'SectionHResults'));
                    break;
                }

                case 'SectionTeachers': {
                    $SectionHResults = SectionalHeadS::where('SectionID', $request->ID)->get();
                    return view('Admin.Academic_Management.searchAll', compact('ClassResults', 'ClassTResults', 'SubjectResults', 'SubjectTResults', 'SectionResults', 'SectionHResults'));
                    break;
                }

            }

        }
        return 'error';
//        else{
//            $ClassResults=null;
//            $ClassTResults=null;
//            return view('Admin.Academic_Management.searchAll',compact('Results','ClassTResults'));
//        }
    }


    public function searchTeacherS(Request $request)
    {

        $Results = null;
        if ($request->has('ID')) {
            $Results = SubjectTeacherS::where('SubjectTeacherID','=', $request->ID)->get();

            return view('Admin.Academic_Management.searchTeachers', compact('Results'));
        } else {
            $Results = null;
            return view('Admin.Academic_Management.searchTeachers', compact('Results'));
        }
    }

}