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
/*
  Fonction pour créer un cookie côté navigateur.
  name  = nom du cookie
  value = valeur du cookie
  days  = durée de vie en jours
*/
function setCookie(name, value, days) {
    // Transforme les jours en secondes (max-age se mesure en secondes)
    const maxAge = days * 24 * 60 * 60;

    // Crée le cookie avec le nom, la valeur, le chemin et la durée
    // samesite=strict empêche le cookie d'être envoyé dans les requêtes cross-site
    document.cookie = `${name}=${value}; path=/; max-age=${maxAge}; samesite=strict`;
}

/*
  Fonction pour envoyer le choix de consentement au serveur via AJAX.
  choice = 'accepted' ou 'refused'
*/
function sendConsent(choice) {
    fetch('{{ route("cookie-consent.store") }}', {   // Appelle la route Laravel qui stocke le consentement
        method: 'POST',                              // Méthode POST
        headers: {
            'Content-Type': 'application/json',      // Le corps est du JSON
            'X-CSRF-TOKEN': '{{ csrf_token() }}'    // Jeton CSRF pour sécuriser la requête
        },
        body: JSON.stringify({ consent: choice })    // Envoie le consentement au serveur
    }).then(() => {
        // Une fois la requête terminée, on enregistre aussi le consentement côté front
        setCookie('cookies_consent', choice, 365);             // Cookie pour savoir si l'utilisateur a accepté ou refusé
        setCookie('cookies_accepted', choice === 'accepted' ? '1' : '', 365); // Optionnel : 1 si accepté, vide sinon

        // Cache la bannière immédiatement pour l'utilisateur
        document.querySelector('.cookie-banner').style.display = 'none';
    });
}

/*
  Événement pour le bouton "Accepter"
  Quand l'utilisateur clique, on envoie 'accepted'
*/
document.getElementById('accept-cookies').addEventListener('click', function () {
    sendConsent('accepted');
});

/*
  Événement pour le bouton "Refuser"
  Quand l'utilisateur clique, on envoie 'refused'
*/
document.getElementById('refuse-cookies').addEventListener('click', function () {
    sendConsent('refused');
});
</script>

@endif

