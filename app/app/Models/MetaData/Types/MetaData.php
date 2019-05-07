<?php

namespace App\Models\MetaData\Types;

use App\Models\MetaData\Types\Field as Field;
use App\Models\MetaData\Types\Relation as Relation;
use App\Models\MetaData\Types\Enum as Enum;
use App\Models\MetaData\Types\Group as Group;

abstract class MetaData {

    public $schema = [];
    public $current = [];

    /**
     * Declare abstract class
     */
    public abstract function schema();

    /**
     * Init schema 
     * @param string $title for schema of entity
     * @return $this
     */
    public function init($title) {
        $this->schema = [$title => [
                'fields' => [],
                'relations' => []
        ]];

        $this->current = &$this->schema[$title];
        return $this;
    }

    /**
     * Add field to current schema
     * @param Field $value
     * @return $this
     */
    public function addField($value) {

        if ($value instanceof Field) {
            $this->current['fields'][$value->getId()] = $value->schema();
        }
        return $this;
    }

    /**
     * Add relation to current schema
     * @param Relation $value
     * @return $this
     */
    public function addRelation($value) {
        if ($value instanceof Relation) {
            $this->current['relations'][$value->getId()] = $value->schema();
        }
        return $this;
    }

    /**
     * Add enum for values
     * @param Enum $value
     * @return $this
     */
    public function addEnum($value) {
        if ($value instanceof Enum) {
            $this->current['enum'][$value->getId()] = $value->schema();
        }
        return $this;
    }
    
    /**
     * Add group for fields
     * @param \App\Models\MetaData\Types\Group $value
     * @return $this
     */
    
    public function addGroups($value) {
        if ($value instanceof Group) {
            $this->current['groups'][$value->getId()] = $value->schema();
        }
        return $this;
    }

    /**
     * Return generated schema
     * @return array $schema return current schema
     */
    public function get() {
        return $this->schema;
    }

}
