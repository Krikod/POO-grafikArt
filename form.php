<?php

class Form
{
    private $data;
    public $surround = 'p';

    public function __construct($data = array())
        // $data array, par défaut vide, donc pas obligé en param ds index
    {
        $this->data = $data;
    }

    private function surround($html)
    {
        return "<{$this->surround}>{$html}</$this->surround}>";
        // accolades pour que la variable soi interprétée par les ""
    }

    private function getValue($index)
    {
        return isset($this->data[$index]) ? $this->data[$index]: null ;
    }

//    public function input($name)
//    {
//        return $this->surround('<input type="text" name="' . $name . '"
//        value="' . $this->getValue($name) . '">'
//        );
//    }

    public function input($label, $type, $name)
    {
        echo '<p><label for="'.$name.'" />'.$label.'</label></p>
            <p><input type="'.$type.'" id="" name="' .$name. '" id="'.$name.'"
            value="'.$this->getValue($name).'" /></p>';
    }

    public function submit()
    {
        return $this->surround('<button type="submit">Envoyer</button>');
    }
}