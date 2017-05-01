<?php

/* themes/solid/templates/system/page.html.twig */
class __TwigTemplate_4c4d12cd8c15fe9f95f82982b77311fa4ed889f3c2e130640048cf5068aa3539 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'header' => array($this, 'block_header'),
            'banner' => array($this, 'block_banner'),
            'main' => array($this, 'block_main'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'action_links' => array($this, 'block_action_links'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 58, "if" => 60, "block" => 61);
        $filters = array("trim" => 96, "striptags" => 96, "render" => 96, "clean_class" => 66, "t" => 76);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('trim', 'striptags', 'render', 'clean_class', 't'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 58
        $context["container"] = (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 60
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()))) {
            // line 61
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 94
        echo "
";
        // line 96
        if ( !twig_test_empty(trim(strip_tags($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())), "div,p,table,span,a")))) {
            // line 97
            echo "  <div id=\"header\">
    <div class=\"container\">
      <div class=\"row\">
        ";
            // line 100
            $this->displayBlock('header', $context, $blocks);
            // line 105
            echo "      </div>
    </div>
  </div>
";
        }
        // line 109
        echo "
";
        // line 111
        if ( !twig_test_empty(trim(strip_tags($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner", array())), "div,p,table,span,a")))) {
            // line 112
            echo "  <div id=\"banner\">
    ";
            // line 113
            $this->displayBlock('banner', $context, $blocks);
            // line 116
            echo "  </div>
";
        }
        // line 118
        echo "
";
        // line 120
        $this->displayBlock('main', $context, $blocks);
        // line 169
        echo "
";
        // line 170
        if ( !twig_test_empty(trim(strip_tags($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())), "div,p,table,span,a")))) {
            // line 171
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 61
    public function block_navbar($context, array $blocks = array())
    {
        // line 62
        echo "    ";
        // line 63
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 65
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 66
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())))) : ((isset($context["container"]) ? $context["container"] : null))));
        // line 69
        echo "    <header";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "addClass", array(0 => (isset($context["navbar_classes"]) ? $context["navbar_classes"] : null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"navigation\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          ";
        // line 72
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
          ";
        // line 74
        echo "          ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 75
            echo "            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
              <span class=\"sr-only\">";
            // line 76
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Toggle navigation")));
            echo "</span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>
          ";
        }
        // line 82
        echo "        </div>

        ";
        // line 85
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 86
            echo "          <div class=\"navbar-collapse collapse navbar-right\">
            ";
            // line 87
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 90
        echo "      </div>
    </header>
  ";
    }

    // line 100
    public function block_header($context, array $blocks = array())
    {
        // line 101
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 102
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 113
    public function block_banner($context, array $blocks = array())
    {
        // line 114
        echo "      ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner", array()), "html", null, true));
        echo "
    ";
    }

    // line 120
    public function block_main($context, array $blocks = array())
    {
        // line 121
        echo "  <div id=\"main\" role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">
      ";
        // line 124
        echo "      ";
        // line 125
        $context["content_classes"] = array(0 => (($this->getAttribute(        // line 126
(isset($context["page"]) ? $context["page"] : null), "sidebar", array())) ? ("col-md-8") : ("col-xs-12")));
        // line 129
        echo "      <section";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">
        ";
        // line 131
        echo "        ";
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 132
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 135
            echo "        ";
        }
        // line 136
        echo "
        ";
        // line 138
        echo "        ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 139
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 142
            echo "        ";
        }
        // line 143
        echo "
        ";
        // line 145
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 146
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 149
            echo "        ";
        }
        // line 150
        echo "
        ";
        // line 152
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 156
        echo "      </section>

      ";
        // line 159
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar", array())) {
            // line 160
            echo "        ";
            $this->displayBlock('sidebar', $context, $blocks);
            // line 165
            echo "      ";
        }
        // line 166
        echo "    </div>
  </div>
