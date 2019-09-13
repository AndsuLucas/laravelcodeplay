<?php  

namespace App\Repository\Post;

interface PostRepository
{
	public function getAll();

	public function getById($id);

	public function create(array $attributes);

	public function update(int $id, array $atributes);

	public function delete(int $id);

	public function getPostByProfile(int $profile_id);
}