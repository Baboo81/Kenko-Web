# 🧩 ToDo – Dashboard Statistiques Kenko-Web

> Objectif : mettre en place un **dashboard de statistiques** clair, conforme RGPD, sécurisé, responsive et pédagogique.

---

## 1️⃣ BACKEND – Tracking & Base de données

### ✅ Cookies & consentement

* [x] Bannière cookies (accepter / refuser)
* [x] Cookie `cookies_accepted`
* [ ] Gérer le **refus** (ne rien tracker, ne rien stocker)
* [ ] Expiration & renouvellement du consentement (12 mois)

### 🗄️ Base de données (tracking)

* [ ] Créer migration `page_visits`

  * id
  * path
  * full_url
  * ip (hashée)
  * user_agent
  * referer (nullable)
  * visited_at
* [ ] Créer le modèle `PageVisit`
* [ ] Index DB (path, visited_at)

### 🔐 Sécurité & RGPD

* [ ] Hash IP (`sha256` + salt)
* [ ] Aucune donnée personnelle directe
* [ ] Tracking uniquement après consentement
* [ ] Exclure routes sensibles (`admin`, `login`, etc.)

---

## 2️⃣ MIDDLEWARE – Tracking intelligent

### 📍 Middleware `TrackPages`

* [x] Vérifier `cookies_accepted`
* [ ] Enregistrer la visite en DB
* [ ] Éviter les doublons (session / délai)
* [ ] Exclure assets (`css`, `js`, `images`)

### 🧠 Optimisations

* [ ] Limiter 1 hit / page / X minutes
* [ ] Stocker la première page visitée (landing)

---

## 3️⃣ CONTROLLERS – Dashboard

### 📊 DashboardController

* [ ] Nombre total de visites
* [ ] Visites aujourd’hui
* [ ] Pages les plus visitées
* [ ] Pages par jour (7 / 30 jours)
* [ ] Taux de pages vues par session (optionnel)

### 📦 Requêtes Eloquent

* [ ] `groupBy(path)`
* [ ] `count()`
* [ ] `whereDate()`
* [ ] `orderByDesc()`

---

## 4️⃣ ROUTES & ACCÈS

* [ ] Route `/admin/dashboard`
* [ ] Middleware `auth`
* [ ] Middleware `is_admin` (si nécessaire)
* [ ] Masquer le dashboard du public

---

## 5️⃣ FRONTEND – Design Dashboard

### 🧱 Structure

* [ ] Layout admin dédié
* [ ] Cartes statistiques (cards)
* [ ] Tableau des pages visitées
* [ ] Graphiques (optionnel)

### 🎨 UI / UX

* [ ] Design clair & minimal
* [ ] Icônes (Heroicons / Bootstrap Icons)
* [ ] Couleurs sobres (pro)
* [ ] Messages explicatifs (pédagogie)

---

## 6️⃣ RESPONSIVE

* [ ] Mobile-first
* [ ] Cards en colonne sur mobile
* [ ] Table scrollable horizontalement
* [ ] Graphiques adaptatifs

---

## 7️⃣ BONUS (plus tard)

* [ ] Export CSV
* [ ] Filtrer par période
* [ ] Filtrer par page
* [ ] Comparaison J-1 / Semaine précédente

---

## 🧘 Philosophie

> 👉 Simple, utile, RGPD-friendly
> 👉 Pas de surtracking
> 👉 Comprendre > accumuler des données

---

🚀 **Prochaine étape (demain)** :

1. Migration `page_visits`
2. Modèle Eloquent
3. Enregistrement des visites en DB