";
    }

    // line 132
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 133
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
        echo "
          ";
    }

    // line 139
    public function block_action_links($context, array $blocks = array())
    {
        // line 140
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
        echo "</ul>
          ";
    }

    // line 146
    public function block_help($context, array $blocks = array())
    {
        // line 147
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
          ";
    }

    // line 152
    public function block_content($context, array $blocks = array())
    {
        // line 153
        echo "          <a id=\"main-content\"></a>
          ";
        // line 154
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        ";
    }

    // line 160
    public function block_sidebar($context, array $blocks = array())
    {
        // line 161
        echo "          <aside class=\"col-md-4\" role=\"complementary\">
            ";
        // line 162
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 171
    public function block_footer($context, array $blocks = array())
    {
        // line 172
        echo "    <footer id=\"footer\" class=\"footer\" role=\"contentinfo\">
      <div class=\"";
        // line 173
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo "\">
        ";
        // line 174
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
      </div>
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/solid/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 174,  327 => 173,  324 => 172,  321 => 171,  314 => 162,  311 => 161,  308 => 160,  302 => 154,  299 => 153,  296 => 152,  289 => 147,  286 => 146,  279 => 140,  276 => 139,  269 => 133,  266 => 132,  260 => 166,  257 => 165,  254 => 160,  251 => 159,  247 => 156,  244 => 152,  241 => 150,  238 => 149,  235 => 146,  232 => 145,  229 => 143,  226 => 142,  223 => 139,  220 => 138,  217 => 136,  214 => 135,  211 => 132,  208 => 131,  203 => 129,  201 => 126,  200 => 125,  198 => 124,  192 => 121,  189 => 120,  182 => 114,  179 => 113,  172 => 102,  169 => 101,  166 => 100,  160 => 90,  154 => 87,  151 => 86,  148 => 85,  144 => 82,  135 => 76,  132 => 75,  129 => 74,  125 => 72,  118 => 69,  116 => 66,  115 => 65,  114 => 63,  112 => 62,  109 => 61,  103 => 171,  101 => 170,  98 => 169,  96 => 120,  93 => 118,  89 => 116,  87 => 113,  84 => 112,  82 => 111,  79 => 109,  73 => 105,  71 => 100,  66 => 97,  64 => 96,  61 => 94,  57 => 61,  55 => 60,  53 => 58,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Navigation:
 * - breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title: The page title, for use in the actual content.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - messages: Status and error messages. Should be displayed prominently.
 * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - action_links: Actions local to the page, such as \"Add menu\" on the menu
 *   administration interface.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the navigation region.
 * - page.navigation_collapsible: Items for the navigation (collapsible) region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar: Items for the sidebar region.
 * - page.footer: Items for the footer region.
 *
 * @ingroup templates
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
{% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}
{# Navbar #}
{% if page.navigation or page.navigation_collapsible %}
  {% block navbar %}
    {%
      set navbar_classes = [
        'navbar',
        theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',
        theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container,
      ]
    %}
    <header{{ navbar_attributes.addClass(navbar_classes) }} id=\"navbar\" role=\"navigation\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          {{ page.navigation }}
          {# .btn-navbar is used as the toggle for collapsed navbar content #}
          {% if page.navigation_collapsible %}
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
              <span class=\"sr-only\">{{ 'Toggle navigation'|t }}</span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>
          {% endif %}
        </div>

        {# Navigation (collapsible) #}
        {% if page.navigation_collapsible %}
          <div class=\"navbar-collapse collapse navbar-right\">
            {{ page.navigation_collapsible }}
          </div>
        {% endif %}
      </div>
    </header>
  {% endblock %}
{% endif %}

{# Header #}
{% if page.header|render|striptags('div,p,table,span,a')|trim is not empty %}
  <div id=\"header\">
    <div class=\"container\">
      <div class=\"row\">
        {% block header %}
          <div class=\"col-sm-12\" role=\"heading\">
            {{ page.header }}
          </div>
        {% endblock %}
      </div>
    </div>
  </div>
{% endif %}

{# Banner #}
{% if page.banner|render|striptags('div,p,table,span,a')|trim is not empty %}
  <div id=\"banner\">
    {% block banner %}
      {{ page.banner }}
    {% endblock %}
  </div>
{% endif %}

{# Main #}
{% block main %}
  <div id=\"main\" role=\"main\" class=\"main-container {{ container }} js-quickedit-main-content\">
    <div class=\"row\">
      {# Content #}
      {%
        set content_classes = [
          page.sidebar ? 'col-md-8' : 'col-xs-12'
        ]
      %}
      <section{{ content_attributes.addClass(content_classes) }}>
        {# Breadcrumbs #}
        {% if breadcrumb %}
          {% block breadcrumb %}
            {{ breadcrumb }}
          {% endblock %}
        {% endif %}

        {# Action Links #}
        {% if action_links %}
          {% block action_links %}
            <ul class=\"action-links\">{{ action_links }}</ul>
          {% endblock %}
        {% endif %}

        {# Help #}
        {% if page.help %}
          {% block help %}
            {{ page.help }}
          {% endblock %}
        {% endif %}

        {# Content #}
        {% block content %}
          <a id=\"main-content\"></a>
          {{ page.content }}
        {% endblock %}
      </section>

      {# Sidebar #}
      {% if page.sidebar %}
        {% block sidebar %}
          <aside class=\"col-md-4\" role=\"complementary\">
            {{ page.sidebar }}
          </aside>
        {% endblock %}
      {% endif %}
    </div>
  </div>
{% endblock %}

{% if page.footer|render|striptags('div,p,table,span,a')|trim is not empty %}
  {% block footer %}
    <footer id=\"footer\" class=\"footer\" role=\"contentinfo\">
      <div class=\"{{ container }}\">
        {{ page.footer }}
      </div>
    </footer>
  {% endblock %}
{% endif %}
";
    }
}
