INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'web', '2020-09-26 21:21:08', '2020-09-26 21:21:08'),
(2, 'Admin', 'web', '2020-09-26 21:51:03', '2020-09-26 21:51:03');


INSERT INTO `users` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', NULL, 'admin@admin.com', NULL, '$2y$10$nFr91C3edY0I/RAkk776oeP99hz1YVbt1Z.AZmPKuNtMKsmJ9Sp7W', NULL, '2015-10-28 07:18:44', '2020-11-03 01:41:45');

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'user-list', 'web', '2020-09-26 21:20:49', '2020-09-26 21:20:49'),
(2, 'user-create', 'web', '2020-09-26 21:20:49', '2020-09-26 21:20:49'),
(3, 'user-edit', 'web', '2020-09-26 21:20:49', '2020-09-26 21:20:49'),
(4, 'user-delete', 'web', '2020-09-26 21:20:49', '2020-09-26 21:20:49'),
(5, 'role-list', 'web', '2020-09-26 21:20:49', '2020-09-26 21:20:49'),
(6, 'role-create', 'web', '2020-09-26 21:20:49', '2020-09-26 21:20:49'),
(7, 'role-edit', 'web', '2020-09-26 21:20:49', '2020-09-26 21:20:49'),
(8, 'role-delete', 'web', '2020-09-26 21:20:49', '2020-09-26 21:20:49'),
(9, 'role-permission-list', 'web', '2020-09-26 21:20:49', '2020-09-26 21:20:49'),
(10, 'role-permission-create', 'web', '2020-09-26 21:20:49', '2020-09-26 21:20:49'),
(11, 'role-permission-edit', 'web', '2020-09-26 21:20:49', '2020-09-26 21:20:49'),
(12, 'role-permission-delete', 'web', '2020-09-26 21:20:49', '2020-09-26 21:20:49');



INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1);


