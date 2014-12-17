<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Post;
use AppBundle\Form\PostType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository('App:Post')->findLatest();

        return $this->render(
            'default/index.html.twig',
            array(
                'posts' => $posts
            )
        );
    }

    /**
     * @Route("/show/{id}", name="post_show")
     */
    public function showAction(Post $post)
    {
        return $this->render(
            'default/show.html.twig',
            array(
                'post' => $post
            )
        );
    }

    public function newAction(Request $request)
    {
        $post = new Post();
        $form = $this->createForm(new PostType(), $post);

        if ($form->isSubmitted() && $form->isValid()) {
            $slug = $this->get('app.slugger')->slugify($post->getTitle());
            $post->setSlug($slug);
        }

        // fancy logic
    }
}
