<?php
declare(strict_types=1);

namespace App\Controller\Pattern\Creational;

use App\Pattern\Creational\Builder\MysqlQueryBuilder;
use App\Pattern\Creational\Builder\PostgresQueryBuilder;
use App\Pattern\Creational\Builder\SQLQueryBuilder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BuilderController extends AbstractController
{
    /**
     * @var array
     */
    private $array;

    /**
     * @Route("/creational/builder", name="builderPattern")
     * @return Response
     */
    public function index()
    {
        $this->getDictionary(new MysqlQueryBuilder());
        $this->getDictionary(new PostgresQueryBuilder());

        return $this->render(
            'pattern/single.html.twig',
            [
                'result' => $this->array
            ]
        );
    }

    private function getDictionary(SQLQueryBuilder $builder)
    {
        $sql = $builder
            ->select('dictionary', ['id', 'title', 'description'])
            ->where("title", "Cars")
            ->order("id", "ASC")
            ->limit(10, 0)
            ->getSQL();

        $this->array[] = $sql;
    }
}