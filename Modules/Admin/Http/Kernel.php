<?php
namespace Modules\Admin\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;
use Modules\Admin\Http\Middleware\CheckPermission;

class Kernel extends HttpKernel
{
    protected $routeMiddleware = [
        // Other middleware...
        'checkPermission' => CheckPermission::class,
    ];
}
