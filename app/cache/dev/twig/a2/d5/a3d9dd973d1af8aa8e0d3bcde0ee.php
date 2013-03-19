<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_a2d5a3d9dd973d1af8aa8e0d3bcde0ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/routing.png"), "html", null, true);
        echo "\" alt=\"Routing\" /></span>
    <strong>Routing</strong>
</span>
";
    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Router:panel", array("token" => $this->getContext($context, "token")), array());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 160,  385 => 159,  379 => 158,  377 => 157,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  357 => 151,  352 => 149,  344 => 147,  342 => 146,  339 => 145,  333 => 141,  330 => 140,  327 => 139,  325 => 138,  320 => 135,  314 => 131,  306 => 128,  301 => 125,  295 => 121,  292 => 120,  289 => 119,  287 => 118,  280 => 114,  275 => 111,  273 => 110,  268 => 107,  264 => 105,  258 => 103,  254 => 101,  252 => 100,  247 => 97,  245 => 96,  231 => 88,  226 => 86,  221 => 83,  215 => 79,  209 => 77,  202 => 73,  193 => 68,  190 => 67,  188 => 66,  183 => 63,  177 => 59,  174 => 58,  169 => 56,  148 => 46,  62 => 16,  56 => 13,  40 => 6,  97 => 23,  86 => 29,  82 => 19,  77 => 24,  65 => 23,  49 => 13,  140 => 42,  117 => 44,  113 => 43,  69 => 11,  53 => 11,  23 => 1,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 150,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 130,  308 => 129,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 115,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 93,  234 => 89,  228 => 87,  223 => 71,  219 => 70,  213 => 69,  207 => 76,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 50,  125 => 44,  107 => 27,  38 => 7,  144 => 53,  141 => 51,  135 => 47,  126 => 45,  109 => 5,  103 => 25,  67 => 14,  61 => 12,  47 => 8,  91 => 20,  84 => 28,  44 => 8,  28 => 3,  25 => 29,  225 => 96,  216 => 90,  212 => 78,  205 => 84,  201 => 83,  196 => 69,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 48,  147 => 55,  132 => 48,  127 => 46,  121 => 30,  118 => 29,  114 => 42,  104 => 36,  100 => 24,  78 => 21,  75 => 23,  71 => 21,  34 => 5,  105 => 41,  93 => 28,  76 => 17,  72 => 14,  68 => 20,  58 => 14,  27 => 4,  24 => 6,  19 => 1,  94 => 44,  88 => 20,  79 => 18,  59 => 13,  31 => 3,  26 => 9,  21 => 2,  70 => 15,  63 => 19,  46 => 8,  22 => 2,  163 => 59,  155 => 58,  152 => 49,  149 => 48,  145 => 46,  139 => 55,  131 => 51,  123 => 35,  120 => 40,  115 => 28,  106 => 36,  101 => 32,  96 => 21,  83 => 28,  80 => 28,  74 => 24,  66 => 15,  55 => 9,  52 => 14,  50 => 10,  43 => 7,  41 => 8,  37 => 5,  35 => 6,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 57,  165 => 54,  162 => 53,  157 => 60,  153 => 54,  151 => 47,  143 => 43,  138 => 51,  136 => 50,  133 => 31,  130 => 39,  122 => 43,  119 => 42,  116 => 31,  111 => 37,  108 => 37,  102 => 47,  98 => 31,  95 => 34,  92 => 21,  89 => 31,  85 => 29,  81 => 40,  73 => 16,  64 => 10,  60 => 23,  57 => 12,  54 => 10,  51 => 11,  48 => 9,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
