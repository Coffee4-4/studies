select m.mediconome
from medico m inner join consulta c on m.medicoid=c.medicoid 
where C.CONSULTADATA ='2020-10-18'




SELECT MED.MEDICONOME, CON.CONSULTADATA from MEDICO MED INNER JOIN CONSULTA CON 
on MED.MEDICOID = CON.MEDICOID and CON.CONSULTADATA = DATA