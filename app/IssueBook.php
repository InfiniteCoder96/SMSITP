<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IssueBook extends Model
{
    protected $table = 'issue_books';
    protected $fillable = ['bookbarcode', 'issuememberid'];
}
