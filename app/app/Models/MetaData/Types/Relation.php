<?php

namespace App\Models\MetaData\Types;

class Relation {

    private $id;
    private $fields = [];
    private $short_view = '';
    private $full_view = [];
    private $type = 'select';
    private $select = 'single';
    private $path = '';

    public function __construct($value) {
        $this->id = $value;
        return $this;
    }

    /**
     * Add field to current relation
     * @param \App\Models\MetaData\Types\Field $value
     * @return $this
     */
    public function field($value) {
        if ($value instanceof Field) {
            $this->fields[$value->getId()] = $value->schema();
        }
        return $this;
    }


    /**
     * Set identifiers of fields visible in short-view
     * @param mixed $value
     * @return $this
     */
    public function short_view($value, $operator = NULL)
    {
        $operatorData = $operator;
        $valueView = '';

        // if (is_string($value)) {
        //     $value = $value;
        // }

        if (is_array($value) && !empty(array_filter($value))) {

            $getKeys = array_keys($value);

            foreach ($getKeys as $key) {

                if (isset($value[$key]) && !is_numeric($key) && !empty(array_filter($value[$key]))) {


                    if ($operatorData == NULL) {

                        $valueView .= implode(' ', $value[$key]);

                    } else {

                        if (count($getKeys) > 1) {

                            $valueView .= implode(' ' . $operator . ' ', $value[$key]) . ' ';

                        } else {

                            $valueView .= implode(' ' . $operator . ' ', $value[$key]);

                        }

                    }

                } else {


                    if ($operatorData == NULL) {

                        $valueView = implode(' ', $value);

                    } else {

                        $valueView = implode(' ' . $operator . ' ', $value);

                    }

                }

            }

        } else {

            $valueView = $value;

        }

        $this->short_view = $valueView;

        return $this;
    }

    /**
     * Set identifiers of fields visibile in full-view
     * @param mixed $value
     * @return $this
     */
    public function full_view($value) {
        if (is_string($value)) {
            $value = [$value];
        }

        $this->full_view = $value;
        return $this;
    }

    /**
     * Set type of current relation
     * @param string $value
     * @return $this
     */
    public function type($value) {
        $this->type = $value;
        return $this;
    }

    /**
     * Set how much values can be selected
     * @param string $value
     * @return $this
     */
    public function select($value) {
        $this->select = $value;
        return $this;
    }

    /**
     * Set path for relation
     * @param sting $value
     * @return $this
     */
    public function path($value) {
        $this->path = $value;
        return $this;
    }

    /**
     * Get identifier for relation
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Return current generate schema
     * @return $result
     */
    public function schema() {
        $result = [
            'short_view' => $this->short_view,
            'full_view' => $this->full_view,
            'fields' => $this->fields,
            'type' => $this->type,
            'select' => $this->select,
            'path' => $this->path
        ];

        $optionsArr = [];
        if(!empty($optionsArr)){
            foreach($optionsArr as $option){
                if(isset($this->$option)) $result[$option] = $this->$option;
            }
        }

        return $result;
    }

}
