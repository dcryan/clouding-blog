var _paq = window._paq = window._paq || [];

_paq.push(["setCookieDomain", "*.clouding.io"]);
_paq.push(["setDomains", ["*.clouding.io"]]);
_paq.push(['trackPageView']);
_paq.push(['enableLinkTracking']);
(function() {
  var u="https://web-stats-internal.clouding.io/";
  _paq.push(['setTrackerUrl', u+'clouding.php']);
  _paq.push(['setSiteId', '1']);
  var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
  g.type='text/javascript'; g.async=true; g.src=u+'clouding.js'; s.parentNode.insertBefore(g,s);
})();
