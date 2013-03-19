<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_99b2a65611621f1e5ca2634f36831e8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  19 => 1,  143 => 40,  140 => 39,  133 => 31,  130 => 30,  123 => 33,  121 => 30,  118 => 29,  115 => 28,  109 => 5,  102 => 47,  97 => 45,  94 => 44,  92 => 43,  88 => 41,  86 => 39,  82 => 37,  80 => 28,  77 => 27,  68 => 24,  65 => 23,  61 => 22,  49 => 13,  45 => 12,  37 => 7,  33 => 6,  29 => 5,  23 => 1,  39 => 12,  36 => 11,  30 => 9,  31 => 4,  28 => 3,);
    }
}
