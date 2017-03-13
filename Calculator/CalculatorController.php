<?php

namespace CalculatorBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use CalculatorBundle\Entity\Calculator;
use CalculatorBundle\Form\CalculatorType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CalculatorController extends Controller
{
    /**
     * @param Request $request
     *
     * @Route("/", name="index")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     *
     */
    public function index(Request $request)
    {
        $calculator = new Calculator();
        $form = $this->createForm(CalculatorType::class, $calculator);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $leftOperand = $calculator->getLeftOperand();
            $rightOperand = $calculator->getRightOperand();
            $operator = $calculator->getOperator();
            $result = 0;

            // Included bitwise operations.
            // Output results are formatted to 3 digits after the decimal separator
            // and trailing zeros are being removed.

            switch ($operator) {
                case '+':
                    $result = $leftOperand + $rightOperand;
                    $result = number_format($result, 3);
                    $result = (float)$result;
                    break;
                case '-':
                    $result = $leftOperand - $rightOperand;
                    $result = number_format($result, 3);
                    $result = (float)$result;
                    break;
                case '*':
                    $result = $leftOperand * $rightOperand;
                    $result = number_format($result, 3);
                    $result = (float)$result;
                    break;
                case '/':
                    $result = $leftOperand / $rightOperand;
                    $result = number_format($result, 3);
                    $result = (float)$result;
                    break;
                case  '^':
                    $result = pow($leftOperand, $rightOperand);
                    $result = number_format($result, 3);
                    $result = (float)$result;
                    break;
                case 'AND':
                    $result = intval($leftOperand) & intval($rightOperand);
                    break;
                case 'OR':
                    $result = intval($leftOperand) | intval($rightOperand);
                    break;
                case 'XOR':
                    $result = intval($leftOperand) ^ intval($rightOperand);
                    break;
            }

            return $this->render('calculator/index.html.twig',
                ['result' => $result, 'calculator' => $calculator, 'form' => $form->createView()]);
        }
        return $this->render('calculator/index.html.twig',
            array('form' => $form->createView()));
    }
}
