# Exercices update et delete

## Exercice 1

Augmentez de 50% la quantité de chaque document qui a un status C ou D.
<!-- Reponse Eddy: db.inventory.updateMany({$or:[{status: "C"},{ status:"D"}]},{ $mul: { qty: 1.5 } }); -->

## Exercice 2

Augmentez maintenant de 150% les documents ayant un status A ou B et au moins 2 tags.
<!-- Reponse Formateur: db.inventory.updateMany( { status: { $in: ['A', 'B'] }, "tags.1": { $exists: true /* je ne vérifie pas la taille je vérifie si la deuxième case existe*/ } }, { $mul: { qty: 2.5 } }); -->


## Exercice 3

1. Ajoutez un champ scores de type array avec le score 19 pour les entreprises ayant une qty supérieure ou égale à 75.
<!-- Reponse Eddy: db.inventory.updateMany({qty:  {$gte: 75}}, {$addToSet:{score:19}}) //ATTENTION $addToSet par defaut considère qu'il fait un ajout dans un tableau, donc pas de crochet pour ajouter un tableau. En utilisant $set il parcontre mettre les crochets -->

2. Puis mettre à jour les entreprises ayant au moins une lettre a ou A dans leurs noms de société et ajouter leur un score 11 (champ scores).
<!-- Reponse Formateur: db.inventory.updateMany( { society: /[aA]/ }, { $addToSet: { scores: 11 } }); -->


3. Affichez les docs qui ont un score de 11
<!-- Reponse Formateur: db.inventory.find({ $or: [ { "scores.0": 11 }, { "scores.1": 11 }] }); -->

4. Ajoutez une clé comment pour les sociétés Alex et ajouter un commentaire : "Hello Alex".
<!-- Reponse Formateur: db.inventory.updateMany( { society: "Alex" }, { $set: { comment: "Hello Alex" } }); -->

5. Affichez maintenant tous les docs qui n'ont pas la clé comment.
<!-- Reponse Formateur: db.inventory.find({ comment: { $exists: false } }); -->

## Exercice 4

Supprimez la propriété level se trouvant dans un/les document(s). Vérifiez qu'il existe au moins un doc qui possède le champ ou la clé level à l'aide d'une requête avant cette action.

Vérifiez que le champ level n'existe plus après suppression.
<!-- Reponse Formateur: db.inventory.find({ level : { $exists : true } }).count(); -->
<!-- Reponse Formateur:  db.inventory.updateOne( { level: { $exists: true } }, { $unset: { level: "" } } /* supprime les champs entre les accolades*/); -->
<!-- Reponse Formateur: db.inventory.find({ level : { $exists : true } }).count(); -->
