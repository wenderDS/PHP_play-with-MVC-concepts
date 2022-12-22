<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;
use Doctrine\ORM\EntityManagerInterface;

class FormularioEdicao extends ControllerComHtml implements InterfaceControladorRequisicao
{
    private EntityManagerInterface $entityManager;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator())->getEntityManager();
    }

    public function processaRequisicao(): void
    {
        $id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );

        if (is_null($id) || $id === false) {
            header('Location: /listar-cursos');
            return;
        }

        $curso = $this->entityManager->find(Curso::class, $id);
        $titulo = "Alterar Curso {$curso->getDescricao()}";

        echo $this->renderizaHtml('cursos/formulario.php', [
            'titulo' => $titulo,
            'curso' => $curso
        ]);
    }
}