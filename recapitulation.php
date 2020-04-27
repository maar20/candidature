<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Exercice 8</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <Link href="style.css" rel="stylesheet" style="txt/css"> 
    </head>
    <body>
		<h1>Votre candidature</h1>
					
		<table>
			<tr>
				<td>Civilité</td>
				<td><?php echo $_GET["civilité"]. " "; ?></td> 
			</tr>
			
			<tr>
				<td>Nom</td>
				<td><?php echo $_GET["Nom"]. " "; ?></td>
			</tr>
			
			
			<tr>
				<td>Prénom</td>
				<td><?php echo $_GET["Prenom"]; ?> </td>
			</tr>
				
	
			<tr>
				<td>Date de naissance</td>
				<td><?php echo $_GET["DateNaissance"]; ?></td>
			</tr>
			
			<tr>
				<td>Téléphone</td>
				<td><?php echo $_GET["NumTel"]; ?></td>
			</tr>
			
			
			<tr>
				<td>Adresse électroique</td>
				<td><?php echo $_GET["email"]; ?></td>
			</tr>
			
			
			<tr>
				<td>Niveau en PHP</td>
				<td><?php echo $_GET["niveau"]; ?></td>
			</tr>
		
			<tr>
				<td>Frameworks PHP</td>
				<td><?php foreach( $_GET["frameworks"] as $framework ){
					echo $framework ."<br/> "; } ?></td>
			</tr>
			
			
			<tr>
				<td>Moi</td>
				<td><?php echo $_GET["zonetxt"]; ?></td>
			</tr>
		</table>
	
	</body>

</html>
		
		
		

