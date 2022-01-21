<?php

/* extension/shipping/fancourier.twig */
class __TwigTemplate_e5cc4a9c6cceb742d1b2d7725a1ad095549b05e967cf305111e117d23e1d46d4 extends Twig_Template
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
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">

<div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-shipping\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 8
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
\t  </div>
\t  \t  
      <h1>";
        // line 11
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "        <li> <a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "      </ul>
    </div>
</div>

  
  <div class=\"container-fluid\">
\t\t";
        // line 22
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 23
            echo "\t\t<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 27
        echo "  
  <div class=\"panel panel-default\">
  
\t<div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 31
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
    </div>
\t  
    <div class=\"panel-body\">
\t\t<form action=\"";
        // line 35
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-shipping\" class=\"form-horizontal\">
\t\t
\t\t\t
\t\t\t\t<div>Stimate client, puteti obtine informatii pentru configurare la adresa de email: <a href=\"mailto:selfawb@fancourier.ro\">selfawb@fancourier.ro</a></div>          
\t\t\t\t<div>Va multumim pentru ca folositi serviciile FAN Courier.</div>
\t\t\t\t<br>
\t\t
\t\t\t\t\t
\t\t\t <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 44
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_fancourier_status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 47
        if ((isset($context["shipping_fancourier_status"]) ? $context["shipping_fancourier_status"] : null)) {
            // line 48
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 49
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 51
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 52
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 54
        echo "              </select>
            </div>
          </div>
\t\t\t
\t\t\t
\t\t\t<div class=\"form-group\">
\t\t\t\t<div style=\"font-size: 10.5pt; text-align: left;\" class=\"col-sm-2 control-label\"><b>Securitate:</b></div>
\t\t\t</div>
\t\t\t
\t\t\t<!-- Client ID -->
\t\t\t<div class=\"form-group\">\t\t\t
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-key\"><span data-toggle=\"tooltip\" title=\"";
        // line 65
        echo (isset($context["help_entry_clientid"]) ? $context["help_entry_clientid"] : null);
        echo "\">";
        echo (isset($context["entry_clientid"]) ? $context["entry_clientid"] : null);
        echo "</span></label>
\t\t\t\t<div class=\"col-sm-10\">\t\t
\t\t\t\t\t<input type=\"text\" name=\"shipping_fancourier_clientid\" value=\"";
        // line 67
        echo (isset($context["shipping_fancourier_clientid"]) ? $context["shipping_fancourier_clientid"] : null);
        echo "\" class=\"form-control\"/>
\t\t\t\t\t";
        // line 68
        if ((isset($context["error_clientid"]) ? $context["error_clientid"] : null)) {
            // line 69
            echo "\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_clientid"]) ? $context["error_clientid"] : null);
            echo "</div>
\t\t\t\t\t";
        }
        // line 71
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<!-- Username -->
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-key\"><span data-toggle=\"tooltip\" title=\"";
        // line 76
        echo (isset($context["help_entry_username"]) ? $context["help_entry_username"] : null);
        echo "\">";
        echo (isset($context["entry_username"]) ? $context["entry_username"] : null);
        echo "</span></label>
\t\t\t\t<div class=\"col-sm-10\">\t
\t\t\t\t\t<input type=\"text\" name=\"shipping_fancourier_username\" value=\"";
        // line 78
        echo (isset($context["shipping_fancourier_username"]) ? $context["shipping_fancourier_username"] : null);
        echo "\" class=\"form-control\"/>
\t\t\t\t\t";
        // line 79
        if ((isset($context["error_username"]) ? $context["error_username"] : null)) {
            // line 80
            echo "\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_username"]) ? $context["error_username"] : null);
            echo "</div>
\t\t\t\t\t";
        }
        // line 82
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<!-- Parola -->
\t\t\t<div class=\"form-group \">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-key\"><span data-toggle=\"tooltip\" title=\"";
        // line 87
        echo (isset($context["help_entry_password"]) ? $context["help_entry_password"] : null);
        echo "\">";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</span></label>\t\t\t
\t\t\t\t<div class=\"col-sm-10\">\t
\t\t\t\t\t<input type=\"text\" name=\"shipping_fancourier_password\" value=\"";
        // line 89
        echo (isset($context["shipping_fancourier_password"]) ? $context["shipping_fancourier_password"] : null);
        echo "\" class=\"form-control\"/>
\t\t\t\t\t";
        // line 90
        if ((isset($context["error_password"]) ? $context["error_password"] : null)) {
            // line 91
            echo "\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_password"]) ? $context["error_password"] : null);
            echo "</div>
\t\t\t\t\t";
        }
        // line 93
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<!-- Confirmare AWB -->
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-key\">";
        // line 98
        echo (isset($context["entry_onlyadm"]) ? $context["entry_onlyadm"] : null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<select name=\"shipping_fancourier_onlyadm\" class=\"form-control\">
\t\t\t\t\t";
        // line 101
        if ((isset($context["shipping_fancourier_onlyadm"]) ? $context["shipping_fancourier_onlyadm"] : null)) {
            // line 102
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
\t\t\t\t\t<option value=\"0\">";
            // line 103
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
\t\t\t\t\t ";
        } else {
            // line 105
            echo "\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 106
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
\t\t\t\t\t";
        }
        // line 108
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t
\t\t\t<div class=\"form-group\">
\t\t\t\t<div style=\"font-size: 10.5pt; text-align: left;\" class=\"col-sm-2 control-label\"><b>Optiuni AWB:</b></div>
\t\t\t</div>
\t\t\t
\t\t\t<!-- Expediere colete -->
\t\t\t<div class=\"form-group\">\t\t\t\t
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-key\">";
        // line 118
        echo (isset($context["entry_parcel"]) ? $context["entry_parcel"] : null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<select name=\"shipping_fancourier_parcel\" class=\"form-control\">
\t\t\t\t\t";
        // line 121
        if ((isset($context["shipping_fancourier_parcel"]) ? $context["shipping_fancourier_parcel"] : null)) {
            // line 122
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
\t\t\t\t\t<option value=\"0\">";
            // line 123
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
\t\t\t\t\t ";
        } else {
            // line 125
            echo "\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 126
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
\t\t\t\t\t";
        }
        // line 128
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<!-- Numar pachete/AWB -->
\t\t\t<div class=\"form-group required\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-key\"><span data-toggle=\"tooltip\" title=\"";
        // line 134
        echo (isset($context["help_text_labels"]) ? $context["help_text_labels"] : null);
        echo "\">";
        echo (isset($context["text_labels"]) ? $context["text_labels"] : null);
        echo "</span></label>          
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<input type=\"text\" name=\"shipping_fancourier_labels\" value=\"";
        // line 136
        echo (isset($context["shipping_fancourier_labels"]) ? $context["shipping_fancourier_labels"] : null);
        echo "\" class=\"form-control\"/>              
\t\t\t\t\t";
        // line 137
        if ((isset($context["error_labels"]) ? $context["error_labels"] : null)) {
            // line 138
            echo "\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_labels"]) ? $context["error_labels"] : null);
            echo "</div>
