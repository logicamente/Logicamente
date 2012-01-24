<html>
    <head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type"> 
	<meta name="application-name" content="Logicamente"> 
	<meta name="description" content="Virtual Learning Environment - Logicamente/UFRN">
	<meta name="application-url" content="http://wwww.lolita.dimap.ufrn.br/logicamente"> 
	<meta name="logicamente" content="notranslate"> 

        <title> .: Logicamente :. </title>
        <script src="js/validation/scriptaculous/lib/prototype.js"></script>
        <script src="js/validation/scriptaculous/src/effects.js"></script>
        <script src="js/validation/validation.js"></script>
        <script src="js/validation/fabtabulous.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/jquery.corner.js"></script>
        <script src="js/shortcut.js"></script>
        <script src="js/interface.js"></script>
        <script src="manager.js"></script>
        <!-- <script id="js"></script> -->

        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="" id="css"/>
        <style>

            @import "css/default.css";
            @import "css/menuItems.css";
            @import "mod_resolutiongame/resolutionGame.css";

        </style>
        <link rel="shortcut icon" href="src=css/images/logo.gif"/>
    </head>
    <body>



        <?php
        /** require_once('/var/www/FirePHPCore/FirePHP.class.php');
          $firephp = FirePHP::getInstance(true);



          require_once('/var/www/FirePHPCore/fb.php');


          $firephp->setEnabled(true);



          $firephp->log('Plain Message');     // or FB::
          $firephp->info('Info Message');     // or FB::
          $firephp->warn('Warn Message');     // or FB::
          $firephp->error('Error Message');   // or FB::
          $firephp->log('Message','Optional Label');

          ob_start();
          session_start();

          $_SESSION['PATH'] = "/var/www/system/";
         */
        ?>

        <div id="header"><a href="index.php"><img src="css/images/logo.jpg" border="0" /></a></div>
        <div id="menu">
            <ul>
                <li id="menuSettings">
                    <a href="#menuSettings" accesskey="S">
                        <img width="100%" height="100%" src="css/images/transp.gif" border="0"/>
                    </a>
                </li>
                <li id="menuGenerator">
                    <a href="#menuGenerator" accesskey="G">
                        <img width="100%" height="100%" src="css/images/transp.gif" border="0"/>
                    </a>
                </li>
                <li id="menuDiagnoser" style="display:none;">
                    <a href="#menuDiagnoser">
                        <img width="100%" height="100%" src="css/images/transp.gif" border="0"/>
                    </a>
                </li>
                <li id="menuTranslator" style="display:none;">
                    <a href="#menuTranslator">
                        <img width="100%" height="100%" src="css/images/transp.gif" border="0"/>
                    </a>
                </li>
                <li id="menuChecker" style="display:none;">
                    <a href="#menuChecker">
                        <img width="100%" height="100%" src="css/images/transp.gif" border="0"/>
                    </a>
                </li>
                <li id="menuReadFormula">
                    <a href="#menuReadFormula" accesskey="F">
                        <img width="100%" height="100%" src="css/images/transp.gif" border="0"/>
                    </a>
                </li>
                <li id="menuTruthTable">
                    <a href="#menuTruthTable" accesskey="T">
                        <img width="100%" height="100%" src="css/images/transp.gif" border="0"/>
                    </a>
                </li>
                <li id="menuTreeInteraction">
                    <a href="#menuTreeInteraction" accesskey="I">
                        <img width="100%" height="100%" src="css/images/transp.gif" border="0"/>
                    </a>
                </li>
                <li id="menuSubstitutionMaster">
                    <a href="#menuSubstitutionMaster">
                        <img width="100%" height="100%" src="css/images/transp.gif" border="0"/>
                    </a>
                </li>
                <li id="menuPrenex">
                    <a href="#menuPrenex">
                        <img width="100%" height="100%" src="css/images/transp.gif" border="0"/>
                    </a>
                </li>
                <li id="menuSkolemizer">
                    <a href="#menuSkolemizer">
                        <img width="100%" height="100%" src="css/images/transp.gif" border="0"/>
                    </a>
                </li>
                <li id="menuResolutionGame">
                    <a href="#menuResolutionGame" accesskey="R">
                        <img width="100%" height="100%" src="css/images/transp.gif" border="0"/>
                    </a>
                </li>
                <li id="menuTester">
                    <a href="#menuTester" accesskey="E">
                        <img width="100%" height="100%" src="css/images/transp.gif" border="0"/>
                    </a>
                </li>
            </ul>
        </div>
        <div id="conentBase">
            <div id="content">
                <p>Welcome to the project <strong>LOGICAMENTE</strong>.</p>

                <div>
                    
                    <p> Logic is a subject offered to many undergraduate courses with different goals and contents. For most of these courses, it is remarkable how Logic represents a pedagogical challenge for both teachers and students, and the recorded number of cases of failures and of discontinuity in studies by the students is often high.
                     Given the need to provide a solid basis on the subject, we propose a set of Learning Object for teaching Logic Applied to Computing: the <strong>LOGICAMENTE</strong>. </p>

                    <p> The tools that integrate the system aim to illustrate fundamental concepts and algorithms from Logic, as well as to allow students to conduct interactive practical experiments involving the understanding of those concepts. With our Virtual Learning Environment (VLE), we will present a lecture tour for applying the tools available in the <strong>LOGICAMENTE</strong>.

                        Some of the objects of learning in our VLE carry out tasks such as:
                    </p>
                    
                        <ul>
                            <li>the automatic generation of formulas with a specified complexity</li>
                            <li>setting up of a language and defining new connectives</li>
                            <li>translation between different syntaxes</li>
                            <li>construction of truth tables and tableaux for formulas</li>
                            <li>interactive presentation of the formulas in the form of trees</li>
                            <li>an implementation of the resolution method</li>
                            <li>the search engine of counter-models for a finite collection of formulas</li>
                            <li>the use of a theorem proving environment</li>
                        </ul>
                    
                </div>

                <p>To access a module, click to the corresponding Tab.</p>
                <p> At any time you can have access to a Help with the shortcut: <strong>Ctrl+Shift+h</strong>.</p>
            </div>

            <fieldset id="fieldsetSettings">
                <legend>Settings</legend>
                <div id="config"></div>
            </fieldset>

            <fieldset id="fieldsetTransfer">
                <legend>Transfer Area</legend>
                <div id="transfer">
                    <div id='cont'>0</div>
                </div>
            </fieldset>
        </div>

        <div id="footer">
	 <strong>Copyleft &copy; LOGICAMENTE - 2010 </strong><br/>
          <p class="box">
          <a rel="license" href="http://creativecommons.org/licenses/by/3.0/">
            <img src="css/images/somerightscc.gif" alt="Creative Commons License" style="border:none;" height="27" width="79"></a><br/>
          Content on this site is licensed under a<br>
          <a rel="license" href="http://creativecommons.org/licenses/by/3.0/" class="subfoot">Creative Commons Attribution 3.0 License.</a>
        </p>
        </div>

        <div id="js">
        </div>

        <img src="css/images/menuGeneratorBtnHover.jpg" style="display:none;"/>
        <img src="css/images/menuTranslatorBtnHover.jpg" style="display:none;"/>
        <img src="css/images/menuDiagnoserBtnHover.jpg" style="display:none;"/>
        <img src="css/images/menuCheckerBtnHover.jpg" style="display:none;"/>
        <img src="css/images/menuSettingsBtnHover.jpg" style="display:none;"/>
        <img src="css/images/menuReadFormulaBtnHover.jpg" style="display:none;"/>
        <img src="css/images/menuResolutionGameBtnHover.jpg" style="display:none;"/>
        <img src="css/images/menuTruthTableBtnHover.jpg" style="display:none;"/>

        <div id="blackground"></div>
        <div id="helpBorder"><div id="helpContent"></div></div>
    </body>
</html>
