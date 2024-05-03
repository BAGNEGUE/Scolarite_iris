sum(montant) Total_mois
from vente 
group by client with rollup;

select ifnull(v.nomv,'total_annee') VETERINAIRE,
sum(if(year(datec)='1998',prixc,0)) as '1998',
sum(if(year(datec)='1999',prixc,0)) as '1999',
sum(if(year(datec)='2000',prixc,0)) as '2000',
sum(if(year(datec)='2001',prixc,0)) as '2001',
sum(if(year(datec)='2002',prixc,0)) as '2002',
sum(prixc) total_ca_veterinaire 
from veterinaire v ,consultation c
where v.numv=c.numv
group by v.numv with rollup;

/*TRIGGERS DE MISE AJOUR*/

drop trigger if exists isert_Animal ;
Delimiter //
create trigger Insert_Animal
	After insert on Animal for each row 
	begin 
	update Race set nbe=nbe+1
		where NUMR=New.NUMR,
		End ;
		
