<?php
class Member
{
	private $pseudo;
	private $email;
	private $signature;
	private $actif;

	public function getPseudo()
	{
		return $this->pseudo;
	}

	public function setPseudo($newpseudo)
	{
		$this->pseudo = $newpseudo;
	}
	
}
?>