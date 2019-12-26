<?php

/* mintleaf/template/account/account.twig */
class __TwigTemplate_a1752f2a30c3421f5046fb21830e1af2bd89d3d562cc7edfe80c5609389c4d49 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div id=\"account-account\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  ";
        // line 8
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 9
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "</div>
  ";
        }
        // line 11
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 12
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 13
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 14
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 18
            echo "    ";
        }
        // line 19
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <div class=\"sblock-1\">
        <h5 class=\"sblock-1-heading\">";
        // line 21
        echo (isset($context["text_my_account"]) ? $context["text_my_account"] : null);
        echo "</h5>
        <div class=\"sblock-1-content\">
          <ul class=\"list-unstyled list-style-1\">
            <li><a href=\"";
        // line 24
        echo (isset($context["edit"]) ? $context["edit"] : null);
        echo "\">";
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</a></li>
            <li><a href=\"";
        // line 25
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\">";
        echo (isset($context["text_password"]) ? $context["text_password"] : null);
        echo "</a></li>
            <li><a href=\"";
        // line 26
        echo (isset($context["address"]) ? $context["address"] : null);
        echo "\">";
        echo (isset($context["text_address"]) ? $context["text_address"] : null);
        echo "</a></li>
            <li><a href=\"";
        // line 27
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a></li>
          </ul>
        </div>
      </div>
      ";
        // line 31
        if ((isset($context["credit_cards"]) ? $context["credit_cards"] : null)) {
            // line 32
            echo "      <h2>";
            echo (isset($context["text_credit_card"]) ? $context["text_credit_card"] : null);
            echo "</h2>
      <ul class=\"list-unstyled\">
        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["credit_cards"]) ? $context["credit_cards"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 35
                echo "        <li><a href=\"";
                echo $this->getAttribute($context["credit_card"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["credit_card"], "name", array());
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "      </ul>
      ";
        }
        // line 39
        echo "      <div class=\"sblock-1\">
        <h5 class=\"sblock-1-heading\">";
        // line 40
        echo (isset($context["text_my_orders"]) ? $context["text_my_orders"] : null);
        echo "</h5>
        <div class=\"sblock-1-content\">
          <ul class=\"list-unstyled list-style-1\">
            <li><a href=\"";
        // line 43
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a></li>
            <li><a href=\"";
        // line 44
        echo (isset($context["download"]) ? $context["download"] : null);
        echo "\">";
        echo (isset($context["text_download"]) ? $context["text_download"] : null);
        echo "</a></li>
            ";
        // line 45
        if ((isset($context["reward"]) ? $context["reward"] : null)) {
            // line 46
            echo "            <li><a href=\"";
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "\">";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo "</a></li>
            ";
        }
        // line 48
        echo "            <li><a href=\"";
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a></li>
            <li><a href=\"";
        // line 49
        echo (isset($context["transaction"]) ? $context["transaction"] : null);
        echo "\">";
        echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
        echo "</a></li>
            <li><a href=\"";
        // line 50
        echo (isset($context["recurring"]) ? $context["recurring"] : null);
        echo "\">";
        echo (isset($context["text_recurring"]) ? $context["text_recurring"] : null);
        echo "</a></li>
          </ul>
        </div>
      </div>
      <div class=\"sblock-1\">
        <h5 class=\"sblock-1-heading\">";
        // line 55
        echo (isset($context["text_my_affiliate"]) ? $context["text_my_affiliate"] : null);
        echo "</h5>
        <div class=\"sblock-1-content\">
          <ul class=\"list-unstyled list-style-1\">
            ";
        // line 58
        if ( !(isset($context["tracking"]) ? $context["tracking"] : null)) {
            // line 59
            echo "            <li><a href=\"";
            echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
            echo "\">";
            echo (isset($context["text_affiliate_add"]) ? $context["text_affiliate_add"] : null);
            echo "</a></li>
            ";
        } else {
            // line 61
            echo "            <li><a href=\"";
            echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
            echo "\">";
            echo (isset($context["text_affiliate_edit"]) ? $context["text_affiliate_edit"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 62
            echo (isset($context["tracking"]) ? $context["tracking"] : null);
            echo "\">";
            echo (isset($context["text_tracking"]) ? $context["text_tracking"] : null);
            echo "</a></li>
            ";
        }
        // line 64
        echo "          </ul>
        </div>
      </div>
      <div class=\"sblock-1\">
        <h5 class=\"sblock-1-heading\">";
        // line 68
        echo (isset($context["text_my_newsletter"]) ? $context["text_my_newsletter"] : null);
        echo "</h5>
        <div class=\"sblock-1-content\">
          <ul class=\"list-unstyled list-style-1\">
            <li><a href=\"";
        // line 71
        echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
        echo "\">";
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</a></li>
          </ul>
        </div>
      </div>
      ";
        // line 75
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 76
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 78
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "mintleaf/template/account/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 78,  253 => 76,  249 => 75,  240 => 71,  234 => 68,  228 => 64,  221 => 62,  214 => 61,  206 => 59,  204 => 58,  198 => 55,  188 => 50,  182 => 49,  175 => 48,  167 => 46,  165 => 45,  159 => 44,  153 => 43,  147 => 40,  144 => 39,  140 => 37,  129 => 35,  125 => 34,  119 => 32,  117 => 31,  108 => 27,  102 => 26,  96 => 25,  90 => 24,  84 => 21,  76 => 19,  73 => 18,  70 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  56 => 12,  51 => 11,  45 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="account-account" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   {% if success %}*/
/*   <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}</div>*/
/*   {% endif %}*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <div class="sblock-1">*/
/*         <h5 class="sblock-1-heading">{{ text_my_account }}</h5>*/
/*         <div class="sblock-1-content">*/
/*           <ul class="list-unstyled list-style-1">*/
/*             <li><a href="{{ edit }}">{{ text_edit }}</a></li>*/
/*             <li><a href="{{ password }}">{{ text_password }}</a></li>*/
/*             <li><a href="{{ address }}">{{ text_address }}</a></li>*/
/*             <li><a href="{{ wishlist }}">{{ text_wishlist }}</a></li>*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*       {% if credit_cards %}*/
/*       <h2>{{ text_credit_card }}</h2>*/
/*       <ul class="list-unstyled">*/
/*         {% for credit_card in credit_cards %}*/
/*         <li><a href="{{ credit_card.href }}">{{ credit_card.name }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*       {% endif %}*/
/*       <div class="sblock-1">*/
/*         <h5 class="sblock-1-heading">{{ text_my_orders }}</h5>*/
/*         <div class="sblock-1-content">*/
/*           <ul class="list-unstyled list-style-1">*/
/*             <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*             <li><a href="{{ download }}">{{ text_download }}</a></li>*/
/*             {% if reward %}*/
/*             <li><a href="{{ reward }}">{{ text_reward }}</a></li>*/
/*             {% endif %}*/
/*             <li><a href="{{ return }}">{{ text_return }}</a></li>*/
/*             <li><a href="{{ transaction }}">{{ text_transaction }}</a></li>*/
/*             <li><a href="{{ recurring }}">{{ text_recurring }}</a></li>*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*       <div class="sblock-1">*/
/*         <h5 class="sblock-1-heading">{{ text_my_affiliate }}</h5>*/
/*         <div class="sblock-1-content">*/
/*           <ul class="list-unstyled list-style-1">*/
/*             {% if not tracking %}*/
/*             <li><a href="{{ affiliate }}">{{ text_affiliate_add }}</a></li>*/
/*             {% else %}*/
/*             <li><a href="{{ affiliate }}">{{ text_affiliate_edit }}</a></li>*/
/*             <li><a href="{{ tracking }}">{{ text_tracking }}</a></li>*/
/*             {% endif %}*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*       <div class="sblock-1">*/
/*         <h5 class="sblock-1-heading">{{ text_my_newsletter }}</h5>*/
/*         <div class="sblock-1-content">*/
/*           <ul class="list-unstyled list-style-1">*/
/*             <li><a href="{{ newsletter }}">{{ text_newsletter }}</a></li>*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
