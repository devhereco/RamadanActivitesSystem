<?php

use App\Models\Country;

function countries()
{
	return Country::all();
}