<?php

namespace App\Controller\Admin;

use App\Entity\Definitions;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class DefinitionsCrudController extends AbstractCrudController
{




    public static function getEntityFqcn(): string
    {
        return Definitions::class;



    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            TextField::new('subtitle'),
            TextEditorField::new('description'),
            SlugField::new('slug')->setTargetFieldName('name'),
            AssociationField::new('user'),
            AssociationField::new('subcategory')



        ];
    }
    
}
