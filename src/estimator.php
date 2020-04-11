<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/**
 * Estimates the impact of Covid19
 * 
 * @param string $data
 * @return string $data|null
 */


class estimator {

  /**
   * Estimator function
   * 
   * @param string $data
   * @return string|null
   */
  
  public function covid19ImpactEstimator($data)
  {
    return $data;
  }

  /**
   * Gives out the Data.
   */
  public function covidData()
    {
      
      $region = "";
      $data = [
        "region" =>  [
          "name" => "Africa",
          "avgAge" => 19.7,
          "avgDailyIncomeInUSD" => 5,
          "avgDailyIncomePopulation" => 0.71,
        ],
        "periodType" => "days",
        "timeToElapse" => 58,
        "reportedCases" => 674,
        "population" => 66622705,
        "totalHospitalBeds" => 1380614
      ];
      return json_decode(json_encode($data));
    }
}


//echo covidData()->region->name;


// For errors
$new_estimation = new estimator;
//$data = $new_estimation->covidData();
//$new = $new_estimation->covid19ImpactEstimator($data);
//var_dump($new);