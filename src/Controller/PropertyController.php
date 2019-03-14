<?php 
  namespace App\Controller;
  use App\Entity\Property;
  use Symfony\Component\HttpFoundation\Response;
  use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
  use Symfony\Component\Routing\Annotation\Route;
  class PropertyController  extends AbstractController
  {
    /**
     * @Route("/property", name="property.index")
     *
     * @return Response
     */
      public function index():Response
      {
        $p =  new Property();
        
         return  new Response($this->render("property/index.html.twig"));
      }

      /**
     * @Route("/bien/{slug}-{id}", name="property.slug", requirements={"slug": "[a-z0-9\-]*"})
     *
     * @return Response
     */

  }

?>