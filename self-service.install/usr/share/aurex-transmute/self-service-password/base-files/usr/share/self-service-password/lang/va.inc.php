<?php
#==============================================================================
# LTB Self Service Password
#
# Copyright (C) 2009 Clement OUDOT
# Copyright (C) 2009 LTB-project.org
#
# This program is free software; you can redistribute it and/or
# modify it under the terms of the GNU General Public License
# as published by the Free Software Foundation; either version 2
# of the License, or (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# GPL License: http://www.gnu.org/licenses/gpl.txt
#
#==============================================================================

# 

#==============================================================================
# Valencià
#==============================================================================
$messages['nophpldap'] = "Cal instal·lar PHP LDAP per fer servir aquesta eina";
$messages['nophpmhash'] = "Cal instal·lar PHP mhash per fer servir el mode Samba";
$messages['ldaperror'] = "No es pot accedir al servidor LDAP";
$messages['loginrequired'] = "Cal el nom d'usuari";
$messages['oldpasswordrequired'] = "Cal la contrasenya anterior";
$messages['newpasswordrequired'] = "Cal la contrasenya actual";
$messages['confirmpasswordrequired'] = "Confirmeu la contrasenya nova";
$messages['passwordchanged'] = "La seua contrasenya ha canviat";
$messages['nomatch'] = "Les contrasenyes no són iguals";
$messages['badcredentials'] = "El nom d'usuari o la contrasenya són incorrectes";
$messages['passworderror'] = "El servidor ha rebutjat la contrasenya";
$messages['title'] = "Autoservei de canvi de contrasenyes";
$messages['login'] = "Nom d'usuari";
$messages['oldpassword'] = "Contrasenya anterior";
$messages['newpassword'] = "Contrasenya nova";
$messages['confirmpassword'] = "Confirmeu la nova contrasenya";
$messages['submit'] = "Enviar";
$messages['tooshort'] = "La vostra contrasenya és massa curta";
$messages['toobig'] = "La vostra contrasenya és massa llarga";
$messages['minlower'] = "La vostra contrasenya no té prou minúscules";
$messages['minupper'] = "La vostra contrasenya no té prou majúscules";
$messages['mindigit'] = "La vostra contrasenya no té prou xifres";
$messages['minspecial'] = "La vostra contrasenya no té prou caràcters especials";	
$messages['sameasold'] = "La nova contrasenya és igual a la antiga";
$messages['policy'] = "Cal que la contrasenya respecte les següents normes";
$messages['policyminlength'] = "Longitud mínima";
$messages['policymaxlength'] = "Longitud màxima";
$messages['policyminlower'] = "Mínima quantitat de minúscules";
$messages['policyminupper'] = "Mínima quantitat de majúscules";
$messages['policymindigit'] = "Mínima quantitat de xifres";
$messages['policyminspecial'] = "Mínima quantitat de caràcters especials";
$messages['forbiddenchars'] = "La seua contrasenya conté caràcters prohibits";
$messages['policyforbiddenchars'] = "Caràcters prohibits";
$messages['policynoreuse'] = "La contrasenya nova no pot ser la mateixa que abans";
$messages['questions']['birthday'] = "Quan és el seu aniversari?";
$messages['questions']['color'] = "Quin és el seu color preferit?";
$messages['password'] = "Contrasenya";
$messages['question'] = "Pregunta";
$messages['answer'] = "Resposta";
$messages['setquestionshelp'] = "Establisca o modifique la seua pregunta i resposta secreta. Després podrà  canviar la seva contrasenya <a href=\"?action=resetbyquestions\">aquÃ­</a>.";
$messages['answerrequired'] = "No heu donat una resposta";
$messages['questionrequired'] = "No ha seleccionat una pregunta";
$messages['passwordrequired'] = "Cal la contrasenya";
$messages['answermoderror'] = "No ha quedat gravada la resposta";
$messages['answerchanged'] = "La resposta ha quedat gravada";
$messages['answernomatch'] = "La resposta no és correcta";
$messages['resetbyquestionshelp'] = "Trieu una pregunta i responeu-la per restaurar la seua contrasenya. Requereix <a href=\"?action=setquestions\">haver gravat una resposta</a>.";
$messages['changehelp'] = "Escriviu la contrasenya anterior i trieu la nova.";
$messages['changehelpreset'] = "Heu oblidat la contrasenya?";
$messages['changehelpquestions'] = "<a href=\"?action=resetbyquestions\">Restaurar la contrasenya responent preguntes</a>";
$messages['changehelptoken'] = "<a href=\"?action=sendtoken\">Restaurar la contrasenya amb confirmació per correu</a>";
$messages['changehelpsms'] = "<a href=\"?action=sendsms\">Reset your password with a SMS</a>";
$messages['resetmessage'] = "Hola {login},\n\nFer clic aquÃ­ per restaurar la contrasenya:\n{url}\n\nSi no heu demanat aquest servei, per favor ignoreu-lo.";
$messages['resetsubject'] = "Restaurar la contrasenya";
$messages['sendtokenhelp'] = "Escriviu el vostre usuari i la adreça de correu associada. Rebreu un correu amb un enllaç per a restaurar la contrasenya.";
$messages['resetbysmshelp'] = "The token sent by sms allows you to reset your password. To get a new token, <a href=\"?action=sendsms\">click here</a>.";
$messages['mail'] = "Correu";
$messages['mailrequired'] = "Cal el seu correu";
$messages['mailnomatch'] = "El correu no coincideix amb el registrat per l'usuari";
$messages['tokensent'] = "Hem enviat un correu de confirmació";
$messages['tokennotsent'] = "Error enviant el correu de confirmació";
$messages['tokenrequired'] = "Cal una fitxa";
$messages['tokennotvalid'] = "La fitxa no és vàlida";
$messages['resetbytokenhelp'] = "La fitxa enviada per correu us permet restaurar la contrasenya. Per aconseguir una nova fitxa, <a href=\"?action=sendtoken\">fer clic aquÃ­</a>.";
$messages['changemessage'] = "Hola {login},\n\nHa canviat la seua contrasenya.\n\nSi no ha sol·licitat aquest servei, poseu-vos en contacte amb el vostre administrador inmediatament.";
$messages['changesubject'] = "Heu canviat la vostra contrasenya";
$messages['badcaptcha'] = "El reCAPTCHA no és correcte. Torneu a provar-ho.";
$messages['notcomplex'] = "La vostra contrasenya no te prou classes diferents de caràcters";
$messages['policycomplex'] = "Mínim de classes de caràcters diferents:";
$messages['nophpmcrypt'] = "Has d'instal·lar la llibreria PHP mcrypt per usar les funcions criptorgràfiquess";
$messages['sms'] = "SMS Nombre";
$messages['smsresetmessage'] = "El token de restabliment de contrasenya és:";
$messages['sendsmshelp'] = "Introdueix el seu nom d'usuari per obtenir testimoni de restabliment de contrasenya. A continuació, escriviu token en els SMS enviats.";
$messages['smssent'] = "Un codi de confirmació ha sigut enviat per SMS";
$messages['smsnotsent'] = "Error enviant el SMS";
$messages['smsnonumber'] = "No es pot trobar el número de telèfon mòbil";
$messages['userfullname'] = "Nom d'usuari complert";
$messages['username'] = "Nom d'usuari";
$messages['smscrypttokensrequired'] = "No es pot utilitzar el reset per sms sense ajust de les opcions crypt_tokens";
$messages['smsuserfound'] = "Revisi que la informació d'usuari és correcte i premi Enviar per obternir el token per SMS";
$messages['smstoken'] = "token SMS";
$messages['loginrequired'] = "Es requereix el seu nom d'usuari";
$messages['minspecial'] = "La teua contrasenya no té prou caràcters especials";
$messages['getuser'] = "Obtenir usuari";
$messages['nophpmbstring'] = "Ha d'instal·lar PHP mbstring";
$messages['menuquestions'] = "Pregunte";
$messages['menutoken'] = "Correu";
$messages['menusms'] = "SMS";
$messages['nophpxml'] = "Cal instal·lar PHP XML per fer servir aquesta eina";
$messages['tokenattempts'] = "Nul token, prova un altra vegada";
$messages['emptychangeform'] = "Canvie la vostra contrasenya";
$messages['emptysendtokenform'] = "Envia per correu Email a password reset link";
$messages['emptyresetbyquestionsform'] = "Restablisca la seua contrasenya";
$messages['emptysetquestionsform'] = "Establisca les seues preguntes per a restablir la seua contrasenya";
$messages['emptysendsmsform'] = "Obtinga el codi de restabliment";
$messages['sameaslogin'] = "La teua contrasenya no pot ser igual";
$messages['policydifflogin'] = "La teua contrasenya no pot ser igual que el login";

?>
