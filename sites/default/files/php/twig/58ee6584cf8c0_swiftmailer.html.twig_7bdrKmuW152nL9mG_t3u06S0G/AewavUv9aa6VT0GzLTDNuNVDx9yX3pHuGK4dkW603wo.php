<?php

/* modules/swiftmailer/templates/swiftmailer.html.twig */
class __TwigTemplate_0f370453f67fcb3c5a48bf53508ce9392c5712428936dc23795f9ac9b3bc62ed extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 33
        echo "<html>
<head>
<style type=\"text/css\">
table tr td {
  font-family: Arial;
  font-size: 12px;
}
</style>
</head>
<body>
<div>
  <table width=\"800px\" cellpadding=\"0\" cellspacing=\"0\">
    <tr>
      <td>
        <div style=\"padding: 0px 0px 0px 0px;\">
          ";
        // line 48
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["body"]) ? $context["body"] : null), "html", null, true));
        echo "
        </div>
      </td>
    </tr>
  </table>
</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "modules/swiftmailer/templates/swiftmailer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 48,  43 => 33,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * The default template file for e-mails.
 *
 * Available variables:
 * - subject: The subject.
 * - body: The message content.
 * - message: The \$message array created and used in the mail building
 *   procedure. Its content varies between cases, but typically contains at
 *   least the following elements:
 *   - id: The message identifier.
 *   - module: The module that handles the building of the message.
 *   - key: The key of the message.
 *   - to: The recipient email address.
 *   - from: The email address of the sender.
 *   - langcode: The langcode to use to compose the e-mail.
 *   - params: The message parameters.
 *
 * This template may be overriden by module and/or mail key, using any of the
 * following template names:
 * - swiftmailer.html.twig: global, used by default.
 * - swiftmailer--mymodule.html.twig: only emails sent by the module \"mymodule\".
 * - swiftmailer--mymodule--test.html.twig: only emails by the module
 *   \"mymodule\" with key \"test\".
 *
 * @see template_preprocess()
 * @see template_preprocess_swiftmailer()
 *
 * @ingroup themeable
 */
#}
<html>
<head>
<style type=\"text/css\">
table tr td {
  font-family: Arial;
  font-size: 12px;
}
</style>
</head>
<body>
<div>
  <table width=\"800px\" cellpadding=\"0\" cellspacing=\"0\">
    <tr>
      <td>
        <div style=\"padding: 0px 0px 0px 0px;\">
          {{ body }}
        </div>
      </td>
    </tr>
  </table>
</div>
</body>
</html>
";
    }
}
