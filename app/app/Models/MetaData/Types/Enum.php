<?php

namespace App\Models\MetaData\Types;

class Enum {
   
    private $id;
    private $values = [];
   
    /**
     * Set id of enum
     * @param string $value
     * @return $this
     */
    public function __construct($value) {
        $this->id  = $value;
        return $this;
    }
    
    /**
     * Return id of enum
     * @return string id
     */
    public function getId(){
        return $this->id;
    }
    
    /**
     * Add value item to list
     * @param string $value
     * @return $this
     */
    public function addItem($value){
        $this->values[] = $value;
        return $this;
    }
    
    /**
     * Generate schema for enum
     * @return array values
     */
    public function schema(){
        return $this->values;
    }
    
}
