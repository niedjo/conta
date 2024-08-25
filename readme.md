# Conta - Application de Prévision du Chiffre d'Affaires

## Aperçu

**Conta** est une application web conçue pour aider les entreprises à estimer leur chiffre d'affaires futur en se basant sur des données historiques de dépenses et de revenus. Cet outil permet aux utilisateurs de projeter leur performance financière sur une période spécifique en utilisant un algorithme de corrélation linéaire alimenté par un modèle d'intelligence artificielle (IA). Conta est un atout précieux pour les propriétaires d'entreprises, les analystes financiers et toute personne intéressée par la prévision de l'évolution financière de leur entreprise.

## Fonctionnalités

- **Sélection de l'année** : Spécifiez l'année de départ pour l'enregistrement de vos dépenses et revenus.
- **Champs de saisie dynamiques** : En fonction du nombre d'années que vous souhaitez analyser, l'application génère des champs de saisie pour chaque année.
- **Saisie des données de dépenses et de revenus** : Entrez facilement vos dépenses et revenus pour les années sélectionnées.
- **Prévision du chiffre d'affaires** : En fonction de vos saisies, l'application alimentée par l'IA prédit votre chiffre d'affaires futur et identifie l'année à laquelle il sera atteint.
- **Interface conviviale** : Une interface simple et intuitive qui vous guide à travers le processus étape par étape.

## Comment ça fonctionne

1. **Sélection de l'année et de la période** : L'application vous demande d'abord "À partir de quelle année souhaitez-vous enregistrer vos dépenses et revenus ?". Ensuite, vous spécifiez le nombre d'années à analyser.
2. **Saisie des données** : L'application génère dynamiquement des champs où vous pouvez entrer vos dépenses et revenus pour les années sélectionnées.
3. **Prédiction** : Une fois toutes les données saisies, vous pouvez soumettre les dépenses de l'année en cours, et l'application vous prédit le chiffre d'affaires ainsi que l'année où vous l'atteindrez.

## Technologies Utilisées

- **Frontend** :
  - **HTML** : Structure et contenu des pages web.
  - **CSS** : Mise en forme et disposition pour une interface utilisateur réactive et attrayante.

- **Backend** :
  - **PHP** : Script côté serveur pour gérer le traitement des données et la communication entre le frontend et le module d'IA.
  - **SQL** : Gestion de base de données pour stocker et récupérer les données historiques de dépenses et de revenus.

- **Module d'IA** :
  - **JavaScript** : Le modèle d'IA, implémenté en JavaScript, utilise un algorithme de corrélation linéaire pour prédire les revenus futurs en fonction des données historiques.

## Prédictions Alimentées par l'IA

Le module d'IA de Conta est le cœur de l'application. En analysant la corrélation entre les dépenses passées et les revenus, il fournit des prévisions très précises. Ce modèle d'IA est basé sur un algorithme JavaScript personnalisé qui traite les données et calcule le coefficient de corrélation linéaire pour prévoir les revenus futurs avec précision.

## Accès à l'Application

Vous pouvez accéder à Conta en ligne via l'URL suivante : [conta.onrender.com](https://conta.onrender.com)

## Instructions d'Installation

Si vous souhaitez exécuter Conta localement ou sur votre propre serveur, suivez ces étapes :

1. **Clonez le Répertoire** :
   ```bash
   git clone https://github.com/niedjo/conta.git
   ```

2. **Configurez la Base de Données** :
   - Créez une base de données MySQL et importez le schéma SQL fourni.
   - Mettez à jour les paramètres de connexion à la base de données dans les fichiers PHP.

3. **Lancez l'Application** :
   - Hébergez l'application sur un serveur local (par exemple, XAMPP, WAMP) ou déployez-la sur votre serveur web.
   - Accédez à l'application via votre navigateur.

## Contribution

Les contributions sont les bienvenues ! Si vous trouvez des bugs ou avez des suggestions pour de nouvelles fonctionnalités, n'hésitez pas à ouvrir une issue ou à soumettre une pull request.

## Licence

Ce projet est sous licence MIT.