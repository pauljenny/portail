<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addasso extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('asso', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => 8,
              'autoincrement' => true,
              'primary' => true,
             ),
             'name' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'length' => 50,
             ),
             'login' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'length' => 32,
             ),
             'pole_id' => 
             array(
              'type' => 'integer',
              'length' => 8,
             ),
             'type_id' => 
             array(
              'type' => 'integer',
              'length' => 8,
             ),
             'summary' => 
             array(
              'type' => 'string',
              'length' => 150,
             ),
             'description' => 
             array(
              'type' => 'string',
              'length' => NULL,
             ),
             'logo' => 
             array(
              'type' => 'string',
              'length' => 100,
             ),
             'active' => 
             array(
              'type' => 'boolean',
              'notnull' => true,
              'default' => 1,
              'length' => 25,
             ),
             'passation' => 
             array(
              'type' => 'boolean',
              'notnull' => true,
              'default' => 0,
              'length' => 25,
             ),
             'salle' => 
             array(
              'type' => 'string',
              'length' => 6,
             ),
             'phone' => 
             array(
              'type' => 'string',
              'length' => 15,
             ),
             'facebook' => 
             array(
              'type' => 'string',
              'length' => 100,
             ),
             'joignable' => 
             array(
              'type' => 'boolean',
              'notnull' => true,
              'default' => 1,
              'length' => 25,
             ),
             'created_at' => 
             array(
              'notnull' => true,
              'type' => 'timestamp',
              'length' => 25,
             ),
             'updated_at' => 
             array(
              'notnull' => true,
              'type' => 'timestamp',
              'length' => 25,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'id',
             ),
             'collate' => 'utf8_unicode_ci',
             'charset' => 'utf8',
             ));
    }

    public function down()
    {
        $this->dropTable('asso');
    }
}