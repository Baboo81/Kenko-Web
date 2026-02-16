@if (true)
    {{-- On affiche toujours la bannière, JS s’occupe de la cacher si cookie présent --}}
    <div
        class="cookie-banner bg-light p-3 fixed-bottom d-flex flex-column flex-md-row justify-content-between align-items-center shadow">
        <span class="mb-2 mb-md-0">
            Ce site utilise des cookies à des fins statistiques.
            <a href="{{ route('cookies-policy') }}?from={{ url()->current() }}">En savoir plus</a>
        </span>

        <div class="d-flex gap-2">
            <button class="button" id="refuse-cookies">Refuser</button>
            <button class="button" id="accept-cookies">Accepter</button>
        </div>
    </div>

<script>
/**
 * ============================================================
 *  Cookie Banner Manager
 *  Gère :
 *   - Affichage / masquage bannière
 *   - Stockage consentement (cookie)
 *   - Envoi consentement au serveur (Laravel)
 * ============================================================
 */

function initCookieBanner() {

    // Sélection des éléments DOM
    const banner   = document.querySelector('.cookie-banner');
    const acceptBtn = document.getElementById('accept-cookies');
    const refuseBtn = document.getElementById('refuse-cookies');

    // Sécurité : si bannière absente → stop script
    if (!banner) return;

    /**
     * Masque visuellement la bannière
     * (Bootstrap utilise d-flex → on le retire aussi)
     */
    function hideBanner() {
        banner.classList.add('d-none');
        banner.classList.remove('d-flex');
    }

    /**
     * Récupère la valeur d’un cookie
     */
    function getCookie(name) {
        return document.cookie
            .split('; ')
            .find(row => row.startsWith(name + '='))
            ?.split('=')[1];
    }

    /**
     * Définit le cookie de consentement
     * Durée : 1 an
     */
    function setCookie(choice) {
        document.cookie =
            `cookies_consent=${choice}; path=/; max-age=${60 * 60 * 24 * 365}`;
    }

    /**
     * Envoie le consentement :
     *  - Stocke cookie
     *  - Cache bannière
     *  - Log serveur (Laravel)
     */
    function sendConsent(choice) {

        // Stockage local
        setCookie(choice);

        // Masquage UI
        hideBanner();

        // Envoi backend
        fetch("{{ url('/cookie-consent') }}", {
            method: "POST",
            credentials: "same-origin",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    ?.getAttribute("content"),
                "Accept": "application/json"
            },
            body: JSON.stringify({
                consent: choice,
                page: window.location.pathname,
                referrer: document.referrer
            })
        })
        .catch(() => {
            // Silencieux en prod
            // (on ne bloque pas l’UX si erreur log)
        });
    }

    /**
     * Si consentement déjà donné → on cache direct
     */
    if (getCookie('cookies_consent')) {
        hideBanner();
    }

    /**
     * Events boutons
     */
    acceptBtn?.addEventListener('click',
        () => sendConsent('accepted'));

    refuseBtn?.addEventListener('click',
        () => sendConsent('refused'));
}


/**
 * DOM Ready Safe
 * Lance le script même si chargé après le DOM
 */
if (document.readyState === 'loading') {
    document.addEventListener(
        'DOMContentLoaded',
        initCookieBanner
    );
} else {
    initCookieBanner();
}
</script>
@endif
