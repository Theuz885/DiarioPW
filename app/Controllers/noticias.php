<?php

namespace App\Controllers;

class Noticias extends BaseController
{

	//Tabela Noticias
	public function index()
	{
		$model = new \App\Models\modelNoticias();

		$data["tabela"] = $model->findAll();
		$data["teste"] = time();


		

		foreach ($data["tabela"] as $key => $value) {
			$data["tabela"][$key]["btnEditar"] = "<a href='updateDados/"
												.$data["tabela"][$key]["id"]."'>
												Editar Registro</a>";
		}

		

		echo view('noticiasView', $data);
	}



	//Inserir dados
	public function addDados() {
		
		echo view('noticias/addNoticias');

	}

	public function inserir() {
		$model = new \App\Models\modelNoticias();

		$data = $this->request->getPost();

		$model->insert($data);
	}



	//Atualizar dados

	public function updateDados($id) {
		$model = new \App\Models\ModelNoticias();
		$carregarDados = $model->find($id);


		echo view('noticias/updateNoticias', $carregarDados);

	}


	public function update(){
		$model = new \App\Models\ModelNoticias();
	
		$data = $this->request->getPost();

		$retorno = $model -> update($data['id'], $data);

		var_dump($retorno);

	}
}
?>