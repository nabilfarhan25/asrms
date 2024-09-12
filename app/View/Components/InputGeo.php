<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputGeo extends Component
{
    public $fieldName;
    public $label;
    public $symbol;
    public $value1;
    public $value2;
    public $section2Enabled;
    public $unit;

    public function __construct($fieldName, $label, $symbol, $value1 = 0, $value2 = 0, $section2Enabled = true, $unit = 'm')
    {
        $this->fieldName = $fieldName;
        $this->label = $label;
        $this->symbol = $symbol;
        $this->value1 = $value1;
        $this->value2 = $value2;
        $this->section2Enabled = $section2Enabled;
        $this->unit = $unit;
    }

    public function render()
    {
        return view('components.input-geo');
    }
}