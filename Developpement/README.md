# nextech
Metadata : <information qui se rapporte au contenu>
Exemple: donnée paire de chaussure -> Metadata = pointure, couleur, etc.
Balises de Métadonnées: (voir fichier du prof)
Projet 1 -
Une partie front et une partie back
PHP Maria DB et Git: Trouver une idée de projet.

Projet 2 - Après Noël
Java EE casi natif 
Sql (communiquer avec la BDD)
Framework Springboot (comment spring fait gagner en efficacité et en rapidité pour accélérer le dev)
Gérer les exceptions
MDP
Architecture client/serveur

angular
type script
spring boot

Voir quel est l'utilisateur GIT:
- git config --list
Changer l'utilisateur:
- git config --global user.email "jessica.jouvencel@formation-technologique.fr"
Vérifier:
- git config --list
Ok pour push avec le bon compte GIT

Devoirs:
styliser formulaire

.btn-outline-primary {
    --bs-btn-color: #0d6efd;
    --bs-btn-border-color: #0d6efd;
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #0d6efd;
    --bs-btn-hover-border-color: #0d6efd;
    --bs-btn-focus-shadow-rgb: 13,110,253;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #0d6efd;
    --bs-btn-active-border-color: #0d6efd;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #0d6efd;
    --bs-btn-disabled-bg: transparent;
    --bs-btn-disabled-border-color: #0d6efd;
    --bs-gradient: none;
}

<style>.btn-success{background-color:#99CC5B !important;}</style>

PHP:

>Pour cette erreur:
System has not been booted with systemd as init system (PID 1). Can't operate.
Failed to connect to bus: Host is down

>Run:
php -S localhost:8000

>Redémarrer le serveur Apache:
sudo service apache2 restart

ex 1:
 A <- 1 : La variable A est affectée avec la valeur 1.
    B <- A + 3 = 4.
    A <- 3 : La variable A est ensuite réaffectée avec la valeur 3, remplaçant la valeur précédente.
    À la fin de l'exécution, A a la valeur 3, et B a la valeur 4   

