<?php
/**
 * Created by Lê Đình Toản.
 * User: dinhtoan1905@gmail.com
 * Date: 11/22/2019
 * Time: 3:25 PM
 */

use App\Traits\SingletonTrait;
use Illuminate\Support\Facades\Cache;

class myTranslate
{
    use SingletonTrait;
    var $texts = [];
    var $textDefaults = [];
    public $pathDefault = null;
    public $textDefaultVN = [];
    public $pathLang = null;
    var $m = null;
    function __construct()
    {
        $this->m = Cache::remember('languages',86400*10, function ()  {
            return \App\Models\Language::first();
        });
        if(!$this->m){
            $this->m = new \App\Models\Language();
            $this->m->json_default = json_encode($this->textDefaults);
            $this->m->json_translate = json_encode($this->texts);
            $this->m = $this->m->save();
        }
        if(!$this->m) return null;
        $this->m = Cache::remember('languages',86400*10, function ()  {
            return \App\Models\Language::first();
        });
        $this->textDefaults = (array) json_decode($this->m->json_default,true);
        $this->textDefaultVN = $this->textDefaults;
        $pathFileJsonDefault = base_path('lang/json') . "/en.json";
        if(file_exists($pathFileJsonDefault)){
            $arrDefaultEN = (array) json_decode(file_get_contents($pathFileJsonDefault),true);
            if(!empty($arrDefaultEN)){
                $this->textDefaults = array_merge($this->textDefaults,$arrDefaultEN);
            }
        }
        $this->texts = (array) json_decode($this->m->json_translate,true);
        $this->texts = array_merge($this->textDefaults,$this->texts);
    }

    public function add($text,$data = []){
        $key = md5(trim($text));
        if(!isset($this->textDefaults[$key])){
            $this->textDefaults[$key] = $text;
            $this->saveDefault();
            Cache::forget('languages');
        }else{
            $text = data_get($this->texts,$key,$text);
        }
        foreach ($data as $key => $value){
            $text = str_replace("{_" . $key . "_}",$value,$text);
            $text = str_replace("{{" . $key . "}}",$value,$text);
            $text = str_replace("{" . $key . "}"," " . $value ." ",$text);
        }
        return $text;
    }

    public function save($langs){
        if(!$this->m) return false;
        $this->m->json_translate = json_encode($langs);
        $this->m->save();
        Cache::forget('languages');
    }

    public function getDefault($vn = false){
        if($vn){
            return $this->textDefaultVN;
        }else{
            return $this->textDefaults;
        }

    }

    public function getLang(){
        return $this->texts;
    }

    public function saveDefault(){
        if(!$this->m) return false;
        $this->m->json_default = json_encode($this->textDefaults);
        $this->m->save();
        Cache::forget('languages');
    }
}
function myTranslate(){
    return myTranslate::getInstance();
}
function __text($text,$data = []){
    return myTranslate()->add($text,$data);
}
function myTransAdmin($text){
    return $text;
}
