<?php

namespace App\Http\Controllers\extended_ui;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TimelineBasic extends Controller
{
  public function index()
  {
    return view('content.extended-ui.extended-ui-timeline-basic');
  }
}
