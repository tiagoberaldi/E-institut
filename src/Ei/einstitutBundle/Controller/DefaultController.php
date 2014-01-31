<?php

namespace Ei\einstitutBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ei\einstitutBundle\Entity\Preconisation;
use Ei\einstitutBundle\Entity\CriterePreconisation;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller {

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();


        // Tutoriels Evenement dans la page d'accueil
        $oTutos = $em->getRepository('EieinstitutBundle:TutorielsEnLigne')->findAll();


        // Fiches Accueil
        $fiches = $this->getDoctrine()
                ->getRepository('EieinstitutBundle:fiche')
                ->createQueryBuilder('f')
                ->addOrderBy('f.dateCreation', 'DESC')
                ->setMaxResults(4)
                ->getQuery()
                ->getResult();
        //Messages Notif
        $UserConnected = $this->get('security.context')->getToken()->getUser();
        $query = $this->getDoctrine()
                ->getManager()
                ->createQuery("SELECT m,u FROM EieinstitutBundle:Messages m JOIN m.users u WHERE u.id = :user and m.etat = 0")
                ->setParameter('user', $UserConnected->getId());

        $messages_recus = $query->getResult();

        $NbrMsg = count($messages_recus);

        $session = new Session();

        $session->set('msg', $NbrMsg);
        
        $session->set('CurrentMenu', 'index');
        
        $session->set('messages', $messages_recus);

        // Actialités 
        $em = $this->getDoctrine()->getManager();
        $actualites = $em
                ->createQuery('SELECT a FROM EieinstitutBundle:Actualites a  ORDER BY a.titre DESC')
                ->setMaxResults(4)
                ->getResult();
        // Tags
        $tags = $em
                ->createQuery('SELECT t FROM EieinstitutBundle:Tags t  ORDER BY t.libelle ASC')
                ->setMaxResults(20)
                ->getResult();


        return $this->render('EieinstitutBundle:Pages:index.html.twig', array(
                    'Tutos' => $oTutos,
                    'fiches' => $fiches,
                    'messages' => $messages_recus,
                    'actualites' => $actualites,
                    'tags' => $tags
        ));
    }

    public function ressourcesAction($page) {
        $total = $this->getDoctrine()->getRepository('EieinstitutBundle:fiche')->createQueryBuilder('p')->getQuery()->getResult();
        /* total of resultat */
        $total_articles = count($total);
        $articles_per_page = $this->container->getParameter('max_articles_on_listepage');
        $last_page = ceil($total_articles / $articles_per_page);
        $previous_page = $page > 1 ? $page - 1 : 1;
        $next_page = $page < $last_page ? $page + 1 : $last_page;         /* resultat  a afficher */ $entities = $this->getDoctrine()->getRepository('EieinstitutBundle:fiche')->createQueryBuilder('p')->setFirstResult(($page * $articles_per_page) - $articles_per_page)->setMaxResults($this->container->getParameter('max_articles_on_listepage'))->getQuery()->getResult();
        return $this->render('EieinstitutBundle:Ressources:listes_ressources.html.twig', array(
                    'Fiches' => $entities,
                    'last_page' => $last_page,
                    'previous_page' => $previous_page,
                    'current_page' => $page,
                    'next_page' => $next_page,
                    'total_articles' => $total_articles,
        ));
        
        return $this->render('EieinstitutBundle:Ressources:listes_ressources.html.twig');
    }

    public function ajouter_ressourceAction() {

        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $action = $request->request->get('btn_add');
        $action1 = $request->request->get('add_tags_fiche');
        $request = $this->getRequest();
        $date = new \DateTime('now');
        $titre = $request->request->get('titre');
        $tags = $request->request->get('tags');
        $domaine = $request->request->get('domaine');
        $theme = $request->request->get('theme');
        $url = $request->request->get('url');
        $type = $request->request->get('type');
        $tabtag[] = "";
        $description = $request->request->get('description');
        $User = $this->get('security.context')->getToken()->getUser();
        if (isset($action)) {
            $fiche = new Fiche();
            $fiche->setTitre($titre);
            $fiche->setDomaine($domaine);
            $fiche->setUser($User);
            $fiche->setUrl($url);
            $fiche->setType($type);
            $fiche->setResume($description);
            $fiche->setStatut(1);
            $fiche->setDateCreation($date);
            $fiche->setTheme($theme);
            $em->persist($fiche);
            //$em->flush();
        }
        /* else
          if(isset($action1))
          {
          $tag=new Tags();
          $tag->setLibelle($tags);
          $tag->setEtat(1);
          $em->persist($tag);
          $result = count($movies);
          $long=$tabtag->length();
          $em->flush();

          } */
        $lastvalue = '';
        $lastvalue = $tags[0];

        $session = new Session();
        $session->set('CurrentMenu', 'Ressources');
        
        return $this->render('EieinstitutBundle:Ressources:ajouter_ressource.html.twig', array("lastvalue" => $lastvalue));
    }

    public function forumAction() {

        $em = $this->getDoctrine()->getManager();
        $Forums = $em->getRepository('EieinstitutBundle:Forum')->findall();
        $Rubriques = $em->getRepository('EieinstitutBundle:Rubrique')->findall();
        return $this->render('EieinstitutBundle:Community:Forum.html.twig', array('Rubriques' => $Rubriques, 'Forums' => $Forums));
    }

    public function espace_PersonnelAction() {
        return $this->render('EieinstitutBundle:Portefolio:espace_personnel.html.twig');
    }

    public function annuaireAction() {
        return $this->render('EieinstitutBundle:Pages:annuaire.html.twig');
    }

    public function liste_contactAction() {
        return $this->render('EieinstitutBundle:Contact:liste_contact.html.twig');
    }

    public function demande_contactAction() {
        return $this->render('EieinstitutBundle:Contact:demande_contact.html.twig');
    }

    public function mon_compteAction() {
        return $this->render('EieinstitutBundle:Portefolio:mon_compte.html.twig');
    }

    public function profilAction() {
        return $this->render('EieinstitutBundle:Portefolio:profil.html.twig');
    }

    public function agendaAction() {
        return $this->render('EieinstitutBundle:portefolio:agenda.html.twig');
    }

    public function preconiser_ressourceAction($fiche) {
        $em = $this->getDoctrine()->getManager();
        $oFiches = $em->getRepository('EieinstitutBundle:Fiche')->findOneBy(array('id' => $fiche));
        $oCriteres = $em->getRepository('EieinstitutBundle:Criteres')->findAll();
        $oNotes = $em->getRepository('EieinstitutBundle:Notes')->findAll();
        $request = $this->getRequest();
        $action = $request->request->get('preconiser');

        if (isset($action)) {
            $UserConnected = $this->get('security.context')->getToken()->getUser();

            $Preconisation = new Preconisation();
            $Preconisation->setFichePreconisation($oFiches);
            $Preconisation->setUserPreconisation($UserConnected);
            $Preconisation->setDate(new \DateTime());
            $em->persist($Preconisation);
            $em->flush();

            foreach ($oCriteres as $C) {
                $Note = $request->request->get('radio' . $C->getId());
                $oNote = $em->getRepository('EieinstitutBundle:Notes')->findOneBy(array("id" => $Note));

                $CriterePreconisation = new CriterePreconisation();
                $CriterePreconisation->setPreconisation($Preconisation);
                $CriterePreconisation->setCriteres($C);
                $CriterePreconisation->setNotes($oNote);
                $em->persist($CriterePreconisation);
            }




            $em->flush();
        }
        return $this->render('EieinstitutBundle:Ressources:faire_une_preconisation.html.twig', array('fiche' => $oFiches, 'Notes' => $oNotes, 'Criteres' => $oCriteres));
    }

    public function detail_ressourceAction($fiche) {
        $em = $this->getDoctrine()->getEntityManager();
        $oFiches = $em->getRepository('EieinstitutBundle:Fiche')->findOneBy(array('id' => $fiche));

        $oPreconisations = '';
        // $oCrit_Preconisations='';

        /* $query = $em->createQuery(
          'SELECT c.id FROM EieinstitutBundle:fiche f
          JOIN EieinstitutBundle:Preconisation p
          JOIN EieinstitutBundle:CriterePreconisation c
          ');

          $query =  $em->createQueryBuilder()
          ->select('c')
          ->from('EieinstitutBundle:CriterePreconisation', 'c')
          ->getQuery();
          //use Doctrine\ORM\Query\Expr\Join;


          $oCrit_Preconisations = $query->getResult();
         */

        $oCrit_Preconisations = $em->getRepository('EieinstitutBundle:CriterePreconisation')->PreconisationFiche($fiche);
        $oCrit = $em->getRepository('EieinstitutBundle:Criteres')->findAll();
        $oFichePre = $em->getRepository('EieinstitutBundle:Preconisation')->findBy(array('fiche_preconisation' => $fiche));
        $sumNote = 0;
        $NotePreconisation = null;



        foreach ($oCrit as $c) {
            $id2 = $c->getId();
            $sumNote = 0;
            foreach ($oCrit_Preconisations as $cp) {
                $id1 = $cp->getCriteres()->getId();
                if ($id1 == $id2) {
                    $oNote = $cp->getNotes();
                    $Note = $oNote->getAnnotation();
                    $sumNote += $Note;
                }
            }
            //$NotePreconisation['Critere'] = $c->getLibelle();
            if ($oFichePre)
                $sumNote = $sumNote / count($oFichePre);

            $NotePreconisation[$id2] = array('note' => $sumNote, 'NomCritere' => $c->getLibelle());
        }


        //$oNote = new Notes();
        // echo $hello;
        /* echo count($oFiches);
          if ($oFiches) {
          $oPreconisations = $em->getRepository('EieinstitutBundle:Preconisation')->findBy(array('fiche_preconisation'=>$oFiches));
          $oCrit_Preconisations = $em->getRepository('EieinstitutBundle:CriterePreconisation')->findBy(array('preconisation'=>$oPreconisations));

          }
          else
          {

          } */


        return $this->render('EieinstitutBundle:Ressources:detail_ressource_connecte.html.twig', array('NotePreconisation' => $NotePreconisation, 'sumNote' => $sumNote, 'Fiches' => $oFiches, 'Preconisations' => $oPreconisations, 'Crit_Preconisations' => $oCrit_Preconisations, 'Criteres' => $oCrit));
    }

    public function recherche_ressourceAction() {
        return $this->render('EieinstitutBundle:Ressources:recherche_ressource.html.twig');
    }

    public function repondre_messageAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $action = $request->request->get('submit');

        if (isset($action)) {
            $UserConnected = $this->get('security.context')->getToken()->getUser();
            $Objet = $request->request->get('Objet');
            $Message = $request->request->get('message');
            $Dest = $request->request->get('A');

            $Messages = new Messages;
            $Messages->setObjet($Objet);
            $Messages->setMessage($Message);
            $Messages->setDateMessage(new \DateTime());
            $Messages->setEtat(0);
            $FromUser = $UserConnected;
            $Messages->setMessagesUser($FromUser);


            $ToUser1 = $em->getRepository('EieinstitutBundle:User')->findOneBy(array('id' => $Dest));
            $ToUser1->addMessages($Messages);
            $Messages->addUsers($ToUser1);
            $em->persist($ToUser1);


            $em->persist($Messages);
            $em->flush();
        }


        return $this->render('EieinstitutBundle:messaging:repondre_message.html.twig');
    }

    public function messages_recusAction() {
        $em = $this->getDoctrine()->getManager();
        $UserConnected = $this->get('security.context')->getToken()->getUser();
        $messages_recus = $em->getRepository('EieinstitutBundle:Messages')->MessageRecu($UserConnected->getId());



        return $this->render('EieinstitutBundle:Messaging:messages_recus.html.twig', array('messagesrecus' => $messages_recus));
    }

    public function supprimer_messagesAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $idmessage = $request->request->get('param_idmessage');
        $messages_recus = $em->getRepository('EieinstitutBundle:Messages')->findOneBy(array('id' => $idmessage));
        $em->remove($messages_recus);
        $em->flush();
        /* $em->getRepository('EieinstitutBundle:Messages')->SupprimerMessage(5);

          if(isset($idmessage))
          {

          } */
        return $this->redirect($this->generateUrl('Recus'));
        // return $this->render('EieinstitutBundle:Messaging:supprimer_messages.html.twig', array('messagesrecus'=> $messages_recus));
    }

    public function messages_envoyesAction() {
        $em = $this->getDoctrine()->getManager();
        $UserConnected = $this->get('security.context')->getToken()->getUser();
        $messages_envoyes = $em->getRepository('EieinstitutBundle:Messages')->MessageEnvoyee($UserConnected->getId());
        return $this->render('EieinstitutBundle:Messaging:messages_envoyes.html.twig', array('messagesenvoyes' => $messages_envoyes));
    }

    public function brouillonAction() {
        return $this->render('EieinstitutBundle:messaging:brouillon.html.twig');
    }

    public function nouveau_messageAction() {

        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $action = $request->request->get('submit');

        if (isset($action)) {
            $UserConnected = $this->get('security.context')->getToken()->getUser();
            $Objet = $request->request->get('Objet');
            $Message = $request->request->get('message');
            $Dest = $request->request->get('A');

            $Messages = new Messages;
            $Messages->setObjet($Objet);
            $Messages->setMessage($Message);
            $Messages->setDateMessage(new \DateTime());
            $Messages->setEtat(0);
            $FromUser = $UserConnected; //$em->getRepository('EieinstitutBundle:User')->findOneBy(array('id'=>1));
            $Messages->setMessagesUser($FromUser);


            $ToUser1 = $em->getRepository('EieinstitutBundle:User')->findOneBy(array('id' => $Dest));
            $ToUser1->addMessages($Messages);
            $Messages->addUsers($ToUser1);
            $em->persist($ToUser1);



            /*
              $ToUser2 = $em->getRepository('EieinstitutBundle:User')->findOneBy(array('id'=>5));
              $Messages->addUsers($ToUser2);
              $ToUser2->addMessages($Messages);
              $em->persist($ToUser2);
             */
            $em->persist($Messages);
            $em->flush();
        }

        return $this->render('EieinstitutBundle:messaging:nouveau_message.html.twig');
    }

    public function details_messageAction($message) {
        $em = $this->getDoctrine()->getEntityManager();


        $details_message = $em->getRepository('EieinstitutBundle:Messages')->findOneBy(array('id' => $message));

        return $this->render('EieinstitutBundle:Messaging:details_message.html.twig', array('detailsmessage' => $details_message));
    }

    public function details_message1Action($message) {
        $em = $this->getDoctrine()->getEntityManager();


        $details_message1 = $em->getRepository('EieinstitutBundle:Messages')->findOneBy(array('id' => $message));

        return $this->render('EieinstitutBundle:Messaging:details_message1.html.twig', array('detailsmessage1' => $details_message1));
    }

    public function detail_actualiteAction($actualite) {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $actualit = $request->request->get('actualite');
        $actualites = $em
                ->createQuery('SELECT a FROM EieinstitutBundle:Actualites a WHERE  (a.id = :actualite)')
                ->setParameter('actualite', $actualite)
                ->getResult();

        return $this->render('EieinstitutBundle:Pages:detail_actualite.html.twig', array("actualites" => $actualites));
        //return $this->render('EieinstitutBundle:Pages:c_modifier_actualite.html.twig', array("actualites"=> $actualites));
    }

    public function actualiteAction() {
        $em = $this->getDoctrine()->getManager();
        $actualites = $em
                ->createQuery('SELECT a FROM EieinstitutBundle:Actualites a  ORDER BY a.titre DESC')
                //->setMaxResults(4)
                ->getResult();
        return $this->render('EieinstitutBundle:Pages:actualite.html.twig', array("actualites" => $actualites));
    }

}
