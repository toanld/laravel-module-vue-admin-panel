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
        if($this->modules !== false) return $this->modules;
        $fileJson = __DIR__ . "/../modules_statuses.json";
        if(file_exists($fileJson)) {
            $modules = json_decode(file_get_contents($fileJson), true);
            if (!empty($modules)) {
                $this->modules = $modules;
                return $modules;
            }
        }
        $this->modules = [];
        return [];
    }
}
function myapp(){
    return Myapp::getInstance();
}
