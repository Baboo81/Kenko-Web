@if (!request()->cookie('cookies_consent'))
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

            function sendConsent(choice) {
                // Créer le cookie côté navigateur
                document.cookie = `cookies_consent=${choice}; path=/; max-age=${60*60*24*365}; samesite=strict`;

                // Envoyer au serveur
                fetch('{{ url('/cookie-consent') }}', { // <-- URL correcte pour Laravel
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            consent: choice,
                            page: window.location.pathname,
                            referrer: document.referrer
                        })
                    })
                    .then(res => res.json())
                    .then(data => console.log('Consentement enregistré avec ID', data.id))
                    .catch(err => console.error(err));

                // Cacher immédiatement la bannière
                if (banner) banner.style.display = 'none';
            }

            if (acceptBtn) acceptBtn.addEventListener('click', () => sendConsent('accepted'));
            if (refuseBtn) refuseBtn.addEventListener('click', () => sendConsent('refused'));
        });
    </script>
@endif
