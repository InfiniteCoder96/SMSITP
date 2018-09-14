<?php

namespace App\Http\Controllers;

use App\books;
use App\IssueBook;
use App\LibrarySettings;
use App\Member;
use App\ReturnBook;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class libraryDashboardController extends Controller
{

    public function create(){

        $bookcount = $this->countofbooks();
        $membercount = $this->countofmembers();
        $issuecount = $this ->countofissuebooks();
        $returnbookcount = $this->countreturnbooks();
        $finrcountdays = $this->nofdays();
        $totalfine = $this->calculatefine();

       // dd($bookcount);
        return view('Admin.Library_Management.dashboard',compact('bookcount','membercount','issuecount','returnbookcount','finrcountdays','totalfine')) ;
    }

    public function countofbooks(){
        $noofbooks = books::all();
        $bookcount = 0;

        foreach ($noofbooks as $noofbook){
            $bookcount++;
        }
        //$noofbook++;
        return $bookcount;
    }

    public function countofmembers(){
        $noofmembers = Member::all();
        $membercount = 0;

        foreach ($noofmembers as $noofmember){

            $membercount++;
        }

        return $membercount;
    }
    public function countofissuebooks(){
        $noofissuebooks = IssueBook::all();
        $issuebookcount = 0;

        foreach ($noofissuebooks as $noofissuebook){

            $issuebookcount++;
        }

        return $issuebookcount;
    }
    public function countreturnbooks(){
        $noofreturnbooks = ReturnBook::all();
        $returnbookcount = 0;

        foreach ($noofreturnbooks as $noofreturnbook){

            $returnbookcount++;
        }
        return $returnbookcount;
    }
    public function nofdays(){
        $noofdays = LibrarySettings::all()->get('noofdays');
        return $noofdays;

    }

    public function calculatefine(){
        $price = ReturnBook::all()->sum('fine');
        return $price;
    }
}
