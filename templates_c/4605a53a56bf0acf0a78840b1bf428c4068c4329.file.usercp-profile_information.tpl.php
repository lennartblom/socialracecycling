<?php /* Smarty version Smarty-3.1.8, created on 2013-06-04 12:19:20
         compiled from "01_tpl/internal/usercp-profile_information.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11264212054f8d536d8939c0-92463585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4605a53a56bf0acf0a78840b1bf428c4068c4329' => 
    array (
      0 => '01_tpl/internal/usercp-profile_information.tpl',
      1 => 1370348358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11264212054f8d536d8939c0-92463585',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f8d536d974674_00027429',
  'variables' => 
  array (
    'year_change' => 0,
    'profile_name' => 0,
    'profile_lastname' => 0,
    'zuletztaktiv' => 0,
    'activitychart' => 0,
    'profileinformation' => 0,
    'geburtstag' => 0,
    'stadt' => 0,
    'interessen' => 0,
    'beruf' => 0,
    'current_year' => 0,
    'trainingdetails' => 0,
    'id' => 0,
    'duration' => 0,
    'charts_yearkilometer' => 0,
    'charts_yearelevation' => 0,
    'activitylog' => 0,
    'touren' => 0,
    'tour' => 0,
    'email' => 0,
    'name' => 0,
    'lastname' => 0,
    'strasse' => 0,
    'plz' => 0,
    'land' => 0,
    'geschlecht' => 0,
    'fahrrad' => 0,
    'vorname' => 0,
    'nachname' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f8d536d974674_00027429')) {function content_4f8d536d974674_00027429($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("01_tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <form action="".$_SERVER['PHP_SELF']."" method="POST" name="edit_charts">
		<input type="hidden" name="year_change" value="<?php echo $_smarty_tpl->tpl_vars['year_change']->value;?>
">
			
<div style="box-shadow:0px 0px 25px #333;margin-right:25px;background-image:url(images/profile/profileimage-default.jpg);float:right;height:200px;width:200px;">
<div class="about-text-new" style="margin-top:165px;box-shadow:0px 0px 5px #333;opacity:0.5;text-align:center;height:20px;width:200px;background-color:black;color:#fff;"><?php echo $_smarty_tpl->tpl_vars['profile_name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['profile_lastname']->value;?>
</div>
</div>								
<h5 style="text-align:left;"><a href="usercp-mitgliederliste.php"><img src="images/profile/arrow-left-24.png" height="15px" /></a> <img src="images/profile/user-icon.png" /> <span style="font-weight:300;">Profil von</span> <?php echo $_smarty_tpl->tpl_vars['profile_name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['profile_lastname']->value;?>
 <span style="font-weight:300;font-size:11px;"><br />
(zuletzt eingeloggt am <?php echo $_smarty_tpl->tpl_vars['zuletztaktiv']->value;?>
)</span></h5>

<div style="float:left;width:400px;height:225px;">
<h3 style="float:left;margin-top:10px;margin-left:0px;height:25px;width:400px;font-size:16px;"><img src="images/profile/chart.png" /> Aktivitätsdiagramm </h3>
<p style="text-align:center;">

<?php if ($_smarty_tpl->tpl_vars['activitychart']->value==1){?>

<input type="submit" value="&larr; Jahr zurück" name="plot_change"  />
                        <input type="submit" value="aktuelles Jahr &darr;" name="plot_change"  />
                        <input type="submit" value="Jahr vor &rarr;" name="plot_change"  /></p>
<div id="chart1" style="height:165px; width:400px;margin-left:15px;"></div>
    <div class="code prettyprint">
    <pre class="code prettyprint brush: js"></pre>
</div>

<?php }elseif($_smarty_tpl->tpl_vars['activitychart']->value==2){?>

<div style="width:400px;float:left;height:155px;background-image:url(images/profile/chart-preview.jpg);background-repeat:no-repeat;">
<p class="about-text-new" style="text-align:center;text-shadow:0px 0px 25px #333;"><br />
<br />
<img src="images/profile/lock-closed.png" /> <?php echo $_smarty_tpl->tpl_vars['profile_name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['profile_lastname']->value;?>
 teilt sein Aktivitätsdiagramm <img src="images/profile/lock-closed.png" /><br />
<img src="images/profile/lock-closed.png" /> nicht mit anderen Mitgliedern <img src="images/profile/lock-closed.png" /> </p>

</div>

<?php }?>

</div>




<div style="float:left;width:325px;height:200px;">
<h3 style="float:left;margin-top:10px;margin-left:0px;width:330px;font-size:16px;"><img src="images/profile/info-icon.png" height="16px" /> Benutzerinformationen</h3>
<table>
	<tr>
    	<td valign="top" style="text-align:right;font-weight:bold;font-size:14px;" class="about-text-new" >Geburtdatum</td>
    	<td class="about-text-new" ><?php if ($_smarty_tpl->tpl_vars['profileinformation']->value==1){?><?php echo $_smarty_tpl->tpl_vars['geburtstag']->value;?>
<?php }elseif($_smarty_tpl->tpl_vars['profileinformation']->value==2){?><img src="images/profile/lock-closed.png" /><?php }?></td>
    </tr>
    <tr>
    	<td valign="top" style="text-align:right;font-weight:bold;font-size:14px;" class="about-text-new" >Wohnort</td>
    	<td class="about-text-new" ><?php if ($_smarty_tpl->tpl_vars['profileinformation']->value==1){?><?php echo $_smarty_tpl->tpl_vars['stadt']->value;?>
<?php }elseif($_smarty_tpl->tpl_vars['profileinformation']->value==2){?><img src="images/profile/lock-closed.png" /><?php }?></td>
    </tr>
    <tr>
    	<td valign="top" style="text-align:right;font-weight:bold;font-size:14px;" class="about-text-new" >Interessen</td>
    	<td class="about-text-new" ><?php if ($_smarty_tpl->tpl_vars['profileinformation']->value==1){?><?php echo $_smarty_tpl->tpl_vars['interessen']->value;?>
<?php }elseif($_smarty_tpl->tpl_vars['profileinformation']->value==2){?><img src="images/profile/lock-closed.png" /><?php }?></td>
    </tr>
    <tr>
    	<td valign="top" style="text-align:right;font-weight:bold;font-size:14px;" class="about-text-new" >Beruf</td>
    	<td class="about-text-new" ><?php if ($_smarty_tpl->tpl_vars['profileinformation']->value==1){?><?php echo $_smarty_tpl->tpl_vars['beruf']->value;?>
<?php }elseif($_smarty_tpl->tpl_vars['profileinformation']->value==2){?><img src="images/profile/lock-closed.png" /><?php }?></td>
    </tr>
</table>
</div>
<div style="float:right;height:200px;width:250px;">
<h3 style="float:left;margin-top:10px;margin-left:0px;width:225px;font-size:16px;"><img src="images/profile/clipboard-report-bar-24.png" height="16px" /> Trainingsdaten <?php echo $_smarty_tpl->tpl_vars['current_year']->value;?>
 | 

<?php if ($_smarty_tpl->tpl_vars['trainingdetails']->value==1){?>
    <a href="usercp-profile_training.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" title="vergleichen"><img height="16px" src="images/profile/clipboard-audit-16.png" /></a>
    
    <?php }elseif($_smarty_tpl->tpl_vars['trainingdetails']->value==2){?>
    
    <img src="images/profile/lock-closed.png" />
<?php }?></h3>
<table>
	<tr>
    	<td valign="top" style="text-align:right;font-weight:bold;font-size:14px;padding-right:10px;border-right:thin #565656 solid;" class="about-text-new" >gesamt Trainingszeit </td>
    	<td class="about-text-new" >
        <?php if ($_smarty_tpl->tpl_vars['trainingdetails']->value==1){?>
        
        	<?php echo $_smarty_tpl->tpl_vars['duration']->value;?>
<span style="font-size:12px">h:m:s</span>
        <?php }elseif($_smarty_tpl->tpl_vars['trainingdetails']->value==2){?>
        <img src="images/profile/lock-closed.png" />
        <?php }?>
        
        </td>
    </tr>
    <tr>
    	<td valign="top" style="text-align:right;font-weight:bold;font-size:14px;padding-right:10px;border-right:thin #565656 solid;" class="about-text-new" >gesamt Kilometer</td>
    	<td class="about-text-new" >
        
        <?php if ($_smarty_tpl->tpl_vars['trainingdetails']->value==1){?><?php echo $_smarty_tpl->tpl_vars['charts_yearkilometer']->value;?>
km
        <?php }elseif($_smarty_tpl->tpl_vars['trainingdetails']->value==2){?><img src="images/profile/lock-closed.png" />
        <?php }?>
        
        
        </td>
    </tr>
    <tr>
    	<td valign="top" style="text-align:right;font-weight:bold;font-size:14px;padding-right:10px;border-right:thin #565656 solid;" class="about-text-new" >gesamt Höhenmeter</td>
    	<td class="about-text-new" >
        <?php if ($_smarty_tpl->tpl_vars['trainingdetails']->value==1){?>
        	
       		<?php echo $_smarty_tpl->tpl_vars['charts_yearelevation']->value;?>
m
            
        <?php }elseif($_smarty_tpl->tpl_vars['trainingdetails']->value==2){?>
        <img src="images/profile/lock-closed.png" />
        <?php }?>
        
        
        </td>
    </tr>
</table>
</div>



<div style="width:650px;height:auto;float:left;">

<h3 style="margin-left:0px;font-size:16px;width:600px;height:20px;"><img src="images/profile/activity-log.png" /> Aktivitätstagebuch - die letzten 5 Aktivitäten</h3>

 <?php if ($_smarty_tpl->tpl_vars['activitylog']->value==1){?>
 <?php  $_smarty_tpl->tpl_vars['tour'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tour']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['touren']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tour']->key => $_smarty_tpl->tpl_vars['tour']->value){
$_smarty_tpl->tpl_vars['tour']->_loop = true;
?>
        
        <?php echo $_smarty_tpl->tpl_vars['tour']->value;?>

 
 <?php } ?>
 <?php }elseif($_smarty_tpl->tpl_vars['activitylog']->value==2){?>
 <div class="activities-top"></div>
            <div class="activities-middle">
            
            <p class="about-text-new" style="text-align:center;margin:0px;"><br />
<br />
<img src="images/profile/lock-closed.png" /> <?php echo $_smarty_tpl->tpl_vars['profile_name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['profile_lastname']->value;?>
 teilt letzten Aktivitäten <img src="images/profile/lock-closed.png" /><br />
<img src="images/profile/lock-closed.png" /> nicht mit anderen Mitgliedern <img src="images/profile/lock-closed.png" /> </p>

           	
            </div>      
        <div class="activities-bottom"><img src="http://socialracecycling.de/images/favicon.jpg" height="18" style="margin-right:5px;padding-top:8px;float:right;"></div>
 <?php }?>
 


        
        


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



<!--<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<h3>Profil von <?php echo $_smarty_tpl->tpl_vars['vorname']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['nachname']->value;?>
</h3>
<form action="usercp-profile_training.php" method="post">

<a href="usercp-profile_training.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Trainingsinformationen abrufen</a>

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
                <td><input readonly name="profile_name"  class="profile-normalinput"  value="<?php echo $_smarty_tpl->tpl_vars['vorname']->value;?>
" /></td>
            </tr>
            <tr>
                <td class="profil-column">Nachname:</td>
                <td><input  readonly name="profile_lastname"  class="profile-normalinput"  value="<?php echo $_smarty_tpl->tpl_vars['nachname']->value;?>
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
" class="profile-normalinput"  /></td>
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
                <td><input  readonly name="profile_city" value="<?php echo $_smarty_tpl->tpl_vars['geschlecht']->value;?>
" class="profile-normalinput" /></td>
            </tr>
            <tr>
                <td  class="profil-column">Geburtstag:</td>
                <td><input  readonly name="profile_email" class="profile-normalinput" value="<?php echo $_smarty_tpl->tpl_vars['geburtstag']->value;?>
" /></td>
            </tr>
            <tr>
                <td class="profil-column">Interessen:</td>
                <td><input  readonly name="profile_interests" value="<?php echo $_smarty_tpl->tpl_vars['interessen']->value;?>
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
        

</form>


<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
--><?php }} ?>