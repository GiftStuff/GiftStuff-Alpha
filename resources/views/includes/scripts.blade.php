@include('errors/noscript')

<link data-require="bootstrap@3.2.0" data-semver="3.2.0" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css" />
<script data-require="jquery@*" data-semver="2.1.1" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script data-require="bootstrap@3.2.0" data-semver="3.2.0" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.js"></script>
<script data-require="angular.js@1.2.*" data-semver="1.2.27" src="https://code.angularjs.org/1.2.27/angular.js"></script>
<script data-require="ui-bootstrap@*" data-semver="0.11.0" src="http://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.12.0.min.js"></script>
<script id="holder" src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.8.0/holder.js"></script>
<script id="google-recaptcha" src="https://www.google.com/recaptcha/api.js"></script>
<script id="google-analytics">
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments);
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m);
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', '{{ env("GOOGLE_ANALYTICS_TRACKING_ID") }}', 'auto');
    ga('send', 'pageview');
</script>