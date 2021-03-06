<?php

namespace Lexik\Bundle\FormFilterBundle\Filter\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Filter type for related entities.
 *
 * @author Cédric Girard <c.girard@lexik.fr>
 */
class EntityFilterType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver
            ->setDefaults(array(
                'required'               => false,
                'data_extraction_method' => 'default',
            ))
            ->setAllowedValues(array(
                'data_extraction_method' => array('default'),
            ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'entity';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'filter_entity';
    }
}
