<?php

namespace App\Form;

use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description', TextareaType::class)
            ->add('img', FileType::class, [
                'required' => false,
                'data_class' => null,
            ])
        ;
//        $builder->get('img')
//            ->addModelTransformer(new CallbackTransformer(
//                function ($tagsAsArray) {
//                    // transform the array to a string
//                    return $tagsAsArray = new File('uploads/ProfilePics/'.$tagsAsArray);
//                },
//                function ($tagsAsString) {
//                    // transform the string back to an array
//                    return$tagsAsString;
//                }
//            ))
//        ;

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
