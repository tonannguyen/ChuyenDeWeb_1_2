<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use HTMLDomParser;

class DemoController extends Controller
{
    public function index()
    {
        $html = HTMLDomParser::file_get_html("http://phpcoban.com/");
        if(is_object($html)){
		
            // Trả về đối tượng nếu tìm được, hoặc null nếu không.
            $t = $html->find("h2", 0);
            
            if($t){
              $title = $t->innertext;
            }
          
            echo "Title: ".$title."</br></br></br>";
            
        }
        
        return view('demo');
    }
    
}