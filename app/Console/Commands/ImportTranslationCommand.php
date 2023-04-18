<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ImportTranslationCommand extends Command
{
    protected $signature = 'translation:import';

    protected $description = 'Import translations from JSON files';

    public function handle()
    {
        $path = resource_path('lang');
        var_dump('path', $path);

        $locales = File::directories($path);
        var_dump('locales', $locales);

        $translations = array();

        foreach ($locales as $locale) {
            $localeName = basename($locale);
            var_dump('localeName', $localeName);

            $files = File::allFiles($locale);
            var_dump('files', $files);

            foreach ($files as $file) {
                $filename = $file->getFilename();
                $group = $file->getBasename('.json');

                $translations[$filename][$group][$localeName] = include $file;
            }
        }

        $outputPath = resource_path('lang/new-lang.json');
        $json = json_encode($translations, JSON_PRETTY_PRINT);

        File::put($outputPath, $json);

        $this->info('Translations imported successfully.');
    }
}

