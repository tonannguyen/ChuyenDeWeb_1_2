<?php

namespace App\Http\Controllers;

use App\Models\MType;
use Illuminate\Http\Request;
use HTMLDomParser;

class DemoController extends Controller
{
    public function index()
    {
        $lib = new HTMLDomParser();
		$html = $lib::file_get_html('https://vieclam24h.vn/nhan-vien-kinh-doanh-c96.html');
		$attr =  $html->find('a.text_grey2');
		foreach ($attr as $e) {
			if ($e->title!=false) {
				var_dump($e->title);
				echo '</br>';
			    var_dump($e->href);
			    echo '</br>';
			}

		};
        
    
        
        //return view('demo');
	}
	
	public function get()
	{
		$rs = new MType();
		var_dump($rs->getAll());
	}
    
}