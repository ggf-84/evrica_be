<?php

namespace App\Models\MetaData\Types;

class Field {

    private $id;
    private $label;
    private $type = "string";
//    private $multiple = false;
    private $length = 0;
    private $searchable = false;
    private $i18n_prefix = "{!!";
    private $i18n_suffix = "!!}";

    public function __construct($title) {
        $this->id = $title;
        $this->label = $this->i18n_prefix . $title . $this->i18n_suffix;
        return $this;
    }

    /**
     * Add label to current field
     * @param string $value
     * @return $this
     */
    public function label($value) {
        if ((strpos($value, $this->i18n_prefix) !== false) && (strpos($value, $this->i18n_suffix) !== false)) {
            $this->label = $value;
        } else {
            $this->label = $this->i18n_prefix . $value . $this->i18n_suffix;
        }
        return $this;
    }

    /**
     * Add type to current field
     * @param string $value
     * @return $this
     */
    public function type($value) {
        $this->type = $value;
        return $this;
    }

    /**
     * Add length for current field
     * @param integer $value
     * @return $this
     */
    public function length($value) {
        $this->length = filter_var($value, FILTER_VALIDATE_INT) ? filter_var($value, FILTER_VALIDATE_INT) : 0;
        return $this;
    }

    /**
     * Set if current field is searchable
     * @param boolean $value
     * @return $this
     */
    public function searchable($value) {
        $this->searchable = filter_var($value, FILTER_VALIDATE_BOOLEAN);
        return $this;
    }

    /**
     * Set if current field is sortable
     * @param boolean $value
     * @return $this
     */
    public function sortable($value) {
        $this->sortable = $value;
        return $this;
    }

    /**
     * Get identifier (name) for current field
     * @return type
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set multiple values selected
     * @param boolean $value
     * @return $this
     */
    public function multiple($value) {
        $this->multiple = $value;
        return $this;
    }

    /**
     * Return current field schema
     * @return array
     */
    public function schema() {

        $result = [
            'label' => $this->label,
            'type' => $this->type,
            'length' => $this->length,
            'searchable' => $this->searchable
        ];

        $optionsArr = ['multiple', 'sortable'];
        foreach($optionsArr as $option){
            if(isset($this->$option)) $result[$option] = $this->$option;
        }

        return $result;
    }

}
