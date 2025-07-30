SELECT etages.nom ,salles.nom AS "Biggest Room", salles.capacite
FROM  etages ,salles
WHERE salles.capacite=(SELECT MAX(capacite) FROM salles ) AND etages.id=salles.id_etage;