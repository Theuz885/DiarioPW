<?php

echo "<pre>";

$table = new \CodeIgniter\View\Table();

$data = $tabela;

$template = [
    'table_open' => '<table border="1" cellpadding="4" cellspacing="2">'
];
echo $table->setTemplate($template);

$table->setHeading(
                                "id",
                                "titulo",
                                "link",
                                "imagem",
                                "ultimoUsuario",
                                "dataCriado",
                                "dataEditado"
);


echo $table->generate($data);

 ?>
