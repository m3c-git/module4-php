# Exercice switch

Ajoutez la propriété label pour les documents ayant la propriété tags uniquement. Label prendra les valeurs suivantes selon le nombre de tags :

- si le nombre de tags est strictement supérieur à 1 : A
- si le nombre de tags est strictement supérieur à 3 : AA
- Et B sinon.

Pour vérifier une taille dans un switch : 

```js
{ $size :  "$tags" }
```
<!-- Reponse Eddy: db.inventory.find({ tags : { $exists : true } }).count() -->
<!-- Reponse Eddy: db.inventory.updateMany(
    // pour tous les documents qui ont un type
    { tags: { $exists : true } },
    {
        $set : {
            label : {
                $switch: {
                    branches : [
                        // en fonction de la valeur du champ type, on génère une nouvelle valeur
                        { case: {"tags.1" : {$exists : true}}, then: 'A' },
                        { case: {"tags.3" : {$exists : true}}, then: 'AA' },
                    ],
                    default: 'B'
                }
            }
        }
    }
); -->
<!-- Reponse Eddy: -->
 