<?php

/* EieinstitutBundle:Representation:listes_ressources.html.twig */
class __TwigTemplate_94d15792576035957b821fae4fe47c58657d4eb35fca4714aa2aec97e3c15aa0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EieinstitutBundle::Master-Base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EieinstitutBundle::Master-Base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "   


     



        <!--section filtre -->\t   \t

        <section class=\"grid_3\">
                <div class=\"block-border\">
                <div class=\"block-content\">
                        <h1> Filtre </h1>

                        <div class=\"block-controls\">
                                <ul class=\"controls-buttons\">
                                        <li><a href=\"#\"><strong>Expand all</strong></a></li>
                                        <li class=\"sep\"></li>
                                        <li><a href=\"#\" title=\"Actualiser\"><img src=\"images/icons/fugue/arrow-circle.png\" width=\"16\" height=\"16\"></a></li>
                                </ul>
                        </div>
                        <ul class=\"collapsible-list with-bg\">
                                <li>
                                        <b class=\"toggle\"></b>
                                        <span>Type</span>
                                        <ul>

                                                <li class=\"closed\">
                                                        <input type=\"checkbox\" name=\"simple-checkbox[]\" id=\"simple-checkbox-1\" value=\"1\">
                                                        <label for=\"simple-checkbox-1\">Video</label>
                                                </li>
                                                <li class=\"closed\">
                                                        <input type=\"checkbox\" name=\"simple-checkbox[]\" id=\"simple-checkbox-2\" value=\"2\">
                                                        <label for=\"simple-checkbox-2\">Support papier</label>
                                                </li>
                                                <li class=\"closed\">
                                                        <input type=\"checkbox\" name=\"simple-checkbox[]\" id=\"simple-checkbox-3\" value=\"3\">
                                                        <label for=\"simple-checkbox-3\">Slide</label>
                                                </li>
                                                <li class=\"closed\">
                                                        <input type=\"checkbox\" name=\"simple-checkbox[]\" id=\"simple-checkbox-4\" value=\"4\">
                                                        <label for=\"simple-checkbox-4\">Audio</label>
                                                </li>
                                                <li class=\"closed\">
                                                        <input type=\"checkbox\" name=\"simple-checkbox[]\" id=\"simple-checkbox-5\" value=\"5\">
                                                        <label for=\"simple-checkbox-5\">Code source</label>
                                                </li>
                                        </ul>
                                </li>
                                <li class=\"closed\">
                                        <b class=\"toggle\"></b>
                                        <span>Domaine</span>
                                        <ul>
                                                <li class=\"closed\">
                                                        <input type=\"checkbox\" name=\"simple-checkbox[]\" id=\"simple-checkbox-1\" value=\"1\">
                                                        <label for=\"simple-checkbox-1\">Informatique</label>
                                                </li>
                                                <li class=\"closed\">
                                                        <input type=\"checkbox\" name=\"simple-checkbox[]\" id=\"simple-checkbox-2\" value=\"2\">
                                                        <label for=\"simple-checkbox-2\">Droit</label>
                                                </li>
                                                <li class=\"closed\">
                                                        <input type=\"checkbox\" name=\"simple-checkbox[]\" id=\"simple-checkbox-3\" value=\"3\">
                                                        <label for=\"simple-checkbox-3\">Economie</label>
                                                </li>
                                        </ul>
                                </li>
                                <li class=\"closed\">
                                        <b class=\"toggle\"></b>
                                        <span>Thème</span>
                                        <ul>
                                                <li class=\"closed\">
                                                        <input type=\"checkbox\" name=\"simple-checkbox[]\" id=\"simple-checkbox-1\" value=\"1\">
                                                        <label for=\"simple-checkbox-1\">Base de donnés</label>
                                                </li>
                                                <li class=\"closed\">
                                                        <input type=\"checkbox\" name=\"simple-checkbox[]\" id=\"simple-checkbox-2\" value=\"2\">
                                                        <label for=\"simple-checkbox-2\">JAVA</label>
                                                </li>
                                        </ul>
                                </li>
                        </ul>

                </div></div>
        </section>
        <!--fin section filtre -->\t



        <!--section liste des publications-->\t

        <section class=\"grid_9\">
                <div class=\"block-border\">
                    <div class=\"block-content\">


                                <div class=\"block-controls\">
                                                        <h1>Publications </h1>  <br><br>

                                </div>
                                <form class=\"form\" id=\"tab-stats\" method=\"post\" action=\"\">
        <!--recherche avancée-->\t\t\t\t
                                <fieldset class=\"grey-bg\">
                                        <legend><a href=\"#\">Recherche avancée</a></legend><a href=\"#\">
                                        <div class=\"columns\">
                                                <div class=\"float-left\">
                                                        <span class=\"label\">Domaine</span>
                                                        <select name=\"Domaine\" id=\"stats-sites-0\">
                                                                <option value=\"0\">Informatique</option>
                                                                <option value=\"0\">Economie</option>
                                                        </select>
                                        </div>
                                        <div class=\"float-left\" style=\"width:10px;\">&nbsp;</div>

                                        <div class=\"float-left\">
                                                <span class=\"label\">Théme</span>
                                                <select name=\"theme\" id=\"stats-sites-0\">
                                                        <option value=\"0\">Développemnt</option>
                                                        <option value=\"0\">Réseau</option>
                                                </select>
                                        </div>

                                        <div class=\"float-left\" style=\"width:10px;\">&nbsp;</div>

                                        <div class=\"float-left\">
                                                <span class=\"label\">Type</span>
                                                <select name=\"type\" id=\"stats-sites-0\">
                                                        <option value=\"0\">Vidéo</option>
                                                        <option value=\"0\">Document PDF</option>
                                                </select>
                                        </div>

                                        <div class=\"float-left\" style=\"width:10px;\">&nbsp;</div>


                                        </div>
                                        <div class=\"columns\">
                                        <div class=\"float-left\">
                                                <span class=\"label\">Pour préparer</span>
                                                        <ul class=\"checkable-list\">
                                                                <li><input type=\"radio\" name=\"simple-radio\" id=\"simple-radio-1\" value=\"1\">&nbsp;<label for=\"simple-radio-1\"> Mes cours</label></li>
                                                                <li><input type=\"radio\" name=\"simple-radio\" id=\"simple-radio-2\" value=\"2\">&nbsp;<label for=\"simple-radio-2\"> Mes travaux dirigés</label></li>
                                                                <li><input type=\"radio\" name=\"simple-radio\" id=\"simple-radio-2\" value=\"2\">&nbsp;<label for=\"simple-radio-2\"> Mes expériences </label></li> 
                                                                <li><input type=\"radio\" name=\"simple-radio\" id=\"simple-radio-2\" value=\"2\">&nbsp;<label for=\"simple-radio-2\"> Mes exposés scientifiques</label></li> \t\t\t\t\t\t\t\t\t 
                                                        </ul>
                                        </div>
                                                <div class=\"float-left\" style=\"width:20px;\">&nbsp;</div>
                                        <div class=\"float-left\">
                                                <span class=\"label\">Pour donner des compléments documentaires à</span>
                                                        <ul class=\"checkable-list\">
                                                                <li><input type=\"radio\" name=\"simple-radio\" id=\"simple-radio-1\" value=\"1\">&nbsp;<label for=\"simple-radio-1\"> Mes cours</label></li>
                                                                <li><input type=\"radio\" name=\"simple-radio\" id=\"simple-radio-2\" value=\"2\">&nbsp;<label for=\"simple-radio-2\"> Mes travaux dirigés</label></li>
                                                                <li><input type=\"radio\" name=\"simple-radio\" id=\"simple-radio-2\" value=\"2\">&nbsp;<label for=\"simple-radio-2\"> Mes expériences </label></li> 
                                                                <li><input type=\"radio\" name=\"simple-radio\" id=\"simple-radio-2\" value=\"2\">&nbsp;<label for=\"simple-radio-2\"> Mes exposés scientifiques</label></li> \t\t\t\t\t\t\t\t\t 
                                                        </ul>
                                                </div>

                                        </div>

                                        <div class=\"columns\">
                                                <div class=\"float-left\">
                                                        <ul class=\"checkable-list\">
                                                                        <li><input type=\"checkbox\" name=\"stats-display[]\" id=\"stats-display-0\" value=\"0\">&nbsp;<label for=\"stats-display-0\">Pour comprendre les bases d'un sujet</label></li>
                                                                        <li><input type=\"checkbox\" name=\"stats-display[]\" id=\"stats-display-1\" value=\"1\">&nbsp;<label for=\"stats-display-1\">Pour approfondir mes connaissances sur un sujet</label></li>
                                                                        <li><input type=\"checkbox\" name=\"stats-display[]\" id=\"stats-display-0\" value=\"0\">&nbsp;<label for=\"stats-display-0\">Pour résoudre les problèmes du domaine</label> </li>
                                                                        <li><input type=\"checkbox\" name=\"stats-display[]\" id=\"stats-display-1\" value=\"1\">&nbsp;<label for=\"stats-display-1\">Pour s'exercer</label></li>\t\t\t\t\t\t\t\t\t\t\t
                                                        </ul>

                                                </div>
                                        </div>
                                        <div class=\"columns\">
                                                <div class=\"float-right\">
                                                        <button type=\"button\"><img src=\"images/icons/fugue/tick-circle.png\" width=\"16\" height=\"16\"> Rechercher</button>
                                                </div>
                                        </div>



                                </a></fieldset><a href=\"#\">




                                </a><div class=\"head\"><a href=\"#\">

                                        <div class=\"black-cell\">Trier par</div>
                                        </a><div><a href=\"#\">
                                                <span class=\"column-sort\">
                                                        </span></a><a href=\"#\" title=\"Sort up\" class=\"sort-up active\"></a>
                                                        <a href=\"#\" title=\"Sort down\" class=\"sort-down\"></a>

                                                Libellé
                                        </div>
                                        <div>
                                                <span class=\"column-sort\">
                                                        <a href=\"#\" title=\"Sort up\" class=\"sort-up\"></a>
                                                        <a href=\"#\" title=\"Sort down\" class=\"sort-down\"></a>
                                                </span>
                                                Date
                                        </div>
                                        <div>
                                                <span class=\"column-sort\">
                                                        <a href=\"#\" title=\"Sort up\" class=\"sort-up\"></a>
                                                        <a href=\"#\" title=\"Sort down\" class=\"sort-down\"></a>
                                                </span>
                                                Domaine
                                        </div>
                                </div>

                <!--fin recherche avancée-->\t
                                <div id=\"chart_div\" style=\"height:30px;\"></div>

                        </form>
                                <div class=\"task with-legend\">

                                        <!-- The legend -->
                                        <div class=\"legend\"><img src=\"images/icons/fugue/document-pdf.png\" width=\"16\" height=\"16\"> Type de fiche</div>

                                        <div class=\"task-description\">

                                                <!-- Task-list has special integration of the floating-tags class -->

                                                <div class=\"columns\">
                                                        <ul class=\"floating-tags\">
                                                                <li class=\"tag-time\">5 days ago</li>
                                                                <li class=\"tag-user\">You</li>
                                                                <li>Domaine</li>
                                                                <li>Théme</li>
                                                        </ul>
                                                        <h3><a href=\"#\">Fiche 1</a></h3>
                                                        Small task description ...
                                                </div> 
                                                <div class=\"columns\">
                                                        <ul class=\"keywords\">
                                                                <li><img src=\"images/icons/fugue/tag-small.png\" width=\"16\" height=\"16\"> Sea</li>
                                                                <li><img src=\"images/icons/fugue/tag-small.png\" width=\"16\" height=\"16\"> Fish</li>
                                                                <li><a href=\"#\"><img src=\"images/icons/fugue/tag-small.png\" width=\"16\" height=\"16\"> Bubble</a></li>
                                                        </ul>
                                                </div>
                                        </div>
                                                <ul class=\"mini-menu\" style=\"opacity: 0;\">
                                                        <li><a href=\"#\" title=\"Delete\"> + Détails<img src=\"images/icons/fugue/navigation-000-white.png\" width=\"16\" height=\"16\"></a></li>
                                                </ul>
                                        </div>\t

                                        <div class=\"task with-legend\">

                                        <!-- The legend -->
                                        <div class=\"legend\"><img src=\"images/icons/fugue/film.png\" width=\"16\" height=\"16\"> Type de fiche</div>

                                        <div class=\"task-description\">

                                                <!-- Task-list has special integration of the floating-tags class -->

                                                <div class=\"columns\">
                                                        <ul class=\"floating-tags\">
                                                                <li class=\"tag-time\">5 days ago</li>
                                                                <li class=\"tag-user\">You</li>
                                                                <li>Domaine</li>
                                                                <li>Théme</li>
                                                        </ul>
                                                        <h3><a href=\"#\">Fiche 1</a></h3>
                                                        Small task description ...
                                                </div> 
                                                <div class=\"columns\">
                                                        <ul class=\"keywords\">
                                                                <li><img src=\"images/icons/fugue/tag-small.png\" width=\"16\" height=\"16\"> Sea</li>
                                                                <li><img src=\"images/icons/fugue/tag-small.png\" width=\"16\" height=\"16\"> Fish</li>
                                                                <li><a href=\"#\"><img src=\"images/icons/fugue/tag-small.png\" width=\"16\" height=\"16\"> Bubble</a></li>
                                                        </ul>
                                                </div>
                                        </div>
                                        <ul class=\"mini-menu\" style=\"opacity: 0;\">
                                                <li><a href=\"#\" title=\"Delete\"> + Détails<img src=\"images/icons/fugue/navigation-000-white.png\" width=\"16\" height=\"16\"></a></li>
                                        </ul>
                                </div>\t

                                <div class=\"task with-legend\">

                                        <!-- The legend -->
                                        <div class=\"legend\"><img src=\"images/icons/fugue/document-powerpoint.png\" width=\"16\" height=\"16\"> Type de fiche</div>

                                        <div class=\"task-description\">

                                                <!-- Task-list has special integration of the floating-tags class -->

                                                <div class=\"columns\">
                                                        <ul class=\"floating-tags\">
                                                                <li class=\"tag-time\">5 days ago</li>
                                                                <li class=\"tag-user\">You</li>
                                                                <li>Domaine</li>
                                                                <li>Théme</li>
                                                        </ul>
                                                        <h3><a href=\"#\">Fiche 1</a></h3>
                                                        Small task description ...
                                                </div> 
                                                <div class=\"columns\">
                                                        <ul class=\"keywords\">
                                                                <li><img src=\"images/icons/fugue/tag-small.png\" width=\"16\" height=\"16\"> Sea</li>
                                                                <li><img src=\"images/icons/fugue/tag-small.png\" width=\"16\" height=\"16\"> Fish</li>
                                                                <li><a href=\"#\"><img src=\"images/icons/fugue/tag-small.png\" width=\"16\" height=\"16\"> Bubble</a></li>
                                                        </ul>
                                                </div>
                                        </div>
                                        <ul class=\"mini-menu\" style=\"opacity: 0;\">
                                                <li><a href=\"#\" title=\"Delete\"> + Détails<img src=\"images/icons/fugue/navigation-000-white.png\" width=\"16\" height=\"16\"></a></li>
                                        </ul>
                                </div>\t
                                <div class=\"task with-legend\">

                                        <!-- The legend -->
                                        <div class=\"legend\"><img src=\"images/icons/fugue/document-pdf.png\" width=\"16\" height=\"16\"> Type de fiche</div>

                                        <div class=\"task-description\">

                                                <!-- Task-list has special integration of the floating-tags class -->

                                                <div class=\"columns\">
                                                        <ul class=\"floating-tags\">
                                                                <li class=\"tag-time\">5 days ago</li>
                                                                <li class=\"tag-user\">You</li>
                                                                <li>Domaine</li>
                                                                <li>Théme</li>
                                                        </ul>
                                                        <h3><a href=\"#\">Fiche 1</a></h3>
                                                        Small task description ...
                                                </div> 
                                                <div class=\"columns\">
                                                        <ul class=\"keywords\">
                                                                <li><img src=\"images/icons/fugue/tag-small.png\" width=\"16\" height=\"16\"> Sea</li>
                                                                <li><img src=\"images/icons/fugue/tag-small.png\" width=\"16\" height=\"16\"> Fish</li>
                                                                <li><a href=\"#\"><img src=\"images/icons/fugue/tag-small.png\" width=\"16\" height=\"16\"> Bubble</a></li>
                                                        </ul>
                                                </div>
                                        </div>
                                                <ul class=\"mini-menu\" style=\"opacity: 0;\">
                                                        <li><a href=\"#\" title=\"Delete\"> + Détails<img src=\"images/icons/fugue/navigation-000-white.png\" width=\"16\" height=\"16\"></a></li>
                                                </ul>
                                        </div>\t
                                        <div class=\"task with-legend\">

                                        <!-- The legend -->
                                        <div class=\"legend\"><img src=\"images/icons/fugue/document-pdf.png\" width=\"16\" height=\"16\"> Type de fiche</div>

                                        <div class=\"task-description\">

                                                <!-- Task-list has special integration of the floating-tags class -->

                                                <div class=\"columns\">
                                                        <ul class=\"floating-tags\">
                                                                <li class=\"tag-time\">5 days ago</li>
                                                                <li class=\"tag-user\">You</li>
                                                                <li>Domaine</li>
                                                                <li>Théme</li>
                                                        </ul>
                                                        <h3><a href=\"#\">Fiche 1</a></h3>
                                                        Small task description ...
                                                </div> 
                                                <div class=\"columns\">
                                                        <ul class=\"keywords\">
                                                                <li><img src=\"images/icons/fugue/tag-small.png\" width=\"16\" height=\"16\"> Sea</li>
                                                                <li><img src=\"images/icons/fugue/tag-small.png\" width=\"16\" height=\"16\"> Fish</li>
                                                                <li><a href=\"#\"><img src=\"images/icons/fugue/tag-small.png\" width=\"16\" height=\"16\"> Bubble</a></li>
                                                        </ul>
                                                </div>
                                        </div>
                                                <ul class=\"mini-menu\" style=\"opacity: 0;\">
                                                        <li><a href=\"#\" title=\"Delete\"> + Détails<img src=\"images/icons/fugue/navigation-000-white.png\" width=\"16\" height=\"16\"></a></li>
                                                </ul>
                                        </div>\t
                                <ul class=\"controls-buttons\">
                                        <li><a href=\"#\" title=\"Précédent\"><img src=\"images/icons/fugue/navigation-180.png\" width=\"16\" height=\"16\"> Précédent</a></li>
                                        <li><a href=\"#\" title=\"Page 1\"><b>1</b></a></li>
                                        <li><a href=\"#\" title=\"Page 2\" class=\"current\"><b>2</b></a></li>
                                        <li><a href=\"#\" title=\"Page 3\"><b>3</b></a></li>
                                        <li><a href=\"#\" title=\"Page 4\"><b>4</b></a></li>
                                        <li><a href=\"#\" title=\"Page 5\"><b>5</b></a></li>
                                        <li><a href=\"#\" title=\"suivant\">Suivant <img src=\"images/icons/fugue/navigation.png\" width=\"16\" height=\"16\"></a></li>

                                </ul>
                                <div class=\"clear\"></div>
                    </div>

                </div>

        </section>
        <!--fin section lioste des publications -->\t


";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle:Representation:listes_ressources.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,);
    }
}
