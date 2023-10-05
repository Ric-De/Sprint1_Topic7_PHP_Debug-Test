<?php

namespace Code\Exercise1;

//Class name was originally 'numberChecker'. Because identity issues between the class name and the archive name I changed it.

class sp1_t7_Lv1_Ex1  {


	public function __construct(private int $number){}

	public function isEven(): bool {
		return $this->number%2 == 0;
	}
	public function isPositive(): bool {
		return $this->number > 0;
	}

}
?>