
INSERT INTO `informasi` (`id_informasi`, `id_user`, `foto_mempelai_pria`, `nama_mempelai_pria`, `nama_ayah_mempelai_pria`, `nama_ibu_mempelai_pria`, `foto_mempelai_wanita`, `nama_mempelai_wanita`, `nama_ayah_mempelai_wanita`, `nama_ibu_mempelai_wanita`, `tgl_akad`, `jam_akad`, `lokasi_akad`, `tgl_resepsi`, `jam_resepsi`, `lokasi_resepsi`, `quotes`, `lokasi_pertama_ketemu`, `gambar_pertama_ketemu`, `cerita_pertama_ketemu`, `lokasi_lamaran`, `gambar_lamaran`, `cerita_lamaran`, `gallery1`, `gallery2`, `gallery3`, `gallery4`, `created_at`, `updated_at`) VALUES
(4, 2, '63638bec0290c.jpg', 'eren yeager', 'grisha', 'carla', '63638d33c1048.jpg', 'mikasa', 'akkaman', 'yuki rose', '2022-11-03', '17:47:00', 'jl tamalate 1 no 20 Makassar, sulawesi selatan indonesia', '0000-00-00', '03:00:00', 'Jl pelelangan shiganshina ada di dalam pilem aot hehe', 'live is the only way to die', 'makassar', '6363916351e08.jpg', 'hmmm kamu selalu menyenangkan xixixi', 'dirumahmu', '6363916351e0b.jpg', 'hmmm i lop yu', '636394722708c.jpg', '636394c68cc1e.jpg', '636394b065644.jpg', '636394b848d56.jpg', '2022-11-03 01:36:38', '2022-11-03 02:25:05'),
(5, 3, '6363c35a1c488.jpg', 'sapri', 'putra', 'putri', '6363c36c500be.jpg', 'rini', 'seli', 'saldi', '2022-11-03', '00:00:00', 'jl tamalate 1 no 20 makassar, sulawesi selatan indonesia', '0000-00-00', '00:00:00', 'Jl pelelangan shiganshina ada di dalam pilem aot hehe', 'keep breathing hehehehe', '', '', '', '', '', '', '', '', '', '', '2022-11-03 05:34:18', '2022-11-03 05:35:11');


INSERT INTO `tamu` (`id_tamu`, `id_user`, `kode_undangan`, `nama_tamu`, `no_hp`, `status_kehadiran`, `created_at`, `updated_at`) VALUES
(2, 2, 'UND-6366D466', 'caty', '085757399827', '1', '2022-11-05 13:24:05', '2022-11-05 14:41:22'),
(3, 2, 'UND-6366E770', 'levi', '085234567892', '1', '2022-11-05 14:45:25', '2022-11-05 14:46:13');


INSERT INTO `tema` (`id_tema`, `nama_tema`, `thumbnail_tema`, `created_at`, `updated_at`) VALUES
(5, 'aesthetic', '63663672849d8.jpg', '2022-11-05 02:09:54', '2022-11-05 02:09:54'),
(6, 'elegant blue', '6366368d1f7b3.jpg', '2022-11-05 02:10:21', '2022-11-05 02:10:21'),
(7, 'elegant cream', '6366369a4cf92.jpg', '2022-11-05 02:10:34', '2022-11-05 02:10:34'),
(8, 'elegant navy', '636636a6a03a2.jpg', '2022-11-05 02:10:46', '2022-11-05 02:10:46'),
(9, 'kembang sepatu', '636636b41a235.jpg', '2022-11-05 02:11:00', '2022-11-05 02:11:00'),
(10, 'maroon flower', '636636be947ff.jpg', '2022-11-05 02:11:10', '2022-11-05 02:11:10'),
(11, 'pinkrose', '636636ca715fb.jpg', '2022-11-05 02:11:22', '2022-11-05 02:11:22'),
(12, 'sakura', '636636d79fd32.jpg', '2022-11-05 02:11:35', '2022-11-05 02:11:35'),
(13, 'summer', '636636e130bd4.jpg', '2022-11-05 02:11:45', '2022-11-05 02:11:45'),
(14, 'sweet purple', '636636ec7689f.jpg', '2022-11-05 02:11:56', '2022-11-05 02:11:56'),
(15, 'red roses', '636637035d0c0.jpg', '2022-11-05 02:12:19', '2022-11-05 02:12:19'),
(16, 'pink flower', '63663713ef5ac.jpg', '2022-11-05 02:12:36', '2022-11-05 02:12:36');


INSERT INTO `tema_user` (`id_tema_user`, `id_user`, `id_tema`, `created_at`, `updated_at`) VALUES
(3, 2, 13, '2022-11-05 02:45:36', '2022-11-05 02:45:36');


INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `id_undangan`, `total_amount`, `reference`, `merchant_reference`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, 1, 149000, 'DEV-T1542765704X29WW', 'SAM-1667680506', 'unpaid', '2022-11-05 12:35:07', '2022-11-05 12:35:07'),
(3, 2, 1, 149000, 'DEV-T1542765705PKKS2', 'SAM-1667680513', 'unpaid', '2022-11-05 12:35:13', '2022-11-05 12:35:13');

INSERT INTO `undangan` (`id_undangan`, `domain`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'eremika', 2, '2022-11-03 00:55:35', '2022-11-03 00:55:35'),
(2, 'mine', 3, '2022-11-03 05:35:26', '2022-11-03 05:35:26');


INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `foto`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@mail.com', NULL, '$2y$10$N6nmGrHUtLAw5/5SlPZqEehn.S5KDNDFHf1yuW184mEw5zLWhVeLm', 'Administrator', '61b5cf20cb753.jpg', '0', NULL, '2021-11-24 09:06:43', '2021-12-11 18:29:52'),
(2, 'sam', 'sam@mail.com', NULL, '$2y$10$NUULDX54UlFsRFwgHJjO5O4BtF3G3479tFPwQVJc1JrFYDM9jlYVe', 'pelanggan', '', '1', NULL, '2022-11-03 00:52:13', '2022-11-03 00:52:13'),
(3, 'ron', 'ron@mail.com', NULL, '$2y$10$UDkWRBLD.UaOpFF5kuckCO/RIoyydrBM1oZ6miyi2fgJsZ.51IFMC', 'pelanggan', '', '1', NULL, '2022-11-03 05:33:45', '2022-11-03 05:33:45');

