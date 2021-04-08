Projet fil rouge : Une application de gestion d
e comptes bancaires
Vous êtes développeur junior au sein du service informatique d’une grande enseigne bancaire. Le
coeur de cible de cette banque était jusqu’à maintenant les épargnants âgés, qui utilisent peu
internet. Elle souhaite maintenant diversifi er sa clientèle, entrer de plein pied dans l’ère du
numérique et proposer à ses usagers un service bancaire en ligne renouvelé afin d’attirer de nouveau
utilisateurs.
Cependant la banque est un métier de confiance et c’est la sécurité des utilisateurs qui
doit primer
avant tout.
A ce titre, vous devez créer une application qui permet à l’utilisateur de créer et gérer des comptes
A ce titre, vous devez créer une application qui permet à l’utilisateur de créer et gérer des comptes bancaires.bancaires.
Spécifications fonctionnelles
Spécifications fonctionnelles ::
-
- Sur l’accueil du site, l’utilisateur voit par défaut tous ses comptes bancairesSur l’accueil du site, l’utilisateur voit par défaut tous ses comptes bancaires
-
- A son arrivée sur l’accueil un layer s’affiche par dessus l’ensemble de la page et lui rappelle les A son arrivée sur l’accueil un layer s’affiche par dessus l’ensemble de la page et lui rappelle les règles de sécurité essentielles sur un site internet. Les règles de sécurité sont stockées dans un règles de sécurité essentielles sur un site internet. Les règles de sécurité sont stockées dans un fichier et récupérées par requête HTTP (AJAX).fichier et récupérées par requête HTTP (AJAX).
-
- Sur uneSur une page de statistiques l’utilisateur accède à des informations bancaires comme les taux page de statistiques l’utilisateur accède à des informations bancaires comme les taux d’emprunt, le cours de la bourse, ect… Ces informations sont récupérées depuis un fichier via d’emprunt, le cours de la bourse, ect… Ces informations sont récupérées depuis un fichier via requête HTTP et présentées sous forme de tableau. Ces informations sont storequête HTTP et présentées sous forme de tableau. Ces informations sont stockées dans un fichier ckées dans un fichier au format JSON.au format JSON.
-
- Une page de blog, qui affichera des articles récupérés depuis l’API suivanteUne page de blog, qui affichera des articles récupérés depuis l’API suivante : : https://ochttps://oc--jswebsrv.herokuapp.com/api/articlesjswebsrv.herokuapp.com/api/articles
/Optionnel si manque de t
/Optionnel si manque de temps/emps/
-
- Sur une page dédiée, un formulaire lui permet de créer un nouveau compte bancaire avec Sur une page dédiée, un formulaire lui permet de créer un nouveau compte bancaire avec minimum un type de compte (courant, livretA, PEL etc...) et une somme par défaut supérieure à 50 minimum un type de compte (courant, livretA, PEL etc...) et une somme par défaut supérieure à 50 euroseuros
-
- Pour chaque compte l’utilisateur peut cliquer sur un liPour chaque compte l’utilisateur peut cliquer sur un lien qui par la suite lui permettra de supprimer en qui par la suite lui permettra de supprimer le comptele compte
-
- Pour chaque compte, l’utilisateur peut, via un formulaire faire un dépôt d’argentPour chaque compte, l’utilisateur peut, via un formulaire faire un dépôt d’argent
-
- Pour chaque compte, l’utilisateur peut, via un formulaire faire un retrait d’argentPour chaque compte, l’utilisateur peut, via un formulaire faire un retrait d’argent
-
- Sur une page dédiée, à Sur une page dédiée, à l’aide d’un formulaire, l’utilisateur peut réaliser un virement d’un compte à l’aide d’un formulaire, l’utilisateur peut réaliser un virement d’un compte à un autre. Il peut donc sélectionner un compte A à débiter, indiquer un montant et sélectionner le un autre. Il peut donc sélectionner un compte A à débiter, indiquer un montant et sélectionner le compte B à créditer. Il ne peut sélectionner que ses propres comptes.compte B à créditer. Il ne peut sélectionner que ses propres comptes.
Spécifica
Spécifications techniquestions techniques ::
-
- HTML5HTML5
-
- CSS3CSS3
-
- Framework Boostrap4Framework Boostrap4
-
- Base BoilerplateBase Boilerplate
-
- JavaScript avec respect des normes ES6JavaScript avec respect des normes ES6
-
- Vous avez produit des maquettes de type wireframe simples pour au moins une des pagesVous avez produit des maquettes de type wireframe simples pour au moins une des pages
-
- Vous avez produit une arborescence fonctionnelleVous avez produit une arborescence fonctionnelle de l’application reprenant les cas d’utilisationde l’application reprenant les cas d’utilisation
possible de la page
possible de la page
-
- Vos wireframes sont accessibles dans un dossier DOCVos wireframes sont accessibles dans un dossier DOC
-
- Votre interface est responsive sur tous les supportsVotre interface est responsive sur tous les supports
-
- Vous respectez le principe DRYVous respectez le principe DRY
-
- Votre code est commentéVotre code est commenté
-
- Votre code est hVotre code est hébergé sur GitHubébergé sur GitHub
-
- Vous avez fait usage d’un logiciel de versionningVous avez fait usage d’un logiciel de versionning
-
- Votre site est hébergé via une GHVotre site est hébergé via une GH--pagepage
-
- Le repository contient un readme, une description et des tagsLe repository contient un readme, une description et des tags
-
- Vous utilisez un outil de gestion de projet de type KANBAN. Idéalement pour Vous utilisez un outil de gestion de projet de type KANBAN. Idéalement pour chaque tâche vouschaque tâche vous
estimez le temps et la priorité et vous vous mettez dans la peau de l’utilisateur.
estimez le temps et la priorité et vous vous mettez dans la peau de l’utilisateur.
Le rendu se fera via github. Vous devrez déposer un fichier à votre nom sur TEAMS avant
Le rendu se fera via github. Vous devrez déposer un fichier à votre nom sur TEAMS avant dimanche soir minuit.dimanche soir minuit.