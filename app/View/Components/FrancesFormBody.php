<?php

namespace App\View\Components;

use App\Models\libros_frances;
use Illuminate\View\Component;

class FrancesFormBody extends Component
{
    private $libros_frances;
    /**
     * Create a new component instance.
     * @param \App\Models\libros_frances $libros_frances
     * @return void
     */
    public function __construct( $libros_frances = null )
    {
      
        $this->libros_frances = $libros_frances;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $params =
        [
             'libros_frances' => $this->libros_frances,
        ];
        return view('components.frances-form-body', $params);
    }
}
