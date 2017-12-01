-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: soapbook
-- ------------------------------------------------------
-- Server version	5.7.17-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `ingredients`
--

DROP TABLE IF EXISTS `ingredients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ingredients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `type_id` int(11) NOT NULL,
  `description` text,
  `properties` text,
  `notes` text,
  PRIMARY KEY (`id`),
  KEY `type_id` (`type_id`),
  CONSTRAINT `ingredients_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ingredients`
--

LOCK TABLES `ingredients` WRITE;
/*!40000 ALTER TABLE `ingredients` DISABLE KEYS */;
INSERT INTO `ingredients` VALUES (1,'water',1,'water','H2O','Mix distilled water with lye to create lye solution'),(2,'lye',2,'A strong alkali, or acid','Sodium Hydroxide','Mix lye with distilled water to create lye solution'),(3,'palm',3,'This oil comes from palm trees','Mild stabilizing lather, hard, long lasting bar','Palm oil is great for those that don’t want to use animal fats such as lard or tallow. I personally do not use palm oil because of the environmental effects of producing it.'),(4,'coconut',3,'This oil comes from the coconut','Abundant lather, large fluffy bubbles, high cleansing, hard bar, white color','High amounts of coconut oil can be drying, however you can always use a higher superfat to counteract the drying effect. The more un-saponified oils in your soap the more moisturizing it is.\nExperiment with a 100% coconut oil soap with a 20% superfat.'),(5,'olive',3,'This oil comes from olives','Low slippery lather, almost no bubbles, low cleansing','The low cleansing properties of olive oil make it very mild and nourishing. Soap for sensitive skin, elder skin or baby skin should include high amounts of olive (60%). Castile soap is made with 100% olive oil. I classify this as a soft/hard oil because it makes a very soft bar of soap initially upon unmolding but cures into a rock hard bar. Soaps high (50%+) in olive oil need longer to cure and unmold.'),(6,'babassu',3,'This oil comes from the seeds of the babassu palm','Similar to coconut oil, large fluffy bubbles, high cleansing but a bit milder than coconut oil, white color','Babassu oil is a great oil to use in place of coconut oil for those that have a coconut allergy.'),(7,'cocoa butter',3,'This oil comes from the cocoa bean','Mild stabilizing lotion-like lather, hard, long lasting bar','You can experiment using cocoa butter and other butters in high amounts -up to 80%. Try a bar made from 60% cocoa butter and 40% coconut oil. You might like it!'),(8,'shea butter',3,'This oil comes from the nut of the African shea tree','Mild stabilizing lotion-like lather, medium hard, long lasting bar','Same as cocoa butter. I typically use 5-15% but occasionally will experiment with using up to 20%.'),(9,'mango butter',3,'This oil comes from the mango seed','Mango butter helps with the hardness of the soap, and it adds luxurious conditioning and moisturizing values as well','Typically use 5-15% but occasionally will experiment with using up to 20%.'),(10,'castor',3,'This oil comes from the castor bean','Boosts lather by making a soap more easily dissolved in water','Some soap makers like to use 15-20% castor oil in their shampoo bars or shaving bars.'),(11,'safflower',3,'This oil comes from the seeds of the safflower','Medium lather, mild cleansing','Safflower oil is a wonderful sub for some of the olive oil in a recipe.'),(12,'lavender',4,NULL,NULL,NULL),(13,'peppermint',4,NULL,NULL,NULL),(14,'sandalwood',4,NULL,NULL,NULL),(15,'activated charcoal',5,'Activated charcoal is used to create a black soap that will not come off on a washcloth and will lather white. It is non-staining and the truest black we have found for soap.',NULL,'Recommended use rate in cold and hot process soap is 1 tsp. per pound of oils. Add about 1 teaspoon per pound to your oils and hit it with the stick blender. Add bit by bit until you have the dark black color you\'re wanting.'),(16,'titanium dioxide',5,'There are differences in titanium dioxides from different sources. This particular TD is blended to be a very bright shade of white, and mixes best in water to prevent white specks in soaps. In our testing, we did not experience glycerin rivers with this TD. We used full water and gelled hot. The soap result is very white and bright, just like TD should be! To use, blend the TD in a bit of water and make a thick paste. Start with a 1/4 teaspoon of this paste per pound of oils in your soaps. If you need more, add it up to 1 teaspoon per pound of oils. This Titanium dioxide is 99.9% pure, and unlike the cheaper types of TD you will find elsewhere.',NULL,'Recommended use rate in cold and hot process soap is .5 tsp. per pound of oils. For melt and pour, the recommended use rate is .25 tsp. per pound of base.'),(17,'hanger swirl',6,'A hanger swirl is any swirl by which you use a wire (hanger, silicone gear tire, etc.) to insert into the mold after pouring multiple colors of soap. The thickness of the wire will dictate how much soap is moved using a hanger swirl, and the design can be modified by the direction of movement of the hanger itself. A mantra swirl uses vertical layers to create solid color blocks, that are then swirled in patterns with a hanger, dowel, or gear tie. The butterfly swirl and spiral swirl both modify the swirl pattern by changing how the hanger, dowel, gear tie, etc., are moved throughout the soap.',NULL,NULL),(18,'linear swirl',6,'A linear swirl layers the soap in a linear pattern. In a slab mold, this creates a nice linear pattern on the top of the soap, however, in a loaf mold it becomes small stripes of color on the bar. Taiwan, serpentine, and peacock swirls are modifications on the linear swirl by using a chopstick to change the direction of the swirls in various patterns. The size of the linear pattern will depend on the amount of soap you pour for each line, less soap per pour gives thinner lines (more soap = thicker lines).',NULL,NULL),(19,'layering & embeds',6,'Using various layers of soap or pieces of soap can add a lot of depth and dimension to otherwise Plain Jane soaps. There are a multitude of options and layers or embeds can be used in conjunction with just about any other soap design techniques. For instance, a gradient or ombre version of layering uses varying shades or hues to create a pattern of color change throughout a bar of soap. The type of colorants used can also change the effect: by taking advantage of bleeding colorants, the gradient can appear seamless and beautiful.',NULL,NULL),(20,'honey',7,NULL,NULL,NULL),(21,'oatmeal',7,NULL,NULL,NULL),(22,'goat milk',7,NULL,NULL,NULL);
/*!40000 ALTER TABLE `ingredients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recipes`
--

DROP TABLE IF EXISTS `recipes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recipes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `soap_id` int(11) NOT NULL,
  `ingredient_id` int(11) NOT NULL,
  `ingredient_amt` float NOT NULL,
  `unit_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `soapname_id` (`soap_id`),
  KEY `ingredient_id` (`ingredient_id`),
  KEY `unit_id` (`unit_id`),
  CONSTRAINT `recipes_ibfk_1` FOREIGN KEY (`soap_id`) REFERENCES `soaps` (`id`),
  CONSTRAINT `recipes_ibfk_2` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredients` (`id`),
  CONSTRAINT `recipes_ibfk_3` FOREIGN KEY (`unit_id`) REFERENCES `units` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recipes`
--

LOCK TABLES `recipes` WRITE;
/*!40000 ALTER TABLE `recipes` DISABLE KEYS */;
INSERT INTO `recipes` VALUES (1,1,1,30,1);
/*!40000 ALTER TABLE `recipes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `soaps`
--

