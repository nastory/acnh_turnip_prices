<?php 

class Queries
{
	public $tsData = "
		SELECT *
		FROM turnip_prices p
		JOIN users u ON u.user_id = p.user_id
		JOIN date_helper_day d ON d.dat = p.dat
		WHERE d.week_id = (select distinct week_id from date_helper_day where date(dat) = date(now()))
	";

	public $tsLastWeekData = "
		SELECT *
		FROM turnip_prices p
		JOIN users u ON u.user_id = p.user_id
		JOIN date_helper_day d ON d.dat = p.dat
		WHERE d.week_id = (
			select distinct w.last_week_id 
			from date_helper_day d 
			JOIN date_helper_week w on d.week_id = w.week_id
			where date(d.dat) = date(now())
		)
	";

	public $histData = "select price from turnip_prices;";

}

?>