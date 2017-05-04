<?php

/* core/modules/filter/templates/filter-caption.html.twig */
class __TwigTemplate_7269587381054097d08bffbb47a2de6f60fb7837665649f771f87439a7f2b93d extends Twig_Template
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
        $tags = array("if" => 15);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
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

        // line 15
        echo "<figure role=\"group\"";
        if ((isset($context["classes"]) ? $context["classes"] : null)) {
            echo " class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["classes"]) ? $context["classes"] : null), "html", null, true));
            echo "\"";
        }
        echo ">
";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["node"]) ? $context["node"] : null), "html", null, true));
        echo "
<figcaption>";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["caption"]) ? $context["caption"] : null), "html", null, true));
        echo "</figcaption>
</figure>
";
    }

    public function getTemplateName()
    {
        return "core/modules/filter/templates/filter-caption.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 17,  52 => 16,  43 => 15,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation for a filter caption.
 *
 * Returns HTML for a captioned image, audio, video or other tag.
 *
 * Available variables
 * - string node: The complete HTML tag whose contents are being captioned.
 * - string tag: The name of the HTML tag whose contents are being captioned.
 * - string caption: The caption text.
 * - string classes: The classes of the captioned HTML tag.
 */
#}
<figure role=\"group\"{%- if classes %} class=\"{{ classes }}\"{%- endif %}>
{{ node }}
<figcaption>{{ caption }}</figcaption>
</figure>
";
    }
}
