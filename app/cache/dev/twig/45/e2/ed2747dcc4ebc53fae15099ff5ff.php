<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_45e2ed2747dcc4ebc53fae15099ff5ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\"/>
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 163,  347 => 160,  343 => 159,  335 => 157,  323 => 149,  316 => 145,  309 => 141,  302 => 137,  288 => 129,  281 => 125,  274 => 121,  259 => 109,  238 => 97,  217 => 83,  214 => 82,  211 => 81,  206 => 78,  203 => 77,  192 => 72,  158 => 56,  204 => 71,  185 => 68,  167 => 64,  164 => 63,  134 => 54,  110 => 39,  87 => 34,  182 => 69,  160 => 59,  90 => 28,  388 => 160,  385 => 159,  379 => 158,  377 => 157,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  357 => 151,  352 => 149,  344 => 147,  342 => 146,  339 => 145,  333 => 156,  330 => 140,  327 => 139,  325 => 150,  320 => 135,  314 => 131,  306 => 128,  301 => 125,  295 => 133,  292 => 120,  289 => 119,  287 => 118,  280 => 114,  275 => 111,  273 => 110,  268 => 107,  264 => 105,  258 => 103,  254 => 101,  252 => 105,  247 => 97,  245 => 101,  231 => 88,  226 => 86,  221 => 83,  215 => 79,  209 => 73,  202 => 73,  193 => 68,  190 => 67,  188 => 69,  183 => 63,  177 => 59,  174 => 67,  169 => 56,  148 => 52,  62 => 16,  56 => 13,  40 => 6,  97 => 23,  86 => 28,  82 => 19,  77 => 24,  65 => 23,  49 => 13,  140 => 49,  117 => 44,  113 => 40,  69 => 20,  53 => 11,  23 => 1,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 150,  340 => 158,  336 => 103,  321 => 101,  313 => 99,  311 => 130,  308 => 129,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 115,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 93,  234 => 89,  228 => 89,  223 => 71,  219 => 70,  213 => 69,  207 => 76,  198 => 74,  181 => 66,  176 => 61,  170 => 60,  168 => 60,  146 => 58,  142 => 56,  128 => 45,  125 => 44,  107 => 27,  38 => 7,  144 => 53,  141 => 51,  135 => 47,  126 => 45,  109 => 5,  103 => 25,  67 => 23,  61 => 12,  47 => 11,  91 => 35,  84 => 33,  44 => 10,  28 => 3,  25 => 29,  225 => 88,  216 => 90,  212 => 78,  205 => 71,  201 => 83,  196 => 69,  194 => 79,  191 => 70,  189 => 77,  186 => 76,  180 => 72,  172 => 64,  159 => 61,  154 => 54,  147 => 58,  132 => 47,  127 => 52,  121 => 30,  118 => 29,  114 => 42,  104 => 36,  100 => 35,  78 => 21,  75 => 23,  71 => 20,  34 => 5,  105 => 41,  93 => 31,  76 => 17,  72 => 22,  68 => 19,  58 => 16,  27 => 3,  24 => 6,  19 => 1,  94 => 44,  88 => 20,  79 => 23,  59 => 13,  31 => 4,  26 => 9,  21 => 2,  70 => 24,  63 => 16,  46 => 12,  22 => 2,  163 => 59,  155 => 58,  152 => 49,  149 => 48,  145 => 57,  139 => 55,  131 => 46,  123 => 35,  120 => 50,  115 => 44,  106 => 36,  101 => 32,  96 => 21,  83 => 27,  80 => 32,  74 => 21,  66 => 19,  55 => 9,  52 => 14,  50 => 10,  43 => 7,  41 => 8,  37 => 5,  35 => 5,  32 => 5,  29 => 3,  184 => 70,  178 => 62,  171 => 66,  165 => 60,  162 => 53,  157 => 60,  153 => 62,  151 => 53,  143 => 56,  138 => 55,  136 => 50,  133 => 31,  130 => 53,  122 => 51,  119 => 43,  116 => 41,  111 => 37,  108 => 41,  102 => 34,  98 => 32,  95 => 36,  92 => 21,  89 => 29,  85 => 29,  81 => 24,  73 => 16,  64 => 10,  60 => 16,  57 => 16,  54 => 13,  51 => 13,  48 => 11,  45 => 8,  42 => 8,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
