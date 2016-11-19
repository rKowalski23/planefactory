<?php

class Plane
{
		private $planeBrand;
		private $planeModel;

		public function __construct($brand, $model)
		{
			$this->planeBrand = $brand;
			$this->planeModel = $model;
		}

		public function getBrandAndModel()
		{
			return $this->planeBrand . ' ' . $this->planeModel;
		}

}

class PlaneFactory
{
	public static function create($brand, $model)
	{
		return new Plane($brand, $model);
	}
}

$cessna = PlaneFactory::create('Cessna', 'Skyhawk');

echo ($cessna->getBrandAndModel());

?>