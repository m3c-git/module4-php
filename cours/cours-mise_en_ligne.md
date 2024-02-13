# Mise en ligne d'un site (FileZilla et hébergement)

## Plan du cours

### Hébergement web

### Nom de domaine

### Comment ça marche ensemble ?

### Pas si vite ! Et FileZilla ?

---

# Hébergement web

Héberger un site web veut dire stocker ses fichiers sur un serveur distant afin qu'il soit accessible sur internet. Voici quelques types d'hébergement :
1. **Hébergement partagé** : plusieurs sites sont stockés sur le même serveur. Moins cher mais partage de ressources (CPU, RAM) avec d'autres.
2. **VPS (Virtual Private Server)** : un serveur virtuel qui offre plus de contrôle et de ressources. Un entre-deux en termes de coût et de performance.
3. **Serveur dédié** : Serveur rien que pour notre site. Le plus cher et le plus puissant.
4. **Cloud Hosting** : Notre site est stocké sur plusieurs serveurs. Ce qui permet de scaler facilement en fonction des besoins.


# Nom de domaine

Le nom de domaine c'est l'adresse web que l'on utilise pour accéder à un site. `www.elearning.3wa.fr` par exemple. Quelques points à savoir :

1. **TLD (Top-Level Domain)** : c'est l'extension du domaine, comme `.com`, `.org`, `.fr`.
2. **Registrar** : c'est l'entreprise où l'on achète et gère les noms de domaine. Le premier registrar mondial est GoDaddy.
3. **DNS (Domain Name System)** : système qui fait la correspondance entre le nom de domaine et l'adresse ip du serveur où est stocké notre site.

# Comment ça marche ensemble ?

1. Achat d'un nom de domaine chez un registrar.
2. Choix d'un plan d'hébergement (Hostinger propose un hébergement gratuit mais limité par exemple).
3. Lien entre le nom de domaine et l'espace d'hébegerment en utilisant les DNS.
4. You're live ! Notre site est en ligne !


# Pas si vite ! Et FileZilla ?

FileZilla est un client FTP (File Transfer Protocol) très populaire. C'est un outil open-source qui permet de transférer des fichiers entre notre ordinateur et un serveur sur internet. Son interface (la même depuis 2007 !) est très simple, on voit d'un côté les fichiers sur notre ordinateur, et de l'autre, les fichiers sur le serveur.

Pour télécharger et intaller FileZilla, c'est là : https://filezilla-project.org/

## Étape 1 - Se connecter au serveur :
1. `Fichier` > `Gestionnaire de sites`
2. Cliquer sur `Nouveau Site` et entrer les informations données par l'hébergeur (hôte, port, etc).
3. Choisir le type d'authentification (souvent 'Normale') et mettre nom d'utilisateur et mot de passe.
4. `Connecter`.  
## Étape 2 - Transférer les fichiers :
1. Une fois la connexion effectuée, 2 sections principales apparaissent. Sur la gauche, notre ordinateur. Sur la droite, le serveur.
2. Naviguer dans les dossiers de l'ordinateur jusqu'à trouver les fichiers de notre site.
3. Sur le serveur, ouvrir le répertoire souvent nommé `public_html`.
4. Glisser et déposer les fichiers de la gauche vers la droite.
5. Ouvrir le navigateur et entrer l'adresse de notre site. We're live ! Pour de bon cette fois !
>**Conseils**
> 
> - Toujours garder une copie de notre site sur l'ordinateur.
> - Utiliser SFTP si possible pour plus de sécurité.