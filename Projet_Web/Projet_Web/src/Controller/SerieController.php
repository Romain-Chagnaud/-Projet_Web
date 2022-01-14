<?php

namespace App\Controller;

use App\Entity\Series;
use App\Form\SeriesType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/serie')]
class SerieController extends AbstractController
{
    #[Route('/', name: 'serie_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager, Request $request, PaginatorInterface $paginator): Response
    {   

        $search = $_GET['search'] ?? null; //récupérer mon form  
        
        if($search != null){
            $query = $entityManager->createQuery(
                "SELECT s FROM App:Series s
                WHERE s.title like :search"  //requete préparer 
            );
            $query->setParameter('search', $search.'%');
            $series = $query->getResult();
        }else{
            $series = $entityManager
            ->getRepository(Series::class)
            ->findBy(array(),array('title'=>'ASC')); 
        }   

        $page = $paginator->paginate(
            $series,
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            5 // Nombre de résultats par page
        );
       
        return $this->render('serie/index.html.twig', [
            'page' => $page,
        ]);
    }

    #[Route('/new', name: 'serie_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $series = new Series();
        $form = $this->createForm(SeriesType::class, $series);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($series);
            $entityManager->flush();

            return $this->redirectToRoute('serie_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('serie/new.html.twig', [
            'series' => $series,
            'form' => $form,
        ]);
    }

    #[Route('/poster/{id}', name: 'series_poster', methods: ['GET'])]     public function poster(Series $serie): Response
    {
        return new Response(stream_get_contents($serie->getPoster()));
    }

    #[Route('/{id}', name: 'serie_show', methods: ['GET'])]
    public function show(Series $series): Response
    {
        return $this->render('serie/show.html.twig', [
            'series' => $series,
        ]);
    }

    #[Route('/{id}/edit', name: 'serie_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Series $series, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SeriesType::class, $series);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('serie_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('serie/edit.html.twig', [
            'series' => $series,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'serie_delete', methods: ['POST'])]
    public function delete(Request $request, Series $series, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$series->getId(), $request->request->get('_token'))) {
            $entityManager->remove($series);
            $entityManager->flush();
        }

        return $this->redirectToRoute('serie_index', [], Response::HTTP_SEE_OTHER);
    }
}
