<div align="center">  
  <a href="README.md"   >   TR <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/TR.png" alt="TR" height="20" /></a>  
  <a href="README-EN.md"> | EN <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/US.png" alt="EN" height="20" /></a>  
  <a href="README-AZ.md"> | AZ <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/AZ.png" alt="AZ" height="20" /></a>  
  <a href="README-DE.md"> | DE <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/DE.png" alt="DE" height="20" /></a>  
  <a href="README-FR.md"> | FR <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/FR.png" alt="FR" height="20" /></a>  
  <a href="README-AR.md"> | AR <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/AR.png" alt="AR" height="20" /></a>  
  <a href="README-NL.md"> | NL <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/NL.png" alt="NL" height="20" /></a>  
</div>

# Guide d'utilisation du module Domainnameapi (WiseCP 5)

Ce module est une intégration de 'domainnameapi.com' pour WiseCP.

## 📦 Téléchargement — utilisez toujours les Releases !

⬇️ **Téléchargez la dernière version testée ici : https://github.com/domainreseller/wisecp-dna-v5/releases/latest**

> ⚠️ N'utilisez **pas** le bouton vert **Code → Download ZIP** — il télécharge la branche de développement brute. Les paquets de release sont versionnés, testés et prêts pour la production.

> ℹ️ Ce dépôt est destiné à **WiseCP 5**. Pour WiseCP 3.x : https://github.com/domainreseller/wisecp-dna

## Prérequis

- WiseCP 5.
- PHP 8.2 ou supérieur.

## Installation

1. Copiez le dossier "coremio" du paquet dans le dossier d'installation de WiseCP (Exemple : /home/wisecp/public_html). Ne copiez pas les fichiers `.gitignore` et `README.md`.
2. Vérifiez que la structure des dossiers est correcte (Exemple : /home/wisecp/public_html/coremio/modules/Registrars/DomainNameAPI/DomainNameAPI.php).
3. Dans le panneau d'administration WiseCP, ouvrez **Produits → Domaines → Registraires de domaines** et cliquez sur la carte DomainNameAPI.
4. Saisissez vos identifiants API, vérifiez-les avec **Tester la connexion**, puis enregistrez.

## Mise à jour

Copiez le dossier "coremio" du nouveau paquet dans le dossier d'installation de WiseCP. Vos réglages sont stockés dans `config.php`, que le paquet ne contient pas : une mise à jour ne les écrase jamais.

## Passage de WiseCP 3.x à 5

L'assistant de migration de WiseCP ne transfère pas les réglages de ce module vers la version 5. Après la migration, installez ce paquet et saisissez à nouveau vos identifiants API dans **Produits → Domaines → Registraires de domaines**.


### Identifiants API

1. Saisissez votre **Reseller ID** et votre **API Key**.
2. Cliquez sur le bouton "Enregistrer".

> 💡 Vous trouverez votre **Reseller ID** et votre **API Key** dans votre panneau DomainNameAPI, section **Paramètres API**.
> ⚠️ Ce sont des **identifiants API** — vos identifiants de connexion au panneau ne fonctionneront **pas** ici.

### Test de la connexion

1. Cliquez sur le bouton "Tester la connexion" pour vérifier si la connexion a été établie avec succès.

## Importation des TLD de domaine

1. Cliquez sur l'onglet "Importer les TLD" pour importer les extensions de noms de domaine.
2. Toutes les extensions seront importées avec succès.

## Importation des noms de domaine

1. Cliquez sur l'onglet "Importer" pour afficher les noms de domaine.
2. Vous verrez une liste des domaines disponibles. Sélectionnez le domaine que vous souhaitez importer et associez-le au client souhaité, puis cliquez sur le bouton "Importer".

C'est tout ! Vous pouvez maintenant utiliser le module Domainnameapi avec succès dans WiseCP.

## Codes de Retour et d'Erreur avec Explications

| Code | Explication                                     | Détails                                                                                                                                                                                             |
|------|-------------------------------------------------|-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| 1000 | Command completed successfully                  | Commande exécutée avec succès                                                                                                                                                                       |
| 1001 | Command completed successfully; action pending. | Commande exécutée avec succès ; action en attente                                                                                                                                                   |
| 2003 | Required parameter missing                      | Paramètre requis manquant. Par exemple : Numéro de téléphone manquant dans les informations de contact                                                                                              |
| 2105 | Object is not eligible for renewal              | L'objet n'est pas éligible pour le renouvellement, les actions de mise à jour sont verrouillées. Le statut ne doit pas être "clientupdateprohibited". Peut être dû à d'autres conditions de statut. |
| 2200 | Authentication error                            | Erreur d'authentification, code d'autorisation incorrect, ou le domaine est enregistré chez un autre registrar.                                                                                     |
| 2302 | Object exists                                   | Le nom de domaine ou les informations de serveur de noms existent déjà dans la base de données. Ne peut pas être enregistré.                                                                        |
| 2303 | Object does not exist                           | Le nom de domaine ou les informations de serveur de noms n'existent pas dans la base de données. Nouvel enregistrement requis.                                                                      |
| 2304 | Object status prohibits operation               | Le statut de l'objet interdit l'action, les mises à jour sont verrouillées. Le statut ne doit pas être "clientupdateprohibited". Peut être dû à d'autres conditions de statut.                      |
