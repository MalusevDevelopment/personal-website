<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'app:generate-sitemap';

    protected $description = 'Generates sitemap for the application.';

    private const string DOMAIN = 'https://www.dusanmalusev.dev';

    public function handle(): void
    {
        $sitemap = Sitemap::create();

        $sitemap->add(
            Url::create(self::DOMAIN.'/')
                ->setLastModificationDate(now()->timezone('Europe/Belgrade'))
                ->setPriority(1.0)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->addImage(
                    self::DOMAIN.'/images/me.jpeg',
                    'Me',
                    title: 'Dusan Malusev',
                )
        );

        $sitemap->writeToFile(public_path('sitemap.xml'));
    }
}
