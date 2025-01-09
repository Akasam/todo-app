# Guide QA - Évaluation Projet

## Checklist de Tests

### 1. Tests Fonctionnels
- [ ] L'application se lance sans erreur
- [ ] Opérations CRUD
  - [ ] Création : tous les formulaires fonctionnent
  - [ ] Lecture : affichage correct des données
  - [ ] Modification : mises à jour effectives
  - [ ] Suppression : fonctionne avec confirmation
- [ ] Navigation
  - [ ] Tous les liens sont fonctionnels
  - [ ] Pas de pages en erreur 404
  - [ ] Retour utilisateur sur les actions
  - [ ] Navigation logique et intuitive
- [ ] Base de données
  - [ ] Connexion stable
  - [ ] Données persistantes
  - [ ] Pas d'erreurs SQL visibles

### 2. Tests Interface
- [ ] Design général
  - [ ] Cohérence visuelle
  - [ ] Mise en page structurée
  - [ ] Éléments de design originaux
- [ ] Expérience utilisateur
  - [ ] Messages clairs
  - [ ] Actions évidentes
  - [ ] Temps de réponse acceptable

### 3. Tests Architecture
- [ ] Structure du projet
  - [ ] Organisation MVC
  - [ ] Séparation des responsabilités
  - [ ] Nommage cohérent des dossiers/fichiers
- [ ] Organisation
  - [ ] Pas de fichiers inutiles
  - [ ] Routes logiques
  - [ ] Assets bien organisés

### 4. Documentation
- [ ] README
  - [ ] Description du projet
  - [ ] Instructions d'installation
  - [ ] Configuration requise
  - [ ] Commandes importantes
- [ ] Guide utilisateur
  - [ ] Fonctionnalités expliquées
  - [ ] Captures d'écran si nécessaire

### 5. Code
- [ ] Qualité des commentaires
  - [ ] Pertinence et cohérence
  - [ ] Pas de code mort et/ou commenté
- [ ] Style
  - [ ] Indentation cohérente
  - [ ] Format PSR respecté
  - [ ] Lisibilité

### 6. Gestion de Projet
- [ ] Git
  - [ ] Commits réguliers
  - [ ] Messages descriptifs
  - [ ] Branches utilisées
- [ ] Organisation
  - [ ] Planification visible
  - [ ] Répartition des tâches
  - [ ] Respect des délais

### 7. Qualité Code
- [ ] Bonnes pratiques
  - [ ] DRY (pas de répétition)
  - [ ] KISS (Keep It Stupid Simple)
  - [ ] Gestion des erreurs
- [ ] Maintenabilité
  - [ ] Code modulaire
  - [ ] Variables bien nommées
  - [ ] Fonctions courtes

## Notation

Pour chaque section:
- ++ : Excellent
- + : Bon
- = : Correct
- - : Insuffisant
- -- : Très insuffisant

## Commentaires Généraux
- Points forts :
- Axes d'amélioration :
- Remarques particulières :