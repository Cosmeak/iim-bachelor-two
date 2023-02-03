
-- Part 1
-- a.
SELECT contract.name, COUNT(asset.id) AS nb_contract FROM asset 
INNER JOIN contract ON asset.contract_id = contract.id 
GROUP BY contract.id;

-- b.
SELECT AVG(total_volume) AS Moy_total_volume FROM statistics_general;

-- c.
SELECT asset.name, order.price FROM `order` 
INNER JOIN asset ON order.asset_id = asset.id 
ORDER BY order.price DESC LIMIT 1;

-- d.
SELECT name, MAX(LENGTH(name)) AS taille FROM contract 
GROUP BY id 
ORDER BY taille ASC LIMIT 1;

-- e.
SELECT contract.name, COUNT(attribute_category.id) AS nb_contract FROM attribute_category 
INNER JOIN contract ON attribute_category.contract_id = contract.id 
GROUP BY contract.id;

-- f.
SELECT contract.name, COUNT(attribute_category.id) AS nb_contract FROM attribute_category 
INNER JOIN contract ON attribute_category.contract_id = contract.id 
GROUP BY contract.id 
ORDER BY nb_contract DESC LIMIT 1;

-- Part 2
-- a.
SELECT name FROM asset 
WHERE rank < 10 ORDER BY rank ASC;

-- b.
SELECT contract.name, attribute.value, MAX(`attribute`.score) AS max_score FROM `attribute` 
JOIN attribute_category ON `attribute`.attribute_category_id = attribute_category.id 
JOIN contract ON attribute_category.contract_id = contract.id
GROUP BY contract.id;

-- c.
SELECT AVG(asset.score) FROM asset 
INNER JOIN contract ON asset.contract_id = contract.id 
WHERE contract.name LIKE 'Last Dragons';

-- d.
SELECT contract.name, asset.name, MIN(`order`.`date`) AS older_date FROM `order` 
INNER JOIN asset ON `order`.asset_id = asset.id 
INNER JOIN contract ON asset.contract_id = contract.id 
WHERE contract.`name` LIKE 'IMX Apes' 
GROUP BY asset.id;

-- e.
SELECT `attribute`.value FROM attribute_asset
INNER JOIN asset ON attribute_asset.asset_id = asset.id
INNER JOIN `attribute` ON attribute_asset.attribute_id = `attribute`.id
WHERE asset.name LIKE 'IMXToadz #316';

-- f.
SELECT `attribute`.value, attribute_category.name FROM attribute_asset
INNER JOIN asset ON attribute_asset.asset_id = asset.id
INNER JOIN `attribute` ON attribute_asset.attribute_id = `attribute`.id
INNER JOIN attribute_category ON `attribute`.attribute_category_id = attribute_category.id
WHERE asset.name LIKE 'Utopian Unicorn #934';

-- Part 3
-- a.
SELECT asset.name, contract.name, COUNT(`order`.id) AS sells, AVG(`order`.price) AS Moy_sell FROM `order`
INNER JOIN asset ON `order`.asset_id = asset.id
INNER JOIN contract ON asset.contract_id = contract.id
GROUP BY asset.id
ORDER BY sells DESC
LIMIT 1;

-- b.
-- Si attribute unrevealed comprit :
SELECT contract.name AS contract_name, attribute.value AS attribute_name, COUNT(attribute.id) AS nb_use
FROM attribute_asset
INNER JOIN attribute ON attribute_asset.attribute_id = attribute.id
INNER JOIN attribute_category ON attribute.attribute_category_id = attribute_category.id
INNER JOIN contract ON attribute_category.contract_id = contract.id
WHERE contract.name LIKE "Utopian Unicorns"
GROUP BY attribute.id 
ORDER BY nb_use DESC 
LIMIT 1;

-- Si attribute unrevealed non comprit :
SELECT contract.name AS contract_name, attribute.value AS attribute_name, COUNT(attribute.id) AS nb_use
FROM attribute_asset
INNER JOIN attribute ON attribute_asset.attribute_id = attribute.id
INNER JOIN attribute_category ON attribute.attribute_category_id = attribute_category.id
INNER JOIN contract ON attribute_category.contract_id = contract.id
WHERE contract.name LIKE "Utopian Unicorns" AND attribute.value != "Unrevealed"
GROUP BY attribute.id 
ORDER BY nb_use DESC 
LIMIT 1;
