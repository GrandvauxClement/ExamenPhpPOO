1) Ecrire une interface qui obligera une classe à implémenter la fonction login prenant en paramètre un user et un password (0.5 point) 
        
        interface examInterface
    {
        public function login($user, $password);
    }
    class Exam implements examInterface
    {
    public fucntion login($user, $password){
        ......
        }
    }

2) Citez 6 méthodes magiques. Expliquez à quelle moment elles sont déclenchées et les paramètres qu’elles prennent. (1.5 points) 

    __construct() : Elle est déclenché lors de la création d'un nouvel objet, avec le mot clé "new". Elle prend en paramètre les valeurs des variables, qu'on aura précisé au préalable nécessaire à la création de notre Objet.

    __destruct() :  Elle est déclenché soit à la fin du script automatiquement soit quand on l'appelle directement. Elle ne prend aucun paramètre.

    __get($name) : Elle est déclenché automatiquement lorsqu'on veut accèder à une variable qui n'existe pas ou qui est privé. Elle prend en paramètre le nom de la variable dont on veut accèder.

    __set($name, $value) :   Elle est déclenché automatiquement lorsqu'on veut modifier/affecter la valeur d'une variable qui n'existe pas ou qui est privé. Elle prend en paramètre le nom de la variable et la valeur qu'on veut lui affecter .

    __isset($name) : Elle est déclanché automatiquement lorsque la fonction isset() est utilisé. Elle prend en paramètre le nom de la variable dont on veut vérifier l'existence.

    __unset($name): Elle est déclanché automatiquement lorsque la fonction unset() est utilisé. Elle prend en paramètre le nom de la variable qu'on veut supprimer.

3) Je suis une méthode magique appelé implicitement à la fin d’un script. Qui suis-je ? (1 point) 
    Je suis le destructeur : __destruct()

4)  Je suis une classe qui pourra être hérité mais qui ne pourra pas être instancier (impossible de faire new ...). Qui suis-je et comment faire pour me créer ? (1 point) 

    Je suis une class abstraite. On me créer grace au mot clé "abstract" lors de notre création de class. Ex: abstract class Exam {}

5) Donnez 3 types de visibilité sur un attribut expliquez la différence. (1.5 points) 

    - private : l'attribut sera accessible qu'au sein de sa classe.
    - protected: l'attribut sera accessible qu'au sein de sa classe ainsi qu'au sein de ses enfants.
    -public: l'attribut sera accessible partout.

6) Expliquez ce qu’est une exception. Décrire les éléments qui la compose (1 point)  

    Les exceptions sont une façon différente de gérer les erreurs. Celles-ci sont en fait des erreurs lancées par PHP lorsque quelque chose qui ne va pas est survenu.
    Exemple d'exception: try{
        //mon test
    }
    catch (Mon exception $e) {
        echo($e)
    }
    Le "try" permet de réaliser mon test et si jamais celui ci échous pour x raison, je passe dans mon catch et mon $e me renverra l'erreur rencontré. Mon exception peut prendre des attributs comme ->getMessage() ou ->getCode qui permettent de préciser les données d'erreur que l'on veut récupérer. Si aucune est preciser (comme dans l'exemple) elle sauront toutes présente .

 7) Dans un modèle MVC quel est le rôle du router. Quelle est la variable super globale qu’il utilise pour accomplir son rôle ? (1 point) 

    Le rôle du router et d'afficher les pages correspondante aux variables qu'il va rencontré dans l'URL. Il utilise la variable super globale $__GET[] pour réaliser son role.

8) Expliquez les avantages de l’utilisation d’un pattern MVC. (1.5 points)

    Son utilisation permet de rendre son code bien organisé/structurer, on s'y retrouve beaucoup plus facilement. De plus il permet à ce qu'un autre développeur reprenne votre projet si retrouve facilement et rapidement. 

9) Détaillez les éléments qui composent un pattern MVC (1 point) 

    -index.php: qui fait office de router
    -un dossier view: qui contiendra tous les fichiers réalisant l'affichage.
    - un dossier Model: qui contiendra 2 sous dossier :
            -un dossier Class: contiendra les classes nécessaire à la création d'objet correspont à nos tables de notre BDD
            -un dossier Manager: contiendra les fichiers qui réalisent les requetes SQL nécessaire à la réalisation de nos fonctionnalité .
    - un dossier Controler : qui contiendra les fichiers traitant les données récupérer au préalable. 
