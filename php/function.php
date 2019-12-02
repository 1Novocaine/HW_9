<?php

function caltulateDiscount($price, $discountType, $discountValue) 
{
	
		if ($discountType === 'percent') 
		{
		return round(($price * $discountValue), 2);
		}
		return $price - $discountValue; 
};

function convertToUah($price, $productCurrency, $staticCurrency) 
    {
    	return round($price * ($staticCurrency[$productCurrency]['course']), 2); 
    };
