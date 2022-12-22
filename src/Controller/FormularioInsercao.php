<?php

namespace Alura\Cursos\Controller;

class FormularioInsercao extends ControllerComHtml implements InterfaceControladorRequisicao
{
    public function processaRequisicao(): void
    {
        $titulo = "Novo Curso";

        echo $this->renderizaHtml('cursos/formulario.php', [
            'titulo' => $titulo
        ]);
    }
}