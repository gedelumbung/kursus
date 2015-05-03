<?php

class Laporan_bulananController extends Controller
{
	public $layout='main';

	public function init()
	{
		if (Yii::app()->user->isGuest) 
		{
			$this->redirect(array("site/login"));
		}
		$this->widget('SetConfig');
	}

	public function actionIndex()
	{
		$bulan = (array_key_exists('bulan',$_SESSION) ? $_SESSION['bulan'] : date('m'));
		$tahun = (array_key_exists('tahun',$_SESSION) ? $_SESSION['tahun'] : date('Y'));

		$arr = Yii::app()->db->createCommand('select a.id_guru as id_pengajar, a.id_transaksi_penggajian, b.nama as nama_pengajar, c.nama as nama_program, a.bulan, a.tahun from tbl_transaksi_penggajian a left join tbl_pengajar b on a.id_guru=b.id_pengajar left join tbl_program c on a.id_program=c.id_program where a.bulan="'.$bulan.'" and a.tahun="'.$tahun.'" group by a.id_guru,a.bulan,a.tahun')->queryAll();
		

		$this->render('index', array(
				'arr' => $arr,
			));
	}

	public function actionSet()
	{
		$_SESSION['bulan'] = $_POST['bulan'];
		$_SESSION['tahun'] = $_POST['tahun'];

		$this->redirect(array("laporan_bulanan/index"));
	}
}