<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\AttributeBundle\Form\Type\AttributeType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * @author Mateusz Zalewski <mateusz.zalewski@lakion.com>
 */
class DatetimeAttributeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return DateTimeType::class;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'label' => false,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'sylius_attribute_type_datetime';
    }
}
