<?php

/**
 * EventMemberTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class EventMemberTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object EventMemberTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('EventMember');
    }

    public function getEventMember($event, $user)
  	{
    	$q = $this->createQuery('q')
            ->where('q.event_id = ?', $event)
            ->andWhere('q.user_id = ?', $user);
		return $q;
  	}
}