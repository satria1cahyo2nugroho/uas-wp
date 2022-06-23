

CREATE TABLE IF NOT EXISTS `pegawai` (
  `id_pgw` int(50) NOT NULL AUTO_INCREMENT,
  `nip` int(50) NOT NULL ,
  `nama` text COLLATE latin1_general_ci NOT NULL,
  `jenis_kelamin` text COLLATE latin1_general_ci NOT NULL,
  `alamat` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_pgw`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=100001 ;
