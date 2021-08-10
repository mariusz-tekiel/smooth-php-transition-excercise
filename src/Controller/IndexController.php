<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Exception\IndexException;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        try
        {
            return $this->render('base.html.twig', [
                'title_data' => 'Welcome!',
                'output_data' => 'Please use "/time" or "/price" as URL.',
                ]);                
        }
        catch (\Exception $e) 
        {            
            throw new IndexException($e->getCode(),$e->getMessage(), $e->getCode());
        }
    }

    /**
     * @Route("/time", name="show_time")
     */
    public function showTime(): Response
    {
        try
        {
            $output_data = $data->today();
            return $this->render('base.html.twig', [
                'title_data' => 'Time',
                'output_data' => $output_data,
                ]);                
        }
        catch (\Exception $e) 
        {            
            throw new IndexException($e->getCode(),$e->getMessage(), $e->getCode());
        }
    }


}
