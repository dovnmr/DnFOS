<?php

/* ::base.html.twig */
class __TwigTemplate_a93e67ed8b236096d7ca11d133c10aa4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1179 => 332,  1173 => 331,  1167 => 330,  1161 => 329,  1155 => 328,  1149 => 327,  1143 => 326,  1137 => 325,  1131 => 324,  1115 => 318,  1108 => 317,  1106 => 316,  1103 => 315,  1080 => 311,  1055 => 310,  1053 => 309,  1050 => 308,  1038 => 303,  1033 => 302,  1031 => 301,  1028 => 300,  1019 => 294,  1013 => 292,  1010 => 291,  1005 => 290,  1003 => 289,  1000 => 288,  993 => 283,  986 => 281,  983 => 277,  979 => 276,  976 => 275,  973 => 274,  971 => 273,  968 => 272,  960 => 268,  958 => 267,  955 => 266,  948 => 261,  945 => 260,  937 => 255,  933 => 254,  929 => 253,  926 => 252,  924 => 251,  921 => 250,  913 => 246,  911 => 242,  909 => 241,  906 => 240,  885 => 234,  882 => 233,  879 => 232,  876 => 231,  873 => 230,  870 => 229,  867 => 228,  864 => 227,  861 => 226,  858 => 225,  856 => 224,  853 => 223,  845 => 217,  842 => 216,  840 => 215,  837 => 214,  829 => 210,  826 => 209,  824 => 208,  821 => 207,  813 => 203,  810 => 202,  808 => 201,  805 => 200,  797 => 196,  794 => 195,  792 => 194,  789 => 193,  781 => 189,  778 => 188,  773 => 186,  765 => 182,  762 => 181,  760 => 180,  757 => 179,  749 => 175,  747 => 174,  744 => 173,  736 => 169,  733 => 168,  731 => 167,  728 => 166,  720 => 162,  717 => 161,  715 => 160,  713 => 159,  710 => 158,  703 => 153,  695 => 152,  687 => 150,  681 => 148,  676 => 146,  673 => 145,  665 => 139,  662 => 137,  660 => 135,  655 => 134,  649 => 132,  646 => 131,  641 => 129,  632 => 123,  628 => 122,  624 => 121,  620 => 120,  615 => 119,  601 => 114,  585 => 110,  583 => 109,  580 => 108,  564 => 104,  562 => 103,  559 => 102,  542 => 98,  530 => 96,  521 => 92,  516 => 91,  495 => 89,  493 => 88,  490 => 87,  481 => 82,  478 => 81,  475 => 80,  469 => 78,  467 => 77,  462 => 76,  459 => 75,  450 => 72,  448 => 71,  440 => 70,  438 => 69,  435 => 68,  421 => 62,  416 => 61,  407 => 59,  405 => 58,  402 => 57,  393 => 52,  387 => 50,  384 => 49,  382 => 48,  369 => 43,  353 => 36,  350 => 35,  345 => 33,  334 => 27,  329 => 26,  290 => 14,  278 => 8,  272 => 6,  269 => 5,  256 => 330,  250 => 327,  248 => 326,  244 => 324,  241 => 323,  236 => 315,  233 => 314,  220 => 297,  218 => 288,  210 => 271,  208 => 266,  200 => 260,  197 => 259,  195 => 250,  187 => 239,  179 => 222,  129 => 145,  124 => 129,  99 => 68,  276 => 248,  262 => 236,  260 => 332,  790 => 469,  787 => 468,  776 => 187,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 151,  686 => 451,  682 => 450,  678 => 147,  674 => 448,  670 => 447,  666 => 446,  663 => 138,  661 => 136,  644 => 130,  633 => 442,  618 => 437,  613 => 435,  609 => 117,  606 => 116,  604 => 115,  590 => 431,  558 => 401,  540 => 398,  523 => 93,  520 => 396,  518 => 395,  513 => 90,  508 => 391,  173 => 85,  166 => 206,  161 => 199,  156 => 192,  150 => 75,  112 => 39,  356 => 37,  347 => 34,  343 => 159,  335 => 157,  323 => 24,  316 => 22,  309 => 141,  302 => 137,  288 => 129,  281 => 125,  274 => 121,  259 => 109,  238 => 321,  217 => 83,  214 => 82,  211 => 81,  206 => 78,  203 => 77,  192 => 249,  158 => 56,  69 => 11,  204 => 94,  185 => 68,  167 => 64,  164 => 200,  134 => 158,  110 => 38,  87 => 26,  182 => 223,  160 => 59,  90 => 27,  388 => 160,  385 => 159,  379 => 47,  377 => 157,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  357 => 151,  352 => 149,  344 => 147,  342 => 32,  339 => 145,  333 => 156,  330 => 140,  327 => 139,  325 => 150,  320 => 135,  314 => 21,  306 => 128,  301 => 125,  295 => 16,  292 => 15,  289 => 119,  287 => 13,  280 => 114,  275 => 111,  273 => 110,  268 => 107,  264 => 3,  258 => 331,  254 => 329,  252 => 328,  247 => 97,  245 => 101,  231 => 308,  226 => 300,  221 => 83,  215 => 287,  209 => 73,  202 => 263,  193 => 68,  190 => 240,  188 => 69,  183 => 63,  177 => 59,  174 => 214,  169 => 207,  148 => 74,  56 => 12,  53 => 5,  97 => 23,  86 => 46,  77 => 21,  65 => 17,  49 => 12,  140 => 49,  117 => 44,  113 => 40,  23 => 1,  82 => 26,  62 => 14,  40 => 11,  20 => 1,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 74,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 64,  426 => 143,  422 => 142,  412 => 60,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 42,  364 => 41,  361 => 110,  359 => 109,  354 => 150,  340 => 158,  336 => 103,  321 => 23,  313 => 99,  311 => 20,  308 => 129,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 115,  277 => 86,  267 => 4,  263 => 84,  257 => 234,  251 => 80,  246 => 325,  240 => 219,  234 => 89,  228 => 307,  223 => 299,  219 => 70,  213 => 272,  207 => 95,  198 => 74,  181 => 87,  176 => 220,  170 => 60,  168 => 60,  146 => 178,  142 => 56,  128 => 45,  125 => 44,  107 => 37,  38 => 5,  144 => 173,  141 => 172,  135 => 47,  126 => 144,  109 => 102,  103 => 25,  67 => 16,  61 => 2,  47 => 12,  91 => 56,  84 => 25,  44 => 11,  28 => 3,  25 => 29,  225 => 88,  216 => 90,  212 => 78,  205 => 265,  201 => 83,  196 => 92,  194 => 79,  191 => 70,  189 => 77,  186 => 76,  180 => 72,  172 => 64,  159 => 193,  154 => 186,  147 => 58,  132 => 47,  127 => 52,  121 => 128,  118 => 29,  114 => 108,  104 => 87,  100 => 36,  78 => 24,  75 => 24,  71 => 19,  34 => 5,  105 => 41,  93 => 28,  76 => 31,  72 => 18,  68 => 30,  58 => 14,  27 => 5,  24 => 3,  19 => 1,  94 => 57,  88 => 30,  79 => 23,  59 => 6,  31 => 5,  26 => 3,  21 => 1,  70 => 20,  63 => 16,  46 => 10,  22 => 2,  163 => 81,  155 => 58,  152 => 49,  149 => 179,  145 => 57,  139 => 166,  131 => 157,  123 => 35,  120 => 50,  115 => 40,  106 => 101,  101 => 86,  96 => 67,  83 => 24,  80 => 32,  74 => 21,  66 => 12,  55 => 13,  52 => 13,  50 => 12,  43 => 7,  41 => 6,  37 => 7,  35 => 7,  32 => 4,  29 => 5,  184 => 237,  178 => 86,  171 => 213,  165 => 60,  162 => 53,  157 => 60,  153 => 62,  151 => 185,  143 => 56,  138 => 55,  136 => 165,  133 => 31,  130 => 53,  122 => 51,  119 => 114,  116 => 113,  111 => 107,  108 => 33,  102 => 30,  98 => 29,  95 => 34,  92 => 31,  89 => 47,  85 => 29,  81 => 24,  73 => 20,  64 => 10,  60 => 20,  57 => 14,  54 => 13,  51 => 11,  48 => 11,  45 => 8,  42 => 10,  39 => 10,  36 => 5,  33 => 6,  30 => 3,);
    }
}
