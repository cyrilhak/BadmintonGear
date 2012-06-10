DELETE FROM badmintongear.categories;
DELETE FROM badmintongear.categories_description;
DELETE FROM badmintongear.products;
DELETE FROM badmintongear.products_attributes_download;
DELETE FROM badmintongear.products_attributes;
DELETE FROM badmintongear.products_description;
DELETE FROM badmintongear.products_images;
DELETE FROM badmintongear.products_notifications;
DELETE FROM badmintongear.products_options;
DELETE FROM badmintongear.products_options_values;
DELETE FROM badmintongear.products_options_values_to_products_options;
DELETE FROM badmintongear.products_to_categories;
DELETE FROM badmintongear.manufacturers;
DELETE FROM badmintongear.manufacturers_info;

INSERT INTO categories VALUES ('1','empty.gif','0',1,now(),null);
INSERT INTO categories_description VALUES ('1','1','Accessoires');
INSERT INTO categories_description VALUES ('1','2','Accessoires');
INSERT INTO categories VALUES ('2',null,'0',2,now(),null);
INSERT INTO categories_description VALUES ('2','1','Bespannen');
INSERT INTO categories_description VALUES ('2','2','Bespannen');
INSERT INTO categories VALUES ('3','empty.gif','0',3,now(),null);
INSERT INTO categories_description VALUES ('3','1','Blesssures');
INSERT INTO categories_description VALUES ('3','2','Blesssures');
INSERT INTO categories VALUES ('4','empty.gif','0',4,now(),null);
INSERT INTO categories_description VALUES ('4','1','Club Artikelen');
INSERT INTO categories_description VALUES ('4','2','Club Artikelen');
INSERT INTO categories VALUES ('5','empty.gif','0',5,now(),null);
INSERT INTO categories_description VALUES ('5','1','Kleding');
INSERT INTO categories_description VALUES ('5','2','Kleding');
INSERT INTO categories VALUES ('6','empty.gif','0',6,now(),null);
INSERT INTO categories_description VALUES ('6','1','Rackets');
INSERT INTO categories_description VALUES ('6','2','Rackets');
INSERT INTO categories VALUES ('7','empty.gif','0',7,now(),null);
INSERT INTO categories_description VALUES ('7','1','Roze en Paars Collectie');
INSERT INTO categories_description VALUES ('7','2','Roze en Paars Collectie');
INSERT INTO categories VALUES ('8','empty.gif','0',8,now(),null);
INSERT INTO categories_description VALUES ('8','1','Sale & Occasions');
INSERT INTO categories_description VALUES ('8','2','Sale & Occasions');
INSERT INTO categories VALUES ('9','empty.gif','0',9,now(),null);
INSERT INTO categories_description VALUES ('9','1','Schoenen');
INSERT INTO categories_description VALUES ('9','2','Schoenen');
INSERT INTO categories VALUES ('10','empty.gif','0',10,now(),null);
INSERT INTO categories_description VALUES ('10','1','Shuttles');
INSERT INTO categories_description VALUES ('10','2','Shuttles');
INSERT INTO categories VALUES ('11','empty.gif','0',11,now(),null);
INSERT INTO categories_description VALUES ('11','1','Snaren');
INSERT INTO categories_description VALUES ('11','2','Snaren');
INSERT INTO categories VALUES ('12','empty.gif','0',12,now(),null);
INSERT INTO categories_description VALUES ('12','1','Sportvoeding');
INSERT INTO categories_description VALUES ('12','2','Sportvoeding');
INSERT INTO categories VALUES ('13','empty.gif','0',13,now(),null);
INSERT INTO categories_description VALUES ('13','1','Tassen');
INSERT INTO categories_description VALUES ('13','2','Tassen');
INSERT INTO categories VALUES ('14','empty.gif','0',14,now(),null);
INSERT INTO categories_description VALUES ('14','1','Teamkleding');
INSERT INTO categories_description VALUES ('14','2','Teamkleding');
INSERT INTO categories VALUES ('15','empty.gif','0',15,now(),null);
INSERT INTO categories_description VALUES ('15','1','Verenigingsmateriaal');
INSERT INTO categories_description VALUES ('15','2','Verenigingsmateriaal');
INSERT INTO categories VALUES ('16','empty.gif','0',16,now(),null);
INSERT INTO categories_description VALUES ('16','1','Golf');
INSERT INTO categories_description VALUES ('16','2','Golf');
INSERT INTO categories VALUES ('17','empty.gif','0',17,now(),null);
INSERT INTO categories_description VALUES ('17','1','Honkbal');
INSERT INTO categories_description VALUES ('17','2','Honkbal');
INSERT INTO categories VALUES ('18','empty.gif','0',18,now(),null);
INSERT INTO categories_description VALUES ('18','1','Squash');
INSERT INTO categories_description VALUES ('18','2','Squash');
INSERT INTO categories VALUES ('19','empty.gif','0',19,now(),null);
INSERT INTO categories_description VALUES ('19','1','Streethockey');
INSERT INTO categories_description VALUES ('19','2','Streethockey');
INSERT INTO categories VALUES ('20','empty.gif','0',20,now(),null);
INSERT INTO categories_description VALUES ('20','1','Tennis');
INSERT INTO categories_description VALUES ('20','2','Tennis');
-- subcategorien
INSERT INTO categories VALUES ('21','empty.gif','1',21,now(),null);
INSERT INTO categories_description VALUES ('21','1','Bidons');
INSERT INTO categories_description VALUES ('21','2','Bidons');
-- subsubcat
INSERT INTO categories VALUES ('22','empty.gif','21',23,now(),null);
INSERT INTO categories_description VALUES ('22','1','Karakal');
INSERT INTO categories_description VALUES ('22','2','Karakal');
INSERT INTO categories VALUES ('23','empty.gif','21',24,now(),null);
INSERT INTO categories_description VALUES ('23','1','Victor');
INSERT INTO categories_description VALUES ('23','2','Victor');
INSERT INTO categories VALUES ('24','empty.gif','21',25,now(),null);
INSERT INTO categories_description VALUES ('24','1','Yonex');
INSERT INTO categories_description VALUES ('24','2','Yonex');

