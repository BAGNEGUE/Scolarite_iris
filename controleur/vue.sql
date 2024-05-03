create or replace view vstat_consult(nomv,prenomv,ca,nbc,moyPrix)
as select nomv,prenomv,sum(prixc),count(numc),avg(prixc)
from veterinaire v left join consultation c where on v.num=c.numv
group by v.numv ;

Formater une date facilement 
avec les fonctions que nous venons de voir , vous etes maintenant 