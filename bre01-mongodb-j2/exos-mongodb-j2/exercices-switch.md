# Exercice switch

Ajoutez la propriété label pour les documents ayant la propriété tags uniquement. Label prendra les valeurs suivantes selon le nombre de tags :

- si le nombre de tags est strictement supérieur à 1 : A
- si le nombre de tags est strictement supérieur à 3 : AA
- Et B sinon.

Pour vérifier une taille dans un switch : 

```js
{ $size :  "$tags" }
```