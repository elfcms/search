<?php

namespace Elfcms\Search\View\Components;

use Illuminate\View\Component;

class Search extends Component
{
    public $item, $theme;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($item, $theme='default')
    {
        /* if (is_numeric($item)) {
            $item = intval($item);
        }
        elseif (gettype($item) == 'string') {
            //
        } */
        $this->item = $item;
        $this->theme = $theme;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('search::components.search.'.$this->theme);
    }
}
