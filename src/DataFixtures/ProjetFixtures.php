<?php

namespace App\DataFixtures;

use App\Entity\Projet;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ProjetFixtures extends Fixture
{
    public const PROJET = [
        ["Bloc&Dex", "/build/images/Blocedex.jpg", "Projet Bloc & Dex : Premier Projet Réel pour un chirurgien du
        CHU de Nantes. L’idée étais de créer un outils pour les internes en médecine pour qu’ils puissent répertoriez leurs interventions plus facilement et accedez a des données mise en forme de graphique.
        ", ""],

        ["AdopteUnChat", "/build/images/Adopteunchat.png", "Projet fictif AdopteUnChat: Lors de ma formation j'avais pour mission de créer un site d'adoption de chat avec un system de CRUD en php pure. Pour ce projet, mes collègues et moi nous somment inspirez du site de rencontre adopteUnMec, c'est ce qui à donner vie à ce projet.",
        ""],
        
        
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::PROJET as $projetName) {
            $projet = new Projet();
            $projet->setNom($projetName[0]);
            $projet->setImage($projetName[1]);
            $projet->setDescription($projetName[2]);
            $projet->setLien($projetName[3]);
            
            $manager->persist($projet);
        }
        $manager->flush();
    }
}
