/*La liste des produits (code, nom, échelle et quantité) qui ont une échelle soit de 1:10, soit de 1:18 triés par quantité en stock décroissante*/


SELECT `productCode`,`productName`,`productScale`,`quantityInStock`
FROM `products`
WHERE `productScale` = '1:10' OR `productScale` = '1:18'
ORDER BY `quantityInStock` DESC

/*La liste des produits (nom, vendeur et prix de vente) qui sont vendus au moins 132$ triés par nom du produit*/

SELECT `productName`,`productVendor`,`buyPrice`
FROM `products`
WHERE `MSRP` >= 132 ORDER BY `quantityInStock` DESC

/*La liste des produits (code, nom et prix d'achat) des produits achetés au moins 60$ au plus 90$ triés par prix d'achat*/

SELECT `productCode`,`productVendor`,`buyPrice`
FROM `products`
WHERE `buyPrice` BETWEEN 60 AND 90
ORDER BY `buyPrice`

/*La liste des motos (nom, vendeur, quantité et marge) triés par marge décroissante*/

SELECT `productName`,`productVendor`,`quantityInStock`,`MSRP` - `buyPrice` AS MARGIN
FROM `products`
WHERE `productLine` = 'Motorcycles'
ORDER BY MARGIN DESC

/*La liste des commandes (numéro, date de commande, date d'expédition, écart en jours entre les deux dates et statut) qui sont en cours de traitement ou qui ont été expédiées et ont un écart de plus de 10j triés par écart décroissant puis par date de commande<*/

SELECT `orderNumber`,`orderDate`,`shippedDate`, `status`, (`shippedDate` - `orderDate`) AS RETARD
FROM `orders`
WHERE `shippedDate` - `orderDate` > 10 AND `status` IN ('In Process','Shipped')
ORDER BY RETARD DESC, `orderDate`

/*La liste des produits (nom et valeur du stock à la vente) des années 1960*/

SELECT `productName`,(`quantityInStock`*`MSRP`) AS STOCKRETAILPRICE, SUBSTR(`productName`, 1, 4) AS YEAR
FROM `products`
WHERE `productName` LIKE "196%"
ORDER BY YEAR ASC

/*Ex10 Le prix moyen d'un produit vendu par chaque vendeur triés par prix moyen décroissant*/

SELECT AVG(`MSRP`) AS averagePrice, `productVendor`
FROM `products`
GROUP BY`productVendor`
ORDER BY averagePrice DESC

/* Ex11 Le nombre de produits pour chaque catégorie ("productLine") de produit*/
SELECT `productLine`, COUNT(`productLine`)
FROM `products`
GROUP BY `productLine`

/*Ex12 Le total du stock et le total de la valeur du stock à la vente de chaque ligne de produit pour les produits vendus plus de 100$ trié par total de la valeur du stock à la vente*/

SELECT `productLine`, SUM(`quantityInStock`) AS totalStock, SUM(`quantityInStock`*`MSRP`) AS totalRetailStockPrice
FROM `products`
WHERE `MSRP` > 100
GROUP BY `productLine`
ORDER BY totalRetailStockPrice

/*Ex13 La quantité du produit le plus en stock de chaque vendeur trié par vendeur (fonction MAX())*/

SELECT `productVendor`, MAX(`quantityInStock`) AS maxQuantity
FROM `products`
GROUP BY `productVendor`

/*Ex14 Le prix de l'avion qui coûte le moins cher à l'achat (fonction MIN())*/

SELECT `productLine`, MIN(`buyPrice`)
FROM `products`
WHERE `productLine` = 'Planes'

/*Ex15 Le crédit des clients qui ont payé plus de 20000$ durant l'année 2004 trié par crédit décroissant*/

SELECT `customerNumber`, ROUND(SUM(`amount`)) as totalCredit
FROM `payments`
WHERE  `paymentDate` BETWEEN "2004-01-01" AND "2004-12-31"
GROUP BY `customerNumber`
HAVING totalCredit > 20000
ORDER BY totalCredit DESC

/*EX16 La liste des employés (nom, prénom et fonction) et des bureaux (adresse et ville) dans lequel ils travaillent*/
SELECT `lastName`,`firstName`,`jobTitle`, `city`, `addressLine1`
FROM `employees`
LEFT JOIN `offices`
ON `employees`.`officeCode`= `offices`.`officeCode`

/*La liste des clients français ou américains (nom du client, nom, prénom du contact et pays) et de leur commercial dédié (nom et prénom) triés par nom et prénom du contact*/

SELECT `customerName`,`contactLastName`,`contactFirstName`,`country`,`lastName`,`firstName`
FROM `customers`
LEFT JOIN `employees`
ON `customers`.`salesRepEmployeeNumber`=`employees`.`employeeNumber`
WHERE `country`IN ('France', 'USA')
ORDER BY `contactLastName`, `contactFirstName`

/*La liste des lignes de commande (numéro de commande, code, nom et ligne de produit) et la remise appliquée aux voitures ou motos commandées triées par numéro de commande puis par remise décroissante*/

SELECT `orderNumber`,`products`.`productCode`,`orderdetails`.`productCode`,`productName`,`productline`, (`priceEach` - `buyPrice`) AS REMISE
FROM `orderdetails`
INNER JOIN `products`
ON `orderdetails`.`productCode`=`products`.`productCode`


La liste des lignes de commande (numéro de commande, code, nom et ligne de produit) et la remise appliquée aux voitures ou motos commandées triées par numéro de commande puis par remise décroissante
Le total des paiements effectués de chaque client (numéro, nom et pays) américain, allemand ou français de plus de 50000$ trié par pays puis par total des paiements décroissant
Le montant total de chaque commande (numéro et date) des clients New-Yorkais (nom) trié par nom du client puis par date de commande
