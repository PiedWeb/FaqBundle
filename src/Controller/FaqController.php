<?php

namespace PiedWeb\FaqBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use PiedWeb\FaqBundle\Entity\Faq;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Translation\TranslatorInterface;

class FaqtController extends AbstractController
{
    public function show()
    {
        /**
         * todo: Return all question rendered
         */
    }
}
