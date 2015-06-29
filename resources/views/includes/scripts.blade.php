@include('errors/noscript')

<script id="jquery" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.js"></script>
<script id="holder" src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.8.0/holder.js"></script>
<script id="twitter-bootstrap" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.js"></script>
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