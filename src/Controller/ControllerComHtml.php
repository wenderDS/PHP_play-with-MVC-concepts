<?php

namespace Alura\Cursos\Controller;

abstract class ControllerComHtml
{
    public function renderizaHtml(string $caminhoTemplate, array $dados): string
    {
        ob_start();
        require __DIR__ . "./../../resources/view/cabecalho.php";
        require __DIR__ . "./../../resources/view/{$caminhoTemplate}";
        require __DIR__ . "./../../resources/view/rodape.php";
        $html = ob_get_clean();

        return $html;
    }
}