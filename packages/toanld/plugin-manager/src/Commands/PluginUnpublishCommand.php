<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jevan Tang
 * Released under the Apache-2.0 License.
 */

namespace Fresns\PluginManager\Commands;

use Fresns\PluginManager\Plugin;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class PluginUnpublishCommand extends Command
{
    use Traits\WorkPluginFskeyTrait;

    protected $signature = 'plugin:unpublish {fskey?}';

    protected $description = 'Distribute static resources of the plugin';

    public function handle()
    {
        $pluginFskey = $this->getPluginFskey();
        $plugin = new Plugin($pluginFskey);

        if (! $plugin->isValidPlugin()) {
            return Command::FAILURE;
        }

        File::deleteDirectory($plugin->getAssetsPath());

        $this->info("Unpublished: {$plugin->getFskey()}");

        return Command::SUCCESS;
    }
}
