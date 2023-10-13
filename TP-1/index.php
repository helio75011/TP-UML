<!-- 
Dans un fichier index.php créer un formulaire contenant une zone de saisie pour le nom, le revenu et un bouton OK pour soumettre
le formulaire
Le but de ce formulaire est de permettre le calcul de l'impôt pour une personne. Le taux de l'impôt est de 15% pour des revenus inférieurs à 15 000 euros et de
20 % pour des revenus supérieurs à 15 000.
Une fois le formulaire envoyé grâce au bouton OK, une phrase s'affiche du style « Mr Durant votre impôt est de 600 euros ».
Le programme doit obligatoirement contenir une classe impot dans un fichier impot.php avec un constructeur, une méthode Affichelmpot() qui retourne une chaîne contenant le message à afficher (« Mr Durant votre impôt est de 600 euros » par exemple) et une méthode Calcullmpôt() qui retourne le montant de l'impôt suivant le revenu.
Les taux de l'impôt (20% et 15%) devront être définis dans des constantes.
La création de l'objet et l'appel des méthodes doivent être réalisés dans un fichier resultatlmpot.php. -->

<!-- 
# :notebook_with_decorative_cover: Project CRM

## :file_folder: Project
You have to create a mini CRM with the language of your choice and test it with unit testing and integration testing.

## Back
- :heavy_check_mark: Persistence data (database SQL or noSQL)
- :heavy_check_mark: Entity Contact CRUD (firstname (required), lastname (required), email (required), phone number (not required))

### :red_circle: Obligations
- :heavy_check_mark: Git Flow or Github flow
- :heavy_check_mark: nodeJS 
-->

<!DOCTYPE html>
<html>
<head>
    <title>Calcul Impôt</title>
</head>
<body>

<form action="resultatImpot.php" method="post">
    Nom: <input type="text" name="nom" required><br>
    Revenu: <input type="number" name="revenu" required><br>
    <input type="submit" value="OK">
</form>

</body>
</html>
