<!-- Footer -->
<footer id="footer">
  <ul class="icons">
    <li><a href="http://www.ffme.fr" rel="nofollow"><i class="sprite sprite-ffme"></i></a></li>
    <li><a href="http://www.ffcam.fr" rel="nofollow"><i class="sprite sprite-ffcam"></i></a></li>
    <li><a href="http://ville-fontaine.fr" rel="nofollow"><i class="sprite sprite-fontaine"></i></a></li>
    <li><a href="http://www.auvieuxcampeur.fr" rel="nofollow"><i class="sprite sprite-vieux-campeur"></i></a></li>
    <li><a href="http://www.beal-planet.com/" rel="nofollow"><i class="sprite sprite-beal"></i></a></li>
    <li><a href="http://www.expe.fr/fr" rel="nofollow"><i class="sprite sprite-expe"></i></a></li>
    <li><a href="http://www.atelierrocabilo.com/" rel="nofollow"><i class="sprite sprite-atelier-rocabilo"></i></a></li>
    <li><a href="http://www.scarpa.net/en/" rel="nofollow"><i class="sprite sprite-scarpa"></i></a></li>
  </ul>

  <span class="copyright">
    &copy; Copyright <a href="http://fontaine-en-montagne.ffcam.fr/">Drac Vercors Escalade</a>. All rights reserved. Design by <a href="http://www.html5webtemplates.co.uk">Responsive Web Templates</a>.
  </span>
</footer>

<script>
function init() {
var imgDefer = document.getElementsByTagName('img');
for (var i=0; i<imgDefer.length; i++) {
if(imgDefer[i].getAttribute('data-src')) {
imgDefer[i].setAttribute('src',imgDefer[i].getAttribute('data-src'));
} } }
window.onload = init;
</script>

<?php include_once("event-markup.php") ?>
</body>
</html>
