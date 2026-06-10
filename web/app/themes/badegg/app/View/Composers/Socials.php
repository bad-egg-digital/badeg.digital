<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use BadEggCup\Tools;

class Socials extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'components.socials',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        $Settings = new Tools\Settings;

        return [
            'socials' => $Settings->lookup('socials', 'company'),
        ];
    }
}
