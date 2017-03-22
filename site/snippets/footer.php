			<footer role="contentinfo">
            <h2 class="ym-hideme">Zusatzinfo</h2>
            <div class="ym-wrapper">
                <div class="ym-wbox">
                    <div class="ym-grid linearize-level-1">
                        <article class="ym-g50 ym-gl">
                            <div class="ym-gbox">
                                <h3>Sei frech - mach mit! <span id="mitwirken">Mitwirkende</span></h3>
                                <ul id="mitwirkende">

                                    <li>
                                        <a href="http://www.mcwiwa.de">
                                            <img alt="Maik Wagner" src="<?php echo url('assets/images/maik_wagner.jpg')?>">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://www.zzwei.de">
                                            <img alt="Dani Rogge zzwei" src="<?php echo url('assets/images/daniela_rogge_zzwei.jpg')?>">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/oliver.heeger">
                                            <img alt="Oliver Heeger" src="<?php echo url('assets/images/oliver_heeger.jpg')?>">
                                        </a>
                                    </li>
                                </ul>                               
                                <p>Einen Fehler gefunden oder etwas beizutragen? <a href="https://github.com/maikwause/barrierefrechheit">Bitte melden</a></p>
                            </div>
                        </article>
                        <article class="ym-g50 ym-gr">
                            <div class="ym-gbox">
                                <h3>Das Projekt</h3>
                                    <p>Die Plattform "barrierefrechheit.de" stellt Tipps und Hinweise zur Verfügung, um eigene Anwendungen, Websites und Blogs zugänglicher zu machen. Schnell. Einfach. Konkret. Auf Deutsch.</p>
                                    <p>Barrierefrechheit hilft Entwicklern, ihre Websites und Anwendungen barrierefreier zu machen. Es ist eien Sammlung von konkreten Hinweisen, Tipps und Beispielen. Für jedes Problem gibt es mindestens eine Lösung und da man die Wahl hat, sollte man einfach die zugänglichere Lösung wählen. Diese Sammlung will dabei helfen die richtige Wahl zu treffen und ein Stück Bewußtsein bei Entwicklern zu wecken, denn Barrierefreiheit ist zu allererst Bewußtsein.</p>
                                    <p>Das Projekt ist kollaborativ aufgebaut, jeder kann und soll mitmachen und etwas beitragen. Der Inhalt liegt bei <a href="https://github.com/maikwause/barrierefrechheit/">Github</a>, dort kann man Fehler melden und eigene Beiträge bereitstellen.</p>
                                    
                            </div>
                        </article>
                     
                    </div>
                </div>
                                        <?php echo kirbytext($site->copyright()) ?>   
            </div>      
        </footer>
    </div>
</div>
</body>
<!-- full skip link functionality in webkit browsers -->
<?php echo js('assets/js/yaml-focusfix.js') ?>

<?php echo js('https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js')?>
<?php echo js('assets/js/listusers.js') ?>
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//mcwiwa-webservice.de/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '9']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//mcwiwa-webservice.de/piwik/piwik.php?idsite=9" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->
</html>