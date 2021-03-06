<?php

/**
 * BaseOntologyclassObjectproperty
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $ontologyclass_id
 * @property integer $objectproperty_id
 * @property Ontologyclass $Ontologyclass
 * @property Objectproperty $Objectproperty
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOntologyclassObjectproperty extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('ontologyclass_objectproperty');
        $this->hasColumn('ontologyclass_id', 'integer', 8, array(
             'type' => 'integer',
             'unsigned' => true,
             'primary' => true,
             'length' => '8',
             ));
        $this->hasColumn('objectproperty_id', 'integer', 8, array(
             'type' => 'integer',
             'unsigned' => true,
             'primary' => true,
             'length' => '8',
             ));

        $this->option('collation', 'utf8_general_ci');
        $this->option('charset', 'utf8');
        $this->option('type', 'MEMORY');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Ontologyclass', array(
             'local' => 'ontologyclass_id',
             'foreign' => 'id'));

        $this->hasOne('Objectproperty', array(
             'local' => 'objectproperty_id',
             'foreign' => 'id'));
    }
}