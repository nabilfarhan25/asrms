<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FileUpload extends Component
{
    public $name;
    public $title;
    public $required;
    public $notes;
    public $maxFileSize;
    public $maxFiles;
    public $multiple;
    public $accept;
    public $type;

    public function __construct($name, $title, $required = false, $notes = null, $maxFileSize = null, $maxFiles = null, $multiple = false, $accept = "", $type = 'image')
    {
        $this->name = $name;
        $this->title = $title;
        $this->required = $required;
        $this->notes = $notes;
        $this->maxFileSize = $maxFileSize;
        $this->maxFiles = $maxFiles;
        $this->multiple = $multiple;
        $this->accept = $accept;
        $this->type = $type;
    }

    public function render()
    {
        return view('components.file-upload');
    }
}