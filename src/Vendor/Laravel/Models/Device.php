<?php

namespace PragmaRX\Tracker\Vendor\Laravel\Models;

class Device extends Base {

	protected $table = 'tracker_devices';

	protected $fillable = array(
		'kind',
		'model',
		'platform',
		'platform_version',
		'is_mobile',
	);

}
