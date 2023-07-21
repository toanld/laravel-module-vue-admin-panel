<?php


class Myapp
{
    use \App\Traits\SingletonTrait;
    protected $modules = false;
    protected $isWebviewApp = false;
    protected $isMobile = false;
    protected $mobileDetect = null;

    protected $rootViewInetia = 'erp::layouts.app';
    function rootViewInetia($rootView = null){
        if(!empty($rootView)) $this->rootViewInetia = $rootView;
        return $this->rootViewInetia;
    }

    function setIsApp(){
        $this->isWebviewApp = true;
    }
    public function isMobile(){
        if(is_null($this->mobileDetect)) $this->mobileDetect = new \Detection\MobileDetect;
        $this->isMobile =  ($this->mobileDetect->isMobile() ? ($this->mobileDetect->isTablet() ? false : true) : false);
        return $this->isMobile;
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
