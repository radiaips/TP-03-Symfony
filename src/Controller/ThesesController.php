<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\These;
use App\Entity\Doctorale;
class ThesesController extends AbstractController
{
    /**
     * @Route("/thesis", name="thesis")
     */
    public function index()
    {
        $entityManager = $this -> getDoctrine()->getManager();
        $doctoraleRepository = $entityManager->getRepository(Doctorale::class);
        $doctorale = $DoctoraleRepository->findAll();
        if(empty($doctorale)) {
            $ecole1 = new Doctorale();
            $ecole1->setNom('École Doctorale de Dauphine');
            $ecole1->setLien('https://www.edd.dauphine.fr');
            $entityManager->persist($ecole1);
            $ecole2 = new Doctorale();
            $ecole2->setNom('universite-paris-saclay');
            $ecole2->setLien('https://www.universite-paris-saclay.fr/fr/ecoles-doctorales/');
            $entityManager->persist($ecole2);

            $these1 = new these();
            $these1->setTitle('Titre: Smart & Seamless Collaboration : bringing pervasive computing to the Computer Supported Collaborative Work');
            $these1->setDescription('"Aliquam vitae sapien sed odio eleifend pharetra nec id nunc. Fusce id ornare sem. Sed eget massa nibh. Praesent dictum maximus enim a blandit. Cras ligula justo, suscipit ut sem non, luctus facilisis orci. Vivamus vehicula leo dui, vitae faucibus nunc euismod sed. Pellentesque lectus urna, elementum quis purus sit amet, pellentesque luctus justo. Donec eu risus nec elit posuere cursus ut eu purus. Nam feugiat vulputate risus et dignissim. Fusce efficitur tempor efficitur. Nulla finibus malesuada nisi, quis mattis lectus fermentum vitae. Nam gravida lectus sit amet neque pellentesque hendrerit."');
            $these1->setPhraseAccroche('“Ces travaux de thèse apportent une contribution aux domaines de l’informatique pervasive et du travail collaboratif assisté par ordinateur. Nous explorons ces domaines par une présentation étendue de différents travaux se rapportant aux modèles de collaboration, aux différentes conceptions ainsi qu’aux méthodes d’évaluation. Notre principale contribution pour ces domaines est le modèle PCSCW, qui propose une approche originale pour l’intégration de l’aspect pervasif au sein de la collaboration. En se basant sur un modèle ontologique représentant le contexte des utilisateurs ainsi que sur un ensemble de règles de collaborations entres machines, notre travail permet aux dispositifs intelligents d’analyser et de trouver la meilleure façon de se comporter et de collaborer avec les autres machines de l’environnement afin de canaliser et de faciliter de manière transparente et efficace la collaboration entres les humains. Nous proposons également une méthodologie permettant aux développeurs de systèmes collaboratifs pervasifs de construire leurs propres stratégies d’évaluations.');
            $these1->setMail('these@theseee.com');
            $these1->setEcole($ecole1);
            $entityManager->persist($these1);
            $these2 = new these();
            $these2->setTitle('Titre: Management of scenarized user-centric service compositions for collaborative pervasive environments');
            $these2->setDescription('"Aliquam vitae sapien sed odio eleifend pharetra nec id nunc. Fusce id ornare sem. Sed eget massa nibh. Praesent dictum maximus enim a blandit. Cras ligula justo, suscipit ut sem non, luctus facilisis orci. Vivamus vehicula leo dui, vitae faucibus nunc euismod sed. Pellentesque lectus urna, elementum quis purus sit amet, pellentesque luctus justo. Donec eu risus nec elit posuere cursus ut eu purus. Nam feugiat vulputate risus et dignissim. Fusce efficitur tempor efficitur. Nulla finibus malesuada nisi, quis mattis lectus fermentum vitae. Nam gravida lectus sit amet neque pellentesque hendrerit."');
            $these2->setPhraseAccroche('“électronique et interconnectés. Ces dispositifsfournissent un accès distant à une multitude de fonctionnalités qui nous aident dans notre vie quotidienne.."');
            $these2->setMail('infoooo@gmail.com');
            $these2->setEcole($ecole2);
            $entityManager->persist($these2);
            $these3 = new these();
            $these3->setTitle('Titre: Aspects temporels d’un système de partitions musicales interactives pour la composition et l’exécution');
            $these3->setDescription('"Aliquam vitae sapien sed odio eleifend pharetra nec id nunc. Fusce id ornare sem. Sed eget massa nibh. Praesent dictum maximus enim a blandit. Cras ligula justo, suscipit ut sem non, luctus facilisis orci. Vivamus vehicula leo dui, vitae faucibus nunc euismod sed. Pellentesque lectus urna, elementum quis purus sit amet, pellentesque luctus justo. Donec eu risus nec elit posuere cursus ut eu purus. Nam feugiat vulputate risus et dignissim. Fusce efficitur tempor efficitur. Nulla finibus malesuada nisi, quis mattis lectus fermentum vitae. Nam gravida lectus sit amet neque pellentesque hendrerit."');
            $these3->setPhraseAccroche('“Méthode et outil d’anonymisation des données sensibles"');
            $these3->setMail('gggggg@gmail.com');
            $these3->setEcole($ecole1);
            $entityManager->persist($these3);
            $these4 = new these();
            $these4->setTitle('Titre: Lorem Ipsum: translation');
            $these4->setDescription('"Lorem Ipsum a commencé comme un latin brouillé, absurde dérivé de Cicero du 1er siècle BC texte De Finibus Bonorum et Malorum."');
            $these4->setPhraseAccroche('“Méthode et outil d’anonymisation des données sensibles"');
            $these4->setMail('ipsum4@gmail.com');
            $these4->setEcole($ecole2);
            $entityManager->persist($these4);
            $entityManager->flush();
        }
        return $this->render('theses/index.html.twig', [
            'ecoles' => $DoctoraleRepository->findAll(),
        ]);
    }
}