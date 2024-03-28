SELECT c.id_category, c.id_parent, c.active, cl.name, cl.description, cs.position 
FROM ps_category c 
LEFT JOIN ps_category_lang cl 
ON c.id_category = cl.id_category 
AND cl.id_lang = 1 
AND cl.id_shop = c.id_shop_default 
LEFT JOIN ps_category_shop cs 
ON c.id_category = cs.id_category 
AND cs.id_shop = 1 
LEFT JOIN ps_category_product cp 
ON c.id_category = cp.id_category 
GROUP BY c.id_category 
ORDER BY c.id_category