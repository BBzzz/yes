<?php
class UserTest extends CDbTestCase
{
	public $fixtures=array(
		'users'=>'User',
		'authAssign'=>':AuthAssignment',
	);
	public function testUserRoleAssignment()
	{
		$user = $this->users('user2');
		$this->assertEquals(1,$user->associateUserToRole('member',$user->id));
	}
	public function testGetUserRoleOptions()
	{
		$options = User::getUserRoleOptions();
		$this->assertEquals(count($options),2);
		$this->assertTrue(isset($options['admin']));
		$this->assertTrue(isset($options['member']));
	}
}
