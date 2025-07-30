SELECT etages.nom ,salles.nom AS "Biggest Room", salles.capacite
FROM  etages ,salles
WHERE salles.capacite=(SELECT MAX(capacite) FROM salle ) AND etages.id=salle.id_etage;