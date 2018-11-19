<?php

namespace PiedWeb\FaqBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use PiedWeb\FaqBundle\DependencyInjection\PiedWebFaqExtension;

class PiedWebFaqBundle extends Bundle
{
    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new PiedWebFaqExtension();
        }

        return $this->extension;
    }
}
