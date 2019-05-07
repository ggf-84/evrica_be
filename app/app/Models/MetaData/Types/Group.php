<?php

namespace App\Models\MetaData\Types;


class Group{
    
    private $id;
    private $fields = [];
    
    public function __construct($value) {
        $this->id = $value;
        return $this;
    }
    
    /**
     * Return id for group
     * @return type
     */
    public function getId(){
        return $this->id;
    }
    
    /**
     * Set fields to group
     * @param string $value
     * @return $this
     */
    public function addItem($value){
        $this->fields[] = $value;
        return $this;
    }
    
    /**
     * Generate schema for group
     * @return array
     */
    public function schema(){
        return $this->fields;
    }
    
}


