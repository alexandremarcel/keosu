<?php

namespace FOS\UserBundle\Form\Type;

use FOS\UserBundle\Util\LegacyFormHelper;
use FOS\UserBundle\Form\DataTransformer\UserToUsernameTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Form type for representing a UserInterface instance by its username string.
 *
 * @author Thibault Duplessis <thibault.duplessis@gmail.com>
 */
class UsernameFormType extends AbstractType
{
    /**
     * @var UserToUsernameTransformer
     */
    protected $usernameTransformer;

    /**
     * Constructor.
     *
     * @param UserToUsernameTransformer $usernameTransformer
     */
    public function __construct(UserToUsernameTransformer $usernameTransformer)
    {
        $this->usernameTransformer = $usernameTransformer;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addModelTransformer($this->usernameTransformer);
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\TextType');
    }

    // BC for SF < 3.0
    /**
     * @return string
     */
    public function getName()
    {
        return $this->getBlockPrefix();
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'fos_user_username';
    }
}