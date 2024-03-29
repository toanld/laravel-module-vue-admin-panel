<?php


class Myapp
{
    use \App\Traits\SingletonTrait;
    protected $modules = false;
    protected $isWebviewApp = false;
    protected $isMobile = false;
    protected $mobileDetect = null;
    protected $currentModule = null;

    protected $rootViewInetia = 'admin::layouts.admin';
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
    public function getCurrentModule(){
        if(!empty($this->currentModule)) return $this->currentModule;
        $url = request()->url();
        $path = request()->path();
        $moduleRoutes = app('router')->getRoutes()->getRoutesByMethod()["GET"];
        foreach ($moduleRoutes as $route) {
            if($path == "/" || empty($path)){
                if ($route->uri == "/" || empty($route->uri)) {
                    $currentModule = explode("\\",$route->getActionName());
                    $this->currentModule = ($currentModule[0] == "Modules" &&  isset($currentModule[1])) ? $currentModule[1] : null;
                    break;
                }
            }
            if (str_contains($path,$route->uri) && $route->uri != "/") {
                $currentModule = explode("\\",$route->getActionName());
                $this->currentModule = ($currentModule[0] == "Modules" &&  isset($currentModule[1])) ? $currentModule[1] : null;
                break;
            }
        }
        return $this->currentModule;
    }
}
function myapp(){
    return Myapp::getInstance();
}
