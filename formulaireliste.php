<html>
	 

		
        <head>
	
		<link rel="stylesheet" type="text/css" href="style.css" />
			<title>FORMULAIRE DE LISTE DE FOURNITURES</title>
			
        </head>

        <body align='center'>
		<div align='center'>
		
		<div align='center' id="theader">
		
		</div>
		
		<div align='center' id="tall">
		
		<div align='center' id='ttitre'>
						<h1>Listes de fournitures :</h1>
						<h2>Daniel PICHOT   -   Professeur</h2>
					</div>
		
		<div align='center' id="menugauche">
			<div  align='center' id="lienmenu">
				</br><a href="professeur.php">Mes Listes</a></br></br>
			</div>
			<div  align='center' id="lienmenu">
				</br><a href="accueil.php">Déconnexion</a></br></br>
			</div>
	
		
		</div>
	
		<div align='center'  id='tcontenupage'>
			<div align='center'  id='tcontenu'>
		
        
						
			
					</br>
					<table>
						<tr>
						<td  align = 'center'>
						<b>Libéllé: </b>
						</td>
						 <td colspan="2"  align = 'center'>
						<b>Quantité: </b>
						 </td>
						  <td colspan="2"  align = 'center'>
						<b>Supprimer: </b>
						 </td>
						  </tr>
						  	<tr>
						<td  align = 'center'>
						 cahier 24 x 32 grands carreaux, sans spirale, 140 pages  
						</td>
						 <td colspan="2"  align = 'center'>
						 1 
						 </td>
						  <td colspan="2"  align = 'center'>
						<a href="#"><img src='croix_rouge.png'> </a> 
						 </td>
						  </tr>
						  	<tr>
						<td  align = 'center'>
					   intercalaires  
						</td>
						 <td colspan="2"  align = 'center'>
						6 
						 </td>
						 		  <td colspan="2"  align = 'center'>
						 <a href="#"><img src='croix_rouge.png'> </a>
						 </td>
						  </tr>
						  	<tr>
						<td  align = 'center'>
						instruments de géométrie
						</td>
						 <td colspan="2"  align = 'center'>
						1 
						 </td>
						 		  <td colspan="2"  align = 'center'>
						 <a href="#"><img src='croix_rouge.png'> </a>
						 </td>
						</tr>
						<tr>
							<td colspan="4"  align = 'center'>
							<a href="">Valider la liste</a> 
							</td>
						</tr>
						<tr>
							<td align = 'center'>
							Classe :
								<select id="ListeElement" >
							   <option value="valeur1">3ème 4</option>
							   <option value="valeur2">6ème 6</option>
							   <option value="valeur3">6ème 5</option>
							</select>
							</td>
							<td colspan="3"  align = 'center'>
							Matière : 
								<select id="ListeElement" >
							   <option value="valeur1">Mathématique</option>
							   <option value="valeur2">Mathématique - option</option>
							</select> 
							</td>
						</tr>
						
								 	</table>
										</br>
				</br>
									
					<table>
						<FORM action="#" method="POST">
							<tr>
							<td>
								<h2>Ajouter un élément:</h2>
							</td>
							<td>
								Libelle:
								<select id="ListeElement" >
								   <option value="valeur1">cahier 24 x 32   </option>
								   <option value="valeur2"> intercalaires  </option>
								   <option value="valeur3">	instruments de géométrie</option>
								</select>
							</td>
							<td>
								 Quantite: <input type='text' name='di' />
							</td>
							
							<td>
								Commentaire: <input type='text' name='di' />
							</td>
							<td>
								<input type='submit' name='valid' value='Ajouter' />
							</td>
							</tr>
			
						</FORM>
					</table>
						
			
						</div>
				</div>
			</div>
				</div>
	
        <body>
</html>