<?php /* Smarty version Smarty-3.1.8, created on 2013-06-04 09:26:10
         compiled from "01_tpl/internal/usercp-profile_self.tpl" */ ?>
<?php /*%%SmartyHeaderCode:266215139506d6408ec66d2-48819778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b3e13896efb018c3d249a4f1625f4d75af37beb' => 
    array (
      0 => '01_tpl/internal/usercp-profile_self.tpl',
      1 => 1370335841,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '266215139506d6408ec66d2-48819778',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_506d640908a665_55444629',
  'variables' => 
  array (
    'year_change' => 0,
    'name' => 0,
    'lastname' => 0,
    'geburtstag' => 0,
    'stadt' => 0,
    'interessen' => 0,
    'beruf' => 0,
    'current_year' => 0,
    'charts_yearduration' => 0,
    'charts_yearkilometer' => 0,
    'charts_yearelevation' => 0,
    'touren' => 0,
    'tour' => 0,
    'email' => 0,
    'strasse' => 0,
    'plz' => 0,
    'land' => 0,
    'geschlecht' => 0,
    'fahrrad' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_506d640908a665_55444629')) {function content_506d640908a665_55444629($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("01_tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <form action="".$_SERVER['PHP_SELF']."" method="POST" name="edit_charts">
		<input type="hidden" name="year_change" value="<?php echo $_smarty_tpl->tpl_vars['year_change']->value;?>
">
			
<div style="box-shadow:0px 0px 25px #333;margin-right:25px;background-image:url(images/profile/profileimage-default.jpg);float:right;height:200px;width:200px;">
<div class="about-text-new" style="margin-top:165px;box-shadow:0px 0px 5px #333;opacity:0.5;text-align:center;height:20px;width:200px;background-color:black;color:#fff;">Lennart Blom</div>
</div>								
<h5 style="text-align:left;"><!--<img src="images/profile/arrow-left-24.png" height="15px" />--> <img src="images/profile/user-icon.png" /> <span style="font-weight:300;">Profil von</span> <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>
</h5>

<div style="float:left;width:400px;height:225px;">
<h3 style="float:left;margin-top:10px;margin-left:0px;height:25px;width:400px;font-size:16px;"><img src="images/profile/chart.png" /> Aktivitätsdiagramm</h3>
<p style="text-align:center;">
<input type="submit" value="&larr; Jahr zurück" name="plot_change"  />
                        <input type="submit" value="aktuelles Jahr &darr;" name="plot_change"  />
                        <input type="submit" value="Jahr vor &rarr;" name="plot_change"  /></p>
<div id="chart1" style="height:165px; width:400px;margin-left:15px;"></div>
    <div class="code prettyprint">
    <pre class="code prettyprint brush: js"></pre>
</div>

<!--
<div style="width:400px;float:left;height:155px;background-image:url(images/profile/chart-preview.jpg);background-repeat:no-repeat;">
<p class="about-text-new" style="text-align:center;text-shadow:0px 0px 25px #333;"><br />
<br />
<img src="images/profile/lock-closed.png" /> <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>
 teilt seine Aktivitätsdiagramm <img src="images/profile/lock-closed.png" /><br />
<img src="images/profile/lock-closed.png" /> nicht mit anderen Mitgliedern <img src="images/profile/lock-closed.png" /> </p>

</div>-->

</div>




<div style="float:left;width:325px;height:200px;">
<h3 style="float:left;margin-top:10px;margin-left:0px;width:330px;font-size:16px;"><img src="images/profile/info-icon.png" height="16px" /> Benutzerinformationen</h3>
<table>
	<tr>
    	<td valign="top" style="text-align:right;font-weight:bold;font-size:14px;" class="about-text-new" >Geburtdatum</td>
    	<td class="about-text-new" ><?php echo $_smarty_tpl->tpl_vars['geburtstag']->value;?>
</td>
    </tr>
    <tr>
    	<td valign="top" style="text-align:right;font-weight:bold;font-size:14px;" class="about-text-new" >Wohnort</td>
    	<td class="about-text-new" ><?php echo $_smarty_tpl->tpl_vars['stadt']->value;?>
</td>
    </tr>
    <tr>
    	<td valign="top" style="text-align:right;font-weight:bold;font-size:14px;" class="about-text-new" >Interessen</td>
    	<td class="about-text-new" ><?php echo $_smarty_tpl->tpl_vars['interessen']->value;?>
</td>
    </tr>
    <tr>
    	<td valign="top" style="text-align:right;font-weight:bold;font-size:14px;" class="about-text-new" >Beruf</td>
    	<td class="about-text-new" ><?php echo $_smarty_tpl->tpl_vars['beruf']->value;?>
</td>
    </tr>
</table>
</div>
<div style="float:right;height:200px;width:225px;">
<h3 style="float:left;margin-top:10px;margin-left:0px;width:190px;font-size:16px;"><img src="images/profile/clipboard-report-bar-24.png" height="16px" /> Trainingsdaten <?php echo $_smarty_tpl->tpl_vars['current_year']->value;?>
</h3>
<table>
	<tr>
    	<td valign="top" style="text-align:right;font-weight:bold;font-size:14px;padding-right:10px;border-right:thin #565656 solid;" class="about-text-new" >gesamt Trainingszeit </td>
    	<td class="about-text-new" ><?php echo $_smarty_tpl->tpl_vars['charts_yearduration']->value;?>
<span style="font-size:12px">hh:mm:ss</span></td>
    </tr>
    <tr>
    	<td valign="top" style="text-align:right;font-weight:bold;font-size:14px;padding-right:10px;border-right:thin #565656 solid;" class="about-text-new" >gesamt Kilometer</td>
    	<td class="about-text-new" ><?php echo $_smarty_tpl->tpl_vars['charts_yearkilometer']->value;?>
km</td>
    </tr>
    <tr>
    	<td valign="top" style="text-align:right;font-weight:bold;font-size:14px;padding-right:10px;border-right:thin #565656 solid;" class="about-text-new" >gesamt Höhenmeter</td>
    	<td class="about-text-new" ><?php echo $_smarty_tpl->tpl_vars['charts_yearelevation']->value;?>
m</td>
    </tr>
</table>
</div>



<div style="width:650px;height:auto;float:left;">

<h3 style="margin-left:0px;font-size:16px;width:600px;height:20px;"><img src="images/profile/activity-log.png" /> Aktivitätstagebuch - die letzten 5 Aktivitäten</h3>


 <?php  $_smarty_tpl->tpl_vars['tour'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tour']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['touren']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tour']->key => $_smarty_tpl->tpl_vars['tour']->value){
$_smarty_tpl->tpl_vars['tour']->_loop = true;
?>
        
        <?php echo $_smarty_tpl->tpl_vars['tour']->value;?>

 
 <?php } ?>
 
 <!--
<div class="activities-top"></div>
            <div class="activities-middle">
            
           	<span style="font-family: Journal;color:#3378c5;font-size: 25px;margin-left:25px;">
            <img src="http://localhost/socialracecycling/images/icon-radfahren.png" title="Radfahren" />
            28.05.2013 | von <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>
</span>
            
            <img style="float:right;margin-right:10px;padding-top:25px;" src="images/profile/bike.png" />
            
            <p style="margin:0px;margin-left:25px;"class="about-text-new">
            <span style="font-weight:bold;">Distanz:</span> 231,43km | 
            <span style="font-weight:bold;">Ø Geschwindigkeit</span>  27.7 km/h </p>
            
            <span style="font-size:10px;margin-left:25px;">vor 3 Tagen </span>
            </div>      
        <div class="activities-bottom"><img src="http://socialracecycling.de/images/favicon.jpg" height="18" style="margin-right:5px;padding-top:8px;float:right;"></div>
        
        
<div class="activities-top"></div>
            <div class="activities-middle">
            
            <p class="about-text-new" style="text-align:center;margin:0px;"><br />
<br />
<img src="images/profile/lock-closed.png" /> <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>
 teilt letzten Aktivitäten <img src="images/profile/lock-closed.png" /><br />
<img src="images/profile/lock-closed.png" /> nicht mit anderen Mitgliedern <img src="images/profile/lock-closed.png" /> </p>

           	
            </div>      
        <div class="activities-bottom"><img src="http://socialracecycling.de/images/favicon.jpg" height="18" style="margin-right:5px;padding-top:8px;float:right;"></div>
-->
</div>

</form>


<!--
<table style="margin-left:-100px;">
            <tr>
                <td>

                <table>
                    <tr>
                        <td class="profil-column">eMail:</td>
                        <td><input  readonly name="profile_email" class="profile-normalinput" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" /></td>
                    </tr>
                </table>
        
        
                </td>
            </tr>
        
        
            <tr>
                <td>
        
        <h2>Name und Adresse</h2>
        <table>
            <tr>
                <td class="profil-column">Vorname:</td>
                <td><input readonly name="profile_name"  class="profile-normalinput"  value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" /></td>
            </tr>
            <tr>
                <td class="profil-column">Nachname:</td>
                <td><input  readonly name="profile_lastname"  class="profile-normalinput"  value="<?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>
" /></td>
            </tr>
            <tr>
                <td class="profil-column">Straße:</td>
                <td><input  readonly name="profile_street" value="<?php echo $_smarty_tpl->tpl_vars['strasse']->value;?>
" class="profile-normalinput"  /></td>
            </tr>
            <tr>
                <td class="profil-column">PLZ:</td>
                <td><input  readonly name="profile_plz" value="<?php echo $_smarty_tpl->tpl_vars['plz']->value;?>
" class="profile-normalinput" /></td>
            </tr>
            <tr>
                <td class="profil-column">Stadt:</td>
                <td><input  readonly name="profile_city" value="<?php echo $_smarty_tpl->tpl_vars['stadt']->value;?>
" class="profile-normalinput" /></td>
            </tr>
            <tr>
                <td class="profil-column">Land</td>
                <td><input  readonly name="profile_city" value="<?php echo $_smarty_tpl->tpl_vars['land']->value;?>
" class="profile-normalinput" /></td>
            </tr>
        </table>
        
                </td>
            </tr>
        
            <tr>
                <td>
        
        <h2>Weitere Informationen</h2>
        <table>
            <tr>
                <td class="profil-column">Geschlecht:</td>
                <td><input readonly name="profile_city" value="<?php echo $_smarty_tpl->tpl_vars['geschlecht']->value;?>
" class="profile-normalinput" /></td>
            </tr>
            <tr>
                <td  class="profil-column">Geburtstag:</td>
                <td><input readonly name="profile_email" value="<?php echo $_smarty_tpl->tpl_vars['geburtstag']->value;?>
" class="profile-normalinput" /></td>
            </tr>
            <tr>
                <td class="profil-column">Interessen:</td>
                <td><input  readonly="readonly" name="profile_interests" value="<?php echo $_smarty_tpl->tpl_vars['interessen']->value;?>
" class="profile-normalinput"  /></td>
            </tr>
            <tr>
                <td class="profil-column">Beruf:</td>
                <td><input  readonly name="profile_job" value="<?php echo $_smarty_tpl->tpl_vars['beruf']->value;?>
" class="profile-normalinput"  /></td>
            </tr>
            <tr>
                <td class="profil-column">Rennradmodell:</td>
                <td><input  readonly name="profile_bike" value="<?php echo $_smarty_tpl->tpl_vars['fahrrad']->value;?>
" class="profile-normalinput"  /></td>
            </tr>
        </table>
        
                </td>
            </tr>
        </table>	
        

</form>-->


<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>