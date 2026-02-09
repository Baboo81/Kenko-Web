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
        document.addEventListener('DOMContentLoaded', function() {
            const banner = document.querySelector('.cookie-banner');
            const acceptBtn = document.getElementById('accept-cookies');
            const refuseBtn = document.getElementById('refuse-cookies');

            // 🔐 Token CSRF depuis app.blade.php
            const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            // Fonction pour lire un cookie
            function getCookie(name) {
                return document.cookie.split('; ').find(row => row.startsWith(name + '='))?.split('=')[1];
            }

            if (getCookie('cookies_consent')) {
                banner.style.display = 'none';
            }

            // Si le cookie existe déjà, on cache la bannière
            if (getCookie('cookies_consent')) {
                if (banner) banner.style.display = 'none';
            }

            function sendConsent(choice) {
                // Créer le cookie côté navigateur (1 an)
                document.cookie = `cookies_consent=${choice}; path=/; max-age=${60*60*24*365}; SameSite=Strict`;

                // Envoyer au serveur
                fetch("{{ url('/cookie-consent') }}", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": token,
                            "Accept": "application/json"
                        },
                        body: JSON.stringify({
                            consent: choice,
                            page: window.location.pathname,
                            referrer: document.referrer
                        })
                    })
                    .then(res => res.json())
                    .then(data => console.log("Consentement enregistré ID :", data.id ?? 'non défini'))
                    .catch(err => console.error(err));

                // Cacher immédiatement la bannière
                if (banner) banner.style.display = "none";
            }

            acceptBtn.addEventListener("click", () => sendConsent("accepted"));
            refuseBtn.addEventListener("click", () => sendConsent("refused"));
        });
    </script>
@endif
