<? php
if ( isset ( $ _POST [ 'mailform' ]))
{
	if (! vide ( $ _POST [ 'nom' ]) ET! vide ( $ _POST [ 'mail' ]) ET! vide ( $ _POST [ 'message' ]))
	{
		$ header = "Version MIME: 1.0 \ r \ n" ;
		$ header . = 'De: "PrimFX.com" <support@primfx.com>' . "\ n" ;
		$ header . = 'Content-Type: text / html; charset = "uft-8" ' . "\ n" ;
		$ header . = 'Content-Transfer-Encoding: 8bit' ;

		$ message = '
		<html>
			<body>
				<div align = "center">
					<img src = "http://www.primfx.com/mailing/banniere.png" />
					<br />
					<u> Nom de l \ 'expéditeur: </u>' . $ _POST [ 'nom' ]. '<br />
					<u> Mail de l \ 'expéditeur: </u>' . $ _POST [ 'courrier' ]. '<br />
					<br />
					» . nl2br ( $ _POST [ 'message' ]). '
					<br />
					<img src = "http://www.primfx.com/mailing/separation.png" />
				</div>
			</body>
		</html>
		' ;

		mail ( "primfxtuto@gmail.com" , "CONTACT - Monsite.com" , $ message , $ en- tête );
		$ msg = "Votre message a bien été envoyé!" ;
	}
	autre
	{
		$ msg = "Tous les champs doivent être complétés!" ;
	}
}
?>
< html >
	< tête >
		< meta  charset = " utf-8 " />
	</ tête >
	< corps >
		< h2 > Formulaire de contact! </ h2 >
		< form  method = " POST " action = "" >
			< input  type = " text " name = " nom " placeholder = " Votre nom " value = " <? php  if ( isset ( $ _POST [ 'nom' ])) { echo  $ _POST [ 'nom' ];} ?> "/> < br /> < br />
			< input  type = " email " name = " mail " placeholder = " Votre email " value = " <? php  if ( isset ( $ _POST [ 'mail' ])) { echo  $ _POST [ 'mail' ];} ?> "/> < br /> < br />
			< textarea  name = " message " placeholder = " Votre message " > <? php  if ( isset ( $ _POST [ 'message' ])) { echo  $ _POST [ 'message' ]; } ?> </ Textarea > < br /> < br />
			< input  type = " submit " value = " Envoyer! " name = " mailform " />
		</ form >
		<? php
		si ( isset ( $ msg ))
		{
			echo  $ msg ;
		}
		?>
	</ corps >
</ html >