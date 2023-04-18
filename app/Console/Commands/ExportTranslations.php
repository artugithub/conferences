<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Lang;

class ExportTranslations extends Command
{
    protected $signature = 'translation:export';

    protected $description = 'Export language files to a JSON file.';

    public function handle()
    {
        $translations = collect(File::allFiles(resource_path('lang')))
            ->flatMap(function ($file) {
                $locale = $file->getRelativePath();
                $group = $file->getBasename('.json');
                return [$locale.'.'.$group => Lang::getLoader()->load($locale, $group)];
            })->toJson(JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

        File::put(resource_path('lang/lang.json'), $translations);

        $this->info('Translations exported successfully.');
    }
}
