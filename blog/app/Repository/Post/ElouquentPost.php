<?php  

namespace App\Repository\Post;
use App\Post;

class ElouquentPost implements PostRepository
{
	private $model;

	public function __construct(Post $model)
	{
		$this->model = $model;
	}

	public function getAll(){
		return $this->model->all();
	}

	public function getById($id){

		return $this->model->find($id);
	}	

	public function create(array $attributes){

		return $this->model->create($attributes);
	}

	public function update($id, array $atributes){
		$post = $this->getById($id);
		$post->update($attributes);

		return $todo;
	}

	public function delete($id){
		$this->getById($id)->delete();
		return true;
	}

	public function getPostByProfile(int $profile_id)
	{
		return $this->model->where('profile_id', $profile_id);
	}

}