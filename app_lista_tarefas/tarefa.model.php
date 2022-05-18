<?php

class Tarefa {
	private $id;
	private $id_status;
	private $tarefa;
	private $data_cadastro;

	public function __get($atributo) {
		return $this->$atributo;
	}

	public function __set($atributo, $valor) {
		$this->$atributo = $valor;

		//também pode-se utilizar um retorno para a busca das tarefas no tarefa_controller.php, assim:
        //return $this;
	}
}

?>