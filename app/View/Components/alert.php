<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\HtmlString;
use Illuminate\View\Component;

class alert extends Component
{
    public $type;
    public $message;

    protected $types =[
        'success',
        'info',
        'danger'
    ];
    /**
     * Create a new component instance.
     */
    public function __construct(string $type="info")  // by default if type and message not put
    {
        $this->type = $type;

    }

    public function validType(){
        return in_array($this->type, $this->types) ? $this->type : "danger";  //this is ternery operator. if $this-type ==$this->types then it will retun $this->type which is puted by user but from the array,  else it will be type="danger"
    }

    public function link($text, $target = "#"){
        return new HtmlString('<a href="'.$target.'" class="alert-link">'. $text .'</a>');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');  // function return in component/alert file ko data send kar rhar hai
    }
}
