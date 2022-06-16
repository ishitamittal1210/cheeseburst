-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 14, 2022 at 11:57 AM
-- Server version: 8.0.29-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodorder`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `username`, `password`) VALUES
(1, 'NishitSood', 'Nishit', '910b2f2c27660d990a6efeee927767c7'),
(2, 'GaurishSingh', 'gaurish', '6a8e482ebcdd072cbbf03dd7af41dee2'),
(3, 'IshitaMittal', 'ishita', '3a340e9df39e7735852b1fbb2088d2d6'),
(4, 'Kashika', 'kashika', '1767e886b2f9dc5138bb52c86c6e755b'),
(5, 'AashreyJain', 'Aashrey', '059bcea2336fae7c963bb34f455cb1cb');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(1, 'Course Meals', 'Course-Meal.jpeg', 'Yes', 'Yes'),
(2, 'Indian Specials', 'Indian-Specials.jpg', 'Yes', 'Yes'),
(3, 'Desserts', 'Desserts.jpg', 'Yes', 'Yes'),
(4, 'Beverages', 'Beverages.jpeg', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food`
--

CREATE TABLE `tbl_food` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `category_id` int UNSIGNED NOT NULL,
  `featured` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_food`
--

INSERT INTO `tbl_food` (`id`, `title`, `description`, `price`, `image_name`, `category_id`, `featured`, `active`) VALUES
(1, 'Margherita Pizza', 'Margherita Special', '250.00', 'Margherita.webp', 1, 'Yes', 'Yes'),
(2, 'Tomato Pizza', 'Fresh Tomato\'s', '125.00', 'Fresh-tomato-pizza-.webp', 1, 'Yes', 'Yes'),
(3, 'Four Cheese Pizza', 'Extra Cheese ', '350.00', 'Four_Cheese_Pizza.jpg', 1, 'Yes', 'Yes'),
(4, 'Four Vegetable Pizza', 'More Vegetables with spices', '275.00', 'Four_Vegetable_PIzza.gif', 1, 'Yes', 'Yes'),
(5, 'Tandori Pizza', 'Tandori Special', '300.00', 'Tandori_Pizza.jpg', 1, 'Yes', 'Yes'),
(6, 'Hawaiian pizza', 'Hawaii Special with Thin Crust', '325.00', 'hawaiian-thin-crust-pizza-3.jpg', 1, 'Yes', 'Yes'),
(7, 'Three pepper pizza', 'All 3 in 1', '215.00', 'pepper-pizza-oh-1733614-x.jpg', 1, 'Yes', 'Yes'),
(8, 'Golden Corn Pizza', 'Corn Specials', '200.00', 'Golden_Corn_Pizza.webp', 1, 'Yes', 'Yes'),
(9, ' Veg Manchuria', 'Manchurium with Vegetables', '100.00', 'Veg-Manchurian-recipe_5.jpg', 1, 'Yes', 'Yes'),
(10, 'Gobi Manchuria', 'Made with cauliflower', '120.00', 'Gobi_Manchurian.jpeg', 1, 'Yes', 'Yes'),
(11, 'Mushroom Manchuri', 'Made with fresh Mushroom', '130.00', 'mushroom-manchurian-recipe.webp', 1, 'Yes', 'Yes'),
(12, 'Panner Manchuria', 'Fresh Panner ', '140.00', 'paneer-manchurian-recipe.jpg', 1, 'Yes', 'Yes'),
(13, 'Baby Corn Manchuria', 'Corn For Health', '150.00', 'baby-corn-manchurian.jpg', 1, 'Yes', 'Yes'),
(14, 'Idly Manchuria', 'You fell like you eat Idly', '160.00', 'idli-manchurian-recipe-1-500x500.jpg', 1, 'Yes', 'Yes'),
(15, 'Paneer Tikka', 'Paneer Tikka', '90.00', 'tikka.jpg', 1, 'Yes', 'Yes'),
(16, 'Mushroom Tikka', 'Mushroom with a Tikka', '90.00', 'Mushroom-Tikka.jpg', 1, 'Yes', 'Yes'),
(17, 'Masala Chaap', 'Chaap with Masala', '90.00', 'masala-chaap.jpg', 1, 'Yes', 'Yes'),
(18, 'Afghani Soya Chaap', 'Afghani Special chaap', '100.00', 'Afghani-Soya-Chaap-scaled.webp', 1, 'Yes', 'Yes'),
(19, 'Malai Chaap', 'Malai Special chaap', '110.00', 'Malai-Chaap.jpeg', 1, 'Yes', 'Yes'),
(20, 'Tandori Chapp', 'Tandori Special', '120.00', 'Tandori-Chaap.jpg', 1, 'Yes', 'Yes'),
(21, 'Vegan Burger', 'Copycat In-N-Out Vegan', '130.00', 'Copycat-In-N-Out-Vegan.jpeg', 1, 'Yes', 'Yes'),
(22, 'Cheesy Burgers', 'Cheesy Portobello Burgers', '140.00', 'Cheesy-Portobello-Burgers .jpg', 1, 'Yes', 'Yes'),
(23, 'Classic Veggie Burger', 'Classic Veggie Burger', '145.00', 'Classic-Veggie-Burger.png', 1, 'Yes', 'Yes'),
(24, 'Falafel Burgers', 'Falafel Burger', '150.00', 'Falafel-Burgers.jpg', 1, 'Yes', 'Yes'),
(25, 'Mushroom Burger ', 'Portobell Mushroom Burger ', '160.00', 'Portobello-Mushroom-Burger .webp', 1, 'Yes', 'Yes'),
(26, 'Veggie Burger', 'Ultimate Veggie Burger', '170.00', 'ultimate-veggie-burger.webp', 1, 'Yes', 'Yes'),
(27, ' Big Mac', 'Mac Burger', '190.00', 'big-mac.jpg', 1, 'Yes', 'Yes'),
(28, 'Dosa', 'The flavour of South ', '90.00', 'Dosa.jpeg', 2, 'Yes', 'Yes'),
(29, 'Idle', 'Another South Dish', '115.00', 'Idle-Sambhar-Chutney.jpg', 2, 'Yes', 'Yes'),
(30, 'Rasam', 'South Rasam Flavour', '50.00', 'Rasam.jpeg', 2, 'Yes', 'Yes'),
(31, 'Sambar Vadai', 'Vada Sambar South special', '70.00', 'Sambar-vadai.jpg', 2, 'Yes', 'Yes'),
(32, 'Aloo Tikki', '2 Piece of Tikki with salad and chatni', '25.00', 'Aloo-Tikki-2-3.jpg', 2, 'Yes', 'Yes'),
(33, 'Chola Bhature', '2 Bhature with Chola onion and Achar', '40.00', 'Chola-Bhature.cms', 2, 'Yes', 'Yes'),
(34, 'Gol Gappa', 'Gol Gappa', '30.00', 'Gol-Gappa.cms', 2, 'Yes', 'Yes'),
(35, 'Kachori Chaat', 'Kachori Chaat', '40.00', 'Kachori-chaat.jpg', 2, 'Yes', 'Yes'),
(36, 'Pav Bhaji', 'Pav Bhaji', '60.00', 'Pav-Bhaji.jpg', 2, 'Yes', 'Yes'),
(37, 'Samosa', '2 Piece of Samosa with chana', '45.00', 'Samosa.jpg', 2, 'Yes', 'Yes'),
(38, 'Veg Noodles', 'Veg Noodles', '60.00', 'Vegetarian-Noodles.jpg', 2, 'Yes', 'Yes'),
(39, 'Seviyan', 'Seviyan', '60.00', 'Seviyan.webp', 3, 'Yes', 'Yes'),
(40, 'Gajrela', 'Gajrela', '40.00', 'Gajrela.jpg', 3, 'Yes', 'Yes'),
(41, 'Badam Kheer', 'Kheer', '40.00', 'Badam-Kheer.jpg', 3, 'Yes', 'Yes'),
(42, 'Rasmalai', 'Rasmalai', '40.00', 'Rasmalai.jpg', 3, 'Yes', 'Yes'),
(43, 'Gulab Jamun', 'Gulab Jamun', '20.00', 'Gulab Jamun.jpg', 3, 'Yes', 'Yes'),
(44, 'Rasgulla', 'Rasgulla', '20.00', 'Rasgulla.webp', 3, 'Yes', 'Yes'),
(45, 'Jalebi', 'Jalebi', '20.00', 'Jalebi.png', 3, 'Yes', 'Yes'),
(46, 'Black Forest Cake', 'Black Forest Cake', '350.00', 'Black-Forest-cake.webp', 3, 'Yes', 'Yes'),
(47, 'Blue Berry', 'Blue Berry Cake', '370.00', 'Blue-Berry.jpeg', 3, 'Yes', 'Yes'),
(48, 'Pineapple Cake', 'Cherry-Pineapple-Cake', '380.00', 'Cherry-Pineapple-Cake.webp', 3, 'Yes', 'Yes'),
(49, 'Vanilla Cake', 'Vanilla ', '300.00', 'fresh-vanilla-cake.webp', 3, 'Yes', 'Yes'),
(50, 'Fruit Cake', 'Fruit Cake', '400.00', 'Fruit-cake.jpg', 3, 'Yes', 'Yes'),
(51, 'Mango Cake', 'Mango Cake', '425.00', 'Mango-cake.jpeg', 3, 'Yes', 'Yes'),
(52, 'Red Velvet Cake', 'Red-velvet-cake', '450.00', 'Red-velvet-cake.jpg', 3, 'Yes', 'Yes'),
(53, 'Butterscotch Cake', 'Mouth-Watering-Crunchy-Butterscotch', '430.00', 'Mouth-Watering-Crunchy-Butterscotch.webp', 3, 'Yes', 'Yes'),
(54, 'Strawberry Cake', 'Strawberry', '320.00', 'Strawberry-Cake.avif', 3, 'Yes', 'Yes'),
(55, 'BlueBerry ', 'BlueBerry iceCream', '30.00', 'Blueberry-Ice-Cream.jpg', 3, 'Yes', 'No'),
(56, 'Butterscotch', 'ButterScotch Ice-Cream', '30.00', 'butterscotch-ice-cream.jpg', 3, 'Yes', 'No'),
(57, 'Special Pan ', 'Pan Ice-Cream', '50.00', 'pan-masala-ice-cream.jpg', 3, 'Yes', 'No'),
(58, 'Pista Badam', 'Badam-Pista Ice-Cream', '30.00', 'Pista-Badam.jpg', 3, 'Yes', 'Yes'),
(59, 'Strawberry', 'Strawberry Ice-Cream', '30.00', 'Strawberry.webp', 3, 'Yes', 'Yes'),
(60, 'Vanilla', 'Vanilla Ice-Cream', '30.00', 'vanilla custard ice cream.JPG', 3, 'Yes', 'Yes'),
(61, 'BlueBerry', 'BlueBerry', '100.00', 'BlueBerry.webp', 3, 'Yes', 'Yes'),
(62, 'Vanilla & Choclate ', 'Bourbon-Vanilla-Choclate-shake', '110.00', 'Bourbon-vanilla-and-chocolate-milkshake.jpg', 3, 'Yes', 'Yes'),
(63, 'ButterScotch', 'ButterScotch Shake', '120.00', 'ButterScotch.png', 3, 'Yes', 'Yes'),
(64, 'Caramel Corn', 'Caramel-Corn-Milkshakes', '130.00', 'Caramel-corn-milkshake.jpg', 3, 'Yes', 'Yes'),
(65, 'Strawberry', 'Delicious-Heallthy-Strawbery', '130.00', 'Delicious-Healthy-Strawberry-Shake.jpg', 3, 'Yes', 'Yes'),
(66, 'Kit-Kat Special', 'Kit-Kat Milkshakes', '130.00', 'Kit-kat-Milkshakes.png', 3, 'Yes', 'Yes'),
(67, 'Mango', 'Mongo Shake', '140.00', 'mango-shake.webp', 3, 'Yes', 'Yes'),
(68, 'Strawberry Oreo', 'Strawberry-Oreo MilkShake', '150.00', 'StrawberryOreoMilkshake.jpg', 3, 'Yes', 'Yes'),
(69, 'Vanilla', 'Vanilla Milkshake', '100.00', 'Vanilla-Milkshake.jpg', 3, 'Yes', 'Yes'),
(70, 'Coke', 'Coke', '35.00', 'Coke.webp', 4, 'Yes', 'Yes'),
(71, 'Pepsi', 'Pepsi', '35.00', 'Pepsi.jpg', 4, 'Yes', 'Yes'),
(72, 'Limca', 'Limca', '35.00', 'Limca.jpeg', 4, 'Yes', 'Yes'),
(73, 'Sprite', 'Sprite', '35.00', 'Sprite.jpg', 4, 'Yes', 'Yes'),
(74, 'Fanta', 'Fanta', '35.00', 'Fanta.png', 4, 'Yes', 'Yes'),
(75, 'Mirinda', 'Mirinda', '35.00', 'Mirinda.jpg', 4, 'Yes', 'Yes'),
(76, 'Mountain Dew', 'Mountain Dew', '35.00', 'Mountain_Dew.jpg', 4, 'Yes', 'Yes'),
(77, '7UP', '7UP', '35.00', '7UP.jpg', 4, 'Yes', 'Yes'),
(78, 'Maaza', 'Maaza', '35.00', 'Maaza-mango-drink.webp', 4, 'Yes', 'Yes'),
(79, 'Salty Lassi', 'The salty Yogurt drink is traditional and thicker. It is spiced up with a variety of ingredients and Spices, mostly with ground Cumin Powder served on humid afternoons during summer time.', '40.00', 'sanlty-lassi.jpg', 4, 'Yes', 'Yes'),
(80, 'Mint Lassi', 'It gives a very chilly and refreshing It gives a very chilly and refreshing flavour and helps to beat the heat of summer and also appease your digestive system. The chilled Lassi is sprinkled with finely chopped Mint leaves and served.', '40.00', 'mint-lassi.jpg', 4, 'Yes', 'Yes'),
(81, 'Sweet Lassi', 'This is a spanking new variation of the traditional salty drink. But lately this drink has become popular among the people. The perfume of the rose water added to it makes it delectable.', '40.00', 'sweet-lassi-1.jpg', 4, 'Yes', 'Yes'),
(82, 'Mango Lassi', 'This has gained a lot of popularity lately. It is made with fresh Mango Pulp, Water and Yogurt.Tastes best when served chilled.', '40.00', 'mango-lassi.jpg', 4, 'Yes', 'Yes'),
(83, 'Banana Lassi', 'This might sound like a Milkshake but tastes heavenly. The thick consistency topped with Nuts and Kismis makes it a favourite, in fact, most ordered lassi among the people.', '40.00', 'banana-lassi.jpg', 4, 'Yes', 'Yes'),
(84, 'Strawberry Lassi', 'If you are a Strawberry lover then you must try out the Strawberry Lassi. The flavour will make you fall in love and crave for more. ', '40.00', 'strawberry-lassi-recipe.jpg', 4, 'Yes', 'Yes'),
(85, 'Chocolate Lassi', 'This is the second flavour which the kids would love to try out along with the adults because chocolate is something which is everyone’s favourite irrespective of their age. This drink is creamy, thick, sweet, and yummy to taste.', '40.00', 'chocolate-lassi-recipe.jpg', 4, 'Yes', 'Yes'),
(86, 'Kesar – Pista Lassi', 'Dry fruits are healthy and nutritious. The Punjabis love using these dry fruits which include Almonds to Walnuts and Pistachios to Raisins. They use these for garnishing several dishes like sweets and Halwas.', '40.00', 'kesar-pista-lassi-1.jpg', 4, 'Yes', 'Yes'),
(87, 'Cardamom Lassi', 'This is a fusion of sweet and salty Lassi flavoured with Elaichi which is served during the lunch or as a snack by the Punjabis. The Cardamom Lassi is garnished with Pistachios and the zest is awesome to savour.', '40.00', 'cardamom-lassi.jpg', 4, 'Yes', 'Yes'),
(88, 'Grape Lassi', 'Curd and Black Grapes blends beautifully and carries a lot of fibre which makes it a great combination. This drink is an excellent thirst satisfier, refreshing and healthy.', '40.00', 'grape-lassi.jpg', 4, 'Yes', 'Yes'),
(89, 'Lassi With Ice-Cream', 'Enjoy the summer heat with a cold touch of flavoured ice cream Lassi. Various flavours of choice are available.', '40.00', 'ice-cream-lassi.jpg', 4, 'Yes', 'Yes'),
(90, 'Orange Lassi', 'This is just similar to the Strawberry flavoured Lassi. All the Orange fanatics would love to try out this one. This drink is rich in source of vitamin C and healthy. It tastes better when served chilled.', '40.00', 'orange-lassi.jpg', 4, 'Yes', 'Yes'),
(91, 'Sweetened Honey Lassi', 'This drink is healthy, tasty and refreshing. Sugar replaced with Honey is a healthier option and gives it a better taste. The Basil leaves used for garnishing adds an amazing flavour to it.', '40.00', 'sweetened-honey-lassi.jpg', 4, 'Yes', 'Yes'),
(92, 'Pink Lassi', 'This is more like an energising drink than Lassi. The ingredients added are healthy and nutritious. It is creamy and smooth and best served chilled.', '40.00', 'pink_lassi.jpg', 4, 'Yes', 'Yes'),
(93, 'Spiced Milk Lassi With Kiwi and Mint', 'This is the fusion of Curd with the spiced Milk, boiled with Spices – Cardamom and Cinnamon – and the Rose Water and Pureed Kiwi. The blending of the flavours done makes it even amazing and yummy to drink.', '40.00', 'spiced-milk-lassi-with-kiwi-and-mint.jpg', 4, 'Yes', 'Yes'),
(94, 'Jeera Lassi', 'This works as a great digestive drink. The fusion of the Curd, Cream, Lemon juice, and Cumin (Jeera) powder turns out to be a wonderful mix and when served chilled tastes fantastic.', '40.00', 'jeera-lassi.jpg', 4, 'Yes', 'Yes'),
(95, 'Vanilla Lassi', 'These sweet flavoured Lassis are new in the market. Almost tastes like the Milkshake. The Vanilla essence used gives a superb aroma and taste.', '40.00', 'vanilla-lassi.jpg', 4, 'Yes', 'Yes'),
(96, 'Caramel Espresso Lassi', 'This is more of a Dessert than a drink. The fusion of Caramel with the Coffee of your choice and the Yogurt, sweet Syrup and Milk when blended gives rise to the final output that is topped with Sea Salt and whipped Cream.', '40.00', 'caramel-espresso-lassi.jpg', 4, 'Yes', 'Yes'),
(97, 'Masala Lassi', 'This is different from the mainstream Lassis that you have been hearing about lately. Basically it is Salt based and no amount of sweet Syrup or Sugar used in this. The Green Chilli and the Mint or Cilantro Leaves with a pinch of ground Cumin Seeds make the drink completely spiced up and grand.', '40.00', 'masala-lassi.jpg', 4, 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int UNSIGNED NOT NULL,
  `food` varchar(150) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `order_date` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `customer_contact` varchar(20) NOT NULL,
  `customer_email` varchar(150) NOT NULL,
  `customer_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `food`, `price`, `qty`, `total`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`) VALUES
(3, 'Red Velvet Cake', '450.00', '1.00', '450.00', '2022-05-12', 'Ordered', 'Vishal', '26565662', 'vishal@gmail.com', 'dsbdsbhdsbhjsbcjb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_food`
--
ALTER TABLE `tbl_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_food`
--
ALTER TABLE `tbl_food`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
