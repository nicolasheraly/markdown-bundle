<?php

namespace Ornj\Bundle\MarkdownBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MarkdownType extends AbstractType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'attr'              => array(
                'class'         => '',
                'data-provide'  => 'markdown',

                'rows'          => 15,
            ),
        ));
    }

    public function getParent()
    {
        return 'textarea';
    }

    public function getName()
    {
        return 'markdown';
    }
}