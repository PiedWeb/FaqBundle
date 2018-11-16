<?php

namespace PiedWeb\FaqBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\TranslationBundle\Model\Gedmo\TranslatableInterface;
use PiedWeb\CMSBundle\Entity\IdTrait;
use PiedWeb\CMSBundle\Entity\TranslatableTrait;

/**
 * @ORM\Entity(repositoryClass="PiedWeb\FaqBundle\Repository\FaqRepository")
 */
class Faq implements TranslatableInterface
{
    use IdTrait, FaqTrait, TranslatableTrait;
}
