<?php

namespace Modules\Admin\Console;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class VueCreatePage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'make:page';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $modules = array_keys(myapp()->getModules());
        $module = $this->choice("Chọn module cần tạo page", $modules);
        $typepages = [
            "Create.vue",
            "Edit.vue",
            "Index.vue"
        ];
        $typepage = $this->choice("Chọn kiểu page cần tạo", $typepages);
        $folder = $this->ask('Nhập tên folder (tên bảng dữ liệu ví dụ: Product, Category, Menu, User v.v..v)?');
        if(!empty($module) && !empty($typepage)){

        }
        $this->info($folder);
        //
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
           // ['example', InputArgument::REQUIRED, 'An example argument.'],
        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            //['example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null],
        ];
    }
}
