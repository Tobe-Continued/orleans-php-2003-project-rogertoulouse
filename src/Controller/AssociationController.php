<?php

namespace App\Controller;

use App\Model\AssociationManager;

class AssociationController extends AbstractController
{

    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {

        $errors = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = array_map('trim', $_POST);
            if (empty($data['email'])) {
                $errors[] = 'L\'email est requis';
            }
            if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Le format d'email est invalid";
            }
            if (empty($data['object'])) {
                $errors[] = 'L\'objet est requis';
            }
            if (empty($data['message'])) {
                $errors[] = 'Un message est requis';
            }
        }
        return $this->twig->render('Association/index.html.twig', ['error' => $errors]);
    }
}
