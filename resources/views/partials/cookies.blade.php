@if(!request()->cookie('cookies_consent'))
<div class="cookie-banner bg-light p-3 fixed-bottom d-flex flex-column flex-md-row justify-content-between align-items-center shadow">
    <span class="mb-2 mb-md-0">
        Ce site utilise des cookies à des fins statistiques.
        <a href="{{ route('cookies-policy') }}?from={{ url()->current() }}">En savoir plus</a>
    </span>

    <div class="d-flex gap-2">
        <button class="button" id="refuse-cookies">
            Refuser
        </button>

        <button class="button" id="accept-cookies">
            Accepter
        </button>
    </div>
</div>

<script>
function setCookie(name, value, days) {
    const maxAge = days * 24 * 60 * 60;
    document.cookie = `${name}=${value}; path=/; max-age=${maxAge}; samesite=strict`;
}

function redirectBack() {
    const params = new URLSearchParams(window.location.search);
    const from = params.get('from');
    window.location.href = from ?? '/';
}

document.getElementById('accept-cookies').addEventListener('click', function () {
    setCookie('cookies_consent', 'accepted', 365);
    setCookie('cookies_accepted', '1', 365);
    redirectBack();
});

document.getElementById('refuse-cookies').addEventListener('click', function () {
    setCookie('cookies_consent', 'refused', 365);
    document.cookie = "cookies_accepted=; path=/; max-age=0";
    redirectBack();
});
</script>
@endif