DROP TABLE IF EXISTS `soaps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `soaps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `soaps`
--

LOCK TABLES `soaps` WRITE;
/*!40000 ALTER TABLE `soaps` DISABLE KEYS */;
INSERT INTO `soaps` VALUES (1,'Lavender and Honey','This soap has the wonderful sweetness of honey, and the relaxing scent of lavender'),(2,'Orange and Vanilla','This soap combines the essential oils of orange and vanilla to create the scent of an orange creamsicle');
/*!40000 ALTER TABLE `soaps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `types`
--

DROP TABLE IF EXISTS `types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `types`
--

LOCK TABLES `types` WRITE;
/*!40000 ALTER TABLE `types` DISABLE KEYS */;
INSERT INTO `types` VALUES (1,'water','This is just water, preferably distilled'),(2,'lye','This is sodium hydroxide'),(3,'oil','This is base oil to use for your soap'),(4,'essoil','This is essential oil, add to create fragrance'),(5,'color','This is colors, or pigments'),(6,'design','This is the design of the soap'),(7,'special','These are special ingredients, such as honey or goat milk');
/*!40000 ALTER TABLE `types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `units`
--

DROP TABLE IF EXISTS `units`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `units` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `units`
--

LOCK TABLES `units` WRITE;
/*!40000 ALTER TABLE `units` DISABLE KEYS */;
INSERT INTO `units` VALUES (1,'oz','ounce'),(2,'lb','pound'),(3,'tsp','teaspoon'),(4,'Tbsp','tablespoon'),(5,'c','cup'),(6,'gal','gallon');
/*!40000 ALTER TABLE `units` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-30 23:16:32
