@if(!request()->cookie('cookies_accepted'))
<div class="cookie-banner bg-light p-3 fixed-bottom d-flex justify-content-between align-items-center shadow">
    <span>Ce site utilise des cookies pour améliorer votre expérience et analyser la navigation. <a href="{{ url('/cookies') }}">En savoir plus</a></span>
    <button class="btn btn-primary" id="accept-cookies">Accepter</button>
</div>

<script>
document.getElementById('accept-cookies').addEventListener('click', function(){
    document.cookie = "cookies_accepted=1; path=/; max-age=" + 60*60*24*365 + "; samesite=strict";
    this.parentElement.style.display = "none";
});
</script>
@endif
