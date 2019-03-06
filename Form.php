<?php

/**
 * Class Form
 * Allows to generate a form easily
 */

class Form
{
    /**
     * @var array Data used by the form
     */
    protected $data;

    /**
     * @var string Tag used to surround fields
     */
    protected $surround = 'p';


    /**
     * Form constructor.
     * @param array $data Data used by the form
     */
    public function __construct($data = array())
        // $data array, par défaut vide, donc pas obligé en param ds index
    {
        $this->data = $data;
    }

    /**
     * @param $html string Surrounded HTML code
     * @return string
     */
    protected function surround($html)
    {
        return "<{$this->surround}>{$html}</$this->surround}>";
        // accolades pour que la variable soi interprétée par les ""
    }

    /**
     * @param $index string Index of the value to get
     * @return mixed|null
     */
    protected function getValue($index)
    {
        return isset($this->data[$index]) ? $this->data[$index]: null ;
    }

    /**
     * @param $name string
     * @return string
     */
    protected function input($name)
    {
        return $this->surround('<input type="text" name="' . $name . '"
        value="' . $this->getValue($name) . '">'
        );
    }

//    /**
//     * @param $label string
//     * @param $type string
//     * @param $name string
//     */
//    public function input($label, $type, $name)
//    {
//        echo '<p><label for="'.$name.'" />'.$label.'</label></p>
//            <p><input type="'.$type.'" id="" name="' .$name. '" id="'.$name.'"
//            value="'.$this->getValue($name).'" /></p>';
//    }

    /**
     * @return string
     */
    public function submit()
    {
        return $this->surround('<button type="submit">Envoyer</button>');
    }
}