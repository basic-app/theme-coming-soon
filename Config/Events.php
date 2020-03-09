<?php

use BasicApp\System\SystemEvents;
use BasicApp\Site\SiteEvents;
use BasicApp\Helpers\CliHelper;

if (class_exists(SystemEvents::class))
{
    SystemEvents::onUpdate(function()
    {
        $themeDir = FCPATH . 'themes' . DIRECTORY_SEPARATOR . 'startbootstrap-coming-soon';

        if (is_dir($themeDir))
        {
            return;
        }

        CliHelper::downloadToFile(
            'https://codeload.github.com/BlackrockDigital/startbootstrap-coming-soon/zip/master', 
            $themeDir . '.zip'
        );

        CliHelper::zipExtractTo($themeDir . '.zip', $themeDir);

        CliHelper::delete($themeDir . '.zip');

        $dirs = ['vendor', 'js', 'img', 'css', 'mp4'];

        foreach($dirs as $dir)
        {
            CliHelper::copy(
                $themeDir . DIRECTORY_SEPARATOR . 'startbootstrap-coming-soon-master' . DIRECTORY_SEPARATOR . $dir, 
                $themeDir . DIRECTORY_SEPARATOR . $dir
            );
        }

        CliHelper::delete($themeDir . DIRECTORY_SEPARATOR . 'startbootstrap-coming-soon-master');

        CliHelper::copy(
            dirname(__DIR__) . DIRECTORY_SEPARATOR . 'custom.css', 
            $themeDir . DIRECTORY_SEPARATOR . 'custom.css'
        );
    });
}

if (class_exists(SiteEvents::class))
{
    SiteEvents::onThemes(function($event)
    {
        $class = BasicApp\Themes\ComingSoon\SiteTheme::class;

        $event->result[$class] = 'Start Bootstrap - Coming Soon';
    });
}