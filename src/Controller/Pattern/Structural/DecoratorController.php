<?php

namespace App\Controller\Pattern\Structural;

use App\Pattern\Structural\Decorator\InputFormat;
use App\Pattern\Structural\Decorator\ItalicFormat;
use App\Pattern\Structural\Decorator\PlainTextFilter;
use App\Pattern\Structural\Decorator\StrongFormat;
use App\Pattern\Structural\Decorator\TextInput;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DecoratorController extends AbstractController
{
    /**
     * @var array
     */
    private $result;

    /**
     * @Route("/structural/decorator", name="decoratorPattern")
     * @return Response
     */
    public function index()
    {
        $someText = "<span style='color: red;'>Some text!</span> Hello world!";
        $standardText = new TextInput();
        $this->toArray($standardText, $someText);

        $strongFormat = new StrongFormat($standardText);
        $this->toArray($strongFormat, $someText);

        $plainText = new PlainTextFilter($strongFormat);
        $this->toArray($plainText, $someText);

        $italicFormat = new ItalicFormat($plainText);
        $this->toArray($italicFormat, $someText);

        return $this->render(
            'pattern/single.html.twig',
            [
                'result' =>$this->result
            ]
        );
    }

    /**
     * @param InputFormat $format
     * @param string $text
     */
    private function toArray(InputFormat $format, string $text)
    {
        $this->result[] = $format->formatText($text);
    }
}