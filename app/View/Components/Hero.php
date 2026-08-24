<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Hero extends Component
{
    public $title;
    public $subtitle;
    public $buttonText;
    public $buttonLink;
    public $image;
    public $exclusionsText;

    public function __construct(
        $title = 'Canada Goose',
        $subtitle = 'spring styles have arrived',
        $buttonText = 'SHOP NOW',
        $buttonLink = '#',
        $image = 'hero-bg.jpg',
        $exclusionsText = '*click here for details'
    ) {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->buttonText = $buttonText;
        $this->buttonLink = $buttonLink;
        $this->image = $image;
        $this->exclusionsText = $exclusionsText;
    }

    public function render()
    {
        return view('components.hero');
    }
}