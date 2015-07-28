<?php
CLASS Web_gestion {
	private $pages;
	private $nb_pages;
	private $hash_pages;
	public $bdd;

	public function bdd_init() {
		$this->bdd = new PDO('mysql:host=127.0.0.1;dbname=studapart;port=8889;charset=utf8', 'root', 'root');
	}

	public function set_pages($path) {
		$this->pages = list_all_page($path);
		$this->nb_pages = $pages;
	}

	public function get_pages() {
		return $this->pages;
	}

	public function get_nb_pages() {
		return $this->nb_pages;
	}

	public function set_hash_pages($path) {
		if (empty($this->pages))
			$this->set_pages($path);
		$hash_pages = array();
		foreach ($this->pages as $value) {
			$this->hash_pages[$value] = hash('whirlpool', $value);
		}
	}

	public function get_hash_pages() {
		return $this->hash_pages;
	}

	public function sql_insert($table, $new) {
		$row_name = implode(', ', array_keys($new));
		$array_len = count($new);
		$values = "";
		foreach ($new as $elem) {
			if (is_int($elem))
				$values .= $elem.", ";
			else
				$values .= "'".$elem."'";
			if ($array_len != 1)
				$values .=', ';
			$array_len--;
		}
		$len = strlen($values);
		$this->bdd->exec('INSERT INTO '.$table.'('.$row_name.') VALUES('.$values.')');
	}

	public function sql_value_check($command) {
		$rep = $this->bdd->query($command);
		$donnee = $rep->fetch();
		$rep->closeCursor();
		if ($donnne)
			return (1);
		else
			return (0);
	}

	public function return_404($table) {
		$rep = $this->bdd->query('SELECT * FROM '.$table.' WHERE furniture="404"');
		$ret = $rep->fetch();
		$rep->closeCursor();
		return $ret;
	}

	public function sql_search($table, $search) {
		$command = "SELECT * FROM ".$table;
		$array_len = count($search);
		if (!empty($search))
			$command .= " WHERE ";
		foreach ($search as $key => $value) {
			if (is_int($value))
				$command .= $key."<=".$value;
			else
				$command .= $key."="."'".$value."'";
			if ($array_len != 1)
				$command .= " and ";
			$array_len--;
		}
		$rep = $this->bdd->query($command);
		$ret = array();
		while (($res = $rep->fetch())) {
			$ret[] = $res;
		}
		$rep->closeCursor();
		if (empty($ret)) {
			$ret[] = $this->return_404($table);
		}
		return $ret;
	}
}