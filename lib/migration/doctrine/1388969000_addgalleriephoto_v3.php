<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addgalleriephoto_v3 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->changeColumn('photo', 'is_public', 'boolean', '25', array(
             'notnull' => '1',
             ));
    }

    public function down()
    {

    }
}