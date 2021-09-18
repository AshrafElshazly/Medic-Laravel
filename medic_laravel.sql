-- TABEL 1
INSERT INTO `settings` (`id`, `welcome_txt`, `email`, `phone`, `location`, `map`, `emegency_phone`, `facebook`, `twitter`, `instagram`, `pinterest`, `github`, `active`, `created_at`, `updated_at`) VALUES
(1, "We\'re delighted to offer the most hospitable welcome we can.", 'info@medic.com', '+(20)1015178920', 'PO Box 16122 Collins Street West\r\nVictoria 8007 Canada', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54695.26601851206!2d31.347820061428!3d31.041454962331322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f79db7a9053547%3A0xf8dab3bbed766c97!2sMansoura%2C%20Mansoura%20Qism%202%2C%20Mansoura%2C%20Dakahlia%20Governorate!5e0!3m2!1sen!2seg!4v1628271759624!5m2!1sen!2seg\" width=\"100%\" height=\"400\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '1-800-700-6200', 'https://facebook.com/', 'https://www.twitter.com/', 'https://www.instagram.com/', 'https://www.pinterest.com/', 'https://www.github.com/', 1, '2021-09-18 22:36:41', '2021-09-18 22:57:50');
-- TABEL 2
INSERT INTO `abouts` (`id`, `img`, `our_story`, `mission`, `vision`, `active`, `created_at`, `updated_at`) VALUES
(1, '1.jpg', '\"Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus totam ducimus est vero, officiis, placeat optio. Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias aliquam nesciunt fugit optio illum aut. consectetur adipisicing elit. Neque assumenda, est quam perferendis expedita aute.\"', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam nihil dolorum beatae consequatur mollitia iure.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda consectetur adipisci, voluptatum dolores nostrum omnis.', 1, '2021-09-18 22:36:41', '2021-09-18 23:00:58');
-- TABEL 3
INSERT INTO `departments` (`id`, `name`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Cardiology', 1, '2021-09-18 22:36:41', '2021-09-18 23:01:56'),
(2, 'Dentistry ', 1, '2021-09-18 22:36:41', '2021-09-18 23:02:00'),
(3, 'Dermatology ', 1, '2021-09-18 22:36:41', '2021-09-18 23:02:12'),
(4, 'Ear, nose and throat', 1, '2021-09-18 22:36:41', '2021-09-18 23:02:15'),
(5, 'Endocrinology ', 1, '2021-09-18 22:36:41', '2021-09-18 23:02:17');
-- TABEL 4
INSERT INTO `doctors` (`id`, `name`, `img`, `about`, `department_id`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Robert Barrethion', '2.jpg', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.', 1, 1, '2021-09-18 22:36:41', '0000-00-00 00:00:00'),
(2, 'Marry Lou', '1.jpg', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.', 2, 1, '2021-09-18 22:36:41', '0000-00-00 00:00:00'),
(3, 'Sansa Stark', '8.jpg', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.', 3, 1, '2021-09-18 22:36:41', '0000-00-00 00:00:00'),
(4, 'Robert John', '3.jpg', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.', 4, 1, '2021-09-18 22:36:41', '0000-00-00 00:00:00');
-- TABEL 5
INSERT INTO `features` (`id`, `name`, `img`, `text`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Orthopedics', '1.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur ex sunt, est aspernatur at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia.', 1, '2021-09-18 22:36:41', '2021-09-18 22:38:16'),
(2, 'Diaginostic', '2.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur ex sunt, est aspernatur at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia.', 1, '2021-09-18 22:36:41', '2021-09-18 22:38:24'),
(3, 'Psycology', '3.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur ex sunt, est aspernatur at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia.', 1, '2021-09-18 22:36:41', '2021-09-18 22:38:27'),
(4, 'General Treatment', '4.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur ex sunt, est aspernatur at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia.', 1, '2021-09-18 22:36:41', '2021-09-18 22:38:31');
-- TABEL 6
INSERT INTO `feed_backs` (`id`, `name`, `img`, `comment`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Adam Rose', '1.png', 'Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit.', 1, '2021-09-18 22:36:41', '2021-09-18 22:49:18'),
(2, 'Amy Adams', '2.png', 'Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit.', 1, '2021-09-18 22:36:41', '2021-09-18 22:49:20'),
(3, 'David Warne', '3.png', 'Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit.', 1, '2021-09-18 22:36:41', '2021-09-18 22:49:22'),
(4, 'Adam Rose', '1.png', 'Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit.', 1, '2021-09-18 22:36:41', '2021-09-18 22:49:26'),
(5, 'Amy Adams', '2.png', 'Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit.', 1, '2021-09-18 22:36:41', '2021-09-18 22:49:28'),
(6, 'David Warne', '3.png', 'Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit.', 1, '2021-09-18 22:36:41', '2021-09-18 22:49:30');
-- TABEL 7
INSERT INTO `services` (`id`, `img`, `name`, `title`, `description`, `active`, `created_at`, `updated_at`) VALUES
(1, '1.jpg', 'Dormitory', 'Better Service At Low Cost', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.', 1, '2021-09-18 22:36:41', '2021-09-18 22:42:07'),
(2, '2.jpg', 'Germs Protection', 'Better Service At Low Cost', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.', 1, '2021-09-18 22:36:41', '2021-09-18 22:42:13'),
(3, '3.jpg', 'Psycology', 'Better Service At Low Cost', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.', 1, '2021-09-18 22:36:41', '2021-09-18 22:42:16'),
(4, '1.jpg', 'Dormitory', 'Better Service At Low Cost', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.', 1, '2021-09-18 22:36:41', '2021-09-18 22:42:20'),
(5, '2.jpg', 'Germs Protection', 'Better Service At Low Cost', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.', 1, '2021-09-18 22:36:41', '2021-09-18 22:42:23'),
(6, '3.jpg', 'Psycology', 'Better Service At Low Cost', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.', 1, '2021-09-18 22:36:41', '2021-09-18 22:42:25');
-- TABEL 8
INSERT INTO `shots` (`id`, `img`, `name`, `titel`, `active`, `created_at`, `updated_at`) VALUES
(1, '1.jpg', 'Facility 01', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, in.', 1, '2021-09-18 22:36:41', '2021-09-18 22:41:08'),
(2, '2.jpg', 'Facility 02', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, in.', 1, '2021-09-18 22:36:41', '2021-09-18 22:41:14'),
(3, '3.jpg', 'Facility 03', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, in.', 1, '2021-09-18 22:36:41', '2021-09-18 22:41:16'),
(4, '4.jpg', 'Facility 04', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, in.', 1, '2021-09-18 22:36:41', '2021-09-18 22:41:19'),
(5, '5.jpg', 'Facility 05', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, in.', 1, '2021-09-18 22:36:41', '2021-09-18 22:41:22'),
(6, '6.jpg', 'Facility 06', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, in.', 1, '2021-09-18 22:36:41', '2021-09-18 22:41:25');
-- TABEL 9
INSERT INTO `slides` (`id`, `img`, `titel`, `description`, `btn_name`, `btn_url`, `active`, `created_at`, `updated_at`) VALUES
(1, '1.jpg', 'Our Best Surgeons', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel sunt animi sequi ratione quod at earum. <br> Quis quos officiis numquam!', 'explore', 'about-us', 1, '2021-09-18 23:07:24', '0000-00-00 00:00:00'),
(2, '2.jpg', 'We Care About Your Health', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'about us', 'about-us', 1, '2021-09-18 23:07:24', '0000-00-00 00:00:00'),
(3, '3.jpg', 'Best Medical Services', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae deserunt, <br>eius pariatur minus itaque nostrum.', 'appointment', 'appointment', 1, '2021-09-18 23:07:24', '2021-09-18 23:10:41');
-- TABEL 10
INSERT INTO `working_hours` (`id`, `day`, `open`, `close`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Sun', '08:00Am', '08:00Pm', 1, '2021-09-18 22:36:41', '2021-09-18 22:39:48'),
(2, 'Mon', '07:00Am', '10:00Pm', 1, '2021-09-18 22:36:41', '2021-09-18 22:39:52'),
(3, 'The', '08:00Am', '10:00Pm', 1, '2021-09-18 22:36:41', '2021-09-18 22:39:55'),
(4, 'Wed', '07:00Am', '12:00Am', 1, '2021-09-18 22:36:41', '2021-09-18 22:39:58'),
(5, 'Thu', '08:00Am', '10:00Pm', 1, '2021-09-18 22:36:41', '2021-09-18 22:40:01');