INSERT INTO categories VALUES ('25','empty.gif','14',25,now(),null);
INSERT INTO categories_description VALUES ('25','1','Heren');
INSERT INTO categories_description VALUES ('25','2','Heren');
INSERT INTO categories VALUES ('26','empty.gif','25',25,now(),null);
INSERT INTO categories_description VALUES ('26','1','Yonex');
INSERT INTO categories_description VALUES ('26','2','Yonex');



INSERT INTO manufacturers VALUES (1,'Ashaway','manufacturer_canon.gif', now(), null);
INSERT INTO manufacturers VALUES (2,'Carlton',null, now(), null);
INSERT INTO manufacturers VALUES (3,'FZ Forza',null, now(), null);
INSERT INTO manufacturers VALUES (4,'Karakal',null, now(), null);
INSERT INTO manufacturers VALUES (5,'RSL',null, now(), null);
INSERT INTO manufacturers VALUES (6,'Victor',null, now(), null);
INSERT INTO manufacturers VALUES (7,'Yonex',null, now(), null);

INSERT INTO manufacturers_info VALUES (1, 1, 'www.test.nl', 0, null);
INSERT INTO manufacturers_info VALUES (2, 1, 'www.test.nl', 0, null);
INSERT INTO manufacturers_info VALUES (3, 1, 'www.test.nl', 0, null);
INSERT INTO manufacturers_info VALUES (4, 1, 'www.test.nl', 0, null);
INSERT INTO manufacturers_info VALUES (5, 1, 'www.test.nl', 0, null);
INSERT INTO manufacturers_info VALUES (6, 1, 'www.test.nl', 0, null);
INSERT INTO manufacturers_info VALUES (7, 1, 'www.test.nl', 0, null);
INSERT INTO manufacturers_info VALUES (8, 1, 'www.test.nl', 0, null);

INSERT INTO products VALUES (1,10,'Polo 1123 Red mt M','yonex/image001_thumb.jpg',34.95, now(),null,now(),0,1,1,7,0);
INSERT INTO products_description VALUES (1,1,'Polo Men','beschrijving...<br/>regel 2....',null,0);
INSERT INTO products_description VALUES (1,2,'Polo Men','beschrijving...',null,0);
INSERT INTO products_images VALUES (1,1,'yonex/image001.jpg',null,1);
INSERT INTO products_to_categories VALUES (1,26);


-- INSERT INTO products_attributes VALUES (1,1,4,1,0.00,'+');

-- INSERT INTO products_attributes_download VALUES (26, 'unreal.zip', 7, 3);

-- INSERT INTO products_images VALUES (1,28,'samsung/galaxy_tab_1.jpg',null,1);
-- INSERT INTO products_images VALUES (2,28,'samsung/galaxy_tab_2.jpg',null,2);
-- INSERT INTO products_images VALUES (3,28,'samsung/galaxy_tab_3.jpg',null,3);
-- INSERT INTO products_images VALUES (4,28,'samsung/galaxy_tab_4.jpg','<object type="application/x-shockwave-flash" width="640" height="385" data="http://www.youtube.com/v/tAbsmHMAhrQ?fs=1&amp;autoplay=1"><param name="movie" value="http://www.youtube.com/v/tAbsmHMAhrQ?fs=1&amp;autoplay=1" /><param name="allowFullScreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="wmode" value="transparent" /></object>',4);
 
-- INSERT INTO products_options VALUES (1,1,'Kleur');
-- INSERT INTO products_options VALUES (1,2,'Color');

-- INSERT INTO products_options_values VALUES (1,1,'rood');
-- INSERT INTO products_options_values VALUES (2,2,'red');
-- INSERT INTO products_options_values VALUES (3,1,'zwart');
-- INSERT INTO products_options_values VALUES (4,2,'black');

-- INSERT INTO products_options_values_to_products_options VALUES (1,1,1);
-- INSERT INTO products_options_values_to_products_options VALUES (2,1,2);
-- INSERT INTO products_options_values_to_products_options VALUES (3,1,1);
-- INSERT INTO products_options_values_to_products_options VALUES (3,1,2);





