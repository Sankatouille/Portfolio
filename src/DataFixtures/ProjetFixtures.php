<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProjetFixtures extends Fixture
{
    public const Projet = [
        ["Bloc&Dex", "/build/images/Blocedex.jpg", "Projet Bloc & Dex : Premier Projet Réel pour un chirurgien du
        CHU de Nantes. L’idée étais de créer un outils pour les internes en médecine pour qu’ils puissent répertoriez leurs interventions plus facilement et accedez a des données mise en forme de graphique.
        ", ""],

        ["AdopteUnChat", "/build/images/Adopteunchat.png", "Projet fictif AdopteUnChat: Lors de ma formation j'avais pour mission de créer un site d'adoption de chat avec un system de CRUD en php pure. Pour ce projet, mes collègues et moi nous somment inspirez du site de rencontre adopteUnMec, c'est ce qui à donner vie à ce projet.",
        "https://bustling-nectarine-1a6.notion.site/cbaf80463eac41c8a1dec41da4a2bd52?v=2ac0e4a04e1148068539436a64cfdbc1"],
        
        
    ];

    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