\t\t\t\t\t";
        }
        // line 140
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<!-- Plata awb la destinatarie -->
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-key\">";
        // line 145
        echo (isset($context["entry_paymentdest"]) ? $context["entry_paymentdest"] : null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<select name=\"shipping_fancourier_paymentdest\" class=\"form-control\">
\t\t\t\t\t";
        // line 148
        if ((isset($context["shipping_fancourier_paymentdest"]) ? $context["shipping_fancourier_paymentdest"] : null)) {
            // line 149
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
\t\t\t\t\t<option value=\"0\">";
            // line 150
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
\t\t\t\t\t ";
        } else {
            // line 152
            echo "\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 153
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
\t\t\t\t\t";
        }
        // line 155
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<!-- Afisare pret fara TVA -->
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-key\">";
        // line 161
        echo (isset($context["entry_fara_tva"]) ? $context["entry_fara_tva"] : null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<select name=\"shipping_fancourier_fara_tva\" class=\"form-control\">
\t\t\t\t\t";
        // line 164
        if ((isset($context["shipping_fancourier_fara_tva"]) ? $context["shipping_fancourier_fara_tva"] : null)) {
            // line 165
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
\t\t\t\t\t<option value=\"0\">";
            // line 166
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
\t\t\t\t\t";
        } else {
            // line 168
            echo "\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 169
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
\t\t\t\t\t";
        }
        // line 170
        echo " 
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<!-- Afisare pret doar km suplimentari -->
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-key\"><span data-toggle=\"tooltip\" title=\"";
        // line 177
        echo (isset($context["help_entry_doar_km"]) ? $context["help_entry_doar_km"] : null);
        echo "\">";
        echo (isset($context["entry_doar_km"]) ? $context["entry_doar_km"] : null);
        echo "</span></label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<select name=\"shipping_fancourier_doar_km\" class=\"form-control\">
\t\t\t\t\t";
        // line 180
        if ((isset($context["shipping_fancourier_doar_km"]) ? $context["shipping_fancourier_doar_km"] : null)) {
            // line 181
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
\t\t\t\t\t<option value=\"0\">";
            // line 182
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
\t\t\t\t\t";
        } else {
            // line 184
            echo "\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 185
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
\t\t\t\t    ";
        }
        // line 187
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<!-- Ascundere taxa de transport -->
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-key\">";
        // line 193
        echo (isset($context["entry_payment0"]) ? $context["entry_payment0"] : null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<select name=\"shipping_fancourier_payment0\" class=\"form-control\">
\t\t\t\t\t";
        // line 196
        if ((isset($context["shipping_fancourier_payment0"]) ? $context["shipping_fancourier_payment0"] : null)) {
            // line 197
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
\t\t\t\t\t<option value=\"0\">";
            // line 198
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
\t\t\t\t\t";
        } else {
            // line 200
            echo "\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 201
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
\t\t\t\t\t";
        }
        // line 203
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<!-- Suma minima transport gratuit -->
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-key\">";
        // line 209
        echo (isset($context["text_min_gratuit"]) ? $context["text_min_gratuit"] : null);
        echo "</label>          
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<input type=\"text\" name=\"shipping_fancourier_min_gratuit\" value=\"";
        // line 211
        echo (isset($context["shipping_fancourier_min_gratuit"]) ? $context["shipping_fancourier_min_gratuit"] : null);
        echo "\" class=\"form-control\"/>
\t\t\t\t\t";
        // line 212
        if ((isset($context["error_min_gratuit"]) ? $context["error_min_gratuit"] : null)) {
            // line 213
            echo "\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_min_gratuit"]) ? $context["error_min_gratuit"] : null);
            echo "</div>
\t\t\t\t\t";
        }
        // line 215
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<!-- Val fixa transport Bucuresti -->
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-key\">";
        // line 220
        echo (isset($context["text_valoare_fixa_bucuresti"]) ? $context["text_valoare_fixa_bucuresti"] : null);
        echo "</label>          
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<input type=\"text\" name=\"shipping_fancourier_valoare_fixa_bucuresti\" value=\"";
        // line 222
        echo (isset($context["shipping_fancourier_valoare_fixa_bucuresti"]) ? $context["shipping_fancourier_valoare_fixa_bucuresti"] : null);
        echo "\" class=\"form-control\"/>
\t\t\t\t\t";
        // line 223
        if ((isset($context["error_valoare_fixa_bucuresti"]) ? $context["error_valoare_fixa_bucuresti"] : null)) {
            // line 224
            echo "\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_valoare_fixa_bucuresti"]) ? $context["error_valoare_fixa_bucuresti"] : null);
            echo "</div>
\t\t\t\t\t";
        }
        // line 226
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<!-- Val fixa transport tara -->
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-key\">";
        // line 231
        echo (isset($context["text_valoare_fixa"]) ? $context["text_valoare_fixa"] : null);
        echo "</label>          
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<input type=\"text\" name=\"shipping_fancourier_valoare_fixa\" value=\"";
        // line 233
        echo (isset($context["shipping_fancourier_valoare_fixa"]) ? $context["shipping_fancourier_valoare_fixa"] : null);
        echo "\" class=\"form-control\"/>
