<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use App\Utilities;
use BadEggCup\Data;
use BadEggCup\Tools;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Retrieve the site name.
     */
    public function siteName(): string
    {
        return get_bloginfo('name', 'display');
    }

    public function with()
    {
        return [
            'Colour' => new Data\Colour,
            'CssClasses' => new Utilities\CssClasses,
            'VideoSrcset' => new Tools\VideoSrcset,
            'ImageSrcset' => new Tools\ImageSrcset,
            'siteName' => $this->siteName(),
        ];
    }
}
