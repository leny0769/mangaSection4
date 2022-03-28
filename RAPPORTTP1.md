**GODEST Julien et DUMAS Antoine  :**



# Rapport TP1 : Design Pattern Stratégie

## Exercice 2

3 fonctions ajouté dans calculette :

	void soustraction(float c1, float c2){
	    float res = c1 - c2;
	    System.out.println("Résultat soustration : " + res);
    }

    void multiplication(float c1, float c2){
        float res = c1 * c2;
        System.out.println("Résultat Multiplication : " + res);
    }

    void division(float c1, float c2){
        float res = c1 / c2;
        System.out.println("Résultat division : " + res);
    }

Code rajouté dans Main afin d'appeler les fonctions de calculettes:

		Calculette calculette = new Calculette();
		switch (c) {
			case "/" -> calculette.division(c1, c2);
			case "-" -> calculette.soustraction(c1, c2);
			case "*" -> calculette.multiplication(c1, c2);
		}

![exo-02](img/Exo2UML.png)

La solution est très simpliste, le problème lors de l'ajout d'une nouvelle opération sera qu'il faudra modifier le fichier Calculette ET également le fichier Main.
On aura pu également de façon simple créer une seule méthode dans Calculette qui gère tout, le problème se posera toujours car la classe Calculette contiendra beaucoup de lignes si on ajoute plus tard des opérations.

## Exercice 3


![exo-03](img/Exo3UML.png)
Création d'une classe Calculette qui possède un type de stratégie CalculetteStrat selon le type d'opération choisi par l"utilisateur

Main.java 

        Calculette calculette = new Calculette();

		switch (c) {
			case "/" -> calculette.setStrat(new StratDivision());
			case "-" -> calculette.setStrat(new StratSoustraction());
			case "*" -> calculette.setStrat(new StratMultiplication());
		}

		calculette.calculetteStrat.calculer(c1,c2);

###
Exemple de stratégie d'opération (Multiplication)

    public class StratMultiplication implements CalculetteStrat
        {
        public void calculer(float c1, float c2) {
        float res = c1 * c2;
        System.out.println("Résultat multiplication : " + res);
        }
    }


Design pattern strategie pas excellent car on a toujours dans le main un switch.
Pour améliorer, il faudrait faire un design pattern d'état. Pour enlever le switch du main côté et faire un truc automatique

## Questions

>Quelles sont les différences entre le patron de conception Etat et le patron Stratégie ?

Le patron de conception Stratégie permet à un utilisateur externe (client) de modifier le fonctionnement tandis que le patron de conception Etat rends le changement de mode invisible pour l'utilisateur et est decidé selon l'état interne et les setters sont donc privés.


###

>Quel(s) principe(s) SOLID est (sont) respecté par le design pattern Strategy ?

Le design pattern Strategy respecte tous les principes SOLID
S
O
L
I
D


