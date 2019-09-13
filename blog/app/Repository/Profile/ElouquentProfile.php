<?php  

namespace App\Repository\Profile;
use App\Profile;

class ElouquentProfile implements ProfileRepository
{	
	/**
	*@var Profile
	*/
	private $model;
	
	public function __construct(Profile $profile)
	{
		$this->model = $profile;
	}
	
	public function getProfile(int $profile_id)
	{
		return $this->model->findOrFail($profile_id);
	}	
}