SELECT salles.nom, etages.nom
FROM salles, etages 
WHERE salles.id_etage=etages.id;