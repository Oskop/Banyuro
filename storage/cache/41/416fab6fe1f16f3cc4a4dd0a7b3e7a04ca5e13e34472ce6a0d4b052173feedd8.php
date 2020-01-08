<?php

/* mintleaf/template/product/search.twig */
class __TwigTemplate_86c04510ba7ac915aef08a8a2c7674aa983e429a28cab4eb2af8ff3072776ba0 extends Twig_Template
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
<div id=\"product-search\" class=\"container\">
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
  <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h4 class=\"page-heading-1\">";
        // line 17
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h4>
      <label class=\"control-label\" for=\"input-search\">";
        // line 18
        echo (isset($context["entry_search"]) ? $context["entry_search"] : null);
        echo "</label>
      <div class=\"row\">
        <div class=\"col-sm-4\">
          <input type=\"text\" name=\"search\" value=\"";
        // line 21
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_keyword"]) ? $context["text_keyword"] : null);
        echo "\" id=\"input-search\" class=\"form-control\" />
        </div>
        <div class=\"col-sm-3\">
          <select name=\"category_id\" class=\"form-control\">
            <option value=\"0\">";
        // line 25
        echo (isset($context["text_category"]) ? $context["text_category"] : null);
        echo "</option>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 27
            echo "            ";
            if (($this->getAttribute($context["category_1"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                // line 28
                echo "            <option value=\"";
                echo $this->getAttribute($context["category_1"], "category_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["category_1"], "name", array());
                echo "</option>
            ";
            } else {
                // line 30
                echo "            <option value=\"";
                echo $this->getAttribute($context["category_1"], "category_id", array());
                echo "\">";
                echo $this->getAttribute($context["category_1"], "name", array());
                echo "</option>
            ";
            }
            // line 32
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_1"], "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 33
                echo "            ";
                if (($this->getAttribute($context["category_2"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                    // line 34
                    echo "            <option value=\"";
                    echo $this->getAttribute($context["category_2"], "category_id", array());
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo $this->getAttribute($context["category_2"], "name", array());
                    echo "</option>
            ";
                } else {
                    // line 36
                    echo "            <option value=\"";
                    echo $this->getAttribute($context["category_2"], "category_id", array());
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo $this->getAttribute($context["category_2"], "name", array());
                    echo "</option>
            ";
                }
                // line 38
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_2"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 39
                    echo "            ";
                    if (($this->getAttribute($context["category_3"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                        // line 40
                        echo "            <option value=\"";
                        echo $this->getAttribute($context["category_3"], "category_id", array());
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo $this->getAttribute($context["category_3"], "name", array());
                        echo "</option>
            ";
                    } else {
                        // line 42
                        echo "            <option value=\"";
                        echo $this->getAttribute($context["category_3"], "category_id", array());
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo $this->getAttribute($context["category_3"], "name", array());
                        echo "</option>
            ";
                    }
                    // line 44
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "          </select>
        </div>
        <div class=\"col-sm-3\">
          <label class=\"checkbox-inline\">
            ";
        // line 51
        if ((isset($context["sub_category"]) ? $context["sub_category"] : null)) {
            // line 52
            echo "            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" checked=\"checked\" />
            ";
        } else {
            // line 54
            echo "            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" />
            ";
        }
        // line 56
        echo "            ";
        echo (isset($context["text_sub_category"]) ? $context["text_sub_category"] : null);
        echo "</label>
        </div>
      </div>
      <p>
        <label class=\"checkbox-inline\">
          ";
        // line 61
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 62
            echo "          <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked=\"checked\" />
          ";
        } else {
            // line 64
            echo "          <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" />
          ";
        }
        // line 66
        echo "          ";
        echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
        echo "</label>
      </p>
      <input type=\"button\" value=\"";
        // line 68
        echo (isset($context["button_search"]) ? $context["button_search"] : null);
        echo "\" id=\"button-search\" class=\"btn btn-primary\" />
      <hr class=\"hr-1\">
      <h5 class=\"page-sub-heading-1 alt\">";
        // line 70
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "</h5>
      ";
        // line 71
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 72
            echo "        <div class=\"product-sort-wrap rounded-3\">
          <div class=\"row\">
            <div class=\"col-md-2 col-xs-4\">
              <div class=\"btn-group\">
                <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 76
            echo (isset($context["button_list"]) ? $context["button_list"] : null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
                <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 77
            echo (isset($context["button_grid"]) ? $context["button_grid"] : null);
            echo "\"><i class=\"fa fa-th\"></i></button>
              </div>
            </div>
            <div class=\"col-md-3 col-xs-8 text-right-sm text-right-xs\">
              <div class=\"form-group\"><a href=\"";
            // line 81
            echo (isset($context["compare"]) ? $context["compare"] : null);
            echo "\" id=\"compare-total\" class=\"btn btn-link\">";
            echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
            echo "</a></div>
            </div>
            <div class=\"col-md-4 col-xs-6\">
              <div class=\"form-group input-group\">
                <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 85
            echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
            echo "</label>
                <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                  ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 88
                echo "                    ";
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 89
                    echo "                      <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
                    ";
                } else {
                    // line 91
                    echo "                      <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
                    ";
                }
                // line 93
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                </select>
              </div>
            </div>
            <div class=\"col-md-3 col-xs-6\">
              <div class=\"form-group input-group\">
                <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 99
            echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
            echo "</label>
                <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                  ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 102
                echo "                    ";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 103
                    echo "                      <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
                    ";
                } else {
                    // line 105
                    echo "                      <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
                    ";
                }
                // line 107
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "                </select>
              </div>
            </div>
          </div>
        </div>
      <div class=\"row\"> ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 114
                echo "      <!-- Product Col Starts -->
        <div class=\"product-layout product-list col-xs-12\">
        <!-- Product Module Starts -->
          <div class=\"product-thumb module-product animation\">
          <!-- Product Image Starts -->
            <div class=\"module-product-image\">
              <a href=\"";
                // line 120
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\" /></a>
            </div>
          <!-- Product Image Ends -->
          <!-- Product Caption Starts -->
            <div class=\"module-product-caption\">
            <!-- Product Name Starts -->
              <h6 class=\"module-product-title\"><a href=\"";
                // line 126
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h6>
            <!-- Product Name Ends -->
            <!-- Product Description Starts -->
              <div class=\"module-product-description\">
                ";
                // line 130
                echo $this->getAttribute($context["product"], "description", array());
                echo "
              </div>
            <!-- Product Description Ends -->
            ";
                // line 133
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 134
                    echo "            <!-- Product Ratings Starts -->
              <div class=\"module-product-ratings\">
                ";
                    // line 136
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 137
                        echo "                  ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            // line 138
                            echo "                    <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                  ";
                        } else {
                            // line 140
                            echo "                    <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                  ";
                        }
                        // line 142
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 143
                    echo "              </div>
            <!-- Product Ratings Ends -->
            ";
                }
                // line 146
                echo "             ";
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 147
                    echo "              <!-- Product Price Starts -->
                <div class=\"module-product-price\">
                  ";
                    // line 149
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 150
                        echo "                    ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
                  ";
                    } else {
                        // line 152
                        echo "                    <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
                  ";
                    }
                    // line 154
                    echo "                  ";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 155
                        echo "                  <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
                  ";
                    }
                    // line 157
                    echo "                </div>
              <!-- Product Price Ends -->
              ";
                }
                // line 160
                echo "              <!-- Add To Cart Button Starts -->
                <button type=\"button\" class=\"btn module-product-btn-cart animation\" onclick=\"cart.add('";
                // line 161
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> ";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</button>
              <!-- Add To Cart Button Ends -->
            </div>
          <!-- Product Caption Ends -->
          </div>
        <!-- Product Module Ends -->
        </div>
      <!-- Product Col Ends -->
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            echo " </div>
        <div class=\"pagination-wrap\">
          <div class=\"row\">
            <div class=\"col-sm-6 text-left-lg text-left-md text-left-sm results\">";
            // line 172
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
            <div class=\"col-sm-6 text-right-lg text-right-md text-right-sm\">";
            // line 173
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
          </div>
        </div>
      ";
        } else {
            // line 177
            echo "      <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      ";
        }
        // line 179
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 180
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-search').bind('click', function() {
\turl = 'index.php?route=product/search';

\tvar search = \$('#content input[name=\\'search\\']').prop('value');

\tif (search) {
\t\turl += '&search=' + encodeURIComponent(search);
\t}

\tvar category_id = \$('#content select[name=\\'category_id\\']').prop('value');

\tif (category_id > 0) {
\t\turl += '&category_id=' + encodeURIComponent(category_id);
\t}

\tvar sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');

\tif (sub_category) {
\t\turl += '&sub_category=true';
\t}

\tvar filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');

\tif (filter_description) {
\t\turl += '&description=true';
\t}

\tlocation = url;
});

