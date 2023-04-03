<?php
class Myapp
{
    use \App\Traits\SingletonTrait;
    protected $modules = false;
    protected $isWebviewApp = false;
    function setIsApp(){
        $this->isWebviewApp = true;
    }
    function isApp(){
        return $this->isWebviewApp;
    }
    function getModules(){
        if(empty($this->modules)){
            $this->modules = Module::all();
        }
        return $this->modules;
    }
}
function myapp(){
    return Myapp::getInstance();
}