\t\t\t\t\t";
        // line 234
        if ((isset($context["error_valoare_fixa"]) ? $context["error_valoare_fixa"] : null)) {
            // line 235
            echo "\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_valoare_fixa"]) ? $context["error_valoare_fixa"] : null);
            echo "</div>
\t\t\t\t\t";
        }
        // line 237
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t
\t\t\t<div class=\"form-group\">
\t\t\t\t<div style=\"font-size: 10.5pt; text-align: left;\" class=\"col-sm-2 control-label\"><b>Optiuni ramburs:</b></div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t<!-- Solicitare ramburs marfa -->
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-key\">";
        // line 247
        echo (isset($context["entry_ramburs"]) ? $context["entry_ramburs"] : null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<select name=\"shipping_fancourier_ramburs\" class=\"form-control\">
\t\t\t\t\t";
        // line 250
        if ((isset($context["shipping_fancourier_ramburs"]) ? $context["shipping_fancourier_ramburs"] : null)) {
            // line 251
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
\t\t\t\t\t<option value=\"0\">";
            // line 252
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
\t\t\t\t\t";
        } else {
            // line 254
            echo "\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 255
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
\t\t\t\t\t";
        }
        // line 256
        echo " 
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<!-- Adaugare taxa transport la ramburs -->
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-key\">";
        // line 263
        echo (isset($context["entry_totalrb"]) ? $context["entry_totalrb"] : null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<select name=\"shipping_fancourier_totalrb\" class=\"form-control\">
\t\t\t\t\t";
        // line 266
        if ((isset($context["shipping_fancourier_totalrb"]) ? $context["shipping_fancourier_totalrb"] : null)) {
            // line 267
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
\t\t\t\t\t<option value=\"0\">";
            // line 268
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
\t\t\t\t\t";
        } else {
            // line 270
            echo "\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 271
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
\t\t\t\t\t";
        }
        // line 272
        echo " 
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<!-- Solicitare ramburs in cont bancar -->
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-key\">";
        // line 279
        echo (isset($context["entry_contcolector"]) ? $context["entry_contcolector"] : null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<select name=\"shipping_fancourier_contcolector\" class=\"form-control\">
\t\t\t\t\t";
        // line 282
        if ((isset($context["shipping_fancourier_contcolector"]) ? $context["shipping_fancourier_contcolector"] : null)) {
            // line 283
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
\t\t\t\t\t<option value=\"0\">";
            // line 284
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
\t\t\t\t\t";
        } else {
            // line 286
            echo "\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 287
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
\t\t\t\t\t";
        }
        // line 289
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<!-- Plata ramburs la destinatie -->
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-key\"><span data-toggle=\"tooltip\" title=\"";
        // line 295
        echo (isset($context["help_entry_paymentrbdest"]) ? $context["help_entry_paymentrbdest"] : null);
        echo "\">";
        echo (isset($context["entry_paymentrbdest"]) ? $context["entry_paymentrbdest"] : null);
        echo "</span></label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<select name=\"shipping_fancourier_paymentrbdest\" class=\"form-control\">
\t\t\t\t\t";
        // line 298
        if ((isset($context["shipping_fancourier_paymentrbdest"]) ? $context["shipping_fancourier_paymentrbdest"] : null)) {
            // line 299
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
\t\t\t\t\t<option value=\"0\">";
            // line 300
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
\t\t\t\t\t";
        } else {
            // line 302
            echo "\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 303
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
\t\t\t\t\t";
        }
        // line 304
        echo " 
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t<div class=\"form-group\">
\t\t\t\t<div style=\"font-size: 10.5pt; text-align: left;\" class=\"col-sm-2 control-label\"><b>Asigurare:</b></div>
\t\t\t</div>
\t\t\t
\t\t\t<!-- Solicitare asigurare transport -->
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-key\">";
        // line 316
        echo (isset($context["entry_asigurare"]) ? $context["entry_asigurare"] : null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<select name=\"shipping_fancourier_asigurare\" class=\"form-control\">
\t\t\t\t\t";
        // line 319
        if ((isset($context["shipping_fancourier_asigurare"]) ? $context["shipping_fancourier_asigurare"] : null)) {
            // line 320
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
\t\t\t\t\t<option value=\"0\">";
            // line 321
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
\t\t\t\t\t";
        } else {
            // line 323
            echo "\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 324
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
\t\t\t\t\t";
        }
        // line 325
        echo " 
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<!-- Include cod produse la continut -->
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-key\">";
        // line 332
        echo (isset($context["entry_content"]) ? $context["entry_content"] : null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<select name=\"shipping_fancourier_content\" class=\"form-control\">
\t\t\t\t\t";
        // line 335
        if ((isset($context["shipping_fancourier_content"]) ? $context["shipping_fancourier_content"] : null)) {
            // line 336
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
\t\t\t\t\t<option value=\"0\">";
            // line 337
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
\t\t\t\t\t";
        } else {
            // line 339
            echo "\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 340
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
\t\t\t\t\t";
        }
        // line 341
        echo " 
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"form-group\">
\t\t\t\t<div style=\"font-size: 10.5pt; text-align: left;\" class=\"col-sm-2 control-label\"><b>Observatii si note:</b></div>
\t\t\t</div>
\t\t\t
\t\t\t<!-- Observatii -->
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-key\">";
        // line 352
        echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
        echo "</label>          
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<input type=\"text\" name=\"shipping_fancourier_comment\" value=\"";
        // line 354
        echo (isset($context["shipping_fancourier_comment"]) ? $context["shipping_fancourier_comment"] : null);
        echo "\" class=\"form-control\"/>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<!-- Persoana de contact -->
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-key\">";
        // line 360
        echo (isset($context["entry_pers_cont_exp"]) ? $context["entry_pers_cont_exp"] : null);
        echo "</label>          
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<input type=\"text\" name=\"shipping_fancourier_pers_contact_expeditor\" value=\"";
        // line 362
        echo (isset($context["shipping_fancourier_pers_contact_expeditor"]) ? $context["shipping_fancourier_pers_contact_expeditor"] : null);
        echo "\" class=\"form-control\"/>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t
\t\t\t<div class=\"form-group\">
\t\t\t\t<div style=\"font-size: 10.5pt; text-align: left;\" class=\"col-sm-2 control-label\"><b>Servicii specifice disponibile:</b></div>
\t\t\t</div>
\t\t\t
\t\t\t<!-- Afisare RedCode -->
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-key\">";
        // line 373
        echo (isset($context["entry_redcode"]) ? $context["entry_redcode"] : null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<select name=\"shipping_fancourier_redcode\" class=\"form-control\">
\t\t\t\t\t";
        // line 376
        if ((isset($context["shipping_fancourier_redcode"]) ? $context["shipping_fancourier_redcode"] : null)) {
            // line 377
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
\t\t\t\t\t<option value=\"0\">";
            // line 378
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
\t\t\t\t\t ";
        } else {
            // line 380
            echo "\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 381
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
\t\t\t\t\t";
        }
        // line 383
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<!-- Afisare Express Loco -->
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-key\">";
        // line 389
        echo (isset($context["entry_express"]) ? $context["entry_express"] : null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<select name=\"shipping_fancourier_express\" class=\"form-control\">
\t\t\t\t\t";
        // line 392
        if ((isset($context["shipping_fancourier_express"]) ? $context["shipping_fancourier_express"] : null)) {
            // line 393
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
\t\t\t\t\t<option value=\"0\">";
            // line 394
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
\t\t\t\t\t";
        } else {
            // line 396
            echo "\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 397
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
\t\t\t\t\t";
        }
        // line 399
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t<!-- Afisare Ridicare din punct fix -->
\t\t\t <!-- paypoint -->
\t\t\t 
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-key\">";
        // line 408
        echo (isset($context["entry_ridicare_paypoint"]) ? $context["entry_ridicare_paypoint"] : null);
        echo "</span></label>
                    <div class=\"col-sm-10\">
                        <select name=\"shipping_fancourier_ridicare_paypoint\" class=\"form-control\">
                            ";
        // line 411
        if ((isset($context["shipping_fancourier_ridicare_paypoint"]) ? $context["shipping_fancourier_ridicare_paypoint"] : null)) {
            // line 412
            echo "                            <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                            <option value=\"0\">";
            // line 413
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                            ";
        } else {
            // line 415
            echo "                            <option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                            <option value=\"0\" selected=\"selected\">";
            // line 416
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        // line 418
        echo "                        </select>
                    </div>
                </div>
\t\t\t\t
\t\t\t<!-- keba -->
\t\t\t
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-key\">";
        // line 425
        echo (isset($context["entry_ridicare_keba"]) ? $context["entry_ridicare_keba"] : null);
        echo "</span></label>
                    <div class=\"col-sm-10\">
                        <select name=\"shipping_fancourier_ridicare_keba\" class=\"form-control\">
                            ";
        // line 428
        if ((isset($context["shipping_fancourier_ridicare_keba"]) ? $context["shipping_fancourier_ridicare_keba"] : null)) {
            // line 429
            echo "                            <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                            <option value=\"0\">";
            // line 430
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                            ";
        } else {
            // line 432
            echo "                            <option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                            <option value=\"0\" selected=\"selected\">";
            // line 433
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        // line 435
        echo "                        </select>
                    </div>
                </div>\t
\t\t\t
\t\t\t\t\t
\t\t\t<div class=\"form-group\">
\t\t\t\t<div style=\"font-size: 10.5pt; text-align: left;\" class=\"col-sm-2 control-label\"><b>Optiuni servicii:</b></div>
\t\t\t</div>
\t\t\t
\t\t\t<!-- Deschidere la livrare -->
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-key\"><span data-toggle=\"tooltip\" title=\"";
        // line 446
        echo (isset($context["help_entry_deschidere_livrare"]) ? $context["help_entry_deschidere_livrare"] : null);
        echo "\">";
        echo (isset($context["entry_deschidere_livrare"]) ? $context["entry_deschidere_livrare"] : null);
        echo "</span></label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<select name=\"shipping_fancourier_deschidere_livrare\" class=\"form-control\">
\t\t\t\t\t";
        // line 449
        if ((isset($context["shipping_fancourier_deschidere_livrare"]) ? $context["shipping_fancourier_deschidere_livrare"] : null)) {
            // line 450
            echo "\t\t\t\t\t<option value=\"A\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
\t\t\t\t\t<option value=\"\">";
            // line 451
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
\t\t\t\t\t";
        } else {
            // line 453
            echo "\t\t\t\t\t<option value=\"A\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
\t\t\t\t\t<option value=\"\" selected=\"selected\">";
            // line 454
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
\t\t\t\t\t";
        }
        // line 456
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>

                <!-- epod -->
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-key\"><span data-toggle=\"tooltip\" title=\"";
        // line 462
        echo (isset($context["help_entry_epod"]) ? $context["help_entry_epod"] : null);
        echo "\">";
        echo (isset($context["entry_epod"]) ? $context["entry_epod"] : null);
        echo "</span></label>
                    <div class=\"col-sm-10\">
                        <select name=\"shipping_fancourier_epod\" class=\"form-control\">
                            ";
        // line 465
        if ((isset($context["shipping_fancourier_epod"]) ? $context["shipping_fancourier_epod"] : null)) {
            // line 466
            echo "                            <option value=\"X\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                            <option value=\"\">";
            // line 467
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                            ";
        } else {
            // line 469
            echo "                            <option value=\"X\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                            <option value=\"\" selected=\"selected\">";
            // line 470
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        // line 472
        echo "                        </select>
                    </div>
                </div>
\t\t\t\t
\t\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t</form>
    </div>
  </div>
  </div>
</div>
<script type=\"text/javascript\">
<!--
\$('select[name=\\'ups_origin\\']').bind('change', function() {
\t\$('#service > div').hide();\t
\t\t\t\t\t\t\t\t\t\t 
\t\$('#' + this.value).show();\t
});

\$('select[name=\\'ups_origin\\']').trigger('change');
//-->
</script> 
";
        // line 497
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/shipping/fancourier.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1062 => 497,  1035 => 472,  1030 => 470,  1025 => 469,  1020 => 467,  1015 => 466,  1013 => 465,  1005 => 462,  997 => 456,  992 => 454,  987 => 453,  982 => 451,  977 => 450,  975 => 449,  967 => 446,  954 => 435,  949 => 433,  944 => 432,  939 => 430,  934 => 429,  932 => 428,  926 => 425,  917 => 418,  912 => 416,  907 => 415,  902 => 413,  897 => 412,  895 => 411,  889 => 408,  878 => 399,  873 => 397,  868 => 396,  863 => 394,  858 => 393,  856 => 392,  850 => 389,  842 => 383,  837 => 381,  832 => 380,  827 => 378,  822 => 377,  820 => 376,  814 => 373,  800 => 362,  795 => 360,  786 => 354,  781 => 352,  768 => 341,  763 => 340,  758 => 339,  753 => 337,  748 => 336,  746 => 335,  740 => 332,  731 => 325,  726 => 324,  721 => 323,  716 => 321,  711 => 320,  709 => 319,  703 => 316,  689 => 304,  684 => 303,  679 => 302,  674 => 300,  669 => 299,  667 => 298,  659 => 295,  651 => 289,  646 => 287,  641 => 286,  636 => 284,  631 => 283,  629 => 282,  623 => 279,  614 => 272,  609 => 271,  604 => 270,  599 => 268,  594 => 267,  592 => 266,  586 => 263,  577 => 256,  572 => 255,  567 => 254,  562 => 252,  557 => 251,  555 => 250,  549 => 247,  537 => 237,  531 => 235,  529 => 234,  525 => 233,  520 => 231,  513 => 226,  507 => 224,  505 => 223,  501 => 222,  496 => 220,  489 => 215,  483 => 213,  481 => 212,  477 => 211,  472 => 209,  464 => 203,  459 => 201,  454 => 200,  449 => 198,  444 => 197,  442 => 196,  436 => 193,  428 => 187,  423 => 185,  418 => 184,  413 => 182,  408 => 181,  406 => 180,  398 => 177,  389 => 170,  384 => 169,  379 => 168,  374 => 166,  369 => 165,  367 => 164,  361 => 161,  353 => 155,  348 => 153,  343 => 152,  338 => 150,  333 => 149,  331 => 148,  325 => 145,  318 => 140,  312 => 138,  310 => 137,  306 => 136,  299 => 134,  291 => 128,  286 => 126,  281 => 125,  276 => 123,  271 => 122,  269 => 121,  263 => 118,  251 => 108,  246 => 106,  241 => 105,  236 => 103,  231 => 102,  229 => 101,  223 => 98,  216 => 93,  210 => 91,  208 => 90,  204 => 89,  197 => 87,  190 => 82,  184 => 80,  182 => 79,  178 => 78,  171 => 76,  164 => 71,  158 => 69,  156 => 68,  152 => 67,  145 => 65,  132 => 54,  127 => 52,  122 => 51,  117 => 49,  112 => 48,  110 => 47,  104 => 44,  92 => 35,  85 => 31,  79 => 27,  71 => 23,  69 => 22,  61 => 16,  50 => 14,  46 => 13,  41 => 11,  33 => 8,  29 => 7,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/* */
/* <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-shipping" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a>*/
/* 	  </div>*/
/* 	  	  */
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li> <a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/* </div>*/
/* */
/*   */
/*   <div class="container-fluid">*/
/* 		{% if error_warning %}*/
/* 		<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/* 			<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 		</div>*/
/* 		{% endif %}*/
/*   */
/*   <div class="panel panel-default">*/
/*   */
/* 	<div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit}}</h3>*/
/*     </div>*/
/* 	  */
/*     <div class="panel-body">*/
/* 		<form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-shipping" class="form-horizontal">*/
/* 		*/
/* 			*/
/* 				<div>Stimate client, puteti obtine informatii pentru configurare la adresa de email: <a href="mailto:selfawb@fancourier.ro">selfawb@fancourier.ro</a></div>          */
/* 				<div>Va multumim pentru ca folositi serviciile FAN Courier.</div>*/
/* 				<br>*/
/* 		*/
/* 					*/
/* 			 <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_fancourier_status" id="input-status" class="form-control">*/
/*                 {% if shipping_fancourier_status %}*/
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/* 			*/
/* 			*/
/* 			<div class="form-group">*/
/* 				<div style="font-size: 10.5pt; text-align: left;" class="col-sm-2 control-label"><b>Securitate:</b></div>*/
/* 			</div>*/
/* 			*/
/* 			<!-- Client ID -->*/
/* 			<div class="form-group">			*/
/* 				<label class="col-sm-2 control-label" for="input-key"><span data-toggle="tooltip" title="{{ help_entry_clientid }}">{{ entry_clientid }}</span></label>*/
/* 				<div class="col-sm-10">		*/
/* 					<input type="text" name="shipping_fancourier_clientid" value="{{ shipping_fancourier_clientid }}" class="form-control"/>*/
/* 					{% if error_clientid %}*/
/* 					<div class="text-danger">{{ error_clientid }}</div>*/
/* 					{% endif %}*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<!-- Username -->*/
/* 			<div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-key"><span data-toggle="tooltip" title="{{ help_entry_username }}">{{ entry_username }}</span></label>*/
/* 				<div class="col-sm-10">	*/
/* 					<input type="text" name="shipping_fancourier_username" value="{{ shipping_fancourier_username }}" class="form-control"/>*/
/* 					{% if error_username %}*/
/* 					<div class="text-danger">{{ error_username }}</div>*/
/* 					{% endif %}*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<!-- Parola -->*/
/* 			<div class="form-group ">*/
/* 				<label class="col-sm-2 control-label" for="input-key"><span data-toggle="tooltip" title="{{ help_entry_password }}">{{ entry_password }}</span></label>			*/
/* 				<div class="col-sm-10">	*/
/* 					<input type="text" name="shipping_fancourier_password" value="{{ shipping_fancourier_password }}" class="form-control"/>*/
/* 					{% if error_password %}*/
/* 					<div class="text-danger">{{ error_password }}</div>*/
/* 					{% endif %}*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<!-- Confirmare AWB -->*/
/* 			<div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-key">{{ entry_onlyadm }}</label>*/
/* 				<div class="col-sm-10">*/
/* 					<select name="shipping_fancourier_onlyadm" class="form-control">*/
/* 					{% if shipping_fancourier_onlyadm %}*/
/* 					<option value="1" selected="selected">{{ text_yes }}</option>*/
/* 					<option value="0">{{ text_no }}</option>*/
/* 					 {% else %}*/
/* 					<option value="1">{{ text_yes }}</option>*/
/* 					<option value="0" selected="selected">{{ text_no }}</option>*/
/* 					{% endif %}*/
/* 					</select>*/
/* 				</div>*/
/* 			</div>*/
/* 				*/
/* 			<div class="form-group">*/
/* 				<div style="font-size: 10.5pt; text-align: left;" class="col-sm-2 control-label"><b>Optiuni AWB:</b></div>*/
/* 			</div>*/
/* 			*/
/* 			<!-- Expediere colete -->*/
/* 			<div class="form-group">				*/
/* 				<label class="col-sm-2 control-label" for="input-key">{{ entry_parcel }}</label>*/
/* 				<div class="col-sm-10">*/
/* 					<select name="shipping_fancourier_parcel" class="form-control">*/
/* 					{% if shipping_fancourier_parcel %}*/
/* 					<option value="1" selected="selected">{{ text_yes }}</option>*/
/* 					<option value="0">{{ text_no }}</option>*/
/* 					 {% else %}*/
/* 					<option value="1">{{ text_yes }}</option>*/
/* 					<option value="0" selected="selected">{{ text_no }}</option>*/
/* 					{% endif %}*/
/* 					</select>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<!-- Numar pachete/AWB -->*/
/* 			<div class="form-group required">*/
/* 				<label class="col-sm-2 control-label" for="input-key"><span data-toggle="tooltip" title="{{ help_text_labels }}">{{ text_labels }}</span></label>          */
/* 				<div class="col-sm-10">*/
/* 					<input type="text" name="shipping_fancourier_labels" value="{{ shipping_fancourier_labels }}" class="form-control"/>              */
/* 					{% if error_labels %}*/
/* 					<div class="text-danger">{{ error_labels }}</div>*/
/* 					{% endif %}*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<!-- Plata awb la destinatarie -->*/
/* 			<div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-key">{{ entry_paymentdest }}</label>*/
/* 				<div class="col-sm-10">*/
/* 					<select name="shipping_fancourier_paymentdest" class="form-control">*/
/* 					{% if shipping_fancourier_paymentdest %}*/
/* 					<option value="1" selected="selected">{{ text_yes }}</option>*/
/* 					<option value="0">{{ text_no }}</option>*/
/* 					 {% else %}*/
/* 					<option value="1">{{ text_yes }}</option>*/
/* 					<option value="0" selected="selected">{{ text_no }}</option>*/
/* 					{% endif %}*/
/* 					</select>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<!-- Afisare pret fara TVA -->*/
/* 			<div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-key">{{ entry_fara_tva }}</label>*/
/* 				<div class="col-sm-10">*/
/* 					<select name="shipping_fancourier_fara_tva" class="form-control">*/
/* 					{% if shipping_fancourier_fara_tva %}*/
/* 					<option value="1" selected="selected">{{ text_yes }}</option>*/
/* 					<option value="0">{{ text_no }}</option>*/
/* 					{% else %}*/
/* 					<option value="1">{{ text_yes }}</option>*/
/* 					<option value="0" selected="selected">{{ text_no }}</option>*/
/* 					{% endif %} */
/* 					</select>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<!-- Afisare pret doar km suplimentari -->*/
/* 			<div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-key"><span data-toggle="tooltip" title="{{ help_entry_doar_km }}">{{ entry_doar_km }}</span></label>*/
/* 				<div class="col-sm-10">*/
/* 					<select name="shipping_fancourier_doar_km" class="form-control">*/
/* 					{% if shipping_fancourier_doar_km %}*/
/* 					<option value="1" selected="selected">{{ text_yes }}</option>*/
/* 					<option value="0">{{ text_no }}</option>*/
/* 					{% else %}*/
/* 					<option value="1">{{ text_yes }}</option>*/
/* 					<option value="0" selected="selected">{{ text_no }}</option>*/
/* 				    {% endif %}*/
/* 					</select>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<!-- Ascundere taxa de transport -->*/
/* 			<div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-key">{{ entry_payment0 }}</label>*/
/* 				<div class="col-sm-10">*/
/* 					<select name="shipping_fancourier_payment0" class="form-control">*/
/* 					{% if shipping_fancourier_payment0 %}*/
/* 					<option value="1" selected="selected">{{ text_yes }}</option>*/
/* 					<option value="0">{{ text_no }}</option>*/
/* 					{% else %}*/
/* 					<option value="1">{{ text_yes }}</option>*/
/* 					<option value="0" selected="selected">{{ text_no }}</option>*/
/* 					{% endif %}*/
/* 					</select>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<!-- Suma minima transport gratuit -->*/
/* 			<div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-key">{{ text_min_gratuit }}</label>          */
/* 				<div class="col-sm-10">*/
/* 					<input type="text" name="shipping_fancourier_min_gratuit" value="{{ shipping_fancourier_min_gratuit }}" class="form-control"/>*/
/* 					{% if error_min_gratuit %}*/
/* 					<div class="text-danger">{{ error_min_gratuit }}</div>*/
/* 					{% endif %}*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<!-- Val fixa transport Bucuresti -->*/
/* 			<div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-key">{{ text_valoare_fixa_bucuresti }}</label>          */
/* 				<div class="col-sm-10">*/
/* 					<input type="text" name="shipping_fancourier_valoare_fixa_bucuresti" value="{{ shipping_fancourier_valoare_fixa_bucuresti }}" class="form-control"/>*/
/* 					{% if error_valoare_fixa_bucuresti %}*/
/* 					<div class="text-danger">{{ error_valoare_fixa_bucuresti }}</div>*/
/* 					{% endif %}*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<!-- Val fixa transport tara -->*/
/* 			<div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-key">{{ text_valoare_fixa }}</label>          */
/* 				<div class="col-sm-10">*/
/* 					<input type="text" name="shipping_fancourier_valoare_fixa" value="{{ shipping_fancourier_valoare_fixa }}" class="form-control"/>*/
/* 					{% if error_valoare_fixa %}*/
/* 					<div class="text-danger">{{ error_valoare_fixa }}</div>*/
/* 					{% endif %}*/
/* 				</div>*/
/* 			</div>*/
/* 				*/
/* 			<div class="form-group">*/
/* 				<div style="font-size: 10.5pt; text-align: left;" class="col-sm-2 control-label"><b>Optiuni ramburs:</b></div>*/
/* 			</div>*/
/* 			*/
/* 			*/
/* 			<!-- Solicitare ramburs marfa -->*/
/* 			<div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-key">{{ entry_ramburs }}</label>*/
/* 				<div class="col-sm-10">*/
/* 					<select name="shipping_fancourier_ramburs" class="form-control">*/
/* 					{% if shipping_fancourier_ramburs %}*/
/* 					<option value="1" selected="selected">{{ text_yes }}</option>*/
/* 					<option value="0">{{ text_no }}</option>*/
/* 					{% else %}*/
/* 					<option value="1">{{ text_yes }}</option>*/
/* 					<option value="0" selected="selected">{{ text_no }}</option>*/
/* 					{% endif %} */
/* 					</select>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<!-- Adaugare taxa transport la ramburs -->*/
/* 			<div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-key">{{ entry_totalrb }}</label>*/
/* 				<div class="col-sm-10">*/
/* 					<select name="shipping_fancourier_totalrb" class="form-control">*/
/* 					{% if shipping_fancourier_totalrb %}*/
/* 					<option value="1" selected="selected">{{ text_yes }}</option>*/
/* 					<option value="0">{{ text_no }}</option>*/
/* 					{% else %}*/
/* 					<option value="1">{{ text_yes }}</option>*/
/* 					<option value="0" selected="selected">{{ text_no }}</option>*/
/* 					{% endif %} */
/* 					</select>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<!-- Solicitare ramburs in cont bancar -->*/
/* 			<div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-key">{{ entry_contcolector }}</label>*/
/* 				<div class="col-sm-10">*/
/* 					<select name="shipping_fancourier_contcolector" class="form-control">*/
/* 					{% if shipping_fancourier_contcolector %}*/
/* 					<option value="1" selected="selected">{{ text_yes }}</option>*/
/* 					<option value="0">{{ text_no }}</option>*/
/* 					{% else %}*/
/* 					<option value="1">{{ text_yes }}</option>*/
/* 					<option value="0" selected="selected">{{ text_no }}</option>*/
/* 					{%endif%}*/
/* 					</select>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<!-- Plata ramburs la destinatie -->*/
/* 			<div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-key"><span data-toggle="tooltip" title="{{ help_entry_paymentrbdest }}">{{ entry_paymentrbdest }}</span></label>*/
/* 				<div class="col-sm-10">*/
/* 					<select name="shipping_fancourier_paymentrbdest" class="form-control">*/
/* 					{% if shipping_fancourier_paymentrbdest %}*/
/* 					<option value="1" selected="selected">{{ text_yes }}</option>*/
/* 					<option value="0">{{ text_no }}</option>*/
/* 					{% else %}*/
/* 					<option value="1">{{ text_yes }}</option>*/
/* 					<option value="0" selected="selected">{{ text_no }}</option>*/
/* 					{% endif %} */
/* 					</select>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			*/
/* 			<div class="form-group">*/
/* 				<div style="font-size: 10.5pt; text-align: left;" class="col-sm-2 control-label"><b>Asigurare:</b></div>*/
/* 			</div>*/
/* 			*/
/* 			<!-- Solicitare asigurare transport -->*/
/* 			<div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-key">{{ entry_asigurare }}</label>*/
/* 				<div class="col-sm-10">*/
/* 					<select name="shipping_fancourier_asigurare" class="form-control">*/
/* 					{% if shipping_fancourier_asigurare %}*/
/* 					<option value="1" selected="selected">{{ text_yes }}</option>*/
/* 					<option value="0">{{ text_no }}</option>*/
/* 					{% else %}*/
/* 					<option value="1">{{ text_yes }}</option>*/
/* 					<option value="0" selected="selected">{{ text_no }}</option>*/
/* 					{% endif %} */
/* 					</select>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<!-- Include cod produse la continut -->*/
/* 			<div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-key">{{ entry_content }}</label>*/
/* 				<div class="col-sm-10">*/
/* 					<select name="shipping_fancourier_content" class="form-control">*/
/* 					{% if shipping_fancourier_content %}*/
/* 					<option value="1" selected="selected">{{ text_yes }}</option>*/
/* 					<option value="0">{{ text_no }}</option>*/
/* 					{% else %}*/
/* 					<option value="1">{{ text_yes }}</option>*/
/* 					<option value="0" selected="selected">{{ text_no }}</option>*/
/* 					{% endif %} */
/* 					</select>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<div class="form-group">*/
/* 				<div style="font-size: 10.5pt; text-align: left;" class="col-sm-2 control-label"><b>Observatii si note:</b></div>*/
/* 			</div>*/
/* 			*/
/* 			<!-- Observatii -->*/
/* 			<div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-key">{{ entry_comment }}</label>          */
/* 				<div class="col-sm-10">*/
/* 					<input type="text" name="shipping_fancourier_comment" value="{{ shipping_fancourier_comment }}" class="form-control"/>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<!-- Persoana de contact -->*/
/* 			<div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-key">{{ entry_pers_cont_exp }}</label>          */
/* 				<div class="col-sm-10">*/
/* 					<input type="text" name="shipping_fancourier_pers_contact_expeditor" value="{{ shipping_fancourier_pers_contact_expeditor }}" class="form-control"/>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 		*/
/* 			<div class="form-group">*/
/* 				<div style="font-size: 10.5pt; text-align: left;" class="col-sm-2 control-label"><b>Servicii specifice disponibile:</b></div>*/
/* 			</div>*/
/* 			*/
/* 			<!-- Afisare RedCode -->*/
/* 			<div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-key">{{ entry_redcode }}</label>*/
/* 				<div class="col-sm-10">*/
/* 					<select name="shipping_fancourier_redcode" class="form-control">*/
/* 					{% if shipping_fancourier_redcode %}*/
/* 					<option value="1" selected="selected">{{ text_yes }}</option>*/
/* 					<option value="0">{{ text_no }}</option>*/
/* 					 {% else %}*/
/* 					<option value="1">{{ text_yes }}</option>*/
/* 					<option value="0" selected="selected">{{ text_no }}</option>*/
/* 					{% endif %}*/
/* 					</select>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<!-- Afisare Express Loco -->*/
/* 			<div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-key">{{ entry_express }}</label>*/
/* 				<div class="col-sm-10">*/
/* 					<select name="shipping_fancourier_express" class="form-control">*/
/* 					{% if shipping_fancourier_express %}*/
/* 					<option value="1" selected="selected">{{ text_yes }}</option>*/
/* 					<option value="0">{{ text_no }}</option>*/
/* 					{% else %}*/
/* 					<option value="1">{{ text_yes }}</option>*/
/* 					<option value="0" selected="selected">{{ text_no }}</option>*/
/* 					{% endif %}*/
/* 					</select>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			*/
/* 			<!-- Afisare Ridicare din punct fix -->*/
/* 			 <!-- paypoint -->*/
/* 			 */
/*                 <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-key">{{ entry_ridicare_paypoint }}</span></label>*/
/*                     <div class="col-sm-10">*/
/*                         <select name="shipping_fancourier_ridicare_paypoint" class="form-control">*/
/*                             {% if shipping_fancourier_ridicare_paypoint %}*/
/*                             <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                             <option value="0">{{ text_no }}</option>*/
/*                             {% else %}*/
/*                             <option value="1">{{ text_yes }}</option>*/
/*                             <option value="0" selected="selected">{{ text_no }}</option>*/
/* 							{% endif %}*/
/*                         </select>*/
/*                     </div>*/
/*                 </div>*/
/* 				*/
/* 			<!-- keba -->*/
/* 			*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-key">{{ entry_ridicare_keba }}</span></label>*/
/*                     <div class="col-sm-10">*/
/*                         <select name="shipping_fancourier_ridicare_keba" class="form-control">*/
/*                             {% if shipping_fancourier_ridicare_keba %}*/
/*                             <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                             <option value="0">{{ text_no }}</option>*/
/*                             {% else %}*/
/*                             <option value="1">{{ text_yes }}</option>*/
/*                             <option value="0" selected="selected">{{ text_no }}</option>*/
/* 							{% endif %}*/
/*                         </select>*/
/*                     </div>*/
/*                 </div>	*/
/* 			*/
/* 					*/
/* 			<div class="form-group">*/
/* 				<div style="font-size: 10.5pt; text-align: left;" class="col-sm-2 control-label"><b>Optiuni servicii:</b></div>*/
/* 			</div>*/
/* 			*/
/* 			<!-- Deschidere la livrare -->*/
/* 			<div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-key"><span data-toggle="tooltip" title="{{ help_entry_deschidere_livrare }}">{{ entry_deschidere_livrare }}</span></label>*/
/* 				<div class="col-sm-10">*/
/* 					<select name="shipping_fancourier_deschidere_livrare" class="form-control">*/
/* 					{% if shipping_fancourier_deschidere_livrare %}*/
/* 					<option value="A" selected="selected">{{ text_yes }}</option>*/
/* 					<option value="">{{ text_no }}</option>*/
/* 					{% else %}*/
/* 					<option value="A">{{ text_yes }}</option>*/
/* 					<option value="" selected="selected">{{ text_no }}</option>*/
/* 					{% endif %}*/
/* 					</select>*/
/* 				</div>*/
/* 			</div>*/
/* */
/*                 <!-- epod -->*/
/*                 <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-key"><span data-toggle="tooltip" title="{{ help_entry_epod }}">{{ entry_epod }}</span></label>*/
/*                     <div class="col-sm-10">*/
/*                         <select name="shipping_fancourier_epod" class="form-control">*/
/*                             {% if shipping_fancourier_epod %}*/
/*                             <option value="X" selected="selected">{{ text_yes }}</option>*/
/*                             <option value="">{{ text_no }}</option>*/
/*                             {% else %}*/
/*                             <option value="X">{{ text_yes }}</option>*/
/*                             <option value="" selected="selected">{{ text_no }}</option>*/
/* 							{% endif %}*/
/*                         </select>*/
/*                     </div>*/
/*                 </div>*/
/* 				*/
/* 				*/
/* 			*/
/* 			*/
/* 			*/
/* 			*/
/* 		</form>*/
/*     </div>*/
/*   </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript">*/
/* <!--*/
/* $('select[name=\'ups_origin\']').bind('change', function() {*/
/* 	$('#service > div').hide();	*/
/* 										 */
/* 	$('#' + this.value).show();	*/
/* });*/
/* */
/* $('select[name=\'ups_origin\']').trigger('change');*/
/* //-->*/
/* </script> */
/* {{ footer }}*/
