<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Permission_model extends ME_Model
{	
	function __construct()
	{
		parent::__construct();
	}

	public function hasPerm($permission) 
	{
	  return isset($this->permissions[$permission]);
	}
	
	// check if user has a specific privilege
  public function hasPrivilege($perm) {
      foreach ($this->roles as $role) {
          if ($role->hasPerm($perm)) {
              return true;
          }
      }
      return false;
  }
}