\$('#content input[name=\\'search\\']').bind('keydown', function(e) {
\tif (e.keyCode == 13) {
\t\t\$('#button-search').trigger('click');
\t}
});

\$('select[name=\\'category_id\\']').on('change', function() {
\tif (this.value == '0') {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', true);
\t} else {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', false);
\t}
});

\$('select[name=\\'category_id\\']').trigger('change');
--></script>
";
        // line 229
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "mintleaf/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  558 => 229,  506 => 180,  501 => 179,  495 => 177,  488 => 173,  484 => 172,  479 => 169,  462 => 161,  459 => 160,  454 => 157,  446 => 155,  443 => 154,  435 => 152,  429 => 150,  427 => 149,  423 => 147,  420 => 146,  415 => 143,  409 => 142,  405 => 140,  401 => 138,  398 => 137,  394 => 136,  390 => 134,  388 => 133,  382 => 130,  373 => 126,  358 => 120,  350 => 114,  346 => 113,  339 => 108,  333 => 107,  325 => 105,  317 => 103,  314 => 102,  310 => 101,  305 => 99,  298 => 94,  292 => 93,  284 => 91,  276 => 89,  273 => 88,  269 => 87,  264 => 85,  255 => 81,  248 => 77,  244 => 76,  238 => 72,  236 => 71,  232 => 70,  227 => 68,  221 => 66,  217 => 64,  213 => 62,  211 => 61,  202 => 56,  198 => 54,  194 => 52,  192 => 51,  186 => 47,  180 => 46,  174 => 45,  168 => 44,  160 => 42,  152 => 40,  149 => 39,  144 => 38,  136 => 36,  128 => 34,  125 => 33,  120 => 32,  112 => 30,  104 => 28,  101 => 27,  97 => 26,  93 => 25,  84 => 21,  78 => 18,  74 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="product-search" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <h4 class="page-heading-1">{{ heading_title }}</h4>*/
/*       <label class="control-label" for="input-search">{{ entry_search }}</label>*/
/*       <div class="row">*/
/*         <div class="col-sm-4">*/
/*           <input type="text" name="search" value="{{ search }}" placeholder="{{ text_keyword }}" id="input-search" class="form-control" />*/
/*         </div>*/
/*         <div class="col-sm-3">*/
/*           <select name="category_id" class="form-control">*/
/*             <option value="0">{{ text_category }}</option>*/
/*             {% for category_1 in categories %}*/
/*             {% if category_1.category_id == category_id %}*/
/*             <option value="{{ category_1.category_id }}" selected="selected">{{ category_1.name }}</option>*/
/*             {% else %}*/
/*             <option value="{{ category_1.category_id }}">{{ category_1.name }}</option>*/
/*             {% endif %}*/
/*             {% for category_2 in category_1.children %}*/
/*             {% if category_2.category_id == category_id %}*/
/*             <option value="{{ category_2.category_id }}" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_2.name }}</option>*/
/*             {% else %}*/
/*             <option value="{{ category_2.category_id }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_2.name }}</option>*/
/*             {% endif %}*/
/*             {% for category_3 in category_2.children %}*/
/*             {% if category_3.category_id == category_id %}*/
/*             <option value="{{ category_3.category_id }}" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_3.name }}</option>*/
/*             {% else %}*/
/*             <option value="{{ category_3.category_id }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_3.name }}</option>*/
/*             {% endif %}*/
/*             {% endfor %}*/
/*             {% endfor %}*/
/*             {% endfor %}*/
/*           </select>*/
/*         </div>*/
/*         <div class="col-sm-3">*/
/*           <label class="checkbox-inline">*/
/*             {% if sub_category %}*/
/*             <input type="checkbox" name="sub_category" value="1" checked="checked" />*/
/*             {% else %}*/
/*             <input type="checkbox" name="sub_category" value="1" />*/
/*             {% endif %}*/
/*             {{ text_sub_category }}</label>*/
/*         </div>*/
/*       </div>*/
/*       <p>*/
/*         <label class="checkbox-inline">*/
/*           {% if description %}*/
/*           <input type="checkbox" name="description" value="1" id="description" checked="checked" />*/
/*           {% else %}*/
/*           <input type="checkbox" name="description" value="1" id="description" />*/
/*           {% endif %}*/
/*           {{ entry_description }}</label>*/
/*       </p>*/
/*       <input type="button" value="{{ button_search }}" id="button-search" class="btn btn-primary" />*/
/*       <hr class="hr-1">*/
/*       <h5 class="page-sub-heading-1 alt">{{ text_search }}</h5>*/
/*       {% if products %}*/
/*         <div class="product-sort-wrap rounded-3">*/
/*           <div class="row">*/
/*             <div class="col-md-2 col-xs-4">*/
/*               <div class="btn-group">*/
/*                 <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="{{ button_list }}"><i class="fa fa-th-list"></i></button>*/
/*                 <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip" title="{{ button_grid }}"><i class="fa fa-th"></i></button>*/
/*               </div>*/
/*             </div>*/
/*             <div class="col-md-3 col-xs-8 text-right-sm text-right-xs">*/
/*               <div class="form-group"><a href="{{ compare }}" id="compare-total" class="btn btn-link">{{ text_compare }}</a></div>*/
/*             </div>*/
/*             <div class="col-md-4 col-xs-6">*/
/*               <div class="form-group input-group">*/
/*                 <label class="input-group-addon" for="input-sort">{{ text_sort }}</label>*/
/*                 <select id="input-sort" class="form-control" onchange="location = this.value;">*/
/*                   {% for sorts in sorts %}*/
/*                     {% if sorts.value == '%s-%s'|format(sort, order) %}*/
/*                       <option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/*                     {% else %}*/
/*                       <option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/*                     {% endif %}*/
/*                   {% endfor %}*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*             <div class="col-md-3 col-xs-6">*/
/*               <div class="form-group input-group">*/
/*                 <label class="input-group-addon" for="input-limit">{{ text_limit }}</label>*/
/*                 <select id="input-limit" class="form-control" onchange="location = this.value;">*/
/*                   {% for limits in limits %}*/
/*                     {% if limits.value == limit %}*/
/*                       <option value="{{ limits.href }}" selected="selected">{{ limits.text }}</option>*/
/*                     {% else %}*/
/*                       <option value="{{ limits.href }}">{{ limits.text }}</option>*/
/*                     {% endif %}*/
/*                   {% endfor %}*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       <div class="row"> {% for product in products %}*/
/*       <!-- Product Col Starts -->*/
/*         <div class="product-layout product-list col-xs-12">*/
/*         <!-- Product Module Starts -->*/
/*           <div class="product-thumb module-product animation">*/
/*           <!-- Product Image Starts -->*/
/*             <div class="module-product-image">*/
/*               <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a>*/
/*             </div>*/
/*           <!-- Product Image Ends -->*/
/*           <!-- Product Caption Starts -->*/
/*             <div class="module-product-caption">*/
/*             <!-- Product Name Starts -->*/
/*               <h6 class="module-product-title"><a href="{{ product.href }}">{{ product.name }}</a></h6>*/
/*             <!-- Product Name Ends -->*/
/*             <!-- Product Description Starts -->*/
/*               <div class="module-product-description">*/
/*                 {{ product.description }}*/
/*               </div>*/
/*             <!-- Product Description Ends -->*/
/*             {% if product.rating %}*/
/*             <!-- Product Ratings Starts -->*/
/*               <div class="module-product-ratings">*/
/*                 {% for i in 1..5 %}*/
/*                   {% if product.rating < i %}*/
/*                     <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                   {% else %}*/
/*                     <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                   {% endif %}*/
/*                 {% endfor %}*/
/*               </div>*/
/*             <!-- Product Ratings Ends -->*/
/*             {% endif %}*/
/*              {% if product.price %}*/
/*               <!-- Product Price Starts -->*/
/*                 <div class="module-product-price">*/
/*                   {% if not product.special %}*/
/*                     {{ product.price }}*/
/*                   {% else %}*/
/*                     <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/*                   {% endif %}*/
/*                   {% if product.tax %}*/
/*                   <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               <!-- Product Price Ends -->*/
/*               {% endif %}*/
/*               <!-- Add To Cart Button Starts -->*/
/*                 <button type="button" class="btn module-product-btn-cart animation" onclick="cart.add('{{ product.product_id }}');"><i class="fa fa-shopping-cart"></i> {{ button_cart }}</button>*/
/*               <!-- Add To Cart Button Ends -->*/
/*             </div>*/
/*           <!-- Product Caption Ends -->*/
/*           </div>*/
/*         <!-- Product Module Ends -->*/
/*         </div>*/
/*       <!-- Product Col Ends -->*/
/*         {% endfor %} </div>*/
/*         <div class="pagination-wrap">*/
/*           <div class="row">*/
/*             <div class="col-sm-6 text-left-lg text-left-md text-left-sm results">{{ results }}</div>*/
/*             <div class="col-sm-6 text-right-lg text-right-md text-right-sm">{{ pagination }}</div>*/
/*           </div>*/
/*         </div>*/
/*       {% else %}*/
/*       <p>{{ text_empty }}</p>*/
/*       {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('#button-search').bind('click', function() {*/
/* 	url = 'index.php?route=product/search';*/
/* */
/* 	var search = $('#content input[name=\'search\']').prop('value');*/
/* */
/* 	if (search) {*/
/* 		url += '&search=' + encodeURIComponent(search);*/
/* 	}*/
/* */
/* 	var category_id = $('#content select[name=\'category_id\']').prop('value');*/
/* */
/* 	if (category_id > 0) {*/
/* 		url += '&category_id=' + encodeURIComponent(category_id);*/
/* 	}*/
/* */
/* 	var sub_category = $('#content input[name=\'sub_category\']:checked').prop('value');*/
/* */
/* 	if (sub_category) {*/
/* 		url += '&sub_category=true';*/
/* 	}*/
/* */
/* 	var filter_description = $('#content input[name=\'description\']:checked').prop('value');*/
/* */
/* 	if (filter_description) {*/
/* 		url += '&description=true';*/
/* 	}*/
/* */
/* 	location = url;*/
/* });*/
/* */
/* $('#content input[name=\'search\']').bind('keydown', function(e) {*/
/* 	if (e.keyCode == 13) {*/
/* 		$('#button-search').trigger('click');*/
/* 	}*/
/* });*/
/* */
/* $('select[name=\'category_id\']').on('change', function() {*/
/* 	if (this.value == '0') {*/
/* 		$('input[name=\'sub_category\']').prop('disabled', true);*/
/* 	} else {*/
/* 		$('input[name=\'sub_category\']').prop('disabled', false);*/
/* 	}*/
/* });*/
/* */
/* $('select[name=\'category_id\']').trigger('change');*/
/* --></script>*/
/* {{ footer }}*/
