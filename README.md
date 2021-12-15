# Projet à rendre - SQL

### Partie 1

```SELECT contract.name, COUNT(asset.id) AS nb_contract FROM asset INNER JOIN contract ON asset.contract_id = contract.id GROUP BY contract.id;```

```SELECT AVG(total_volume) AS Moy_total_volume FROM statistics_general;```

```SELECT asset.name, order.price FROM `order` INNER JOIN asset ON order.asset_id = asset.id ORDER BY order.price DESC LIMIT 1;```

```SELECT name, MAX(LENGTH(name)) AS taille FROM contract GROUP BY id ORDER BY taille ASC LIMIT 1;```

```SELECT contract.name, COUNT(attribute_category.id) AS nb_contract FROM attribute_category INNER JOIN contract ON attribute_category.contract_id = contract.id GROUP BY contract.id;```

```SELECT contract.name, COUNT(attribute_category.id) AS nb_contract FROM attribute_category INNER JOIN contract ON attribute_category.contract_id = contract.id GROUP BY contract.id ORDER BY nb_contract DESC LIMIT 1;```

```SELECT contract.name, MAX(asset.score) AS max_score FROM asset JOIN contract ON asset.contract_id = contract.id GROUP BY contract.name;``` --- Pas encore opti

### Partie 2

```SELECT name FROM asset WHERE rank < 10 ORDER BY rank ASC;```

```SELECT contract.name, MAX(`attribute`.score) AS max_score FROM `attribute` 
JOIN attribute_category ON `attribute`.attribute_category_id = attribute_category.id 
JOIN contract ON attribute_category.contract_id = contract.id
GROUP BY contract.name;``` --- Pas encore Opti

```SELECT AVG(asset.score) FROM asset INNER JOIN contract ON asset.contract_id = contract.id WHERE contract.name LIKE 'Last Dragons';```

```SELECT `order`.`date` FROM `order` INNER JOIN asset ON order.asset_id = asset.id INNER JOIN contract ON asset.contract_id = contract.id WHERE contract.name LIKE 'IMX APES';```

```SELECT `attribute`.value FROM attribute_asset
INNER JOIN asset ON attribute_asset.asset_id = asset.id
INNER JOIN `attribute` ON attribute_asset.attribute_id = `attribute`.id
WHERE asset.name LIKE 'IMXToadz #316';```

```SELECT `attribute`.value, attribute_category.name FROM attribute_asset
INNER JOIN asset ON attribute_asset.asset_id = asset.id
INNER JOIN `attribute` ON attribute_asset.attribute_id = `attribute`.id
INNER JOIN attribute_category ON `attribute`.attribute_category_id = attribute_category.id
WHERE asset.name LIKE 'Utopian Unicorn #934';```

### Partie 3

```SELECT asset.name, contract.name, COUNT(`order`.id) AS sells, AVG(`order`.price) AS Moy_sell FROM `order`
INNER JOIN asset ON `order`.asset_id = asset.id
INNER JOIN contract ON asset.contract_id = contract.id
GROUP BY asset.id
ORDER BY sells DESC
LIMIT 1;```

```SELECT `attribute`.`value` AS attribute_name, COUNT(attribute_asset.attribute_id) AS nb_use FROM attribute_asset 
INNER JOIN `attribute` ON attribute_asset.attribute_id = `attribute`.id
WHERE attribute_asset.asset_id <= 131533 AND asset_id >= 24159 
GROUP BY attribute_asset.attribute_id 
ORDER BY nb_use DESC 
LIMIT 1;``` --- Pas encore Opti

J'avoue c'est un peu de la triche le dernier mais j'ai pas trouver de meilleur solution encore
