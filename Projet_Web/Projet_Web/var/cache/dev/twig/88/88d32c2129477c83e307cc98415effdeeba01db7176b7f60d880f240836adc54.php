<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* about/index.html.twig */
class __TwigTemplate_ce2d768c7a696dd52e5ec399b45ba235fe6cd21361c8d1583cfa2f82b3f9899e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "about/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello AboutController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }

        * {
            margin:0;padding:0;
        }
        body {
            font-family:sans-serif;
        }
        table {
            border-spacing:0px;
            border-collapse: collapse;
        }
        td, th {
            border-bottom:1px solid rgb(17, 17, 17);
            padding:5px;
        }
        table tr:nth-child(odd) {
            background-color:#fafafa;
        }
        thead th {
            background-color:#333;
            color:white;
            font-size:80%;
        }
        th {
            font-weight:normal;
            text-align:left;
        }
        tbody td {
            text-align:center;
            font-size:24px;
            text-shadow:1px 1px 1px  black;
        }
    </style>

<div class=\"example-wrapper\">

    <h1>Groupe : S3C</h1>
    <h2>Chagnaud Romain - Colas Augustin</h2>

    <table>
        <thead>
            <tr>
                <th width=\"500px\">Fonctionnalité
                </th><th>Pas&nbsp;abordée
                </th><th>Pas&nbsp;terminée
                </th><th>Fonctionnelle
                </th><th>Commentaire (éventuel)
            </th></tr>
        </thead>
        <tbody>
            <tr>
                <th>Une page d'accueil présentant le site</th>
                <td></td>
                <td></td>
                <td>X</td>
                <td></td>
            </tr>
            <tr>
                <th>Un menu facilitant la navigation dans le site</th>
                <td></td>
                <td></td>
                <td>X</td>
                <td></td>
            </tr>
            <tr>
                <th>Une page \"à propos\", décrivant le travail réalisé et précisant
                    la liste des auteurs du site (le binôme), et éventuellement les
                    difficultés rencontrées (ainsi que ce tableau)</th>
                <td></td>
                <td>X</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>Une page présentant l'ensemble des séries de la base de
                    données, l'affichage doit être paginé et il doit être possible de
                    rechercher des séries</th>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>La possibilité de naviguer dans les saisons d'une série, puis dans les épisodes</th>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>Chaque fois que c'est pertinent on affichera le poster de la série</th>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>Chaque fois que c'est pertinent on affichera le trailer <em>YouTube</em></th>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>Chaque fois que c'est pertinent on affichera un lien vers la fiche <em>IMDB</em> de la série ou de l'épisode
                </th>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>La possibilité pour un utilisateur de s'inscrire et de se connecter avec un suivi de session</th>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>Respect des mesures classiques de sécurité (mot de passe non stocké en clair, CAPTCHA à
                    l'inscription...)</th>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>En étant inscrit et connecté seulement, possibilité de noter
                    une série, en ajoutant éventuellement un commentaire optionnel (table
                    <kbd>rating</kbd>)</th>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>En étant inscrit et connecté seulement, possibilité de classer
                    les séries par note moyenne croissante ou décroissante (en utilisant les
                    notes postées par les utilisateurs du site)</th>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>En étant inscrit et connecté seulement, possibilité de
                    \"suivre\" des séries (à l'aide de la table <kbd>user_series</kbd>) et ces séries
                    sont accessibles
                </th><td>X</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>En étant inscrit et connecté seulement, possibilité de marquer
                    un épisode comme vu ou non vu. De cette manière, l'utilisateur doit
                    pouvoir visualiser où il en est dans le visionnage d'une série. Il est
                    pertinent de remonter l'information dans la page \"saisons\"</th>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>Un utilisateur administrateur doit pouvoir modérer les commentaires en les supprimant</th>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>Un administrateur devrait pouvoir incorporer des nouvelles séries dans la base de données à l'aide de l'API <em>OMDB</em></th>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "about/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello AboutController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }

        * {
            margin:0;padding:0;
        }
        body {
            font-family:sans-serif;
        }
        table {
            border-spacing:0px;
            border-collapse: collapse;
        }
        td, th {
            border-bottom:1px solid rgb(17, 17, 17);
            padding:5px;
        }
        table tr:nth-child(odd) {
            background-color:#fafafa;
        }
        thead th {
            background-color:#333;
            color:white;
            font-size:80%;
        }
        th {
            font-weight:normal;
            text-align:left;
        }
        tbody td {
            text-align:center;
            font-size:24px;
            text-shadow:1px 1px 1px  black;
        }
    </style>

<div class=\"example-wrapper\">

    <h1>Groupe : S3C</h1>
    <h2>Chagnaud Romain - Colas Augustin</h2>

    <table>
        <thead>
            <tr>
                <th width=\"500px\">Fonctionnalité
                </th><th>Pas&nbsp;abordée
                </th><th>Pas&nbsp;terminée
                </th><th>Fonctionnelle
                </th><th>Commentaire (éventuel)
            </th></tr>
        </thead>
        <tbody>
            <tr>
                <th>Une page d'accueil présentant le site</th>
                <td></td>
                <td></td>
                <td>X</td>
                <td></td>
            </tr>
            <tr>
                <th>Un menu facilitant la navigation dans le site</th>
                <td></td>
                <td></td>
                <td>X</td>
                <td></td>
            </tr>
            <tr>
                <th>Une page \"à propos\", décrivant le travail réalisé et précisant
                    la liste des auteurs du site (le binôme), et éventuellement les
                    difficultés rencontrées (ainsi que ce tableau)</th>
                <td></td>
                <td>X</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>Une page présentant l'ensemble des séries de la base de
                    données, l'affichage doit être paginé et il doit être possible de
                    rechercher des séries</th>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>La possibilité de naviguer dans les saisons d'une série, puis dans les épisodes</th>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>Chaque fois que c'est pertinent on affichera le poster de la série</th>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>Chaque fois que c'est pertinent on affichera le trailer <em>YouTube</em></th>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>Chaque fois que c'est pertinent on affichera un lien vers la fiche <em>IMDB</em> de la série ou de l'épisode
                </th>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>La possibilité pour un utilisateur de s'inscrire et de se connecter avec un suivi de session</th>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>Respect des mesures classiques de sécurité (mot de passe non stocké en clair, CAPTCHA à
                    l'inscription...)</th>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>En étant inscrit et connecté seulement, possibilité de noter
                    une série, en ajoutant éventuellement un commentaire optionnel (table
                    <kbd>rating</kbd>)</th>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>En étant inscrit et connecté seulement, possibilité de classer
                    les séries par note moyenne croissante ou décroissante (en utilisant les
                    notes postées par les utilisateurs du site)</th>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>En étant inscrit et connecté seulement, possibilité de
                    \"suivre\" des séries (à l'aide de la table <kbd>user_series</kbd>) et ces séries
                    sont accessibles
                </th><td>X</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>En étant inscrit et connecté seulement, possibilité de marquer
                    un épisode comme vu ou non vu. De cette manière, l'utilisateur doit
                    pouvoir visualiser où il en est dans le visionnage d'une série. Il est
                    pertinent de remonter l'information dans la page \"saisons\"</th>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>Un utilisateur administrateur doit pouvoir modérer les commentaires en les supprimant</th>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>Un administrateur devrait pouvoir incorporer des nouvelles séries dans la base de données à l'aide de l'API <em>OMDB</em></th>
                <td>X</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>

</div>
{% endblock %}
", "about/index.html.twig", "Z:\\Documents\\projet_web\\Projet_Web\\Projet_Web\\templates\\about\\index.html.twig");
    }
}
