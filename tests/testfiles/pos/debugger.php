<?php
// Autogenerated PersistentObject definition

$def = new ezcPersistentObjectDefinition();
$def->table = 'debugger';
$def->class = 'debugger';

$def->properties['session_id']               = new ezcPersistentObjectProperty();
$def->properties['session_id']->columnName   = 'session_id';
$def->properties['session_id']->propertyName = 'session_id';
$def->properties['session_id']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

return $def;

?>